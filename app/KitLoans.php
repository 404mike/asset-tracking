<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class KitLoans extends Model {

  protected $table = 'loans';
  protected $fillable = [ 'kit_on_loan' , 'on_loan_to' , 'date_on_loan' , 'date_to_return' , 'notes', 'kit_loan_location' , 'contact' , 'status'];

}
