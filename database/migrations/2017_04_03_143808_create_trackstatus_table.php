<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrackstatusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trackstatus', function(Blueprint $table) {
		    $table->engine = 'InnoDB';
		
		    $table->integer('trackStatusId');
		    $table->string('trackStatusName', 45);
		    
		    $table->primary('trackStatusId');
		
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
		Schema::drop('trackstatus');
	}

}
