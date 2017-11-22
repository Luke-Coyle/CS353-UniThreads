<?php

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

Route::get('/', 'PagesController@welcome');
Route::get('/login', 'PagesController@login');
Route::get('/register', 'PagesController@register');

Route::get('/subjects', 'PagesController@subjects');
Route::get('/profile', 'PagesController@profile');

Route::get('/english', 'PagesController@english');
Route::get('/maths', 'PagesController@maths');
Route::get('/computerscience', 'PagesController@computerscience');

Route::get('/cs210', 'PostsController@cs210');
Route::get('/cs320', 'PostsController@cs320');
Route::get('/cs357', 'PostsController@cs357');

Route::get('/en101', 'PostsController@en101');
Route::get('/en203', 'PostsController@en203');
Route::get('/en260', 'PostsController@en260');

Route::get('/mt103', 'PostsController@mt103');
Route::get('/mt201', 'PostsController@mt201');
Route::get('/mt212', 'PostsController@mt212');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('posts','PostsController');
Route::resource('comments', 'CommentsController');

Route::post('comments/{post_id}', ['uses' => 'CommentsController@store', 'as' => 'comments.store']);




