<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class SoftwareItems extends Model {

  protected $fillable = [
    'name','manufacturer','version','inventory_number','serial_number','date_of_purchase','supplier_contact','notes','installed_on','licence'];

}