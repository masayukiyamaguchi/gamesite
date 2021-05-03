@extends("layouts.app")

<script src="{{asset('/js/change_img.js') }}"></script>

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

<h2>ブログの投稿画面です</h2>
<!-- エラーで戻ってきた場合に警告文 -->
@if($errors->any())
    @foreach($errors->all() as $error)
        {{$error}}<br>
    @endforeach
@endif

<div class="form">
    <form action="/blog/postdone/" method="post" enctype="multipart/form-data">
        @csrf
        <p>【ブログURL】</p>
        {{route("blog")}}/detail/<input type="text" name="name" >

        <p>【ブログタイトル】</p>
        <input type="text" name="title">

        <p>【サムネイル】</p>
        <input type="file" name="samneil" accept='image/*'onchange=" previewImage(this);">
        <img id="preview" src="/images/1px.png" style="max-width:200px;">

        <p>【画像1】</p>
        <input type="file" name="image01">

        <p class="blogcomment">【画像1解説】</p>
        <textarea name="comment01"></textarea>


        <p>【画像2】</p>
        <input type="file" name="image02">

        <p class="blogcomment">【画像2解説】</p>
        <textarea name="comment02"></textarea>



        <p>【画像3】</p>
        <input type="file" name="image03">

        <p class="blogcomment">【画像3解説】</p>
        <textarea name="comment03"></textarea>



        <p>【画像4】</p>
        <input type="file" name="image04">

        <p class="blogcomment">【画像4解説】</p>
        <textarea name="comment04"></textarea>

        <br>
        <input class="submit" type="submit" value="投稿！">



    </form>

</div>






@endsection



