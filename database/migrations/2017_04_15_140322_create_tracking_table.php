<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrackingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tracking', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('trackingId');
		    $table->string('trackingTopic', 100)->default(null);
		    $table->dateTime('trackingDeadline');
		    $table->string('trackingSender', 45);
		    $table->string('trackingReceiver', 45);
		    $table->dateTime('TrackingDateAccept');
		    $table->string('TrackingDescription', 4500);
			
			$table->primary('trackingId');
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
		Schema::drop('tracking');
	}

}
