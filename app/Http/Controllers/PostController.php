<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;

use Validator;

class PostController extends Controller
{
  public function index () {
    $posts = Post::orderBy('created_at', 'desc')->get();
    return view('index', ['posts' => $posts]);
  }

  public function showPost ($id) {
    $post = Post::find($id);
    return view('show-post', ['post' => $post]);
  }



  public function editPost ($id) {
    $post = Post::find($id);
    return view('edit-post', ['post' => $post]);
  }

  public function updatePost (Request $request, $id) {
    $this->validate($request, [
      'title' => 'required|min:5',
      'body' => 'required'
    ]);

    $post = Post::find($id);
    $post->title = $request->title;
    $post->body = $request->body;
    $post->save();

    return redirect()->action('PostController@showPost', ['id' => $post->id]);
  }



  public function newPost () {
    return view('new-post');
  }

  public function createPost (Request $request) {
    $this->validate($request, [
      'title' => 'required|min:5',
      'body' => 'required'
    ]);

    $post = new Post;
    $post->title = $request->title;
    $post->body = $request->body;
    $post->save();

    return redirect()->action('PostController@showPost', ['id' => $post->id]);
  }



  public function destroy ($id) {
    $post = Post::find($id);

    $post->delete();

    return redirect('/');
  }
}
