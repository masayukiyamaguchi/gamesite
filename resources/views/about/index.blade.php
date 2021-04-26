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
<footer>
<div class="inside">

<h2>ABOUT</h2>

<div class="profeel">
<p>
2011年からプレイ開始。<br>
総プレイ時間17000時間<br>
メインジョブ：竜騎士<br>
攻略記事を執筆中！
</p>
</div>

<p>以下略</p>

@endsection


