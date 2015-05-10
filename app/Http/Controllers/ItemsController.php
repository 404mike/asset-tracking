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

    return redirect('items/software/create')->with('message' , 'Item Created');
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
	public function getEditHardwareItem($id)
	{
    $item = \App\HardwareItems::find($id);
		return view('items/edit_item')->with('item' , $item);
	}

	/**
	 *
	 */
	public function postEditHardwareItem($id)
	{
    $post_data = \Input::all();
    $formobj = \App\HardwareItems::find($id);
    $formobj->fill($post_data);
    $formobj->save();
		return redirect('items/hardware/'.$id)->with('message' , 'Details Updated');  
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
  public function getEditSoftwareItem($id)
  {
    $item = \App\SoftwareItems::find($id);
    $hardware = \App\HardwareItems::find($item->installed_on);
    return view('items/edit_softwareitem')->with(array('item' => $item , 'hardware' => $hardware));
  }

  /**
   *
   */
  public function postEditSoftwareItem($id)
  {
    $post_data = \Input::all();
    $formobj = \App\SoftwareItems::find($id);
    $formobj->fill($post_data);
    $formobj->save();
    return redirect('items/software/'.$id)->with('message' , 'Details Updated'); 
  }

  /**
   *
   */
  public function removeItem( $type , $id )
  {
    if( $type == 'software' ) {
      $item = \App\SoftwareItems::find($id)->delete();
    }
    elseif ($type == 'hardware') {
      $item = \App\HardwareItems::find($id)->delete();
   }
   return redirect('/')->with('message' , 'Item Deleted');  
  }

}
