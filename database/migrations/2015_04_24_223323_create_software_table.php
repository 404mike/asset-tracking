<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSoftwareTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('software', function(Blueprint $table)
		{
			$table->increments('id');
	    $table->string('name');
	    $table->string('manufacturer');
	    $table->string('version');
	    $table->integer('installed_on')->unsigned(); // FK
	    $table->foreign('installed_on')->references('id')->on('physical')->onDelete('cascade');
	    $table->string('licence');
	    $table->string('serial_number');			
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
		Schema::drop('software');
	}

}
