<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Blog;

class BlogDetailController extends Controller
{
    //データを読み込みます。後で編集
    public function index($name){
        $one_blog = Blog::where("name",$name)->get();
        return view('blog.detail',["blogs"=>$one_blog[0]]);

    }
}
