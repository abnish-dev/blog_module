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

// Route::get('/home/blog','blogController@index')->name('blog');
// Route::get('/home/blog/add','blogController@createBlog')->name('blogsAdd');
// Route::post('/home/blog/add','blogController@storeBlog')->name('blogsSave');
// Route::get('/home/blog/show/{id}','blogController@showBlog')->name('blogsShow');
// Route::get('/home/blog/edit/{id}','blogController@editBlog')->name('blogsEdit');
// Route::post('/home/blog/edit/{id}','blogController@updateBlog')->name('blogsUpdate');
// Route::get('/home/blog/delete{id}','blogController@deleteBlog')->name('blogsDelete');

Route::resource('demo', 'DemoController');
//Route::resources(['demo' =>'DemoController','photo' => 'PhotoContoller']);
//Route::resource('photo','PhotoController');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
