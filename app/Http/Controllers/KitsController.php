<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Kit;
use App\KitItems;

class KitsController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}
	
	public function index()
	{
		return view('kits/index');
	}

	public function singlekit($id)
	{
		$kitItems = \DB::table('kit')
							->join('kit_items', 'kit.id', '=', 'kit_items.belongs_to_kit')
							->join('hardware_items', 'kit_items.physical_item', '=', 'hardware_items.id')
							->where('kit.id' , '=' , $id)
							->get();

		$kit = \App\Kit::find($id);

		return view('kits/single_kit')->with(array('kitItems' => $kitItems, 'kit' => $kit));
	}

	public function create()
	{
		return view('kits/create');
	}

	public function createNewkit()
	{
		$kit = new \App\Kit;
		$kit->name = \Input::get('name');
		$kit->comments = \Input::get('comments');
		$kit->location = \Input::get('location');
		$kit->status = 'available';
		$kit->save();

		$insertedId = $kit->id;

		$allKitItems = \Input::get('kit_items');

		foreach($allKitItems as $item) {
			$kitItems = new \App\KitItems;
			$kitItems->belongs_to_kit = $insertedId;
			$kitItems->physical_item = $item;
			$kitItems->save();
		}

		return view('kits/create_new_kit')->with('message' , 'Item Kit Created');;
	}

	public function allItems()
	{
		$kits = \App\Kit::paginate(5);
		$kits->setPath('');
		return view('kits/all_items')->with('kits' , $kits);
	}

	public function removekit()
	{
		return view('kits/remove_kit');
	}

}
