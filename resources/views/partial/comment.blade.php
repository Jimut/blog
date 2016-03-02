<div class="comment clearfix">
  <div class="comment_content">
    <p class="comment_name"><strong>{{ $comment->name }}</strong></p>
    <p class="comment_body">{{ $comment->body }}</p>
    <p class="comment_time">Submitted {{ date('F d, Y', strtotime($comment->created_at)) }}</p>
  </div>

  <p>
    <form action="{{ url('post/' . $post->id . '/comment/' . $comment->id) }}" method="POST" class="delete">
      {{ csrf_field() }}
      {{ method_field('DELETE') }}
      <input type="submit" class="button" value="Delete">
    </form>
  </p>
</div>
