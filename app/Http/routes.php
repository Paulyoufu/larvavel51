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

Route::get('contact','SitesController@contact');
Route::resource('articles','ArticlesController');
//Route::get('/articles','ArticlesController@index');
//Route::get('/articles/create','ArticlesController@create');
//Route::get('/articles/{id}','ArticlesController@show');
//Route::post('/articles','ArticlesController@store');


Route::get('auth/login','Auth\AuthController@getLogin');
Route::get('auth/login','Auth\AuthController@postLogin');
Route::get('auth/register','Auth\AuthController@getRegister');
Route::get('auth/register','Auth\AuthController@postRegister');
Route::get('auth/logout','Auth\AuthController@getLogout');
Route::get('/', function () {
    return view('welcome');
});
/*Route::get('/about', function () {
    return "i am paul !";
});
Route::get('/about', function () {
    return view("sites.about");
});
Route::get('/', 'SitesController@index'
);
Route::get('/', 'SitesController@about'
);*/

