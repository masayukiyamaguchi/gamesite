@extends("layouts.app")

@section("title","blog")

@include("layouts.header")

<!-- ヘッダー部分 -->

@section("menu")
<a href="{{route('about')}}"><li>ABOUT</li></a>
<a href="{{route('screenshot')}}"><li>SCREEN SHOT</li></a>
<a href="{{route('blog')}}"><li><font color ="gray">BLOG</font></li></a>
<a href="{{route('contact')}}"><li>CONTACT</li></a>
@endsection


@section("content")
<!-- コンテンツここから -->
<footer>
<div class="inside">

<h2>登録結果</h2>

<h3>登録が完了しました！</h3>

<br>
<p><a href="{{route('blog')}}/detail/{{$_POST['name']}}">投稿内容を見る</a></p>
<p><a href="{{route('blog.post')}}">もう一度投稿する</a></p>


@endsection



