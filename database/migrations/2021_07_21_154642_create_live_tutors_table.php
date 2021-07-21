<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLiveTutorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('live_tutors', function (Blueprint $table) {
            $table->increments('codeLiveTutor');
            $table->string('nameOfLiveTutor');
            $table->string('nameOfTutorInLiveTutor');
            $table->date('dateLiveTutor');
            $table->integer('durationLiveTutor');
            $table->string('statusLiveTutor');
            $table->string('linkLiveTutor');
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
        Schema::dropIfExists('live_tutors');
    }
}
