<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrationGcTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('registration_gc', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id');
			$table->enum('contest', array('nfs', 'fifa'));

			$table->string('member_name');
			$table->string('member_email');
			$table->string('member_mobile');
			$table->string('member_photo');
			$table->string('member_id_photo');


			$table->integer('status');

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
		//
		Schema::drop('registration_gc');
	}

}
