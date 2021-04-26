<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //ブログ記事のテーブル
        Schema::create("blogs",function(Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('title');
            $table->string('samneil');
            $table->string('image01');
            $table->string('image02');
            $table->string('image03');
            $table->string('image04');
            $table->string('comment01');
            $table->string('comment02');
            $table->string('comment03');
            $table->string('comment04');
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
        //
    }
}
