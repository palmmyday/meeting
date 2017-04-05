<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePositionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('position', function(Blueprint $table) {
		    $table->engine = 'InnoDB';
		
		    $table->integer('positionId');
		    $table->string('PositionName', 45)->default(null);
		    
		    $table->primary('positionId');
		
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
		Schema::drop('position');
	}

}
