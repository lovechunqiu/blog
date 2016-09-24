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

Route::get('/', function () {
     return view('welcome');
});

//Route::get('view', 'ViewController@index');
Route::get('view', 'ViewController@view');
Route::get('article', 'ViewController@article');
Route::get('layouts', 'ViewController@layouts');

/**
Route::get('/view', function(){
    return view('my_laravel');
});
 */

/** 
Route::group(['middleware' => ['web']], function(){
     Route::get('admin/login', 'Admin\IndexController@login');

     Route::get('/', function () {
         session(['key' => 123]);
         return view('welcome');
     });

     Route::get('test', function () {
         echo session('key');
         return 'test session';
     });
          
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['web', 'admin.login']], function(){
    //Route::get('login', 'IndexController@login');
    Route::get('index', 'IndexController@index');
    Route::resource('article', 'ArticleController');
});
 */
/**
//路由分组
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function(){

    Route::get('login', 'IndexController@login');
    Route::get('index', 'IndexController@index');
});
 */

/**
Route::get('user', ['as' => 'profile', function(){
    echo route('profile');
    return '<h1>命名路由</h1>';
}]);

Route::get('test', 'Admin\IndexController@index')->name('profile');
 */

//Route::get('test', ['as' => 'profile', 'uses' => 'Admin\IndexController@index']);

//Route::get('test', 'Admin\IndexController@index');

/**
Route::get('user/{id}', function ($id) {
    return 'User:' . $id;
})->where('id', '[0-9]+');
 */ 

/**
Route::get('posts/{post}/comments/{comment?}', function($postId=0, $commentId=null){
    return 'post:' . $postId . ';comment:' . $commentId;
});
 */

/**
Route::get('/hd', function () {
    echo 'get';
});

Route::post('/hd', function () {
    echo 'post';
});

Route::put('/hd', function () {
    echo 'put';
});

Route::patch('/hd', function () {
    echo 'patch';
});

Route::delete('/hd', function () {
    echo 'delete';
});

Route::options('/hd', function () {
    echo 'options';
});

Route::match(['get', 'post'], '/test', function(){
  echo 'match';  
});

Route::any('foo', function(){
    echo 'any';
});
*/
