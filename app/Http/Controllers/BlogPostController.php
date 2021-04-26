<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class BlogPostController extends Controller
{


    public function index(){

        if(Auth::check()){
            return view("blog.blogpost",["results"=>""]);
        }else{
          return view("auth/login",["auth"=>Auth::check()]);
        }

    }



}
