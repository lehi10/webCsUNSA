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

Route::get('/','dashboardController@index');


Route::group(['prefix'=>'blog'],function()
{
    Route::get('/',  'Blog\PageController@index' )->name('index');
    Route::get('/post/{slug}', 'Blog\PageController@post' )->name('post');
    Route::get('/category/{slug}', 'Blog\PageController@category' )->name('category');
    Route::get('/tag/{slug}', 'Blog\PageController@tag' )->name('tag');
});



Route::group(['prefix'=>'admin'],function()
{

    Route::get('/', 'Admin\AdminController@index')->name('home');
    
    Route::resource('/tags',         'Admin\TagController');
    Route::resource('/categories',   'Admin\CategoryController');
    Route::resource('/posts',        'Admin\PostController');

});





Route::group(['prefix'=>'resources'],function()
{
    Route::get('/',  'resourcesController@index' );
    Route::get('/constancia', 'resourcesController@getConstancia');
    Route::get('/schedule', 'resourcesController@getSchedule');
    Route::get('/library', 'resourcesController@getLibrary');
});

Route::group(['prefix'=>'events'],function()
{
    Route::get('/',  'eventsController@index' );
    Route::get('/downloadQr','eventsController@downloadQr');
});

Route::group(['prefix'=>'research'],function()
{
    Route::get('/',  'researchController@index' );
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

