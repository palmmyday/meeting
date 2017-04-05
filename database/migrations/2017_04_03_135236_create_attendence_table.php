<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttendenceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('attendence', function(Blueprint $table) {
		    $table->engine = 'InnoDB';
		
		    $table->integer('member_Committee_committeeId')->unsigned();
		    $table->integer('member_Position_positionId')->unsigned();
		    $table->integer('member_Person_personId')->unsigned();
		    $table->integer('Meeting_meetingId')->unsigned();
		    
		    $table->primary('member_Committee_committeeId', 'member_Position_positionId', 'member_Person_personId', 'Meeting_meetingId');
		
		    $table->index('Meeting_meetingId','fk_member_has_Meeting_Meeting1_idx');
		    $table->index(['member_Committee_committeeId', 'member_Position_positionId', 'member_Person_personId'],'fk_member_has_Meeting_member1_idx');
		
		    $table->foreign('Meeting_meetingId')
		        ->references('meetingId')->on('meeting');

			$table->foreign('member_Committee_committeeId')
		        ->references('Committee_committeeId')->on('member');
		
			$table->foreign('member_Position_positionId')
		        ->references('Position_positionId')->on('member');

			$table->foreign('member_Person_personId')
		        ->references('Person_personId')->on('member');
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
		Schema::drop('attendence');
	}

}
