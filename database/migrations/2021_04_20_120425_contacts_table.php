<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            //問い合わせのユーザー情報
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('server');
            //チェックボックスのデータベースの作り方は正しい？
            $table->integer('job_paladin')->nullable();
            $table->integer('job_darkknight')->nullable();
            $table->integer('job_gunbreaker')->nullable();
            $table->integer('job_dragoon')->nullable();
            $table->integer('job_monk')->nullable();
            $table->integer('job_blackmage')->nullable();
            $table->integer('job_whitemage')->nullable();
            $table->integer('job_astrologian')->nullable();
            $table->string('playtime');
            $table->string('content');
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
