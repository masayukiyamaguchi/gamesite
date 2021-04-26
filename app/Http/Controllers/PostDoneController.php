<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Blog;


class PostDoneController extends Controller
{
    //フォームの内容を処理
    public function index(Request $request){


        //バリデーションルールの設置
        $request->validate([
            "name" => "required|alpha_num",
            "title" => "required",
            "samneil" => "required",
            "image01" => "required",
            "image02" => "required",
            "image03" => "required",
            "image04" => "required",
            "comment01" => "required",
            "comment02" => "required",
            "comment03" => "required",
            "comment04" => "required",
 
        ]);


        //サムネイル登録
        //画像をストレージへ保存
            $file_name = $request->file("samneil")->getClientOriginalName();
            //ここの記述、store("images",$file_name);　で、publicの中に入ると解説があったがちがった。何が正しい？
            $request->file("samneil")->storeAs("public/images",$file_name);
         

        //画像登録
        for ($i = 1; $i <=4 ; $i++):

            $image_num="image0".$i;
            $file_name = $request->file("$image_num")->getClientOriginalName();
            $pass=$request->file("$image_num")->storeAs("public/images",$file_name);

        endfor;



        //フォームの内容をデータベースへ追加
        $blog = new Blog();
        $blog->name = $_POST["name"];
        $blog->title = $_POST["title"];
        $blog->samneil = $request->file("samneil")->getClientOriginalName();
        $blog->image01 = $request->file("image01")->getClientOriginalName();
        $blog->image02 = $request->file("image02")->getClientOriginalName();
        $blog->image03 = $request->file("image03")->getClientOriginalName();
        $blog->image04 = $request->file("image04")->getClientOriginalName();
        $blog->comment01 = $_POST["comment01"];
        $blog->comment02 = $_POST["comment02"];
        $blog->comment03 = $_POST["comment03"];
        $blog->comment04 = $_POST["comment04"];
        $blog->save();


        return view("blog.blogdone");
        

    }
}

