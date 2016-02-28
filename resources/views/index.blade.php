@foreach ($posts as $post)
  <div class="post_wrapper">
    <a href="{{ url('post/'.$post->id) }}">
      <h2 class="title">{{ $post->title }}</h2>
    </a>
    <p>{{ date('F d, Y', strtotime($post->created_at)) }}</p>
  </div>
@endforeach
