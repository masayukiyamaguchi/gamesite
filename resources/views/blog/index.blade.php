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

<h2>BLOG</h2>


<!-- 記事内容掲載ループ 後で編集 -->

@foreach($blogs as $blog)
<div class="blog">
<h3>{{$blog["title"]}}</h3>
<p class=time>投稿日：{{$blog["created_at"]}}</p>

<a href="{{route('blog')}}/detail/{{$blog['name']}}"><img src="/storage/images/{{$blog['samneil']}}"></a>

</div>
@endforeach


@endsection



