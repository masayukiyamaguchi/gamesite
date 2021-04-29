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


<!-- 記事内容掲載ループ -->
{{ csrf_field() }}

<!-- 記事を表示 -->
<!-- どうしても配列の[0]番目に配列として入ってしまう。単体の配列として受け取れないの？？ -->
<div class="blogdetail">
    <h3>{{$blogs["title"]}}</h3>
    <p class=time>投稿日：{{$blogs["created_at"]}}</p>
    <div>
       <img src="/storage/images/{{$blogs['samneil']}}">

       <h2>ワンポイント攻略解説！</h2>
    
       <table class="blogtable">
           <tr>
                <td><img src="/storage/images/{{$blogs['image01']}}"></td>
                <td><img src="/storage/images/{{$blogs['image02']}}"></td>
            </tr>
            <tr>
                <td><p>{{$blogs['comment01']}}</p></td>
                <td><p>{{$blogs['comment02']}}</p></td>
            </tr>

            <tr>
                <td><img src="/storage/images/{{$blogs['image03']}}"></td>
                <td><img src="/storage/images/{{$blogs['image04']}}"></td>
            </tr>
            <tr>
                <td><p>{{$blogs['comment03']}}</p></td>
                <td><p>{{$blogs['comment04']}}</p></td>
            </tr>
        </table>

            <a href="/blog/edit/{{$blogs['name']}}">
                <button class="edit_button" type="button">Edit</button>
            </a>

            <a href="/blog/delete/{{$blogs['name']}}" onclick="return confirm('記事を削除します。よろしいですか？');">
                <button class="delete_button" type="button">Delete</button>
            </a>

    </div>
</div>


</div>   

@endsection



