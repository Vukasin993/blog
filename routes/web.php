<?php

use Illuminate\Support\Facades\Route;
use App\Post;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/posts', 'PostsController@index');

Route::get('/posts/create', 'PostsController@create')->name('createPostForm');

Route::post('/posts', 'PostsController@store');

Route::post('/posts/{id}/comments', 'CommentsController@store')->middleware('auth');

Route::get('/posts/{id}', 'PostsController@onePost')->name('singlePost');

Route::get('/logout', 'AuthController@logout')->middleware('auth');

Route::group(['middleware'=>['guest']], function() {
    Route::get('/register', 'AuthController@getRegisterForm');
    Route::post('/users', 'AuthController@register');
    Route::get('/login', 'AuthController@getLoginForm')->name('login');
    Route::post('/login', 'AuthController@login');
});










