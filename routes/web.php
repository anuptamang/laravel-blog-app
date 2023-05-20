<?php

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
  return view('home');
});

// Authentication Routes
Route::namespace('App\Http\Controllers')->group(function () {
  Auth::routes();
  Post::routes();
});



// Post Routes
// Route::namespace('App\Http\Controllers\Post')->group(function () {
//   Route::get('/posts', 'PostController@index')->name('posts.index');
//   Route::get('/posts/create', 'PostController@create')->name('posts.create');
//   Route::post('/posts', 'PostController@store')->name('posts.store');
//   Route::get('/posts/{post}', 'PostController@show')->name('posts.show');
//   Route::get('/posts/{post}/edit', 'PostController@edit')->name('posts.edit');
//   Route::put('/posts/{post}', 'PostController@update')->name('posts.update');
//   Route::delete('/posts/{post}', 'PostController@destroy')->name('posts.destroy');
// });
// Route::namespace('App\Http\Controllers\Post')->group(function () {
//   Auth::routes();
// });

// Route::get('/posts', [self::class, 'index'])->name('posts.index');
// Route::get('/posts/create', [self::class, 'create'])->name('posts.create');
// Route::post('/posts', [self::class, 'store'])->name('posts.store');
// Route::get('/posts/{post}', [self::class, 'show'])->name('posts.show');
// Route::get('/posts/{post}/edit', [self::class, 'edit'])->name('posts.edit');
// Route::put('/posts/{post}', [self::class, 'update'])->name('posts.update');
// Route::delete('/posts/{post}', [self::class, 'destroy'])->name('posts.destroy');