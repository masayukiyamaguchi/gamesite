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

<h2>CONTACT</h2>

<div>
<p>
フレンド募集のフォームです！。<br>
「一緒に遊びたい！」などのお誘いも大歓迎です(*´ω｀*)<br>
</p>

<p><a href="/contact/lists/">一覧を見る</a></p>

</div>

<!-- お問い合わせフォーム -->
<!-- 送信内容はform.phpへ送られる -->

@if($errors->any())
    @foreach($errors->all() as $error)
        {{$error}}<br>
    @endforeach
@endif


<div class="form">
    <form action="/contact/form/" method="post">
        @csrf
        <p>【名前】</p>
        <input type="text" name="name">

        <p>【E-mail】</p>
        <input type="text" name="email">

        <p>【プレイサーバー】</p>
        <select name="server">
            <option value="chocobo">chocobo</potion>
            <option value="mandoragora">mandoragora</potion>
            <option value="titan">titan</potion>
            <option value="bahamut">bahamut</potion>
            <option value="pandaemonium">pandaemoniumu</potion>
        </select>

        <p>【得意ジョブ】</p>
            <input type="checkbox" name="job[]" value="job_paladin">ナイト　
            <input type="checkbox" name="job[]" value="job_darkknight">暗黒騎士　
            <input type="checkbox" name="job[]" value="job_gunbreaker">ガンブレイカー　
            <input type="checkbox" name="job[]" value="job_dragoon">竜騎士　
            <br>
            <input type="checkbox" name="job[]" value="job_monk">モンク　
            <input type="checkbox" name="job[]" value="job_blackmage">黒魔道士　
            <input type="checkbox" name="job[]" value="job_whitemage">白魔道士　
            <input type="checkbox" name="job[]" value="job_astrologian">占星術士　
            

        <p>【ログイン時間帯】</p>
            <input type="radio" name="playtime" value="午前中">午前中　
            <input type="radio" name="playtime" value="18:00～20:00">18:00～20:00　
            <input type="radio" name="playtime" value="20:00～22:00">20:00～22:00　
            <input type="radio" name="playtime" value="22:00以降">22:00以降　
            <input type="radio" name="playtime" value="24時間">24時間　


        <p>【一言！】</p>
        <textarea name="content"></textarea>

        <br>

        <input class="submit" type="submit" value="送信">



    </form>

</div>

@endsection

