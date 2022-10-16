<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsToolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs_tools', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("job_id");
            $table->unsignedBigInteger("affiliate_id");

            $table->dateTime('created');
            $table->dateTime('modified');
            $table->dateTime('deleted');

            $table->foreign('job_id')->references('id')->on('jobs');
            $table->foreign('affiliate_id')->references('id')->on('affiliates');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs_tools');
    }
}
