<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Job;
use App\Race;
use App\Weapon;
use App\Shield;
use App\Headgear;
use App\Bodygear;
use App\Handgear;
use App\Waistgear;
use App\Leggear;
use App\Feetgear;
use App\Earringgear;
use App\Necklacegear;
use App\Braceletgear;
use App\Ringgear;
use App\Food;

class GearController extends Controller
{
    //装備シミュレーターページへ移動
    public function index(){
        $jobs = Job::all();
        $races = Race::all();
        $foods = Food::all();


        return view('gear.index',["jobs"=>$jobs,"races"=>$races,"foods"=>$foods]);
        
    }

    public function selectjob(Request $request){
        //ジョブの情報を受け取る
        $job = $request->job;

        // 各内容を受け取る
        $weapons = Weapon::where("equipable_job_name",'like',"%$job%")->get();
        $shields = Shield::where("equipable_job_name",'like',"%$job%")->get();
        $headgears = Headgear::where("equipable_job_name",'like',"%$job%")->get();
        $bodygears = Bodygear::where("equipable_job_name",'like',"%$job%")->get();
        $handgears = Handgear::where("equipable_job_name",'like',"%$job%")->get();
        $waistgears = Waistgear::where("equipable_job_name",'like',"%$job%")->get();
        $leggears = Leggear::where("equipable_job_name",'like',"%$job%")->get();
        $feetgears = Feetgear::where("equipable_job_name",'like',"%$job%")->get();
        $earringgears = Earringgear::where("equipable_job_name",'like',"%$job%")->get();
        $necklacegears = Necklacegear::where("equipable_job_name",'like',"%$job%")->get();
        $braceletgears = Braceletgear::where("equipable_job_name",'like',"%$job%")->get();
        $ringgears = Ringgear::where("equipable_job_name",'like',"%$job%")->get();
 

        //jsonをデコードして配列を結合
        $alldata = array_merge_recursive(
            json_decode($weapons),
            json_decode($shields),
            json_decode($headgears),
            json_decode($bodygears),
            json_decode($handgears),
            json_decode($waistgears),
            json_decode($leggears),
            json_decode($feetgears),
            json_decode($earringgears),
            json_decode($necklacegears),
            json_decode($braceletgears),
            json_decode($ringgears),
        );

        // 値を返す
        return $alldata;
    }
    
}
