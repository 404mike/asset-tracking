<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class SearchController extends Controller {

  public function __construct()
  {
    $this->middleware('auth');
  }
  
	public function index()
	{
		return view('search/index');
	}

  public function query()
  {
    return view('search/query');
  }

}
