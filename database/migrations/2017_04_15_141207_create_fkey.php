<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFkey extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('member',function($table){
			$table->integer('Committee_committeeId')->unsigned();
			$table->foreign('Committee_committeeId')->references('committeeId')->on('Committee');
			
			$table->integer('Position_positionId')->unsigned();
			$table->foreign('Position_positionId')->references('positionId')->on('Position');
		
			$table->integer('Person_personId')->unsigned();
			$table->foreign('Person_personId')->references('personId')->on('Person');
		});

		Schema::table('attendence',function($table){
			$table->integer('member_Committee_committeeId')->unsigned();
			$table->foreign('member_Committee_committeeId')->references('Committee_committeeId')->on('member');

			$table->integer('member_Position_positionId')->unsigned();
			$table->foreign('member_Position_positionId')->references('Position_positionId')->on('member');

			$table->integer('member_Person_personId')->unsigned();
			$table->foreign('member_Person_personId')->references('Person_personId')->on('member');

			$table->integer('Meeting_meetingId')->unsigned();
			$table->foreign('Meeting_meetingId')->references('meetingId')->on('meeting');
		});

		Schema::table('conclusion',function($table){
			$table->integer('Meeting_meetingId')->unsigned();
			$table->foreign('Meeting_meetingId')->references('meetingId')->on('meeting');

		    $table->integer('Agenda_agendaId')->unsigned();
			$table->foreign('Agenda_agendaId')->references('agendaId')->on('agenda');
		});

		Schema::table('conclusion_has_person',function($table){
			$table->integer('conclusion_conclusionId')->unsigned();
			$table->foreign('conclusion_conclusionId')->references('conclusionId')->on('conclusion');

		    $table->integer('conclusion_Meeting_meetingId')->unsigned();
			$table->foreign('conclusion_Meeting_meetingId')->references('Meeting_meetingId')->on('conclusion');

		    $table->integer('conclusion_Agenda_agendaId')->unsigned();
			$table->foreign('conclusion_Agenda_agendaId')->references('Agenda_agendaId')->on('conclusion');

		    $table->integer('Person_personId')->unsigned();
			$table->foreign('Person_personId')->references('personId')->on('person');
		});

		Schema::table('agenda_has_agendatype',function($table){
			$table->integer('Agenda_agendaId')->unsigned();
			$table->foreign('Agenda_agendaId')->references('agendaId')->on('agenda');

		    $table->integer('agendaType_agendaTypeId')->unsigned();
			$table->foreign('agendaType_agendaTypeId')->references('agendaTypeId')->on('agendatype');
		});

		Schema::table('tracking',function($table){
			$table->integer('conclusion_conclusionId')->unsigned();
			$table->foreign('conclusion_conclusionId')->references('conclusionId')->on('conclusion');

		    $table->integer('conclusion_Meeting_meetingId')->unsigned();
			$table->foreign('conclusion_Meeting_meetingId')->references('Meeting_meetingId')->on('conclusion');

		    $table->integer('conclusion_Agenda_agendaId')->unsigned();
			$table->foreign('conclusion_Agenda_agendaId')->references('Agenda_agendaId')->on('conclusion');

		    $table->integer('trackStatus_trackStatusId')->unsigned();
			$table->foreign('trackStatus_trackStatusId')->references('trackStatusId')->on('trackStatus');

		    $table->integer('Tracking_trackingId')->unsigned();
			$table->foreign('Tracking_trackingId')->references('trackingId')->on('tracking');

		    $table->integer('member_Committee_committeeId')->unsigned();
			$table->foreign('member_Committee_committeeId')->references('Committee_committeeId')->on('member');

		    $table->integer('member_Position_positionId')->unsigned();
			$table->foreign('member_Position_positionId')->references('Position_positionId')->on('member');

		    $table->integer('member_Person_personId')->unsigned();
			$table->foreign('member_Person_personId')->references('Person_personId')->on('member');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
