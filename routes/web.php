<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'IndexController@index')->name('index');

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Login Routes

Route::get('/login', 'LoginController@login')->name('login');

Route::get('/register', 'LoginController@register')->name('register');

Route::post('/register_account', 'LoginController@createAccount')->name('register_account');

Route::post('/login_account', 'LoginController@loginAccount')->name('login_account');

Route::get('/create_blog', 'BlogController@createBlog')->name('create_blog');
Route::post('/save_blog', 'BlogController@saveBlog')->name('save_blog');


Route::get('/blog/{id}/{slug}', 'BlogController@viewBlog')->name('viewBlog');

Route::post('/add_comment/{id}', 'BlogController@createComment')->name('create_comment');
