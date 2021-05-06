<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GearController extends Controller
{
    //装備シミュレーターページへ移動
    public function index(){
        return view('gear.index');
    }
    
}
