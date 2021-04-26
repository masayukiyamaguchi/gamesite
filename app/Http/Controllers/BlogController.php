<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{

    //blog データ抽出
    public function index(){
        $blogdata = DB::select('select * from blogs'); //データ抽出
        $blog = json_decode(json_encode($blogdata), true); //jsonデコード
        $blogs =  array_reverse($blog); //逆順に並び替え
        
        return view('blog.index',["blogs"=>$blogs]);
    }
}
