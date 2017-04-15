<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConclusionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('conclusion', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('conclusionId');
		    $table->string('conclusioncontent', 5000)->default(null);
			$table->string('type', 45)->default(null);
		    $table->string('status', 45)->default(null);
		    $table->time('timeNextMeeting')->default(null);
			
			$table->primary('conclusionId');
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
		Schema::drop('conclusion');
	}

}
