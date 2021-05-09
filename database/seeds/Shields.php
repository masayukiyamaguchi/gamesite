<?php

use Illuminate\Database\Seeder;

class Shields extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param =     [
                   
[
    "item_name"=>"エデンモーン・スクトゥム",
    "location"=>"盾",
    "item_level"=>"535",
    "physical_p"=>"0",
    "auto_attack"=>"0",
    "attack_interval"=>"0",
    "defense"=>"2200",
    "m_defense"=>"2200",
    "equipable_job"=>"ナイト",
    "equipable_job_name"=>"pld",
    "equipable_level"=>"80",
    "main_status"=>"207",
    "vit_status"=>"239",
    "crt_status"=>"152",
    "dir_status"=>"0",
    "det_status"=>"106",
    "sks_status"=>"0",
    "sps_status"=>"0",
    "ten_status"=>"0",
    "pie_status"=>"0",
    "materia01"=>"1",
    "materia02"=>"1",
    "materia03"=>"0",
    "materia04"=>"0",
    "materia05"=>"0",
    "max_status"=>"152",
    "dup"=>"0",
    "image"=>"",
    "url"=>"https://jp.finalfantasyxiv.com/lodestone/playguide/db/item/e9b55d7fc6c/"],
    [
    "item_name"=>"クリプトラーカー・カイトシールドRE",
    "location"=>"盾",
    "item_level"=>"530",
    "physical_p"=>"0",
    "auto_attack"=>"0",
    "attack_interval"=>"0",
    "defense"=>"2200",
    "m_defense"=>"2200",
    "equipable_job"=>"ナイト",
    "equipable_job_name"=>"pld",
    "equipable_level"=>"80",
    "main_status"=>"207",
    "vit_status"=>"237",
    "crt_status"=>"105",
    "dir_status"=>"0",
    "det_status"=>"0",
    "sks_status"=>"0",
    "sps_status"=>"0",
    "ten_status"=>"150",
    "pie_status"=>"0",
    "materia01"=>"1",
    "materia02"=>"1",
    "materia03"=>"0",
    "materia04"=>"0",
    "materia05"=>"0",
    "max_status"=>"150",
    "dup"=>"0",
    "image"=>"",
    "url"=>"https://jp.finalfantasyxiv.com/lodestone/playguide/db/item/6d3c5a214cf/"],
    
    
    
        ];


        DB::table('shields')->insert($param);
    }
}
