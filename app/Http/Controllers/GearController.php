<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Job;
use App\Race;
use App\Weapon;

class GearController extends Controller
{
    //装備シミュレーターページへ移動
    public function index(){
        $jobs = Job::all();
        $races = Race::all();
        $weapons = Weapon::all();

        return view('gear.index',["jobs"=>$jobs,"races"=>$races,"weapons"=>$weapons]);
        
    }

    public function selectjob(Request $request){
        $job = $request->job;
        $weapons = Weapon::where("equipable_job_name",$job)->get();
        return $weapons;
    }
    
}
