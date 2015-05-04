->unsigned()<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('loan', function(Blueprint $table)
		{
			$table->increments('id');
	    $table->integer('item_on_loan')->unsigned(); // FK
	    $table->foreign('item_on_loan')->references('id')->on('hardware_items');
	    $table->integer('kit_on_loan')->unsigned(); // FK
	    $table->foreign('kit_on_loan')->references('id')->on('kit');
	    $table->string('on_loan_to');
	    $table->string('date_on_loan');
	    $table->string('date_to_return');
	    $table->string('notes');
	    $table->string('location');
	    $table->string('contact');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('loan');
	}

}
