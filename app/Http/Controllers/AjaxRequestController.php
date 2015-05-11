<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\HardwareItems;

class AjaxRequestController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 *
	 */
	public function getInstalledOnItems()
	{
		$term = \Input::get('term');

		$items = \App\HardwareItems::where('name' , 'like' , "%$term%")
																->orWhere('inventory_number' , 'like' , "%$term%")
																->get();

		$allItems = [];
		foreach($items as $item) {
			
			array_push($allItems, array(
				"value" => $item->name . ' - ' . $item->inventory_number,
				"id" => $item->id
			));
		}

		return \Response::json($allItems);
	}

}
