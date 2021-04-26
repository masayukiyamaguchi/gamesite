<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    //トップページへ移動します。
    public function index(){

        //screenshot データ抽出
        $scsdata = DB::select('select * from screenshots'); //データ抽出
        $scs = json_decode(json_encode($scsdata), true); //jsonデコード
        $scss =  array_reverse($scs); //逆順に並び替え

        //blog データ抽出
        $blogdata = DB::select('select * from blogs'); //データ抽出
        $blog = json_decode(json_encode($blogdata), true); //jsonデコード
        $blogs =  array_reverse($blog); //逆順に並び替え
        
        return view('index',["scss"=>$scss,"blogs"=>$blogs]);


    }
}

