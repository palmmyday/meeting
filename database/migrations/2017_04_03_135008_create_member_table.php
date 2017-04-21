<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('member', function(Blueprint $table) {
		    $table->engine = 'InnoDB';
		
		    $table->integer('Committee_committeeId')->unsigned();
		    $table->integer('Position_positionId')->unsigned();
		    $table->integer('Person_personId')->unsigned();
		    
		    $table->primary('Committee_committeeId', 'Position_positionId', 'Person_personId');
		
		    $table->index('Position_positionId','fk_member_Position1_idx');
		    $table->index('Person_personId','fk_member_Person1_idx');
		
		    $table->foreign('Committee_committeeId')
				->references('committeeId')->on('Committee');

			$table->foreign('Position_positionId')
				->references('positionId')->on('Position');
			
			$table->foreign('Person_personId')
				->references('personId')->on('Person');

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
		Schema::drop('member');
	}

}
