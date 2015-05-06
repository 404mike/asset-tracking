<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;

class ItemsController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 *
	 */
	public function index()
	{
		return view('items/index');
	}


	/**
	 *
	 */
	public function getHardwareItem()
	{
		return view('items/create_hardware');
	}

	/**
	 *
	 */
	public function postHardwareItem(\App\Http\Requests\CreateHardwareRequest $request)
	{
		$input = Request::all();
		\App\HardwareItems::create($input);	

		return redirect('items/hardware/create')->with('message' , 'Item Created :)');	
	}

	/**
	 * Create new software item
	 */
	public function getSoftwareItem()
	{
		return view('items/create_software');
	}

	/**
	 * Create new software item
	 */
	public function postSoftwareItem(\App\Http\Requests\CreateSoftwareRequest $request)
	{
		$input = Request::all();
		\App\SoftwareItems::create($input);		
	}

	/**
	 *
	 */
	public function allHardwareItems($id = '')
	{
		$items = \App\HardwareItems::paginate(5);
		$items->setPath('hardware');
		return view('items/all_hardwareItems')->with('items' , $items);
	}

	/**
	 *
	 */
	public function singleHardwareItem($id)
	{
		$item = \App\HardwareItems::find($id);
		$belongsTo = \DB::table('kit_items')
										->join('kit', 'kit_items.belongs_to_kit', '=', 'kit.id')
										->where('kit_items.physical_item' , '=' , $id)
										->get();
    $installedSoftware = \App\SoftwareItems::where('installed_on' , '=' , $item->id)->get();
 
		return view('items/single_HardwareItem')->with(
      array('item' => $item , 'belongsTo' => $belongsTo , 'installedSoftware' => $installedSoftware));
	}

	/**
	 *
	 */
	public function removeHardwareItem()
	{
		return view('items/remove_item');
	}

	/**
	 *
	 */
	public function getEditHardwareItem()
	{
		return view('items/remove_item');
	}

	/**
	 *
	 */
	public function postEditHardwareItem()
	{
		return view('items/remove_item');
	}

  /**
   *
   */
  public function allSoftwareItems($id = '')
  {
    $items = \App\SoftwareItems::paginate(5);
    $items->setPath('software');
    return view('items/all_softwareItems')->with('items' , $items);
  }

  /**
   *
   */
  public function singleSoftwareItem($id)
  {
    $item = \App\SoftwareItems::find($id);
    $installedOn = \App\HardwareItems::find($item->installed_on);
    $belongsTo = \DB::table('kit_items')
                    ->join('kit', 'kit_items.belongs_to_kit', '=', 'kit.id')
                    ->where('kit_items.physical_item' , '=' , $id)
                    ->get();

    return view('items/single_SoftwareItem')->with(
        array('item' => $item , 'belongsTo' => $belongsTo , 'installed_on' => $installedOn));
  }

  /**
   *
   */
  public function removeSoftwareItem()
  {
    return view('items/remove_item');
  }

  /**
   *
   */
  public function getEditSoftwareItem()
  {
    return view('items/remove_item');
  }

  /**
   *
   */
  public function postEditSoftwareItem()
  {
    return view('items/remove_item');
  }

}
