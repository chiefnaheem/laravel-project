<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// group routes

Route::group([
    'namespace' => 'App\Http\Controllers',
], function () {
    Route::post('/register', 'AuthController@register');
    Route::post('/login', 'AuthController@login');
});


Route::group(  [
    'namespace' => 'App\Http\Controllers'],

function () {
    Route::post('post', 'PostsController@create');
    Route::get('posts', 'PostsController@index');
    Route::get('post/{id}', 'PostsController@show');
    Route::put('edit/{id}', 'PostsController@edit');
}); 



Route::group(  [
    'namespace' => 'App\Http\Controllers'],

    function () {
        Route::post('post_comment/{id}', 'CommentsController@post_comment');
        Route::get('comments', 'CommentsController@fetchComments');
        Route::get('comment/{id}', 'CommentsController@fetchComment');
        
        Route::post('post_image', 'ImageUploadController@storeUploads');
        Route::post('post_image', 'ImageUploadController@storeUploads');
        
        Route::post('post_vid', 'ImageUploadController@UploadVideos');
}); 







// Route::get('/', [CommentsController::class, 'index']);
// Route::get('/comments', [CommentsController::class, 'fetchComments']);
// Route::post('/comment', [CommentsController::class, 'store']);