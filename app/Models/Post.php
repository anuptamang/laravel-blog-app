<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Route;

class Post extends Model
{
    use HasFactory;

    // define the necessary fields for the Post (e.g., title, content, user_id).
    protected $fillable = [
        'title',
        'content',
        'user_id'
    ];

  public static function routes()
  {
    Route::get('/posts', [self::class, 'index'])->name('posts.index');
    Route::get('/posts/create', [self::class, 'create'])->name('posts.create');
    Route::post('/posts', [self::class, 'store'])->name('posts.store');
    Route::get('/posts/{post}', [self::class, 'show'])->name('posts.show');
    Route::get('/posts/{post}/edit', [self::class, 'edit'])->name('posts.edit');
    Route::put('/posts/{post}', [self::class, 'update'])->name('posts.update');
    Route::delete('/posts/{post}', [self::class, 'destroy'])->name('posts.destroy');
  }
}
