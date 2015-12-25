<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
/*
 *
 */
Route::get('/test','TestController@index');
/*
 *
 */
Route::match(['post','get'],'/addArticle','TestController@addArticle');
/**
 *This route is for article list.
 */
Route::get('/index','ArticleController@index');
/**
 *
 */
Route::post('/article/add','ArticleController@add');
/**
 *
 */
Route::get('/article/addshow',function(){
    return view('article.add');
});
/**
 *
 */
Route::match(['post','get'],'/article/edit/{id}','ArticleController@edit');
/**
 *
 */
Route::get('/article/edit/{id}','ArticleController@edit');
/**
 *
 */
Route::get('/article/{id}','ArticleController@show');



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
