<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Job;
use App\Race;

class GearController extends Controller
{
    //装備シミュレーターページへ移動
    public function index(){
        $jobs = Job::all();
        $races = Race::all();

        return view('gear.index',["jobs"=>$jobs,"races"=>$races]);
        
    }
    
}
