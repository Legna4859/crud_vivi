<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\LookupController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckUser;
use App\Http\Controllers\UserController;
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

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware([CheckUser::class])->group(function(){
    Route::resource('posts', PostController::class, ['names' => [
        //'index' => 'posts.index',
        'store' => 'posts.new',]
        ]) ->except(["index"]);
});

Route::get("posts",[PostController::class,"index"])->name("posts.index");
Route::get("posts/create",[PostController::class,"create"])->name("posts.create");
Route::post("posts",[PostController::class,"store"])->name("posts.new");

Route::resource('tags', TagController::class);
Route::resource('lookups', LookupController::class);
Route::resource('comments', CommentController::class);
Route::resource("users",UserController::class);
