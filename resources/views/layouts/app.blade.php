<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Blog</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,500,700' rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <!-- BUG: Bootstrap causing problem with normal style -->
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"> -->
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

      @if(Auth::guest())
        <p class="sign_in"><a href="{{ url('login') }}">Admin Login</a></p>
      @else
        <p class="sign_in">{{ Auth::user()->name }}</p>
      @endif
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

        @if(Auth::check())
          <div class="buttons">
            <a href="{{ url('post/create') }}" class="button">New Post</a>
            <a href="{{ url('logout') }}" class="button">Log Out</a>
          </div>
        @endif
      </div>

      <div class="alert"></div>

      @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ URL::asset('assets/js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/js/all.js') }}" type="text/javascript"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
  </body>
</html>
