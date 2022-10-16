<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_types', function (Blueprint $table) {
            $table->id();

            $table->string("name");
            $table->string("sort_order");
            $table->unsignedBigInteger("job_category_id");
            $table->string("created_by");

            $table->dateTime('created');
            $table->dateTime('modified');
            $table->dateTime('deleted');

            $table->foreign('job_category_id')->references('id')->on('job_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_types');
    }
}
