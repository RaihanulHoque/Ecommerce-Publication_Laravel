<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/',[
    'uses' => 'PbsdevController@index',
    'as'    => '/'
]);

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home',[
    'uses'  => 'HomeController@index',
    'as'    => 'home'
]);

Route::get('/category/add-category',[
   'uses'   => 'CategoryController@addCategory',
   'as'     => 'add-category'
]);


Route::resource('ajax-book-categories','CategoryController');
Route::get('/admin/book-categories',[
    'uses'  =>  'CategoryController@index',
    'as'    =>  'book-categories'
]);

Route::resource('ajaxproducts','ProductAjaxController');
Route::get('/test/products',[
    'uses'  => 'ProductAjaxController@index',
    'as'    => 'products'
]);



