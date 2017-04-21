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
			Schema::create('conclusion', function(Blueprint $table) {
		    $table->engine = 'InnoDB';
		
		    $table->integer('conclusionId');
		    $table->string('type', 45)->default(null);
		    $table->string('conclusioncontent', 5000)->default(null);
		    $table->string('status', 45)->default(null);
		    $table->time('timeNextMeeting')->default(null);
		    $table->integer('Meeting_meetingId')->unsigned();
		    $table->integer('Agenda_agendaId')->unsigned();
		    
		    $table->primary('conclusionId', 'Meeting_meetingId', 'Agenda_agendaId');
		
		    $table->index('Meeting_meetingId','fk_conclusion_Meeting1_idx');
		    $table->index('Agenda_agendaId','fk_conclusion_Agenda1_idx');
		
		    $table->foreign('Agenda_agendaId')
		        ->references('agendaId')->on('agenda');

			$table->foreign('Meeting_meetingId')
		        ->references('meetingIsd')->on('meeting');
		
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
		Schema::drop('conclusion');
	}

}
