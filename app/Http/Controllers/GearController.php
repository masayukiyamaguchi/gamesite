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
use App\Geartable;
use App\Nullable;

class GearController extends Controller
{
    //装備シミュレーターページへ移動
    public function index(){
        $jobs = Job::all();
        $races = Race::all();
        $foods = Food::all();
        $gears = Geartable::where("category","like","%pro")->get();
        $substs = Geartable::select(["id","gear_name","name","table"])->get();

        return view('gear.index',[
                "jobs"=>$jobs,
                "races"=>$races,
                "foods"=>$foods,
                "gears"=>$gears,
                "substs"=>$substs
                ]);        
    }

    public function selectjob(Request $request){
        //ジョブの情報を受け取る
        $job = $request->job;

        // 各内容を受け取る
        $job_status = Job::where("name","like",$job)->get();
        $weapons = Weapon::where("equipable_job_name",'like',"%$job%")->orderBy('item_level','desc')->get();
        $shields = Shield::where("equipable_job_name",'like',"%$job%")->orderBy('item_level','desc')->get();
        $headgears = Headgear::where("equipable_job_name",'like',"%$job%")->orderBy('item_level','desc')->get();
        $bodygears = Bodygear::where("equipable_job_name",'like',"%$job%")->orderBy('item_level','desc')->get();
        $handgears = Handgear::where("equipable_job_name",'like',"%$job%")->orderBy('item_level','desc')->get();
        $waistgears = Waistgear::where("equipable_job_name",'like',"%$job%")->orderBy('item_level','desc')->get();
        $leggears = Leggear::where("equipable_job_name",'like',"%$job%")->orderBy('item_level','desc')->get();
        $feetgears = Feetgear::where("equipable_job_name",'like',"%$job%")->orderBy('item_level','desc')->get();
        $earringgears = Earringgear::where("equipable_job_name",'like',"%$job%")->orderBy('item_level','desc')->get();
        $necklacegears = Necklacegear::where("equipable_job_name",'like',"%$job%")->orderBy('item_level','desc')->get();
        $braceletgears = Braceletgear::where("equipable_job_name",'like',"%$job%")->orderBy('item_level','desc')->get();
        $ringgears = Ringgear::where("equipable_job_name",'like',"%$job%")->orderBy('item_level','desc')->get();
        $foods = Food::all();
        $nulls = Nullable::all();
 

        //jsonをデコードして配列を結合 jsonをphpで扱える変数に変換
        $alldata = array_merge_recursive(
            json_decode($job_status),//必ず1番目に
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
            json_decode($foods),
            json_decode($nulls)
        );

        // 値を返す
        return $alldata;
    }


    public function selectrace(Request $request){
        //種族の情報を受け取る
        $race = $request->race;

        // 各内容を受け取る
        $racedata = Race::where("name","like",$race)->get();

        // 値を返す(多次元配列のため0返し)
        return $racedata[0];

    }
    
}
