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

$posts= Post::all();

foreach($posts as $post){
    echo '編號:'.$post->id.'<br>';
    echo '標題:'.$post->title.'<br>';
    echo '內容:'.$post->content.'<br>';
    echo '張貼時間:'.$post->created_at.'<br>';
    echo '--------------------------'.'<br>';
}

$posts=Post::where('id','<',10)->orderBy('id','DESC')->get();
dd($posts);


$post=Post::find(1);
$post->update([
    'title'=>'updated title',
    'content'=>'updated content',
]);


$post=Post::find(1);
$post->title='savedtitle';
$post->content='savedcontent';
$post->save();

$post=Post::find(1); 
$post->delete();

$post=Post::find(2); 
$post->delete();

$post=Post::find(3,5,7); 
$post->delete();