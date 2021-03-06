<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('person', function(Blueprint $table)
		{

			$table->increments('personId');
		    $table->string('personFirstName', 45);
		    $table->string('personLastName', 45);
		    $table->string('password', 45);
		    $table->string('personEmail', 45);
		    $table->string('personTel', 45);
		    $table->string('personPicture', 200);
		    
		    
		
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
		Schema::drop('person');
	}

}
