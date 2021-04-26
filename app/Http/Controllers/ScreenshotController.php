<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ScreenshotController extends Controller
{
    //スクリーンショットページへ移行します。
    //データを読み込みます
    public function index(){
        $data = DB::select('select * from screenshots'); //データ抽出
        $scs = json_decode(json_encode($data), true); //jsonデコード
        $scss =  array_reverse($scs); //逆順に並び替え
        
        return view('screenshot.index',["scss"=>$scss]);

    }
}

