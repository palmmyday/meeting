<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgendaHasTypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('agenda_has_agendatype', function(Blueprint $table) {
		    $table->engine = 'InnoDB';
		
		    $table->integer('Agenda_agendaId')->unsigned();
		    $table->integer('agendaType_agendaTypeId');
		    
			$table->primary('Agenda_agendaId', 'agendaType_agendaTypeId');

		    $table->index('agendaType_agendaTypeId','fk_Agenda_has_agendaType1_agendaType1_idx');
		    $table->index('Agenda_agendaId','fk_Agenda_has_agendaType1_Agenda1_idx');

		    $table->foreign('Agenda_agendaId')
		        ->references('agendaId')->on('agenda');
			
			$table->foreign('agendaType_agendaTypeId')
		        ->references('agendaTypeId')->on('agendatype');
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
		Schema::drop('agenda_has_type');
	}

}
