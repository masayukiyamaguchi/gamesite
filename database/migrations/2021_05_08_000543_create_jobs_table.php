<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('job_name');
            $table->string('role');
            $table->string('name');
            $table->string('main_status');
            $table->integer('job_num');
            $table->integer('hp');
            $table->integer('str');
            $table->integer('dex');
            $table->integer('vit');
            $table->integer('int');
            $table->integer('mnd');
            $table->integer('crt');
            $table->integer('dir');
            $table->integer('det');
            $table->integer('sks');
            $table->integer('sps');
            $table->integer('ten');
            $table->integer('pie');
            $table->string('bounus');
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
        Schema::dropIfExists('jobs');
    }
}
