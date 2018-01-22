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

//Route::get('about', ['middleware' => 'auth', 'uses' => 'PagesController@about']);
//Route::get('about', [
//    'middleware' => 'auth',
//    function () {
//        return 'this page will only show if the user is signed in';
//    }
//]);



//Route::get('articles', 'ArticlesController@index');
//Route::get('articles/create', 'ArticlesController@create');
//Route::get('articles/{id}', 'ArticlesController@show');
//Route::post('articles', 'ArticlesController@store');
//Route::get('articles/{id}/edit', 'ArticlesController@edit');


Route::resource('articles', 'ArticlesController');
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('foo', ['middleware' => 'manager', function() {

    return 'this page may only be view by managers';
}]);
