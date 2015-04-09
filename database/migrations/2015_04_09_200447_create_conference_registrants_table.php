<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConferenceRegistrantsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('conference_registrants', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('conference_id')->unsigned();
            $table->string('title');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('company');
            $table->string('email');
            $table->string('address');
            $table->string('city');
            $table->string('zip');
            $table->string('phone');
            $table->integer('commission_id');
			$table->timestamps();

            $table->index('conference_id');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('conference_registrants');
	}

}
