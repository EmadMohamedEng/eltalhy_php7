<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::auth();
// Route::get('auth/login', 'Auth\AuthController@getLogin');
// Route::post('auth/login', 'Auth\AuthController@postLogin');
// Route::get('auth/logout', 'Auth\AuthController@getLogout');

// // Registration routes...
// Route::get('auth/register', 'Auth\AuthController@getRegister');
// Route::post('auth/register', 'Auth\AuthController@postRegister');


Route::get('baher',function(){
  return view('book.test') ;
});

Route::group(['middleware'=> 'auth'], function() {
    Route::get('/dashboard', 'DashboardController@index');
});

Route::group(['middleware' => 'auth'], function() {
    Route::get('category', 'CategoryController@index');
    Route::get('category/new', 'CategoryController@create');
    Route::post('category','CategoryController@store');
    Route::get('category/{id}/delete', 'CategoryController@destroy');
    Route::get('category/{id}/edit', 'CategoryController@edit');
    Route::post('category/{id}/update', 'CategoryController@update');
});

Route::group(['middleware' => 'auth'], function() {
    Route::get('photo/new', 'PhotoController@create');
    Route::get('photo/', 'PhotoController@index');
    Route::get('photo/{category}', 'PhotoController@index');
    Route::post('photo','PhotoController@store');
    Route::get('photo/{id}/delete', 'PhotoController@destroy');
});

Route::group(['middleware' => 'auth'], function() {
    Route::get('video/', 'VideoController@index');
    Route::get('video/new', 'VideoController@create');
    Route::post('video','VideoController@store');
    Route::get('video/{id}/show', 'VideoController@show');
    Route::get('video/{id}/delete', 'VideoController@destroy');
    Route::get('video/{id}/edit', 'VideoController@edit');
    Route::post('video/{id}/update', 'VideoController@update');
});

Route::group(['middleware' => 'auth'], function() {
    Route::get('audio/', 'AudioController@index');
    Route::get('audio/new', 'AudioController@create');
    Route::post('audio','AudioController@store');
    Route::get('audio/{id}/show', 'AudioController@show');
    Route::get('audio/{id}/delete', 'AudioController@destroy');
    Route::get('audio/{id}/edit', 'AudioController@edit');
    Route::post('audio/{id}/update', 'AudioController@update');
});
Route::get('/all_sounds', function () {
    return view('all_sounds');
});


Route::get('/sound_single', function () {
    return view('sound_single');
});

Route::group(['middleware'=> 'auth'], function() {
    Route::get('setting', 'SettingController@index');
    Route::get('setting/new', 'SettingController@create');
    Route::get('setting/{id}/delete', 'SettingController@destroy');
    Route::get('setting/{id}/edit', 'SettingController@edit');
    Route::post('setting/{id}/update', 'SettingController@update');
    Route::post('setting', 'SettingController@store');
});

Route::group(['middleware'=> 'auth'], function() {
    Route::get('newsletter', 'NewsletterController@index');
    Route::get('newsletter/{id}/delete', 'NewsletterController@destroy');
});

Route::group(['middleware'=> 'auth'], function() {
    Route::get('contact', 'ContactController@index');
    Route::get('contact/{id}/delete', 'ContactController@destroy');
});

Route::group(['middleware'=> 'auth'], function() {
    Route::get('slider', 'SliderController@index');
    Route::get('slider/new', 'SliderController@create');
    Route::get('slider/{id}/delete', 'SliderController@destroy');
    Route::get('slider/{id}/edit', 'SliderController@edit');
    Route::post('slider/{id}/update', 'SliderController@update');
    Route::get('slider/{id}/show', 'SliderController@show');
    Route::post('slider', 'SliderController@store');
});

Route::group(['middleware'=> 'auth'], function() {
    Route::get('album', 'AlbumController@index');
    Route::get('album/new', 'AlbumController@create');
    Route::get('album/{id}/delete', 'AlbumController@destroy');
    Route::get('album/{id}/edit', 'AlbumController@edit');
    Route::post('album/{id}/update', 'AlbumController@update');
    Route::get('album/{id}/show', 'AlbumController@show');
    Route::post('album', 'AlbumController@store');
});

Route::group(['middleware'=> 'auth'], function() {
    Route::get('book', 'BookController@index');
    Route::get('book/new', 'BookController@create');
    Route::get('book/{id}/delete', 'BookController@destroy');
    Route::get('book/{id}/edit', 'BookController@edit');
    Route::post('book/{id}/update', 'BookController@update');
    Route::get('book/{id}/show', 'BookController@show');
    Route::post('book', 'BookController@store');
    Route::get('book/{book_id}/photo/{photo_id}/cover', 'BookController@make_cover');
    Route::get('book/{book_id}/photo/{photo_id}/indexcover', 'BookController@make_index_cover');
    Route::post('book/{book_id}/update_sequence','BookController@update_sequence');
});

Route::group(['middleware'=> 'auth'], function() {
    Route::get('about', 'AboutController@index');
    Route::get('about/new', 'AboutController@create');
    Route::get('about/{id}/delete', 'AboutController@destroy');
    Route::get('about/{id}/edit', 'AboutController@edit');
    Route::post('about/{id}/update', 'AboutController@update');
    Route::get('about/{id}/show', 'AboutController@show');
    Route::post('about', 'AboutController@store');
});

Route::group(['middleware'=> 'auth'], function() {
    Route::get('message', 'MessageController@index');
    Route::get('message/new', 'MessageController@create');
    Route::get('message/{id}/delete', 'MessageController@destroy');
    Route::get('message/{id}/edit', 'MessageController@edit');
    Route::post('message/{id}/update', 'MessageController@update');
    Route::get('message/{id}/show', 'MessageController@show');
    Route::post('message', 'MessageController@store');
});

Route::get('/', 'HomeController@index');
Route::post('newsletter', 'NewsletterController@store');
Route::get('newsletter/campaign/new', 'NewsletterController@create');
Route::post('campaign', 'NewsletterController@send_campain');


Route::post('contact', 'ContactController@store');
Route::get('contactus', 'ContactController@create');

Route::get('/gallary','PhotoController@gallary');

Route::get('messages', 'MessageController@messages');

Route::get('sounds/', 'AudioController@audios');
Route::get('sounds/{id}/album', 'AudioController@audios_by_album');
Route::get('sound/{slug}', 'AudioController@show_by_slug');


Route::get('/videos/{category}', 'VideoController@videos');
Route::get('/video/{slug}', 'VideoController@show_by_slug');

Route::get('/aboutus', 'AboutController@about');

Route::get('/book_single/{book_id}', 'BookController@front_book_view');
Route::get('/all_books', 'BookController@books');
Route::get('book/{id}/download', 'BookController@download');
Route::get('book/{book_id}/loadpage/{page_order}', 'BookController@loadpage');

// Route::get('/sounds', function () {
//     return view('sounds');
// });

// Route::get('/sound_single', function () {
//     return view('sound_single');
// });

// Route::get('/videos', function () {
//     return view('videos');
// });

// Route::get('/video_single', function () {
//     return view('video_single');
// });

Route::get('aboutaboiut', function() {
    return view('about');
});

// Route::get('/contact', function () {
//     return view('contact');
// });

// Route::get('/messages', function () {
//     return view('messages');
// });

// route for users page
Route::group(['middleware'=> 'auth'], function() {
    Route::get('user', 'UserController@index');
    Route::get('user/new', 'UserController@create');
    Route::post('user','UserController@store');
    Route::get('user/{id}/delete', 'UserController@destroy');
    Route::get('user/{id}/edit', 'UserController@edit');
    Route::patch('user/{id}/update', 'UserController@update');
    Route::post('user/deleteSelected', 'UserController@deleteSelected');
});




