<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ItemsController extends Controller {


	public function index()
	{
		return view('items/index');
	}

	public function singleItem()
	{
		return view('items/single_item');
	}

	public function create()
	{
		return view('items/create');
	}

	public function createNewItem()
	{
		return view('items/create_new_item');
	}

	public function removeItem()
	{
		return view('items/remove_item');
	}

}
