@extends("layouts.app")

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
        <select name="job" class="select_job">
        <option value="non">---</option>
        <option value="pld">ナイト</option>
        <option value="war">戦士</option>
        </select>
        　種族：
        <select name="job" class="select_race">
        <option value="non">---</option>
        <option value="ミッドランダー">ヒュラ：ミッドランダー</option>
        <option value="ハイランダー">ヒュラ：ハイランダー</option>
        <option value="サンシーカー">ミコ：サンシーカー</option>
        <option value="ムーンキーパー">ミコ：ムーンキーパー</option>
        <option value="プレーンフォーク">ララ：プレーンフォーク</option>
        <option value="デューンフォーク">ララ：デューンフォーク</option>
        <option value="フォレスター">エレ：フォレスター</option>
        <option value="シェーダー">エレ：シェーダー</option>
        <option value="アウラ・レン">アウラ；アウラ・レン</option>
        <option value="アウラ・ゼラ">アウラ；アウラ・ゼラ</option>
        <option value="ヴィナ・ヴィエラ">ヴィエラ：ヴィナ・ヴィエラ</option>
        <option value="ラヴァ・ヴィエラ">ヴィエラ：ラヴァ・ヴィエラ</option>
        <option value="ヘリオン">ロスガル：ヘリオン</option>
        <option value="ロスト">ロスガル：ロスト</option>
        </select>
        </p>
    </div>

    <div class="wep_bg_pro">
    <div  class="select_wep_div">
        <p>武器：
        <select name="wep" class="select_wep">
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


<div id=rbox>




</div>


<div class="clear">

</div>


</div>





@endsection


