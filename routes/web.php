<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//トップ
Route::get('/', "IndexController@index")->name("/");

//アバウト
Route::get('/about/', function () {
    return view('about.index');
})->name("about");

//スクリーンショット
Route::get('/screenshot/',"ScreenshotController@index")->name("screenshot");
Route::get('/screenshot/detail/{name}/',"SSDetailController@index")->name("screenshot.detail");

//ブログ
Route::get('/blog/',"BlogController@index")->name("blog");
Route::get('/blog/detail/{name}',"BlogDetailController@index")->name("blog.detail");
Route::get('/blog/blogpost/',"BlogPostController@index")->name("blog.post");
Route::post('/blog/postdone/',"PostDoneController@index")->name("blog.done");
Route::get('/blog/edit/{name}',"BlogEditController@index")->name("blog.edit");
Route::post('/blog/posteditdone/{name}',"PostDoneController@edit")->name("blog.editdone");
Route::get('/blog/delete/{name}',"BlogDeleteController@index")->name("blog.delete");

//コンタクト
Route::get('/contact/', function () {
    return view('contact.index');
})->name("contact");
Route::post('/contact/form/',"FormColntroller@index")->name("contact.form");
Route::get('/contact/lists/',"ContactLists@index")->name("contactlists");

//装備シミュレーター
Route::get('/gear/',"GearController@index")->name("gear");
Route::get('/gear/selectjob/',"GearController@selectjob")->name("gearselectjob");


//テスト用
Route::get('/test/',"TestController@test");
Route::get('/jquerytest/',"TestController@jquery");

Route::get('dump', function () {
    
    dump('Show welcome page');

    return view('welcome');
});


// メモ
//Route::get("/archives/",function(){
//    return view("archives.index");
//});

//Route::get("/archives/{category}",function($category){
//    return view("category",["category"=>$category]);
//});

//Route::get("/sum/{x}/{y}/","MathController@sum");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

