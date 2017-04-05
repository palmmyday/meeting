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
		Schema::create('tracking', function(Blueprint $table) {
		    $table->engine = 'InnoDB';
		
		    $table->integer('trackingId');
		    $table->string('trackingTopic', 100)->default(null);
		    $table->dateTime('trackingDeadline');
		    $table->string('trackingSender', 45);
		    $table->string('trackingReceiver', 45);
		    $table->dateTime('TrackingDateAccept');
		    $table->string('TrackingDescription', 4500);
		    $table->integer('conclusion_conclusionId');
		    $table->integer('conclusion_Meeting_meetingId');
		    $table->integer('conclusion_Agenda_agendaId');
		    $table->integer('trackStatus_trackStatusId');
		    $table->integer('Tracking_trackingId')->unsigned();
		    $table->integer('member_Committee_committeeId');
		    $table->integer('member_Position_positionId');
		    $table->integer('member_Person_personId');
		    
		    $table->primary('trackingId', 'conclusion_conclusionId', 'conclusion_Meeting_meetingId', 'conclusion_Agenda_agendaId', 'trackStatus_trackStatusId', 'Tracking_trackingId', 'member_Committee_committeeId', 'member_Position_positionId', 'member_Person_personId');
		
		    $table->index(['conclusion_conclusionId', 'conclusion_Meeting_meetingId', 'conclusion_Agenda_agendaId'],'fk_Tracking_conclusion1_idx');
		    $table->index('trackStatus_trackStatusId','fk_Tracking_trackStatus1_idx');
		    $table->index('Tracking_trackingId','fk_Tracking_Tracking1_idx');
		    $table->index(['member_Committee_committeeId', 'member_Position_positionId', 'member_Person_personId'],'fk_Tracking_member1_idx');
		
		    $table->foreign('Tracking_trackingId')
		        ->references('trackingId')->on('tracking');

			$table->foreign('conclusion_conclusionId')
		        ->references('conclusionId')->on('conclusion');
				
			$table->foreign('conclusion_Meeting_meetingId')
		        ->references('Meeting_meetingId')->on('conclusion');

			$table->foreign('conclusion_Agenda_agendaId')
		        ->references('Agenda_agendaId')->on('conclusion');
		    
			$table->foreign('trackStatus_trackStatusId')
		        ->references('trackStatusId')->on('trackStatus');

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
		Schema::drop('tracking');
	}

}
