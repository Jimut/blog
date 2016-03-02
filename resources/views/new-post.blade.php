@extends('layout.app')

@section('content')
  <div id="page_wrapper">
    <h1>New Post</h1>

    @include('partial.error')

    <form action="{{ url('post') }}" method="POST">

      {{ csrf_field() }}

      <p>
        <label for="title">Title</label><br>
        <input type="text" id="title" name="title" value="{{ old('title') }}">
      </p>

      <p>
        <label for="body">Body</label><br>
        <textarea type="text" id="body" name="body">{{ old('body') }}</textarea>
      </p>

      <p>
        <input type="submit" value="Save Post">
      </p>

    </form>
  </div>
@endsection
