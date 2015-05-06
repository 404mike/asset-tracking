<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class LoansController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}
	
	public function index()
	{
		$loans = \DB::table('loans')
								->join('kit' , 'loans.kit_on_loan' , '=' , 'kit.id')
								->orderBy('loans.date_to_return', 'asc')
								->get();

		return view('loans/index')->with('loans' , $loans);

	}

	public function singleItem($id)
	{
		$loans = \DB::table('loans')
								->join('kit' , 'loans.kit_on_loan' , '=' , 'kit.id')
								->orderBy('loans.date_to_return', 'asc')
								->where('loans.kit_on_loan' , '=' , $id)
								->get();
		if(count($loans) == 0) {
			return view('loans/no_loans');
		} 

		return view('loans/single_loan')->with('loans' , $loans);
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
