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


use Illuminate\Support\Facades\App;

Route::get('/', 'MainController@index');

Route::get('/{locale}', 'MainController@indexLang');

Route::get('/blog', 'PostController@index');

Route::get('/service/{id}', 'ServiceController@oneService');
Route::get('/{locale}/service/{id}', 'ServiceController@oneServiceLang');

Route::get('/podservice/{id}', 'ServiceController@onePodService');
Route::get('/{locale}/podservice/{id}', 'ServiceController@onePodServiceLang');

Route::get('/serviceeee', 'ServiceController@AllService');
Route::get('{locale}/service', 'ServiceController@AllServiceLang');

Route::get('/about_company', 'MainController@AboutCompany');

Route::get('{locale}/blog', 'PostController@indexLang');

Route::get('/blog/{id}', 'PostController@onePost');

Route::get('/{locale}/blogi/{id}','PostController@onePostLang');

Route::get('/about_company', function () {
    return view('aboutcompany');
});




