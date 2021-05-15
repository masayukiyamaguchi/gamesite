<?php

use Illuminate\Database\Seeder;

class Nulls extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $param =     [

            [
            "item_name"=>"---",
            "location"=>"null",
            "item_level"=>"0",
            "physical_p"=>"0",
            "auto_attack"=>"0",
            "attack_interval"=>"0",
            "defense"=>"0",
            "m_defense"=>"0",
            "equipable_job"=>"---",
            "equipable_job_name"=>"---",
            "equipable_level"=>"0",
            "main_status"=>"0",
            "vit_status"=>"0",
            "crt_status"=>"0",
            "dir_status"=>"0",
            "det_status"=>"0",
            "sks_status"=>"0",
            "sps_status"=>"0",
            "ten_status"=>"0",
            "pie_status"=>"0",
            "materia01"=>"0",
            "materia02"=>"0",
            "materia03"=>"0",
            "materia04"=>"0",
            "materia05"=>"0",
            "max_status"=>"0",
            "dup"=>"0",
            "image"=>" ",
            "url"=>" "],
        ];

        DB::table('nulls')->insert($param);

    }
}
