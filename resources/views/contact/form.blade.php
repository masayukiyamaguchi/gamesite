@extends("layouts.app")

@section("title","contact")

@include("layouts.header")

@section("menu")
<a href="{{route('about')}}"><li>ABOUT</li></a>
<a href="{{route('screenshot')}}"><li>SCREEN SHOT</li></a>
<a href="{{route('blog')}}"><li>BLOG</li></a>
<a href="{{route('contact')}}"><li><font color ="gray">CONTACT</font></li></a>
@endsection


@section("content")
<!-- コンテンツここから -->
<footer>
<div class="inside">

    <h2>フォーム送信完了しました！</h2>

    <div class="send_detail">
        <p>【名前】</p> 
        <?php echo $_POST["name"]; ?>
        <p>【E-mail】</p>
        <?php echo $_POST["email"]; ?>
        <p>【プレイサーバー】</p>
        <?php echo $_POST["server"]; ?>
        <p>【得意ジョブ】</p>
        <?php foreach($_POST["job"] as $job): ?>
            @switch($job)
                @case("job_paladin")
                    ナイト
                    @break

                @case("job_darkknight")
                    暗黒騎士
                    @break
           
                @case("job_gunbreaker")
                    ガンブレイカー
                    @break

                @case("job_dragoon")
                    竜騎士
                    @break
                    
                @case("job_monk")
                    モンク
                    @break

                @case("job_blackmage")
                    黒魔道士
                    @break
           
                @case("job_whitemage")
                    白魔道士
                    @break

                @case("job_astrologian")
                    占星術士
                    @break                    
            @endswitch

            <br>
        <?php endforeach?>            

        <p>【ログイン時間帯】</p>
        <?php echo $_POST["playtime"]; ?>
        <p>一言！</p>
        <?php echo $_POST["content"]; ?>
    </div>

</div>   
@endsection

