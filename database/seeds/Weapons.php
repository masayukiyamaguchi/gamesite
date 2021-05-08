<?php

use Illuminate\Database\Seeder;

class Weapons extends Seeder
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
                "location"=>"武器",
                "item_level"=>"0",
                "physical_p"=>"0",
                "auto_attack"=>"0",
                "attack_interval"=>"0",
                "defense"=>"0",
                "m_defense"=>"0",
                "equipable_job"=>"non",
                "equipable_job_name"=>"non",
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
                "image"=>"",
                "url"=>""],
                

            [
                "item_name"=>"エデンモーン・バスタードソード",
                "location"=>"武器",
                "item_level"=>"535",
                "physical_p"=>"134",
                "auto_attack"=>"100.05",
                "attack_interval"=>"2.24",
                "defense"=>"0",
                "m_defense"=>"0",
                "equipable_job"=>"ナイト",
                "equipable_job_name"=>"pld",
                "equipable_level"=>"80",
                "main_status"=>"518",
                "vit_status"=>"597",
                "crt_status"=>"379",
                "dir_status"=>"0",
                "det_status"=>"266",
                "sks_status"=>"0",
                "sps_status"=>"0",
                "ten_status"=>"0",
                "pie_status"=>"0",
                "materia01"=>"1",
                "materia02"=>"1",
                "materia03"=>"0",
                "materia04"=>"0",
                "materia05"=>"0",
                "max_status"=>"379",
                "dup"=>"0",
                "image"=>"",
                "url"=>"https://jp.finalfantasyxiv.com/lodestone/playguide/db/item/26763e1f7d9/"],
                [
                "item_name"=>"クリプトラーカー・ソードRE",
                "location"=>"武器",
                "item_level"=>"530",
                "physical_p"=>"133",
                "auto_attack"=>"99.3",
                "attack_interval"=>"2.24",
                "defense"=>"0",
                "m_defense"=>"0",
                "equipable_job"=>"ナイト",
                "equipable_job_name"=>"pld",
                "equipable_level"=>"80",
                "main_status"=>"516",
                "vit_status"=>"593",
                "crt_status"=>"263",
                "dir_status"=>"0",
                "det_status"=>"0",
                "sks_status"=>"0",
                "sps_status"=>"0",
                "ten_status"=>"376",
                "pie_status"=>"0",
                "materia01"=>"1",
                "materia02"=>"1",
                "materia03"=>"0",
                "materia04"=>"0",
                "materia05"=>"0",
                "max_status"=>"376",
                "dup"=>"0",
                "image"=>"",
                "url"=>"https://jp.finalfantasyxiv.com/lodestone/playguide/db/item/64961d42546/"],
                [
                "item_name"=>"エデンモーン・バトルアクス",
                "location"=>"武器",
                "item_level"=>"535",
                "physical_p"=>"134",
                "auto_attack"=>"150.08",
                "attack_interval"=>"3.36",
                "defense"=>"0",
                "m_defense"=>"0",
                "equipable_job"=>"戦士",
                "equipable_job_name"=>"war",
                "equipable_level"=>"80",
                "main_status"=>"725",
                "vit_status"=>"836",
                "crt_status"=>"531",
                "dir_status"=>"0",
                "det_status"=>"372",
                "sks_status"=>"0",
                "sps_status"=>"0",
                "ten_status"=>"0",
                "pie_status"=>"0",
                "materia01"=>"1",
                "materia02"=>"1",
                "materia03"=>"0",
                "materia04"=>"0",
                "materia05"=>"0",
                "max_status"=>"379",
                "dup"=>"0",
                "image"=>"",
                "url"=>"https://jp.finalfantasyxiv.com/lodestone/playguide/db/item/0e145171c88/"],
                [
                "item_name"=>"クリプトラーカー・ウォーアクスRE",
                "location"=>"武器",
                "item_level"=>"530",
                "physical_p"=>"133",
                "auto_attack"=>"148.96",
                "attack_interval"=>"3.36",
                "defense"=>"0",
                "m_defense"=>"0",
                "equipable_job"=>"戦士",
                "equipable_job_name"=>"war",
                "equipable_level"=>"80",
                "main_status"=>"723",
                "vit_status"=>"830",
                "crt_status"=>"526",
                "dir_status"=>"0",
                "det_status"=>"0",
                "sks_status"=>"0",
                "sps_status"=>"0",
                "ten_status"=>"368",
                "pie_status"=>"0",
                "materia01"=>"1",
                "materia02"=>"1",
                "materia03"=>"0",
                "materia04"=>"0",
                "materia05"=>"0",
                "max_status"=>"376",
                "dup"=>"0",
                "image"=>"",
                "url"=>"https://jp.finalfantasyxiv.com/lodestone/playguide/db/item/0bd2c393717/"],
                
                
                
        ];
    
             DB::table('weapons')->insert($param);
    }
}