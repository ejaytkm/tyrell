<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsBasicAbilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs_basic_abilities', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("job_id");
            $table->unsignedBigInteger("basic_ability_id");

            $table->dateTime('created');
            $table->dateTime('modified');
            $table->dateTime('deleted');

            $table->foreign('job_id')->references('id')->on('jobs');
            $table->foreign('basic_ability_id')->references('id')->on('basic_abilities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs_basic_abilities');
    }
}
