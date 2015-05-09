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
    $searchUnfilter = \Input::get('q');
    $search = '%'.\Input::get('q').'%';
    $filter = \Input::get('restrict');
    $offset = \Input::get('?page');

    $limit = 5;

    if($filter == 'asset_code') {
      $results = $this->searchByAssetCode( $search , $limit , $offset );
    }
    elseif($filter == 'serial_code') {
      $results = $this->searchBySerialCode( $search , $limit , $offset );
    }
    else{
      $results = $this->searchAllItems( $search , $limit , $offset );
    }
    // new Paginator($items, $count, $limit, $page)
    // echo $limit;
    $paginator = new Paginator($results, count($results), $limit , $offset);
    $paginator->setPath('?q='.$searchUnfilter.'&restrict='.$filter.'&');

    return view('search/query')->with(array('results' => $results , 'pag' => $paginator));
  }


  /**
   *
   */
  public function searchAllItems( $search , $limit , $offset )
  {
    $foo = '';
    $hardware_items = \DB::table('hardware_items')
                    ->select(\DB::raw("inventory_number, id, serial_number, name, 'hardware' AS 'type'"))
                    ->where('inventory_number', 'LIKE', $search)
                    ->orWhere('name', 'LIKE', $search)
                    ->orWhere('serial_number', 'LIKE', $search);

    $software_items  = \DB::table('software_items')
                    ->select(\DB::raw("inventory_number, id, serial_number, name, 'software' AS 'type'"))
                    ->where('inventory_number', 'LIKE', $search)
                    ->orWhere('name', 'LIKE', $search)
                    ->orWhere('serial_number', 'LIKE', $search)
                    ->union($hardware_items)
                    ->limit($limit)
                    ->offset($offset)
                    ->get();

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
