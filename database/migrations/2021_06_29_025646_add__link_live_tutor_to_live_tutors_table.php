<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLinkLiveTutorToLiveTutorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('live_tutors', function (Blueprint $table) {
            $table->string('linkLiveTutor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('live_tutors', function (Blueprint $table) {
            $table->dropColumn('linkLiveTutor');
        });
    }
}
