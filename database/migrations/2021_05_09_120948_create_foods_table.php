<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foods', function (Blueprint $table) {
            $table->id();
            $table->string('item_name');
            $table->string('location');
            $table->integer('item_level');
            $table->integer('vit_status');
            $table->integer('vit_status_limit');
            $table->integer('crt_status');
            $table->integer('crt_status_limit');
            $table->integer('dir_status');
            $table->integer('dir_status_limit');
            $table->integer('det_status');
            $table->integer('det_status_limit');
            $table->integer('sks_status');
            $table->integer('sks_status_limit');
            $table->integer('sps_status');
            $table->integer('sps_status_limit');
            $table->integer('ten_status');
            $table->integer('ten_status_limit');
            $table->integer('pie_status');
            $table->integer('pie_status_limit');
            $table->integer('image');
            $table->string('url');
            $table->string('text');
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
        Schema::dropIfExists('foods');
    }
}
