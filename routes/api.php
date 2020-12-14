<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Post;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// Route::get('/test', function(){
//     return ['message' => 'hello']; 
// });


// Posts 
Route::get('/posts', function(){
    $post = Post::create(['title'=> 'My First Post', 'slug' => 'my-first-post']);
    return $post;
});

// Multiples Route
// Route::get('/posts', 'PostsController@index');
// Route::post('/posts', 'PostsController@store');
// Route::put('/posts', 'PostsController@update');
// Route::delete('/posts', 'PostsController@destroy');

Route::apiResource('posts', 'PostsController');

// // Create Route
// Route::post('/posts');

// // Update
// Route::put('/posts');

// // Delete
// Route::delete('/post/{id}');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
