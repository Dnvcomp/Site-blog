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

Route::resource('/','IndexController',['only'=>['index'],'names'=>['index'=>'home']]);
Route::resource('portfolios','PortfolioController',['parameters'=>['portfolios'=>'alias']]);
Route::resource('articles','ArticlesController',['parameters'=>['articles'=>'alias']]);
Route::get('articles/cat/{cat_alias?}',['uses'=>'ArticlesController@index','as'=>'articlesCat']);