<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsPracticalSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs_practical_skills', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("job_id");
            $table->unsignedBigInteger("practical_skill_id");

            $table->dateTime('created');
            $table->dateTime('modified');
            $table->dateTime('deleted');

            $table->foreign('job_id')->references('id')->on('jobs');
            $table->foreign('practical_skill_id')->references('id')->on('practical_skills');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs_practical_skills');
    }
}
