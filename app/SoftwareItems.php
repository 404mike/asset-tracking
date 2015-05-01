<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class SofwareItems extends Model {

  protected $fillable = [
    'name','manufacturer','version','installed_on','licence','serial_number'
  ];

}
