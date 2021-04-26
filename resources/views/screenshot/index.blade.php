@extends("layouts.app")

@section("title","screenshot")

@include("layouts.header")

@section("menu")
<a href="{{route('about')}}"><li>ABOUT</li></a>
<a href="{{route('screenshot')}}"><li><font color ="gray">SCREEN SHOT</font></li></a>
<a href="{{route('blog')}}"><li>BLOG</li></a>
<a href="{{route('contact')}}"><li>CONTACT</li></a>
@endsection


@section("content")

<!-- コンテンツここから -->
<footer>
<div class="inside">

<h2>SCREEN SHOT</h2>


<!-- 記事内容掲載ループ -->

<?php foreach($scss as $item): ?>
<div class="screenshot">
<img src="<?php echo $item["url"]; ?>">
</div>

<div class="coment">
    <h3><?php echo $item["title"]; ?></h3>
    <p><?php echo $item["comment01"]; ?></p>
    <p><?php echo $item["comment02"]; ?></p>
</div>
<?php endforeach ?>

@endsection

