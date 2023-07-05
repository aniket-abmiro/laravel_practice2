<?php

use App\Models\Category;
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
    // \Illuminate\Support\Facades\DB::listen(function ($query){
    //     logger($query->sql);
    // });
    return view('posts',['posts'=>Post::with('category')->get()]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
   //find the post by its slug and pass it to a view called "post"
    return view('post',['post'=>$post]);
});

Route::get('/categories/{category:slug}',function (Category $category){
    //dd($category->posts);
    return view('posts',['posts'=>$category->posts]);
});
