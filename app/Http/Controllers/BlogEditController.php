<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogEditController extends Controller
{
    //エディット画面の操作
    public function index($name){
        //記事の特定
        $editblog = Blog::where("name",$name)->get();;

        //編集画面へ推移
        return view('blog.edit',["editblog"=>$editblog[0]]);

    }

}
