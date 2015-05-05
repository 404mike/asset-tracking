<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
use Request;

class ItemsController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{
		return view('items/index');
	}

	public function singleItem($id)
	{
		$item = \App\HardwareItems::find($id);
		$belongsTo = \DB::table('kit_items')
										->join('kit', 'kit_items.belongs_to_kit', '=', 'kit.id')
										->where('kit_items.physical_item' , '=' , $id)
										->get();

		return view('items/single_item')->with(array('item' => $item , 'belongsTo' => $belongsTo));
	}

	public function getHardwareItem()
	{
		return view('items/create_hardware');
	}

	public function postHardwareItem(\App\Http\Requests\CreateHardwareRequest $request)
	{
		$input = Request::all();
		\App\HardwareItems::create($input);	

		return redirect('items/create_hardware_item')->with('message' , 'Item Created :)');	
	}

	public function getSoftwareItem()
	{
		return view('items/create_software');
	}

	public function postSoftwareItem(\App\Http\Requests\CreateSoftwareRequest $request)
	{
		$input = Request::all();
		\App\SoftwareItems::create($input);		
	}

	public function allItems($id = '')
	{
		$items = \App\HardwareItems::paginate(5);
		$items->setPath('all');
		return view('items/all_items')->with('items' , $items);
	}

	public function removeItem()
	{
		return view('items/remove_item');
	}

	public function getEditItem()
	{
		return view('items/remove_item');
	}

	public function postEditItem()
	{
		return view('items/remove_item');
	}

}
