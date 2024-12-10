<?php

use Illuminate\Support\Facades\Route;

use App\Models\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//用 new 的方式新增資料
$post=new Post();
$post->title='testtitle';
$post->content='testcontent';
$post->save();

//使用 find 方法
$post = Post::find(1);
echo '標題:'.$post->title.'<br>';
echo '內容:'.$post->content.'<br>';
dd($post);