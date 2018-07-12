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

// Route::get('/admin', function () {
//     return view('admin');
// });

// Route::get('/admin/article/create', function () {
//     return view('admin');
// });

// Route::get('{path:.*}', function () {
//     return view('admin');
// });

Route::namespace('Admin')->group(function () {
    Route::get('api/article', 'ArticleController@all');
    Route::post('api/article', 'ArticleController@create');
    Route::get('api/article/{id}', 'ArticleController@find');
    Route::put('api/article/{id}', 'ArticleController@update');
    Route::delete('api/article/{id}', 'ArticleController@delete');
});

Route::get('/{param}', function () {
    return view('admin');
})->where('param', '.*');