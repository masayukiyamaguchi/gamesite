<?php

use Illuminate\Database\Seeder;

class Races extends Seeder
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
                "race_clan"=>"---",
                "str"=>"0",
                "dex"=>"0",
                "vit"=>"0",
                "int"=>"0",
                "mnd"=>"0",
                "name"=>"non"],
                [
                "race_clan"=>"ヒュラ：ミッドランダー",
                "str"=>"2",
                "dex"=>"-1",
                "vit"=>"0",
                "int"=>"3",
                "mnd"=>"-1",
                "name"=>"mid"],
                [
                "race_clan"=>"ヒュラ：ハイランダー",
                "str"=>"3",
                "dex"=>"0",
                "vit"=>"2",
                "int"=>"-2",
                "mnd"=>"0",
                "name"=>"hig"],
                [
                "race_clan"=>"ミコ：サンシーカー",
                "str"=>"2",
                "dex"=>"3",
                "vit"=>"0",
                "int"=>"-1",
                "mnd"=>"-1",
                "name"=>"sun"],
                [
                "race_clan"=>"ミコ：ムーンキーパー",
                "str"=>"-1",
                "dex"=>"2",
                "vit"=>"-2",
                "int"=>"1",
                "mnd"=>"3",
                "name"=>"moo"],
                [
                "race_clan"=>"ララ：プレーンフォーク",
                "str"=>"-1",
                "dex"=>"3",
                "vit"=>"-1",
                "int"=>"2",
                "mnd"=>"0",
                "name"=>"pla"],
                [
                "race_clan"=>"ララ：デューンフォーク",
                "str"=>"-1",
                "dex"=>"1",
                "vit"=>"-2",
                "int"=>"2",
                "mnd"=>"3",
                "name"=>"dun"],
                [
                "race_clan"=>"エレ：フォレスター",
                "str"=>"0",
                "dex"=>"3",
                "vit"=>"-1",
                "int"=>"2",
                "mnd"=>"-1",
                "name"=>"for"],
                [
                "race_clan"=>"エレ：シェーダー",
                "str"=>"0",
                "dex"=>"0",
                "vit"=>"-1",
                "int"=>"3",
                "mnd"=>"1",
                "name"=>"sha"],
                [
                "race_clan"=>"ルガ：ゼーヴォルフ",
                "str"=>"2",
                "dex"=>"-1",
                "vit"=>"3",
                "int"=>"-2",
                "mnd"=>"1",
                "name"=>"see"],
                [
                "race_clan"=>"ルガ：ローエンガルデ",
                "str"=>"0",
                "dex"=>"-2",
                "vit"=>"3",
                "int"=>"0",
                "mnd"=>"2",
                "name"=>"loh"],
                [
                "race_clan"=>"アウラ；アウラ・レン",
                "str"=>"-1",
                "dex"=>"2",
                "vit"=>"-1",
                "int"=>"0",
                "mnd"=>"3",
                "name"=>"rae"],
                [
                "race_clan"=>"アウラ；アウラ・ゼラ",
                "str"=>"3",
                "dex"=>"0",
                "vit"=>"2",
                "int"=>"0",
                "mnd"=>"-2",
                "name"=>"xae"],
                [
                "race_clan"=>"ヴィエラ：ラヴァ・ヴィエラ",
                "str"=>"0",
                "dex"=>"3",
                "vit"=>"-2",
                "int"=>"1",
                "mnd"=>"1",
                "name"=>"rav"],
                [
                "race_clan"=>"ヴィエラ：ヴィナ・ヴィエラ",
                "str"=>"-1",
                "dex"=>"0",
                "vit"=>"-1",
                "int"=>"3",
                "mnd"=>"2",
                "name"=>"vee"],
                [
                "race_clan"=>"ロスガル：ヘリオン",
                "str"=>"3",
                "dex"=>"-3",
                "vit"=>"3",
                "int"=>"-3",
                "mnd"=>"3",
                "name"=>"hel"],
                [
                "race_clan"=>"ロスガル：ロスト",
                "str"=>"3",
                "dex"=>"-3",
                "vit"=>"3",
                "int"=>"-3",
                "mnd"=>"3",
                "name"=>"los"],
                
                
                  
        ];

        DB::table('races')->insert($param);
    }
}
