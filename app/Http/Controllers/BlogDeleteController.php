<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Blog;

class BlogDeleteController extends Controller
{
    //記事を消す
    public function index($name){
        //記事の特定
        $delblog = Blog::where("name",$name);

        //削除
        $delblog->delete();

        //ブログデータ読み込み
        $blogs = Blog::all();

        return view('blog.index',["blogs"=>$blogs]);

    }

}
