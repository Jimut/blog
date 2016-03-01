<form action="{{ url('post/' . $post->id . '/comment') }}" method="POST">
  {{ csrf_field() }}

  <p>
    <label for="name">Name</label><br>
    <input type="text" id="name" name="name" value="">
  </p>

  <p>
    <label for="body"></label><br>
    <textarea id="body" name="body"></textarea>
  </p>

  <br>

  <p>
    <input type="submit" value="Submit">
  </p>
</form>
