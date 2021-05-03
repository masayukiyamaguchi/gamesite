<?php

//動作テスト用

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Screenshot;

class TestController extends Controller
{
    public function index(){
        return view("test");

    }

    public function sum($x,$y){
        $sum = $x + $y;
        return View::make("sum",["x"=>$x, "y"=>$y, "sum"=>$sum]);  
        //配列を返しているわけではなく、中身が$xで"x"という変数名（受け渡し先では$xで使う）で返している？ make??
        
    }

    public function test(){

        $alldata = Screenshot::get();

        $all_scs = new Screenshot();
        $all_scs->name = "savethequeen";
        $all_scs->title = "セーブザ・クイーン";
        $all_scs->comment01 = "あれよあれ";
        $all_scs->comment02 = "テスト挿入";
        $all_scs->url = "できたかな？";
        $all_scs->save();
 
        return view("test",["all_scs"=>$alldata]);
    }


}