<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class HardwareItems extends Model {

  protected $fillable = [
    'name','type','model','manufacturer','cost_price','location','admin_username','alternate_username',
    'inventory_number','operating_system','status','last_update','serial_number','insurance','service_level_agreement',
    'active_directory','date_of_purchase','supplier_contact','ip_address','notes'
  ];

}
