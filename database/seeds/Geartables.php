<?php

use Illuminate\Database\Seeder;

class Geartables extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $param = [

            
[
    "gear_name"=>"武器",
    "name"=>"wep",
    "category"=>"wep_bg_pro",
    "class"=>"select_wep_div",
    "pull_d_class"=>"select_wep",
    "pull_d_id"=>"select_wep",
    "mate_name"=>"wepmate",
    "mate_class"=>"select_wepmate",
    "table"=>"tbl_subst_wep"],
    [
    "gear_name"=>"盾　",
    "name"=>"sld",
    "category"=>"wep_bg_pro",
    "class"=>"select_sld_div",
    "pull_d_class"=>"select_sld",
    "pull_d_id"=>"select_sld",
    "mate_name"=>"sldmate",
    "mate_class"=>"select_sldmate",
    "table"=>"tbl_subst_sld"],
    [
    "gear_name"=>"頭　",
    "name"=>"hea",
    "category"=>"arm_bg_pro",
    "class"=>"select_arm_div",
    "pull_d_class"=>"select_arm",
    "pull_d_id"=>"select_hea",
    "mate_name"=>"heamate",
    "mate_class"=>"select_heamate",
    "table"=>"tbl_subst_hea"],
    [
    "gear_name"=>"体　",
    "name"=>"bod",
    "category"=>"arm_bg_pro",
    "class"=>"select_arm_div",
    "pull_d_class"=>"select_arm",
    "pull_d_id"=>"select_bod",
    "mate_name"=>"bodmate",
    "mate_class"=>"select_bodmate",
    "table"=>"tbl_subst_bod"],
    [
    "gear_name"=>"手　",
    "name"=>"han",
    "category"=>"arm_bg_pro",
    "class"=>"select_arm_div",
    "pull_d_class"=>"select_arm",
    "pull_d_id"=>"select_han",
    "mate_name"=>"hanmate",
    "mate_class"=>"select_hanmate",
    "table"=>"tbl_subst_han"],
    [
    "gear_name"=>"腰　",
    "name"=>"wei",
    "category"=>"arm_bg_pro",
    "class"=>"select_arm_div",
    "pull_d_class"=>"select_arm",
    "pull_d_id"=>"select_wei",
    "mate_name"=>"weimate",
    "mate_class"=>"select_weimate",
    "table"=>"tbl_subst_wei"],
    [
    "gear_name"=>"脚　",
    "name"=>"leg",
    "category"=>"arm_bg_pro",
    "class"=>"select_arm_div",
    "pull_d_class"=>"select_arm",
    "pull_d_id"=>"select_leg",
    "mate_name"=>"legmate",
    "mate_class"=>"select_legmate",
    "table"=>"tbl_subst_leg"],
    [
    "gear_name"=>"足　",
    "name"=>"fee",
    "category"=>"arm_bg_pro",
    "class"=>"select_arm_div",
    "pull_d_class"=>"select_arm",
    "pull_d_id"=>"select_fee",
    "mate_name"=>"feemate",
    "mate_class"=>"select_feemate",
    "table"=>"tbl_subst_fee"],
    [
    "gear_name"=>"耳　",
    "name"=>"ear",
    "category"=>"acc_bg_pro",
    "class"=>"select_acc_div",
    "pull_d_class"=>"select_acc",
    "pull_d_id"=>"select_ear",
    "mate_name"=>"earmate",
    "mate_class"=>"select_earmate",
    "table"=>"tbl_subst_ear"],
    [
    "gear_name"=>"首　",
    "name"=>"nec",
    "category"=>"acc_bg_pro",
    "class"=>"select_acc_div",
    "pull_d_class"=>"select_acc",
    "pull_d_id"=>"select_nec",
    "mate_name"=>"necmate",
    "mate_class"=>"select_necmate",
    "table"=>"tbl_subst_nec"],
    [
    "gear_name"=>"腕　",
    "name"=>"bra",
    "category"=>"acc_bg_pro",
    "class"=>"select_acc_div",
    "pull_d_class"=>"select_acc",
    "pull_d_id"=>"select_bra",
    "mate_name"=>"bramate",
    "mate_class"=>"select_bramate",
    "table"=>"tbl_subst_bra"],
    [
    "gear_name"=>"指　",
    "name"=>"rin1",
    "category"=>"acc_bg_pro",
    "class"=>"select_acc_div",
    "pull_d_class"=>"select_acc",
    "pull_d_id"=>"select_rin1",
    "mate_name"=>"rin1mate",
    "mate_class"=>"select_rin1mate",
    "table"=>"tbl_subst_rin1"],
    [
    "gear_name"=>"指　",
    "name"=>"rin2",
    "category"=>"acc_bg_pro",
    "class"=>"select_acc_div",
    "pull_d_class"=>"select_acc",
    "pull_d_id"=>"select_rin2",
    "mate_name"=>"rin2mate",
    "mate_class"=>"select_rin2mate",
    "table"=>"tbl_subst_rin2"],
    [
    "gear_name"=>"食事",
    "name"=>"foo",
    "category"=>"-",
    "class"=>"-",
    "pull_d_class"=>"-",
    "pull_d_id"=>"-",
    "mate_name"=>"-",
    "mate_class"=>"-",
    "table"=>"tbl_subst_foo"],
    [
    "gear_name"=>"トータル",
    "name"=>"total",
    "category"=>"-",
    "class"=>"-",
    "pull_d_class"=>"-",
    "pull_d_id"=>"-",
    "mate_name"=>"-",
    "mate_class"=>"-",
    "table"=>"tbl_subst_total"],
    
    
    

        ];

        DB::table('geartables')->insert($param);
    }
}
