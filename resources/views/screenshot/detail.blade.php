@extends("layouts.app")

@section("title","screenshot_detail")


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

<?php

// クリックされた画像に付いてきたキーと値から記事を特定(Contrllerへ移行)
$item = $pick_data;

?>

<!-- 記事を表示 -->
<div class="screenshot">
<img src="<?php echo "../../".$item["url"]; ?>">
</div>

<div class="coment">
    <h3><?php echo $item["title"]; ?></h3>
    <p><?php echo $item["comment01"]; ?></p>
    <p><?php echo $item["comment02"]; ?></p>
</div>


</div>   

@endsection
