@extends('layouts.app')

@section('content')
  <div id="page_wrapper">
    <h1>Edit Post</h1>

    @include('partial.error')

    <form action="{{ url('post/' . $post->id) }}" method="POST">

      {{ csrf_field() }}

      {{ method_field('PUT') }}

      <!-- TODO: Use old() for title and body when available -->
      <p>
        <label for="title">Title</label><br>
        <input type="text" id="title" name="title" value="{{ $post->title }}">
      </p>

      <p>
        <label for="body">Body</label><br>
        <textarea type="text" id="body" name="body">{{ $post->body }}</textarea>
      </p>

      <p>
        <input type="submit" value="Save Post">
      </p>

    </form>
  </div>
@endsection
