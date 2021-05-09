<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeetgearsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feetgears', function (Blueprint $table) {
            $table->id();
            $table->string('item_name');
            $table->string('location');
            $table->integer('item_level');
            $table->integer('physical_p');
            $table->integer('auto_attack');
            $table->integer('attack_interval');
            $table->integer('defense');
            $table->integer('m_defense');
            $table->string('equipable_job');
            $table->string('equipable_job_name');
            $table->integer('equipable_level');
            $table->integer('main_status');
            $table->integer('vit_status');
            $table->integer('crt_status');
            $table->integer('dir_status');
            $table->integer('det_status');
            $table->integer('sks_status');
            $table->integer('sps_status');
            $table->integer('ten_status');
            $table->integer('pie_status');
            $table->integer('materia01');
            $table->integer('materia02');
            $table->integer('materia03');
            $table->integer('materia04');
            $table->integer('materia05');
            $table->integer('max_status');
            $table->integer('dup');
            $table->string('image');
            $table->string('url');
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
        Schema::dropIfExists('feetgears');
    }
}
