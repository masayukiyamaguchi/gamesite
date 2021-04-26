<?php

use Illuminate\Database\Seeder;

class BlogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            [
            "name"=>"rivaiasan",
            "title"=>"幻リヴァイアサン討滅戦攻略解説",
            "samneil"=>"samneil20210410.jpg",
            "image01"=>"20210404036.jpg",
            "image02"=>"20210404037-885x600.jpg",
            "image03"=>"20210404006.png",
            "image04"=>"20210404033.png",
            "comment01"=>"テールウィップ。タンクと近接DPSで頭割り",
            "comment02"=>"アクアブレス。MTが一人受け",
            "comment03"=>"ダイブは、フィールド半分に攻撃判定があります",
            "comment04"=>"開幕初期配置は図の通りに散会しましょう"],

            [
            "name"=>"emeraldwepon",
            "title"=>"極エメレルドウェポン破壊作戦",
            "samneil"=>"20201212samneil.jpg",
            "image01"=>"20201209005.png",
            "image02"=>"20201209006.png",
            "image03"=>"20201209004.png",
            "image04"=>"20201209003.png",
            "comment01"=>"エメラルドビーム/ヒートレイ。内側回転後、外側へ退避",
            "comment02"=>"外側へ避けたら更に内側へ",
            "comment03"=>"爆雷生成。開幕の壊滅ポイント",
            "comment04"=>"東西南北に分かれて散回。"],
                    
        ];

        DB::table('blogs')->insert($param);

    }
}
