<?php

use App\Http\Controllers\PostController;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

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

/*
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

$allPosts  =  Post::all(); 
dd($allPosts);

$featuredPosts  =  Post::where('is_feature',  1)->get(); 
dd($featuredPosts);

$fourthPost  =  Post::find(4); 
dd($fourthPost);

$lastPost  =  Post::orderBy('id',  'DESC')->first(); 
dd($lastPost);
*/

$post = Post::find(6);
    echo '標題: '.$post->title.'<br>';
    echo '內容: '.$post->content.'<br>';
    echo '--------------------------'.'<br>';
    $comments = $post->comments;
    foreach ($comments as $comment){
        echo '留言: '.$comment->content."<br>";
        echo '--------------------------'.'<br>';
    }

});

Route::get('posts',[PostController::class, 'index'])->name('posts.index');
Route::get('post',[PostController::class, 'show'])->name('posts.show');
Route::get('contact',[PostController::class, 'contact'])->name('posts.contact');
Route::get('about',[PostController::class, 'about'])->name('posts.about');