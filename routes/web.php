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

Route::get('/{param}', function () {
    return view('admin');
})->where('param', '.*');

// Route::get('/admin', function () {
//     return view('admin');
// });

// Route::get('/admin/article/create', function () {
//     return view('admin');
// });

// Route::get('{path:.*}', function () {
//     return view('admin');
// });