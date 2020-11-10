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

Route::get('/', 'PageController@homepage')->name('homepage');
Route::get('/contact-us', 'ContactController@form')->name('inquiry.form');
Route::post('/contact-us', 'ContactController@send')
    ->middleware('throttle:5')
    ->name('inquiry.send');

Route::get('/blog', 'PageController@blog')->name('blog.index');
Route::get('/blog/{post}', 'PageController@post')->name('blog.post');
Route::get('{page}', 'PageController@single')->name('single');

Route::prefix(config('admin.url'))->group(function () {
    Auth::routes();
    Route::middleware('auth')->group(function () {
        Route::get('/home', 'Admin\HomeController@index')->name('home');
        Route::resource('/posts', 'Admin\PostController');
        Route::resource('/pages', 'Admin\PageController');
        Route::resource('/menus', 'Admin\MenuController');
    });
});
