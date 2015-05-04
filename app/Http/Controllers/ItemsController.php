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

	public function singleItem()
	{
		return view('items/single_item');
	}

	public function getHardwareItem()
	{
		return view('items/create_hardware');
	}

	public function postHardwareItem(\App\Http\Requests\CreateHardwareRequest $request)
	{
		$input = Request::all();
		\App\HardwareItems::create($input);		
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
		return view('items/all_items');
	}

	public function removeItem()
	{
		return view('items/remove_item');
	}

}
