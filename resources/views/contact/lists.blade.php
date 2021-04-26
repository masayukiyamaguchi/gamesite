@extends("layouts.app")

@section("title","screenshot_detail")


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

<h2>フレンド一覧！</h2>
<table class=listtable>
    <tr>
        <th>名前</th>
        <th>メール</th>
        <th>サーバー</th>
        <th>得意ジョブ</th>
        <th>ログイン時間帯</th>
        <th>一言！</th>
    </tr>

 @foreach($data as $item)
    <tr>
        <td>{{$item["name"]}}</td>
        <td>{{$item["email"]}}</td>
        <td>{{$item["server"]}}</td>

        <!-- 予めjob部分のカラムを抽出して配列にしておけばこの上がりはforeachで実現できそう -->
        <td>
            @if($item["job_paladin"] !=NULL)
                <img src="/images/job_paladin.png" alt="">
            @endif

            @if($item["job_darkknight"] !=NULL)
                <img src="/images/job_darkknight.png" alt="">
            @endif

            @if($item["job_gunbreaker"] !=NULL)
                <img src="/images/job_gunbreaker.png" alt="">
            @endif

            @if($item["job_dragoon"] !=NULL)
                <img src="/images/job_dragoon.png" alt="">
            @endif

            @if($item["job_monk"] !=NULL)
                <img src="/images/job_monk.png" alt="">
            @endif

            @if($item["job_blackmage"] !=NULL)
                <img src="/images/job_blackmage.png" alt="">
            @endif

            @if($item["job_whitemage"] !=NULL)
                <img src="/images/job_whitemage.png" alt="">
            @endif

            @if($item["job_astrologian"] !=NULL)
                <img src="/images/job_astrologian.png" alt="">
            @endif

        </td>
        
        <td>{{$item["playtime"]}}</td>
        <td>{{$item["content"]}}</td>
    </tr>
 @endforeach    

</table>


@endsection
