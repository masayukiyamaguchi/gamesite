<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiers', function (Blueprint $table) {
            $table->id();
            $table->integer('Value');
            $table->float('DH_AP');
            $table->float('T_AP');
            $table->integer('pie');
            $table->float('det');
            $table->float('ten');
            $table->float('dir_chance');
            $table->float('dir');
            $table->float('crt_chance');
            $table->float('crt_damage');
            $table->float('crt_edamage');
            $table->float('crt');
            $table->float('ss_mod');
            $table->float('gcd');
            $table->string('Huton');
            $table->integer('Shifu');
            $table->float('Ley_Lines');
            $table->float('Presence_of_Mind');
            $table->float('Armys_Paeon_1');
            $table->float('Armys_Paeon_2');
            $table->float('Armys_Paeon_3');
            $table->float('Armys_Paeon_4');
            $table->float('Greased_Lightning_1');
            $table->float('Greased_Lightning_2');
            $table->float('Greased_Lightning_3');
            $table->float('Greased_Lightning_4');
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
        Schema::dropIfExists('tiers');
    }
}
