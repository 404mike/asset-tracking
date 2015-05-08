<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\hardwareItems;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;

class SearchController extends Controller {

  public function __construct()
  {
    $this->middleware('auth');
  }
  
	public function index()
	{
		return view('search/index');
	}

  /**
   *
   */
  public function query()
  {
    $search = '%'.\Input::get('q').'%';
    $filter = \Input::get('restrict');

    if($filter == 'asset_code') {
      $results = $this->searchByAssetCode( $search  , '');
    }
    elseif($filter == 'serial_code') {
      $results = $this->searchBySerialCode( $search );
    }
    else{
      $results = $this->searchAllItems( $search );
    }
// new Paginator($items, $count, $limit, $page)
$paginator = new Paginator($results, count($results), 2, 1);
$paginator->setPath('software');
    // dd($paginator);

    return view('search/query')->with(array('results' => $results , 'pag' => $paginator));
  }


  public function products(Paginator $paginator , $items)
  {
      $products = [];
      return $paginator->make($products, count($products), Input::get('limit') ?: '10');
  }


  /**
   *
   */
  public function searchAllItems( $search )
  {
    $hardware_items = \DB::table('hardware_items')
                    ->select(\DB::raw("inventory_number, id, serial_number, name, 'hardware' AS 'type'"))
                    ->where('inventory_number', 'LIKE', $search)
                    ->orWhere('name', 'LIKE', $search)
                    ->orWhere('serial_number', 'LIKE', $search);

    $software_items  = \DB::table('software_items')
                    ->select(\DB::raw("inventory_number, id, serial_number, name, 'software' AS 'type'"))
                    ->where('inventory_number', 'LIKE', $search)
                    ->orWhere('name', 'LIKE', $search)
                    ->orWhere('serial_number', 'LIKE', $search)->union($hardware_items)->get();

    return $software_items;
  }


  /**
   *
   */
  public function searchByAssetCode( $search )
  {
    $hardware_items = \DB::table('hardware_items')
                    ->select(\DB::raw("inventory_number, id, serial_number, name, 'hardware' AS 'type'"))
                    ->where('inventory_number', 'LIKE', $search);

    $software_items  = \DB::table('software_items')
                    ->select(\DB::raw("inventory_number, id, serial_number, name, 'software' AS 'type'"))
                    ->where('inventory_number', 'LIKE', $search);

    $results = $hardware_items->union($software_items)->get();

    return $results;
  }

  /**
   *
   */
  public function searchBySerialCode( $search )
  {
    $hardware_items = \DB::table('hardware_items')
                    ->select(\DB::raw("inventory_number, id, serial_number, name, 'hardware' AS 'type'"))
                    ->where('serial_number', 'LIKE', $search);

    $software_items  = \DB::table('software_items')
                    ->select(\DB::raw("inventory_number, id, serial_number, name, 'software' AS 'type'"))
                    ->where('serial_number', 'LIKE', $search);

    $results = $hardware_items->union($software_items)->get();

    return $results;   
  }

}
