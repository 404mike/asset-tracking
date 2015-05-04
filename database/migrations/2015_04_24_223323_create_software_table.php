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
		Schema::create('software_items', function(Blueprint $table)
		{
			$table->increments('id');
	    $table->string('name');
	    $table->string('manufacturer')->nullable();
	    $table->string('version')->nullable();
	    $table->string('inventory_number');
	    $table->string('serial_number');	
	    $table->string('date_of_purchase');
	    $table->string('supplier_contact')->nullable();
	    $table->text('notes')->nullable();
	    $table->integer('installed_on')->unsigned(); // FK
	    $table->foreign('installed_on')->references('id')->on('hardware_items')->onDelete('cascade');
	    $table->string('licence');
	    		
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
		Schema::dropIfExists('software_items');
	}

}
