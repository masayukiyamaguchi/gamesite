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
            $table->float('DH_AP',5,2);
            $table->float('T_AP',5,2);
            $table->integer('pie');
            $table->float('det',6,3);
            $table->float('ten',6,3);
            $table->float('dir_chance',5,3);
            $table->float('dir',7,5);
            $table->float('crt_chance',5,3);
            $table->float('crt_damage',5,3);
            $table->float('crt_edamage',8,6);
            $table->float('crt',11,9);
            $table->float('ss_mod',4,3);
            $table->float('gcd',3,2);
            $table->float('Huton',3,2);
            $table->float('Shifu',3,2);
            $table->float('Ley_Lines',3,2);
            $table->float('Presence_of_Mind',3,2);
            $table->float('Armys_Paeon_1',3,2);
            $table->float('Armys_Paeon_2',3,2);
            $table->float('Armys_Paeon_3',3,2);
            $table->float('Armys_Paeon_4',3,2);
            $table->float('Greased_Lightning_1',3,2);
            $table->float('Greased_Lightning_2',3,2);
            $table->float('Greased_Lightning_3',3,2);
            $table->float('Greased_Lightning_4',3,2);
            $table->string('location');
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
