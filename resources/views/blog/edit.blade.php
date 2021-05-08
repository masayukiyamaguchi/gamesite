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

<h2>BLOG編集画面</h2>


<!-- 記事内容掲載ループ -->
{{ csrf_field() }}

<!-- 記事を表示 -->

<div class="blogedit">
<form action="/blog/posteditdone/{{$editblog['name']}}" method="post" enctype="multipart/form-data">
        @csrf
    <p>【ブログURL】{{route("blog")}}/detail/<input type="text" name="name" value="{{$editblog['name']}}" ></p>

    <h3><input class="h3input" type="text" name="title" value="{{$editblog['title']}}"></h3>
    <p class=time>投稿日：{{$editblog["created_at"]}}</p>
    <div>

        <!-- メインビジュアルのエディット部分 -->
       <img id="preview" src="/storage/images/{{$editblog['samneil']}}">
        <p>
            <input class="edit_edit_button" type="file" name="samneil" accept='image/*' onchange="previewImage(this);">            
        </p>

       <h2>ワンポイント攻略解説！</h2>
    
       <table class="blogedittable">
           <tr>
                <td><img src="/storage/images/{{$editblog['image01']}}">
                     <p>
                       <input class="edit_edit_button" type="file" name="image01">            
                     </p>                    
                </td>

                <td><img src="/storage/images/{{$editblog['image02']}}">
                    <p>
                       <input class="edit_edit_button" type="file" name="image02">            
                    </p>  
                </td>

            </tr>
            <tr>
                <td><p><textarea class="edittextarea" name="comment01" >{{$editblog['comment01']}}</textarea></p></td>
                <td><p><textarea class="edittextarea" name="comment02" >{{$editblog['comment02']}}</textarea></p></td>
            </tr>

            <tr>
                <td><img src="/storage/images/{{$editblog['image03']}}">
                    <p>
                       <input class="edit_edit_button" type="file" name="image03">            
                    </p>  
                </td>

                <td><img src="/storage/images/{{$editblog['image04']}}">
                    <p>
                       <input class="edit_edit_button" type="file" name="image04">            
                    </p>  
                </td>
            </tr>
            <tr>
                <td><p><textarea class="edittextarea" name="comment03" >{{$editblog['comment03']}}</textarea></p></td>
                <td><p><textarea class="edittextarea" name="comment04" >{{$editblog['comment04']}}</textarea></p></td>
            </tr>
        </table>

            <input class="submit_blogedit" type="submit" value="編集内容を保存">


    </div>
</form>
</div>


</div>   


@endsection



