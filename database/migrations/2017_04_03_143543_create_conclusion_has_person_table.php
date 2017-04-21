<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConclusionHasPersonTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('conclusion_has_person', function(Blueprint $table)
		{
			Schema::create('conclusion_has_person', function(Blueprint $table) {
		    $table->engine = 'InnoDB';
		
		    $table->integer('conclusion_conclusionId')->unsigned();
		    $table->integer('conclusion_Meeting_meetingId')->unsigned();
		    $table->integer('conclusion_Agenda_agendaId')->unsigned();
		    $table->integer('Person_personId')->unsigned();
		    
		    $table->primary('conclusion_conclusionId', 'conclusion_Meeting_meetingId', 'conclusion_Agenda_agendaId', 'Person_personId');
		
		    $table->index('Person_personId','fk_conclusion_has_Person_Person1_idx');
		    $table->index(['conclusion_conclusionId', 'conclusion_Meeting_meetingId', 'conclusion_Agenda_agendaId'],'fk_conclusion_has_Person_conclusion1_idx');
		
		    $table->foreign('Person_personId')
		        ->references('personId')->on('person');
			
			$table->foreign('conclusion_conclusionId')
		        ->references('conclusionId')->on('conclusion');
			
			$table->foreign('conclusion_Meeting_meetingId')
		        ->references('Meeting_meetingId')->on('conclusion');

			$table->foreign('conclusion_Agenda_agendaId')
		        ->references('Agenda_agendaId')->on('conclusion');
			
		    $table->timestamps();
		
		});
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('conclusion_has_person');
	}

}
