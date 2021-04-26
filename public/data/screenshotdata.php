<?php



//【PHP入門】JSONのデータを処理する方法（json_encode/json_decode）参照
//　なぜ、このような形になってしまったのか不明。そして何をやっているのか不明。だがうまくいった。 -->
use Illuminate\Support\Facades\DB;
$data = DB::select('select * from screenshots'); //データ抽出
$scs = json_decode(json_encode($data), true); //jsonデコード
$scss =  array_reverse($scs); //逆順に並び替え



// 記事の内容の中から特定のnameを探してリターン
function findByName($scs,$name){
    foreach($scs as $item){
        if($item["name"]==$name){
            return $item;
        };
    };
};

?>

