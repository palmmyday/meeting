<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgendatypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('agendatype', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('agendaTypeId');
		    $table->string('agendaTypeName', 45);
		    
		    $table->primary('agendaTypeId');
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
		Schema::drop('agendatype');
	}

}
