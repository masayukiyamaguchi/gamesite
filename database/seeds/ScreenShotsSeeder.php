<?php

use Illuminate\Database\Seeder;

class ScreenShotsSeeder extends Seeder
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
        "name"=>"gunhild",
        "title"=>"グンヒルドディルーブラム零式クリアー記念！",
        "comment01"=>"2月8日に踏破しました！",
        "comment02"=>"mana:3rd World:6th",
        "url"=>"images/ffxiv_20210207_024900_162.png"],
   
        [
        "name"=>"eden04",
        "title"=>"エデン共鳴編3層に突入！",
        "comment01"=>"エデン攻略は3層に到達しました！",
        "comment02"=>"",
        "url"=>"images/ffxiv_20210111_160054_335.png"],
   
        [
        "name"=>"aki",
        "title"=>"秋の木漏れ日の中で",
        "comment01"=>"良い場所を見つけました",
        "comment02"=>"秋ですねー",
        "url"=>"images/ffxiv_20201108_022722_987.png"],
   
        [
        "name"=>"newgear",
        "title"=>"新しい装備をGET!",
        "comment01"=>"新AFをGET!",
        "comment02"=>"後ろ姿がかっこいい！",
        "url"=>"images/ffxiv_20201023_174746_462.png"],
   
        [
        "name"=>"meating",
        "title"=>"作戦会議中！",
        "comment01"=>"IDで作戦会議中。",
        "comment02"=>"なかなか難しい、、",
        "url"=>"images/ffxiv_20210205_023755_085.png"],
   
        [
        "name"=>"rubymount",
        "title"=>"ルビーウェポンマウントGET!",
        "comment01"=>"50周目でようやく手に入りました！",
        "comment02"=>"秋の夜空とともに！",
        "url"=>"images/ffxiv_20201212_131238_072.png"],
        
    ];

         DB::table('screenshots')->insert($param);
    }
}
