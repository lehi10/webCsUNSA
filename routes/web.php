<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'MainController@index');
Route::get('/semcomp2020', 'MainController@semcomp2020');
Route::get('/comite21', 'MainController@comite21');

Route::get('/dashboard','dashboardController@index');

Route::get('/contest', function()
{
    return view('contest');
});

Route::group(['prefix'=>'blog'], function()
{
    Route::get('/',  'Blog\PageController@index' )->name('index');
    Route::get('/post/{slug}', 'Blog\PageController@post' )->name('post');
    Route::get('/category/{slug}', 'Blog\PageController@category' )->name('category');
    Route::get('/tag/{slug}', 'Blog\PageController@tag' )->name('tag');
});

Route::group(['prefix'=>'admin'], function()
{
    Route::get('/', 'Admin\AdminController@index')->name('home');

    Route::resource('/tags',         'Admin\TagController');
    Route::resource('/categories',   'Admin\CategoryController');
    Route::resource('/posts',        'Admin\PostController');
});

Route::group(['prefix'=>'resources'], function()
{
    Route::get('/',  'resourcesController@index' );
    Route::get('/constancia', 'resourcesController@getConstancia');
    Route::get('/schedule', 'resourcesController@getSchedule');
    Route::get('/library', 'resourcesController@getLibrary');
});

Route::group(['prefix'=>'events'], function()
{
    Route::get('/',  'eventsController@index' );
    Route::get('/downloadQr','eventsController@downloadQr');
});

Route::group(['prefix'=>'research'], function()
{
    Route::get('/',  'researchController@index' );
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::group(['prefix'=>'api'], function()
{
    Route::get('/',  'ApiController@index' )->name('api');
    Route::get('/attendance',  'ApiController@attendance' );
    Route::get('/register','ApiController@register');
    Route::get('/loadStudentsFile','ApiController@loadStudentsFile');
});
