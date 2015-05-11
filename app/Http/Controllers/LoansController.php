<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;
use App\Kit;
use App\KitLoans;
use App\HardwareItems;

class LoansController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}
	
	/**
	 *
	 */
	public function index()
	{
		$loans = \DB::table('loans')
								->join('kit' , 'loans.kit_on_loan' , '=' , 'kit.id')
								->orderBy('loans.date_to_return', 'asc')
								->where('loans.status' , '=' , 'on loan')
								->get();

		return view('loans/index')->with('loans' , $loans);

	}

	/**
	 *
	 */
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

	/**
	 *
	 */
	public function availableKits()
	{
		$availableKits = \App\Kit::where('status' , '=' , 'available')->get();

		return view('loans/available')->with('availableKits' , $availableKits);
	}

	/**
	 *
	 */
	public function getCreate( $id )
	{
		$kit = \App\Kit::find( $id );
		return view('loans/create')->with('kit' , $kit);
	}

	/**
	 *
	 */
	public function postCreate(\App\Http\Requests\CreateLoansRequest $request)
	{
		$input = Request::all();

		$input['date_on_loan'] = $input['date_on_loan'] . ' 10:00:00';
		$input['date_to_return'] = $input['date_to_return'] . ' 10:00:00';
		$input['status'] = 'on loan'; 
		\App\KitLoans::create($input);

		$kit_on_loan = \Input::get('kit_on_loan');
		$kit = \App\Kit::find( $kit_on_loan );
		$kit->status = 'on loan';
		$kit->save();

		// $loan = \App\KitLoans::where( 'kit_on_loan' , '=' , $input['kit_on_loan'] )->update(array('status' => 'on loan'));

		return redirect('loans')->with('message' , 'Item Created');	
	}

	/**
	 *
	 */
	public function returnedItem( $id )
	{
		$kit = \App\Kit::find( $id );
		$kit->status = 'available';
		$kit->save();
		
		$loan = \App\KitLoans::where( 'kit_on_loan' , '=' , $kit->id)->update(array('status' => 'available'));

		return redirect('loans')->with('message' , 'Item returned');	
	}

	/**
	 *
	 */
	public function notify()
	{
		echo 'notify';
	}

}
