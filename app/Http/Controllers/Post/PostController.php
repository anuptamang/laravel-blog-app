<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
  public function index()
  {
    $posts = Post::all();

    return view('posts.index', compact('posts'));
  }

  public function create()
  {
    return view('posts.create');
  }

  public function store(Request $request)
  {
    // Validate the request data
    $validatedData = $request->validate([
      'title' => 'required|max:255',
      'content' => 'required',
    ]);

    // Create a new post using the validated data
    $post = Post::create($validatedData);

    // Redirect to the post show page
    return redirect()->route('posts.show', $post->id);
  }

  public function show(Post $post)
  {
    return view('posts.show', compact('post'));
  }

  public function edit(Post $post)
  {
    return view('posts.edit', compact('post'));
  }

  public function update(Request $request, Post $post)
  {
    // Validate the request data
    $validatedData = $request->validate([
      'title' => 'required|max:255',
      'content' => 'required',
    ]);

    // Update the post using the validated data
    $post->update($validatedData);

    // Redirect to the post show page
    return redirect()->route('posts.show', $post->id);
  }

  public function destroy(Post $post)
  {
    // Delete the post
    $post->delete();

    // Redirect to the post index page
    return redirect()->route('posts.index');
  }
}
