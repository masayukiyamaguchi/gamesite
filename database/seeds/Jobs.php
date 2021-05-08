<?php

use Illuminate\Database\Seeder;

class Jobs extends Seeder
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
                "job_name"=>"---",
                "role"=>"---",
                "name"=>"non",
                "main_status"=>"---",
                "job_num"=>"1"],

            [
                "job_name"=>"ナイト",
                "role"=>"タンク",
                "name"=>"pld",
                "main_status"=>"str",
                "job_num"=>"2"],
                [
                "job_name"=>"戦士",
                "role"=>"タンク",
                "name"=>"war",
                "main_status"=>"str",
                "job_num"=>"3"],
                [
                "job_name"=>"暗黒騎士",
                "role"=>"タンク",
                "name"=>"drk",
                "main_status"=>"str",
                "job_num"=>"4"],
                [
                "job_name"=>"ガンブレイカー",
                "role"=>"タンク",
                "name"=>"gnb",
                "main_status"=>"str",
                "job_num"=>"5"],
                [
                "job_name"=>"竜騎士",
                "role"=>"メレー",
                "name"=>"drg",
                "main_status"=>"str",
                "job_num"=>"6"],
                [
                "job_name"=>"モンク",
                "role"=>"メレー",
                "name"=>"mnk",
                "main_status"=>"str",
                "job_num"=>"7"],
                [
                "job_name"=>"忍者",
                "role"=>"メレー",
                "name"=>"nin",
                "main_status"=>"dex",
                "job_num"=>"8"],
                [
                "job_name"=>"侍",
                "role"=>"メレー",
                "name"=>"sam",
                "main_status"=>"str",
                "job_num"=>"9"],
                [
                "job_name"=>"吟遊詩人",
                "role"=>"レンジ",
                "name"=>"brd",
                "main_status"=>"dex",
                "job_num"=>"10"],
                [
                "job_name"=>"機工士",
                "role"=>"レンジ",
                "name"=>"mcn",
                "main_status"=>"dex",
                "job_num"=>"11"],
                [
                "job_name"=>"踊り子",
                "role"=>"レンジ",
                "name"=>"dnc",
                "main_status"=>"dex",
                "job_num"=>"12"],
                [
                "job_name"=>"黒魔道士",
                "role"=>"キャスター",
                "name"=>"blm",
                "main_status"=>"int",
                "job_num"=>"13"],
                [
                "job_name"=>"召喚士",
                "role"=>"キャスター",
                "name"=>"smn",
                "main_status"=>"int",
                "job_num"=>"14"],
                [
                "job_name"=>"赤魔道士",
                "role"=>"キャスター",
                "name"=>"rdm",
                "main_status"=>"int",
                "job_num"=>"15"],
                [
                "job_name"=>"青魔道士",
                "role"=>"キャスター",
                "name"=>"mlu",
                "main_status"=>"int",
                "job_num"=>"16"],
                [
                "job_name"=>"白魔道士",
                "role"=>"ヒーラー",
                "name"=>"whm",
                "main_status"=>"mnd",
                "job_num"=>"17"],
                [
                "job_name"=>"学者",
                "role"=>"ヒーラー",
                "name"=>"sch",
                "main_status"=>"mnd",
                "job_num"=>"18"],
                [
                "job_name"=>"占星術士",
                "role"=>"ヒーラー",
                "name"=>"ast",
                "main_status"=>"mnd",
                "job_num"=>"19"],            
        ];


        DB::table('jobs')->insert($param);
    }
}
