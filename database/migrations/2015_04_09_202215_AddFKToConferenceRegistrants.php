<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFKToConferenceRegistrants extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
    public function up()
    {
        Schema::table('conference_registrants', function($table)
        {
            $table->foreign('conference_id')
                ->references('id')
                ->on('conferences')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('conference_registrants', function($table)
        {
            $table->dropForeign('conference_registrants_conference_id_foreign');
        });
    }

}
