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
        <li>About</li>
      </ul>

      <ul>
        <li class="category">Social</li>
        <li><a href="#">Twitter</a></li>
        <li><a href="#">Facebook</a></li>
        <li><a href="#">Github</a></li>
        <li><a href="mailto:jemdhali67@gmail.com">Email</a></li>
      </ul>

      <p class="sign_in">Admin Login</p>
    </div>

    <div id="main_content">
      <div id="header">
        <p>All Posts</p>

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
