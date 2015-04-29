<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class KitsController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}
	
	public function index()
	{
		return view('kits/index');
	}

	public function singlekit()
	{
		return view('kits/single_kit');
	}

	public function create()
	{
		return view('kits/create');
	}

	public function createNewkit()
	{
		return view('kits/create_new_kit');
	}

	public function removekit()
	{
		return view('kits/remove_kit');
	}

}
