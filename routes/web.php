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
Route::get('author/delete/{id}','AuthorController@getDelete');

Route::post('author/edit/{id}','AuthorController@postEdit');
Route::get('author/edit/{id}','AuthorController@getEdit');

Route::post('author/create','AuthorController@postCreate');
Route::get('author/create','AuthorController@getCreate');

Route::get('author','AuthorController@getIndex');

Route::get('book/delete/{id}','BookController@getDelete');

Route::post('book/edit/{id}','BookController@postEdit');
Route::get('book/edit/{id}','BookController@getEdit');

Route::post('book/create','BookController@postCreate');
Route::get('book/create','BookController@getCreate');

Route::get('book','BookController@getIndex');

Route::get('member/delete/{id}','MemberController@getDelete');

Route::post('member/edit/{id}','MemberController@postEdit');
Route::get('member/edit/{id}','MemberController@getEdit');

Route::post('member/create','MemberController@postCreate');
Route::get('member/create','MemberController@getCreate');

Route::get('member','MemberController@getIndex');

Route::get('/', function () {
    return view('welcome');
});
