<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Kit extends Model {

	protected $table = 'kit';

  protected $fillable = ['name' , 'location' , 'comments'];
}
