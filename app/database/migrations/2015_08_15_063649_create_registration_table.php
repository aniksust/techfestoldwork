<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('registration', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id');
			$table->enum('contest', array('pc', 'sc', 'ps'));
			$table->string('sc_track');
			$table->string('team_name')->unique();
			$table->string('university');

			$table->string('coach_name');
			$table->string('coach_email');
			$table->string('coach_mobile');
			$table->string('coach_photo');

			$table->string('member1_name');
			$table->string('member1_email');
			$table->string('member1_mobile');
			$table->string('member1_photo');
			$table->string('member1_id_photo');

			$table->string('member2_name');
			$table->string('member2_email');
			$table->string('member2_mobile');
			$table->string('member2_photo');
			$table->string('member2_id_photo');

			$table->string('member3_name');
			$table->string('member3_email');
			$table->string('member3_mobile');
			$table->string('member3_photo');
			$table->string('member3_id_photo');

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
		Schema::drop('registration');
	}

}
