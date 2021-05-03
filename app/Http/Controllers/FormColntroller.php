<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Contact;

class FormColntroller extends Controller
{
    //フォームの内容をデータベースへ追加
    public function index(Request $request){

        //バリデーションルールを設定
        $request->validate([
            "name" => "required",
            "email" => "required|email",
            //必須ではなくて良い場合？ 下記の記述ではうまく行かなかった。
            "job" => "required",
            "playtime" => "required",
            "content" => "required",
 
        ]);

        //Eloquentを使って記述 これで入れると　jobがnullになってしまう。。
        // Contact::create($_POST);

        $contact = new Contact();
        $contact->name = $_POST["name"];
        $contact->email = $_POST["email"];
        $contact->server = $_POST["server"];

        //この辺どう入れておくのが最適！？(チェックボックス)
        //job_.$job=1; では通らなかった。文字列と追加したい場合は？？
        //空でもいい場合に、エラーとなる
            
        foreach($_POST["job"] as $job):
            $contact->$job=1;
        endforeach;

        $contact->playtime = $_POST["playtime"];
        $contact->content = $_POST["content"];
        $contact->save();

   
        return view("contact.form",["_POST"=>$_POST]);
    }


}
