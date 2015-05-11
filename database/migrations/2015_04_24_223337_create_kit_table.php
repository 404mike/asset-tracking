<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKitTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kit', function(Blueprint $table)
		{
			$table->increments('id');
	    $table->string('name');
	    $table->text('comments');
	    $table->string('location');
	    $table->string('status'); // on loan, 
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
		Schema::drop('kit');
	}

}
