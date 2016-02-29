@extends('layout.app')

@section('content')
  @foreach ($posts as $post)
    <div class="post_wrapper">
      <h2 class="title">
        <a href="{{ url('post/'.$post->id) }}">{{ $post->title }}</a>
      </h2>
      <p class="date">{{ date('F d, Y', strtotime($post->created_at)) }}</p>
    </div>
  @endforeach
@endsection
