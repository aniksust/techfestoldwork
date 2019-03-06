<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrationGcCsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('registration_gc_cs', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id');
			$table->string('team_name')->unique();

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

			$table->string('member4_name');
			$table->string('member4_email');
			$table->string('member4_mobile');
			$table->string('member4_photo');
			$table->string('member4_id_photo');

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
		Schema::drop('registration_gc_cs');
	}

}
