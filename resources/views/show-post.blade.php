@extends('layout.app')

@section('content')
  <div id="post_content">
    <h1 class="title">{{ $post->title }}</h1>

    <p class="date">
      <!-- TODO: Use Carbon to get ago_time url:https://github.com/briannesbitt/Carbon -->
      Submitted {{ date('F d, Y', strtotime($post->created_at)) }}
      | <a href="{{ url('edit-post/' . $post->id) }}">Edit</a>
      <!-- TODO: Add a confirmation using form url:http://laravel-tricks.com/tricks/confirmation-before-deleting-an-item -->
      | <a href="{{ url('delete-post/' . $post->id) }}">Delete</a>
    </p>

    <p class="body">
      {{ $post->body }}
    </p>

    <div id="comments">
      <h2>{{ count($post->comments) }} Comments</h2>
      @foreach($post->comments as $comment)
        @include('partial.comment')
      @endforeach

      <h3>Add a comment</h3>
      @include('partial.comment-form')
    </div>
  </div>
@endsection
