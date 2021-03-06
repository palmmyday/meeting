<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgendaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('agenda', function(Blueprint $table) {
		    $table->engine = 'InnoDB';
		
		    $table->integer('agendaId');
		    $table->string('content', 2000);
		    $table->time('time');
		    
		    $table->primary('agendaId');
		
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
		Schema::drop('agenda');
	}

}
