<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsPersonalitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs_personalities', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("job_id");
            $table->unsignedBigInteger("personality_id");

            $table->dateTime('created');
            $table->dateTime('modified');
            $table->dateTime('deleted');

            $table->foreign('job_id')->references('id')->on('jobs');
            $table->foreign('personality_id')->references('id')->on('personalities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs_personalities');
    }
}
