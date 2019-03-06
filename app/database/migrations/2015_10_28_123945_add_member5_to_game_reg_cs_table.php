<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMember5ToGameRegCsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::table('registration_gc_cs', function(Blueprint $table)
		{
			$table->string('member5_name');
			$table->string('member5_email');
			$table->string('member5_mobile');
			$table->string('member5_photo');
			$table->string('member5_id_photo');

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
		Schema::table('registration_gc_cs', function(Blueprint $table)
		{
			$table->dropColumn('member5_name');
			$table->dropColumn('member5_email');
			$table->dropColumn('member5_mobile');
			$table->dropColumn('member5_photo');
			$table->dropColumn('member5_id_photo');
		});
	}

}
