@extends('layouts.app')

@section('content')
  <div id="page_wrapper">
    <div id="profile_image">
      <img src="{{ URL::asset('assets/img/profile.jpg') }}">
    </div>

    <div id="content">
      <h1>Hey, I am Jimut Dhali</h1>
      <p>Welcome to my blog. This is the first app that I created with Laravel and gonna do more.</p>
      <p>If you'd like to follow along as I learn more Laravel. Find me on Twitter <a href="https://twitter.com/JemDhali" target="_blank">@JemDhali</a> or Facebook <a href="https://www.facebook.com/jem.dhali" target="_blank">Jimut Dhali</a>.</p>
      <p>This is actually inspired by Mackenzie Child.
      You can find his tutorial <a href="https://www.youtube.com/watch?v=BI_VnnOLSKY" target="_blank">here</a>, where he did this blog in Rails 4. He's awesome!</p>
    </div>
  </div>
@endsection
