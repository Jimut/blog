@extends('layouts.app')

@section('content')
  <div id="post_content">
    <h1 class="title">{{ $post->title }}</h1>

    <div class="date">
      <!-- TODO: Use Carbon to get ago_time url:https://github.com/briannesbitt/Carbon -->
      Submitted {{ date('F d, Y', strtotime($post->created_at)) }}
      @if(Auth::check())
        | <a href="{{ url('post/' . $post->id . '/edit') }}">Edit</a>
        <!-- Add a confirmation using form url:http://laravel-tricks.com/tricks/confirmation-before-deleting-an-item -->
        |
        <form action="{{ url('post/' . $post->id) }}" method="POST" class="form-inline delete">
          {{ csrf_field() }}
          {{ method_field('DELETE') }}
          <input type="submit" class="link" value="Delete">
        </form>
      @endif
    </div>

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
