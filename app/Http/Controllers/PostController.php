<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;

class PostController extends Controller
{
  public function index () {
    $posts = Post::orderBy('created_at', 'desc')->get();
    return view('index', ['posts' => $posts]);
  }

  public function showPost ($id) {
    $post = Post::find($id);
    return view('post', ['post' => $post]);
  }

  public function newPost () {
    return view('new-post');
  }

  public function createPost (Request $request) {
    $this->validate($request, [
      'title' => 'required',
      'body' => 'required'
    ]);

    $post = new Post;
    $post->title = $request->title;
    $post->body = $request->body;
    $post->save();

    return redirect()->action('PostController@showPost', ['id' => $post->id]);
  }
}
