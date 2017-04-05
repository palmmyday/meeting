<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommitteeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('committee', function(Blueprint $table) {
		    $table->engine = 'InnoDB';
		
		    $table->integer('committeeId');
		    $table->string('committeeName', 100)->default(null);
		    
		    $table->primary('committeeId');
		
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
		Schema::drop('committee');
	}

}
