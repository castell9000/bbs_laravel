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

Route::get('/article',[
    'as' => 'article.list',
    'uses' => 'ArticleController@listArticle'
]);

Route::get('/article/write',[
    'as' => 'article.form',
    'uses' => 'ArticleController@formArticle'
]);

Route::post('/article/write',[
    'as' => 'article.store',
    'uses' => 'ArticleController@storeArticle'
]);


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
