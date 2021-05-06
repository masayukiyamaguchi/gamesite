@extends("layouts.app")
@include("layouts.header")

<!-- この部分が、レイアウトに入れられなかった。なぜ？？ -->
@section("title","gamesite-home")

@section("menu")
<a href="{{route('about')}}"><li>ABOUT</li></a>
<a href="{{route('screenshot')}}"><li>SCREEN SHOT</li></a>
<a href="{{route('blog')}}"><li>BLOG</li></a>
<a href="{{route('contact')}}"><li>CONTACT</li></a>
@endsection


@section("content")
<!-- メインビジュアル -->
<div class="main">
<img src="{{route('/')}}/images/top_main.jpg">
</div>



<!-- メインビジュアルここまで -->

<!-- コンテンツここから -->
<footer>
<div class="inside">

<div>
<h1>装備シミュレータ</h1>
</div>
<div class="container">
<a href="{{route('gear')}}" class="btn-denim">ここから！</a>
</div>



<div>
<h1>PLAY JOB</h1>
</div>

<div class="contents">

    <div class="contents-item">
        <h2>ナイト</h2>
        <p>Paladin</p>
        <img class="jobicon" src="{{route('/')}}/images/PLD.png">
        <p>ウルダハの近衛兵団「銀冑団」の騎士たちは、忠誠を誓う王家を守るため、長い歴史の中で技を磨き上げてきた。白銀の甲冑で身を固め、大盾と騎士剣を手に戦いに身を投じる彼らは、剣術だけではなく護衛術にも長け、主君の命を断固として守り抜く。</p>
    </div>

    <div class="contents-item">
        <h2>竜騎士</h2>
        <p>Dragoon</p>
        <img class="jobicon" src="{{route('/')}}/images/DRG.png">
        <p>竜を屠る者……「竜騎士」。建国以来、ドラゴン族との果て無き戦いを続ける宗教都市「イシュガルド」において、その言葉が持つ意味は限りなく重い。ドラゴン族を倒す。その目的のためだけに発展した槍術は、硬き鱗に隠されたドラゴン族の急所を狙うため、独特の跳躍攻撃を生み出した。</p>
    </div>

    <div class="contents-item">
        <h2>白魔道士</h2>
        <p>White Mage</p>
        <img class="jobicon" src="{{route('/')}}/images/WHM.png">
        <p>癒やしと浄化の力として編み出されながらも、人々の尽きぬ欲望のために乱用され、大災厄を引き起こした歴史を持つ「白魔法」。一度は、禁忌として封じられたが、後世、「グリダニア」の「角尊」たちの手で復元され、密かに継承されてきた。</p>
    </div>

</div>

<p></p>

<div>
<h1>SCREEN SHOT</h1>
</div>

<!-- ループ記事を表示 -->
<div class="contents_blog">
    
    <?php foreach($scss as $item): ?>
    <div class="contents_blog_item">        
        <a href="{{route('screenshot.detail',['name'=>$item['name']])}}">　<!-- リンクにクエリ情報を付与 -->
        <img class="blog" src="<?php echo $item["url"]; ?>"></a>    

    </div>
    <?php endforeach ?>    

</div>   


<div>
<h1>BLOG</h1>
</div>

<div class="contents_strategy">
    @foreach($blogs as $blog)        
    <div class="contents_strategy_item"> 
        <a href="{{route('blog.detail',['name'=>$blog['name']])}}">  
             <img class="strategy" src="/storage/images/{{$blog['samneil']}}">
        </a> 
    </div>

    @endforeach

    

    <p>【管理者用】<a href="{{route('blog.post')}}">投稿画面へ</a></p>



</div>   




@endsection

<!-- @section("menu")
<a href="http://localhost:8000/about/"><li>ABOUT</li></a>
<a href="http://localhost:8000/screenshot/"><li>SCREEN SHOT</a>
<a href="http://localhost:8000/blog/"><li>BLOG</li></a>
<a href="http://localhost:8000/contact/"><li>CONTACT</li></a>
@endsection -->


