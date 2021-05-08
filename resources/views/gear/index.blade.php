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

    <div class="select_sld_div">
        <p>盾　：
        <select name="sld" class="select_wep">
        <option value="non">---</option>
        <option value="01">エデンモーン・バスタードソード</option>
        <option value="02">クリプトラーカー・ソードRE</option>
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

    <div class="arm_bg_pro">
    <div class="select_arm_div">
        <p>頭　：
        <select name="hea" class="select_arm">
        <option value="non">---</option>
        <option value="01">エデンモーン・バスタードソード</option>
        <option value="02">クリプトラーカー・ソードRE</option>
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
        <select name="bod" class="select_arm">
        <option value="non">---</option>
        <option value="01">エデンモーン・バスタードソード</option>
        <option value="02">クリプトラーカー・ソードRE</option>
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
        <select name="han" class="select_arm">
        <option value="non">---</option>
        <option value="01">エデンモーン・バスタードソード</option>
        <option value="02">クリプトラーカー・ソードRE</option>
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
        <select name="wei" class="select_arm">
        <option value="non">---</option>
        <option value="01">エデンモーン・バスタードソード</option>
        <option value="02">クリプトラーカー・ソードRE</option>
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
        <select name="leg" class="select_arm">
        <option value="non">---</option>
        <option value="01">エデンモーン・バスタードソード</option>
        <option value="02">クリプトラーカー・ソードRE</option>
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
        <select name="fee" class="select_arm">
        <option value="non">---</option>
        <option value="01">エデンモーン・バスタードソード</option>
        <option value="02">クリプトラーカー・ソードRE</option>
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
        <select name="ear" class="select_acc">
        <option value="non">---</option>
        <option value="01">エデンモーン・バスタードソード</option>
        <option value="02">クリプトラーカー・ソードRE</option>
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
        <select name="nec" class="select_acc">
        <option value="non">---</option>
        <option value="01">エデンモーン・バスタードソード</option>
        <option value="02">クリプトラーカー・ソードRE</option>
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
        <select name="bra" class="select_acc">
        <option value="non">---</option>
        <option value="01">エデンモーン・バスタードソード</option>
        <option value="02">クリプトラーカー・ソードRE</option>
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
        <select name="rin1" class="select_acc">
        <option value="non">---</option>
        <option value="01">エデンモーン・バスタードソード</option>
        <option value="02">クリプトラーカー・ソードRE</option>
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
        <select name="rin2" class="select_acc">
        <option value="non">---</option>
        <option value="01">エデンモーン・バスタードソード</option>
        <option value="02">クリプトラーカー・ソードRE</option>
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
        <select name="foo" class="select_mea">
        <option value="non">---</option>
        <option value="01">エデンモーン・バスタードソード</option>
        <option value="02">クリプトラーカー・ソードRE</option>
        </select>    
        </p>
    </div>
    </div>

</div>

<div id=cbox>
    <table class="tbl_subst">
        <tr class="tbl_subst_th">
            <th>STR</th>
            <th>CRT</th>
            <th>DIR</th>
            <th>DET</th>
            <th>SKS</th>
            <th>VIT</th>
            <th>PHD</th>
            <th>AA</th>            
        </tr>
        <tr class="tbl_subst_wep">
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>100.05</td>            
        </tr>        
        <tr class="tbl_subst_sld">
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>100.05</td>            
        </tr>

        <tr class="tbl_subst_hea">
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>100.05</td>            
        </tr>
        <tr class="tbl_subst_bod">
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>100.05</td>            
        </tr>
        <tr class="tbl_subst_han">
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>100.05</td>            
        </tr>
        <tr class="tbl_subst_wei">
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>100.05</td>            
        </tr>
        <tr class="tbl_subst_leg">
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>100.05</td>            
        </tr>
        <tr class="tbl_subst_fee">
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>100.05</td>            
        </tr>

        <tr class="tbl_subst_ear">
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>100.05</td>            
        </tr>
        <tr class="tbl_subst_nec">
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>100.05</td>            
        </tr>
        <tr class="tbl_subst_bra">
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>100.05</td>            
        </tr>
        <tr class="tbl_subst_rin1">
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>100.05</td>            
        </tr>
        <tr class="tbl_subst_rin2">
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>100.05</td>            
        </tr>

        <tr class="tbl_subst_foo">
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>100.05</td>            
        </tr>

        <tr class="tbl_subst_total">
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>555</td>
            <td>100.05</td>            
        </tr>


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


