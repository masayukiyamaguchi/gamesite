<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Contact;

class ContactLists extends Controller
{
    //データを読み込みます
    public function index(){
        $data = Contact::all();
//        $data = DB::select('select * from contacts'); データ抽出
//　      $datas = json_decode(json_encode($data), true); //jsonデコード

        return view('contact.lists',["data"=>$data]);
    }  

}
