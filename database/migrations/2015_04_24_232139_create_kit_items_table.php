<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKitItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kit_items', function(Blueprint $table)
		{
			$table->increments('id');
	    $table->integer('belongs_to_kit')->unsigned(); // FK
	    $table->foreign('belongs_to_kit')->references('id')->on('kit');
	    $table->integer('physical_item')->unsigned(); // FK
	    $table->foreign('physical_item')->references('id')->on('physical');
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
		Schema::drop('kit_items');
	}

}
