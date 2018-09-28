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
    Route::get('/',  'blogController@index' );
});

Route::group(['prefix'=>'resources'],function()
{
    Route::get('/',  'resourcesController@index' );
});

Route::group(['prefix'=>'events'],function()
{
    Route::get('/',  'eventsController@index' );
});

Route::group(['prefix'=>'research'],function()
{
    Route::get('/',  'researchController@index' );
});
    
