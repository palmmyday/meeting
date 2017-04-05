<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeetingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('meeting', function(Blueprint $table) {
		    $table->engine = 'InnoDB';
		
		    $table->integer('meetingId');
		    $table->string('meetingName', 45);
		    $table->date('meetingDate');
		    $table->time('meetingTimeStart');
		    $table->time('MeetingTimeEnd');
		    $table->string('meetingAdd', 100);
		    $table->string('purpose', 2000);
		    
		    $table->primary('meetingId');
		
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
		Schema::drop('meeting');
	}

}
