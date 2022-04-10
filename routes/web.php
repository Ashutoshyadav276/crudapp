<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Postcontroller;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/add-post',[Postcontroller::class,'addPost'])->name('post.add');
Route::post('/add-post',[Postcontroller::class,'savePost'])->name('save.post');
Route::get('/post-list',[Postcontroller::class,'postList'])->name('post.list');
Route::get('/edit-post/{$id}',[Postcontroller::class,'editPost'])->name('post.edit');
Route::get('/delete-post/{$id}',[Postcontroller::class,'deletePost'])->name('post.delete');
