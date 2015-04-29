<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class LoansController extends Controller {

	public function index()
	{
		return view('loans/index');
	}

	public function singleItem()
	{
		return view('loans/single_loan');
	}

	public function create()
	{
		return view('loans/create');
	}

	public function createNewItem()
	{
		return view('loans/create_new_loan');
	}

	public function removeItem()
	{
		return view('loans/remove_loan');
	}

	public function notify()
	{
		echo 'notify';
	}

}
