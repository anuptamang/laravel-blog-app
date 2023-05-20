@extends('layouts.app')

@section('content')
<h1>Create Post</h1>

<form action="{{ route('posts.store') }}" method="POST">
  @csrf

  <div>
    <label for="title">Title</label>
    <input type="text" name="title" id="title" value="{{ old('title') }}">
  </div>

  <div>
    <label for="content">Content</label>
    <textarea name="content" id="content">{{ old('content') }}</textarea>
  </div>

  <button type="submit">Submit</button>
</form>
@endsection