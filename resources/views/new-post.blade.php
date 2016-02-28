<h1>New Post</h1>

@if (count($errors) > 0)
  @foreach ($errors->all() as $error)
    {{ $error }}
  @endforeach
@endif

<form method="POST" action="{{ url('new-post') }}">

  {{ csrf_field() }}

  <label for="title">Title</label>
  <input type="text" id="title" name="title">

  <br><br>

  <label for="body">Body</label>
  <input type="text_area" id="body" name="body">

  <br><br>

  <input type="submit">
  
</form>
