<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateInvitees extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
    public function up() {
        Schema::table('invitees', function($table)
        {
            $table->string('company')->nullable();
            $table->string('fax')->nullable();
            $table->string('invite_type')->nullable();
            $table->integer('responded')->default(0);
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
    }

}
