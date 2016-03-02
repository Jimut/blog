<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Blog</title>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,500,700' rel='stylesheet' type='text/css'>
    <link href="{{ URL::asset('assets/css/main.css') }}" rel="stylesheet" type="text/css">
  </head>
  <body>

    <div id="sidebar">
      <div id="logo">
        <a href="{{ url('/') }}">
          <img src="{{ URL::asset('assets/img/logo.png') }}">
        </a>
      </div>

      <ul>
        <li class="category">Website</li>
        <li><a href="{{ url('/') }}">Blog</a></li>
        <li><a href="{{ url('about') }}">About</a></li>
      </ul>

      <ul>
        <li class="category">Social</li>
        <li><a href="https://twitter.com/JemDhali" target="_blank">Twitter</a></li>
        <li><a href="https://www.facebook.com/jem.dhali" target="_blank">Facebook</a></li>
        <li><a href="https://github.com/Jimut" target="_blank">Github</a></li>
        <li><a href="mailto:jemdhali67@gmail.com">Email</a></li>
      </ul>

      <p class="sign_in">Admin Login</p>
    </div>

    <div id="main_content">
      <div id="header">
        @if(Request::is('') || Request::is('post'))
          <p>All Posts</p>
        @elseif(Request::is('about'))
          <p>About</p>
        @else
          <a href="{{ url('post') }}">Back to all Posts</a>
        @endif

        <div class="buttons">
          <button class="button">
            <a href="{{ url('post/create') }}">New Post</a>
          </button>
          <button class="button">Log Out</button>
        </div>
      </div>

      <div class="alert"></div>

      @yield('content')
    </div>

    <script src="{{ URL::asset('assets/js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/js/all.js') }}" type="text/javascript"></script>
  </body>
</html>
