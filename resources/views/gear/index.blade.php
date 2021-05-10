@extends("layouts.app")


@section("header")
  <!-- ここの位置であってるっけ？ -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="{{asset('/js/gear.js') }}"></script>
  
@endsection


@section("title","about")


@include("layouts.header")

@section("menu")
<a href="{{route('about')}}"><li><font color ="gray">ABOUT</font></li></a>
<a href="{{route('screenshot')}}"><li>SCREEN SHOT</li></a>
<a href="{{route('blog')}}"><li>BLOG</li></a>
<a href="{{route('contact')}}"><li>CONTACT</li></a>
@endsection


@section("content")
<!-- コンテンツここから -->
<footer class="footer_simu">
<div class="inside_simu">

<h2>装備シミュレータ</h2>
<div id=lbox>

    <div class="select_job_div">
        <p>ジョブ：
        <select name="job" class="select_job" id="select_job">
        
            @foreach($jobs as $job)
            <option value="{{$job['name']}}">{{$job['job_name']}}</option>
            @endforeach

        </select>

        　種族：
        <select name="race" class="select_race">
        
            @foreach($races as $race)
                <option value="{{$race['name']}}">{{$race['race_clan']}}</option>
            @endforeach

        </select>
        </p>
    </div>

    <div class="wep_bg_pro">
    <div  class="select_wep_div">
        <p>武器：
        <select name="wep" class="select_wep" id="select_wep">
            <option value="---">---</option>
        </select>

        @for($i=1;$i<=5;$i++)
        <select name="wepmate{{$i}}" class="select_mate{{$i}} select_wepmate{{$i}}">
        <option value="non">---</option>
        <option value="crt">クリ</option>
        <option value="dir">DH</option>
        <option value="det">意思</option>
        <option value="sks">SS</option>
        <option value="sps">SS</option>
        <option value="ten">不屈</option>
        <option value="pie">信仰</option>
        </select>
        @endfor

        </p>
    </div>

    <div class="select_sld_div">
        <p>盾　：
        <select name="sld" class="select_sld" id="select_sld">
        <option value="---">---</option>
        </select>
        
        @for($i=1;$i<=5;$i++)
        <select name="mate{{$i}}" class="select_mate{{$i}} sld_mate">
        <option value="non">---</option>
        <option value="crt">クリ</option>
        <option value="dir">DH</option>
        <option value="det">意思</option>
        <option value="sks">SS</option>
        <option value="sps">SS</option>
        <option value="ten">不屈</option>
        <option value="pie">信仰</option>
        </select>
        @endfor

        </p>
    </div>
    </div>

    <div class="arm_bg_pro">
    <div class="select_arm_div">
        <p>頭　：
        <select name="hea" class="select_arm" id="select_hea">
        <option value="---">---</option>
        </select>   

        @for($i=1;$i<=5;$i++)
        <select name="mate{{$i}}" class="select_mate{{$i}}">
        <option value="non">---</option>
        <option value="crt">クリ</option>
        <option value="dir">DH</option>
        <option value="det">意思</option>
        <option value="sks">SS</option>
        <option value="sps">SS</option>
        <option value="ten">不屈</option>
        <option value="pie">信仰</option>
        </select>
        @endfor

        <p>
    </div>
    <div class="select_arm_div">
        <p>胴　：
        <select name="bod" class="select_arm" id="select_bod">
        <option value="---">---</option>
        </select> 
        
        @for($i=1;$i<=5;$i++)
        <select name="mate{{$i}}" class="select_mate{{$i}}">
        <option value="non">---</option>
        <option value="crt">クリ</option>
        <option value="dir">DH</option>
        <option value="det">意思</option>
        <option value="sks">SS</option>
        <option value="sps">SS</option>
        <option value="ten">不屈</option>
        <option value="pie">信仰</option>
        </select>
        @endfor

        </p>
    </div>
    <div class="select_arm_div">
        <p>手　：
        <select name="han" class="select_arm" id="select_han">
        <option value="---">---</option>
        </select>   

        @for($i=1;$i<=5;$i++)
        <select name="mate{{$i}}" class="select_mate{{$i}}">
        <option value="non">---</option>
        <option value="crt">クリ</option>
        <option value="dir">DH</option>
        <option value="det">意思</option>
        <option value="sks">SS</option>
        <option value="sps">SS</option>
        <option value="ten">不屈</option>
        <option value="pie">信仰</option>
        </select>
        @endfor

        </p>
    </div>
    <div class="select_arm_div">
        <p>腰　：
        <select name="wei" class="select_arm" id="select_wei">
        <option value="---">---</option>
        </select>

        @for($i=1;$i<=5;$i++)
        <select name="mate{{$i}}" class="select_mate{{$i}}">
        <option value="non">---</option>
        <option value="crt">クリ</option>
        <option value="dir">DH</option>
        <option value="det">意思</option>
        <option value="sks">SS</option>
        <option value="sps">SS</option>
        <option value="ten">不屈</option>
        <option value="pie">信仰</option>
        </select>
        @endfor

        </p>
    </div>
    <div class="select_arm_div">
        <p>脚　：
        <select name="leg" class="select_arm" id="select_leg">
        <option value="---">---</option>
        </select> 

        @for($i=1;$i<=5;$i++)
        <select name="mate{{$i}}" class="select_mate{{$i}}">
        <option value="non">---</option>
        <option value="crt">クリ</option>
        <option value="dir">DH</option>
        <option value="det">意思</option>
        <option value="sks">SS</option>
        <option value="sps">SS</option>
        <option value="ten">不屈</option>
        <option value="pie">信仰</option>
        </select>
        @endfor

        </p>
    </div>
    <div class="select_arm_div fee_div">
        <p>足　：
        <select name="fee" class="select_arm" id="select_fee">
        <option value="---">---</option>
        </select>  

        @for($i=1;$i<=5;$i++)
        <select name="mate{{$i}}" class="select_mate{{$i}}">
        <option value="non">---</option>
        <option value="crt">クリ</option>
        <option value="dir">DH</option>
        <option value="det">意思</option>
        <option value="sks">SS</option>
        <option value="sps">SS</option>
        <option value="ten">不屈</option>
        <option value="pie">信仰</option>
        </select>
        @endfor

        </p>
    </div>
    </div>

    <div class="acc_bg_pro">
    <div class="select_acc_div">
        <p>耳　：
        <select name="ear" class="select_acc" id="select_ear">
        <option value="---">---</option>
        </select> 

        @for($i=1;$i<=5;$i++)
        <select name="mate{{$i}}" class="select_mate{{$i}}">
        <option value="non">---</option>
        <option value="crt">クリ</option>
        <option value="dir">DH</option>
        <option value="det">意思</option>
        <option value="sks">SS</option>
        <option value="sps">SS</option>
        <option value="ten">不屈</option>
        <option value="pie">信仰</option>
        </select>
        @endfor

        </p>
    </div>
    <div class="select_acc_div">
        <p>首　：
        <select name="nec" class="select_acc" id="select_nec">
        <option value="---">---</option>
        </select>   

        @for($i=1;$i<=5;$i++)
        <select name="mate{{$i}}" class="select_mate{{$i}}">
        <option value="non">---</option>
        <option value="crt">クリ</option>
        <option value="dir">DH</option>
        <option value="det">意思</option>
        <option value="sks">SS</option>
        <option value="sps">SS</option>
        <option value="ten">不屈</option>
        <option value="pie">信仰</option>
        </select>
        @endfor

        </p>
    </div>
    <div class="select_acc_div">
        <p>腕　：
        <select name="bra" class="select_acc" id="select_bra">
        <option value="---">---</option>
        </select>

        @for($i=1;$i<=5;$i++)
        <select name="mate{{$i}}" class="select_mate{{$i}}">
        <option value="non">---</option>
        <option value="crt">クリ</option>
        <option value="dir">DH</option>
        <option value="det">意思</option>
        <option value="sks">SS</option>
        <option value="sps">SS</option>
        <option value="ten">不屈</option>
        <option value="pie">信仰</option>
        </select>
        @endfor

        </p>
    </div>
    <div class="select_acc_div">
        <p>指　：
        <select name="rin1" class="select_acc" id="select_rin1">
        <option value="---">---</option>
        </select>   

        @for($i=1;$i<=5;$i++)
        <select name="mate{{$i}}" class="select_mate{{$i}}">
        <option value="non">---</option>
        <option value="crt">クリ</option>
        <option value="dir">DH</option>
        <option value="det">意思</option>
        <option value="sks">SS</option>
        <option value="sps">SS</option>
        <option value="ten">不屈</option>
        <option value="pie">信仰</option>
        </select>
        @endfor

        </p>
    </div>
    <div class="select_acc_div rin2_div">
        <p>指　：
        <select name="rin2" class="select_acc" id="select_rin2">
        <option value="---">---</option>
        </select>  

        @for($i=1;$i<=5;$i++)
        <select name="mate{{$i}}" class="select_mate{{$i}}">
        <option value="non">---</option>
        <option value="crt">クリ</option>
        <option value="dir">DH</option>
        <option value="det">意思</option>
        <option value="sks">SS</option>
        <option value="sps">SS</option>
        <option value="ten">不屈</option>
        <option value="pie">信仰</option>
        </select>
        @endfor

        </p>
    </div>
    </div>

    <div class="mea_bg_pro">
    <div class="select_mea_div">
        <p>食事：
        <select name="foo" class="select_mea" id="select_foo">
        <option value="---">---</option>

        @foreach($foods as $food)
            <option value="{{$food['item_name']}}">{{$food['item_name']}}</option>
        @endforeach
        
        </select>  
        </p>
    </div>
    </div>

</div>

<!-- サブステ部分のリスト -->
<?php $tbl_substs = ["tbl_subst_wep","tbl_subst_sld","tbl_subst_hea","tbl_subst_bod","tbl_subst_han","tbl_subst_wei","tbl_subst_leg","tbl_subst_fee","tbl_subst_ear","tbl_subst_nec","tbl_subst_bra","tbl_subst_rin1","tbl_subst_rin2","tbl_subst_foo","tbl_subst_total"]?>

<!-- サブステ部分の表示 -->
<div id=cbox>
    <table class="tbl_subst">
        <tr class="tbl_subst_tr">
            <th id="subst_main" class="subst_main">STR</th>
            <th class="subst_crt">CRT</th>
            <th class="subst_dir">DIR</th>
            <th class="subst_det">DET</th>
            <th class="subst_sks">SKS</th>
            <th class="subst_sps">SPS</th>
            <th class="subst_ten">TEN</th>
            <th class="subst_pie">PIE</th>
            <th class="subst_vit">VIT</th>
   
        </tr>
        @foreach($tbl_substs as $tbl_subst)
        <tr class="{{$tbl_subst}}">
            <td id="{{$tbl_subst}}_main" class="subst_main">555</td>
            <td id="{{$tbl_subst}}_crt" class="subst_crt">555</td>
            <td id="{{$tbl_subst}}_dir" class="subst_dir">555</td>
            <td id="{{$tbl_subst}}_det" class="subst_det">555</td>
            <td id="{{$tbl_subst}}_sks" class="subst_sks">555</td>
            <td id="{{$tbl_subst}}_sps" class="subst_sps">555</td>
            <td id="{{$tbl_subst}}_ten" class="subst_ten">555</td>
            <td id="{{$tbl_subst}}_pie" class="subst_pie">555</td>
            <td id="{{$tbl_subst}}_vit" class="subst_vit">555</td>       
        </tr>
        @endforeach

    </table>

</div>


<div id=cbox>
    <div class="status">
        <p>STATUS</p>
    </div>
<div class="main_status_div">
    <table class="main_status">
        <tr>
            <td class="l_table">HP:</td>
            <td class="r_table">500</td>
            <td class="l_table">MP:</td>
            <td class="r_table">10000</td>

        </tr>

        <tr>
            <td class="l_table">STR:</td>
            <td class="r_table">500</td>
            <td class="l_table">INT:</td>
            <td class="r_table">500</td>

        </tr> 

        <tr>
            <td class="l_table">DEX:</td>
            <td class="r_table">500</td>
            <td class="l_table">MND:</td>
            <td class="r_table">500</td>
        </tr> 

        <tr>
            <td class="l_table">VIT:</td>
            <td class="r_table">500</td>
        </tr>
       
    </table>
</div> 

<div class="weapon_bap_div">
    <table class="weapon_bap">
        <tr>
            <td>基本性能:</td>
            <td class="weapon_bap_value">500</td>
            <td>AA:</td>
            <td class="weapon_bap_value">500</td>
            <td>攻撃間隔:</td>
            <td class="weapon_bap_value">500</td>
        </tr>

    </table>
</div> 

<div class="sub_status_div">
    <table class="sub_status">
        <tr class="crt_table">
            <td class="sub_l_table sub_status_wid1">クリ：</td>
            <td class="sub_r_table sub_status_wid2">500</td>
            <td class="sub_l_table sub_status_wid3">クリ発生率：</td>
            <td class="sub_r_table sub_status_wid4">500</td>
        </tr>
        <tr class="crt_table">
            <td class="sub_l_table"></td>
            <td class="sub_r_table"></td>
            <td class="sub_l_table">クリ倍率：</td>
            <td class="sub_r_table">50000</td>
        </tr>
        <tr class="dir_table">
            <td class="sub_l_table">DH：</td>
            <td class="sub_r_table">500</td>
            <td class="sub_l_table">DH発生率：</td>
            <td class="sub_r_table">500</td>
        </tr>
        <tr class="dir_table">
            <td class="sub_l_table"></td>
            <td class="sub_r_table"></td>
            <td class="sub_l_table">DH倍率：</td>
            <td class="sub_r_table">500</td>
        </tr>
        <tr class="det_table">
            <td class="sub_l_table">意思：</td>
            <td class="sub_r_table">500</td>
            <td class="sub_l_table">意思倍率：</td>
            <td class="sub_r_table">500</td>
        </tr>
        <tr class="sks_table">
            <td class="sub_l_table">ｽｷｽﾋﾟ：</td>
            <td class="sub_r_table">500</td>
            <td class="sub_l_table">GCD：</td>
            <td class="sub_r_table">500</td>
        </tr>
        <tr class="sks_table">
            <td class="sub_l_table"></td>
            <td class="sub_r_table"></td>
            <td class="sub_l_table">ｽｷｽﾋﾟ倍率：</td>
            <td class="sub_r_table">500</td>
        </tr>
        <tr class="sps_table">
            <td class="sub_l_table">ｽﾍﾟｽﾋﾟ：</td>
            <td class="sub_r_table">500</td>
            <td class="sub_l_table">GCD：</td>
            <td class="sub_r_table">500</td>
        </tr>
        <tr class="sps_table">
            <td class="sub_l_table"></td>
            <td class="sub_r_table"></td>
            <td class="sub_l_table">ｽﾍﾟｽﾋﾟ倍率：</td>
            <td class="sub_r_table">500</td>
        </tr>
        <tr class="ten_table">
            <td class="sub_l_table">不屈：</td>
            <td class="sub_r_table">500</td>
            <td class="sub_l_table">不屈倍率：</td>
            <td class="sub_r_table">500</td>
        </tr>
        <tr class="pie_table">
            <td class="sub_l_table">信仰：</td>
            <td class="sub_r_table">500</td>
            <td class="sub_l_table">MP回復量：</td>
            <td class="sub_r_table">500/3s</td>
        </tr>

    </table>
    
    <p>
        <div class="sample-box-13">3254</div>        
    </p>

</div>


</div>

<div id=rbox>
    <div class="status">
     <p>COMPARISON</p>
    </div>

    <div>
        <button>現在のスコアを保存する</button>
    </div>

    <table class="comparison_table">
        <tr>
            <th>SCORE</th>
            <th>現スコアとの差</th>
            <th></th>        
        </tr>
        
        <tr>
            <td>3254</td>
            <td>-355</td>
            <td><button class="reflect_button">反映</button><button class="delete_button">×</button></td>        
        </tr>

        <tr>
            <td>3254</td>
            <td>-355</td>
            <td><button class="reflect_button">反映</button><button class="delete_button">×</button></td>        
        </tr>

        <tr>
            <td>3254</td>
            <td>-355</td>
            <td><button class="reflect_button">反映</button><button class="delete_button">×</button></td>        
        </tr>



    </table>








</div>


<div class="clear">




</div>




</div>





@endsection


