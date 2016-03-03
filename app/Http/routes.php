<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
  return redirect('post');
});

Route::get('about', 'PageController@about');


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
  Route::resource('post', 'PostController');

  Route::resource('post/{post_id}/comment', 'CommentController', ['only' => [
      'store', 'destroy'
    ]]);
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();
});
