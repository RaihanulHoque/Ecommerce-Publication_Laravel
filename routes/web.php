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

//SLUG Checking for admin panel entry
Route::get('pages/check_slug', 'PagesController@check_slug')
    ->name('pages.check_slug');

Route::get('/home',[
    'uses'  => 'HomeController@index',
    'as'    => 'home'
]);


//Route::resource('admin.categories','CategoryController');
Route::resource('admin/categories','CategoryController');
//Categories Management
Route::get('/admin/categories',[
    'uses'  => 'CategoryController@index',
    'as'    => 'main-categories'
]);
Route::get('/admin/categories/delete/{id}',[
    'uses'  => 'CategoryController@destroy',
    'as'    => 'del-main-category'
]);
Route::post('/admin/categories/del-main-category',[
    'uses'  => 'CategoryController@delete',
    'as'    => 'del-main-category'
]);

//Sub-Categories
Route::resource('admin/sub-categories','SubCategoryController');
Route::get('/admin/sub-categories',[
    'uses'  => 'SubCategoryController@index',
    'as'    => 'sub-categories'
]);

Route::get('/admin/sub-categories/delete/{id}',[
    'uses'  => 'SubCategoryController@destroy',
    'as'    => 'del-sub-category'
]);
Route::post('/admin/sub-categories/del-sub-category',[
    'uses'  => 'SubCategoryController@delete',
    'as'    => 'del-sub-category'
]);

//Second-Sub-Categories
Route::resource('admin/sec-sub-categories','SecondSubCategoryController');
Route::get('/admin/sec-sub-categories',[
    'uses'  => 'SecondSubCategoryController@index',
    'as'    => 'sec-sub-categories'
]);
Route::get('/admin/sec-sub-categories/delete/{id}',[
    'uses'  => 'SecondSubCategoryController@destroy',
    'as'    => 'del-sec-sub-category'
]);
Route::post('/admin/sec-sub-categories/del-sec-sub-category',[
    'uses'  => 'SecondSubCategoryController@delete',
    'as'    => 'del-sec-sub-category'
]);


//Writer Management
Route::get('/admin/writers',[
    'uses'  => 'WriterController@index',
    'as'    => 'writers'
]);
Route::get('/admin/writers/delete/{id}',[
    'uses'  => 'WriterController@destroy',
    'as'    => 'del-writer'
]);
Route::post('/writer/del-writer',[
    'uses'  => 'WriterController@delete',
    'as'    => 'del-writer'
]);
Route::resource('crud','WriterController');


//Publications Management
Route::resource('admin/publications','PublicationController');
Route::get('/admin/publications',[
    'uses'  => 'PublicationController@index',
    'as'    => 'publications'
]);
Route::get('/admin/publication/delete/{id}',[
    'uses'  => 'PublicationController@destroy',
    'as'    => 'del-publication'
]);
Route::post('/admin/publication/del-publication',[
    'uses'  => 'PublicationController@delete',
    'as'    => 'del-publication'
]);


//Merchants Management
Route::resource('admin/merchants','MerchantController');
Route::get('/admin/merchants',[
    'uses'  => 'MerchantController@index',
    'as'    => 'merchants'
]);
Route::get('/admin/merchant/delete/{id}',[
    'uses'  => 'MerchantController@destroy',
    'as'    => 'del-merchant'
]);
Route::post('/admin/merchant/del-merchant',[
    'uses'  => 'MerchantController@delete',
    'as'    => 'del-merchant'
]);

