<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeartablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('geartables', function (Blueprint $table) {
            $table->id();
            $table->string('gear_name');
            $table->string('name');
            $table->string('category');
            $table->string('class');
            $table->string('pull_d_class');
            $table->string('pull_d_id');
            $table->string('mate_name');
            $table->string('mate_class');
            $table->string('table');
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
        Schema::dropIfExists('geartables');
    }
}
