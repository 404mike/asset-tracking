<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHardwareTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hardware_items', function(Blueprint $table)
		{
	    $table->increments('id');
	    $table->string('name');
	    $table->string('type');
	    $table->string('model');
	    $table->string('manufacturer');
	    $table->string('cost_price');
	    $table->string('location');
	    $table->string('admin_username');
	    $table->string('alternate_username');
	    $table->string('inventory_number'); // llgc_id, cyw_id
	    $table->string('operating_system');
	    $table->string('status');
	    $table->string('last_update');
	    $table->string('serial_number');
	    $table->string('insurance');
	    $table->string('service_level_agreement');
	    $table->string('active_directory');
	    $table->string('date_of_purchase');
	    $table->string('supplier_contact');
	    $table->string('ip_address');
	    $table->text('notes');			
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
		Schema::dropIfExists('hardware_items');
	}

}
