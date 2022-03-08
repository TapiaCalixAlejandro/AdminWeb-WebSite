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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

#Products routes
Route::get('/admin/products', 'Admin\ProductController@products')->name('admin.products');
Route::get('/admin/products/create', 'Admin\ProductController@create')->name('admin.products.create');

#Products operations
Route::post('/admin/products/store', 'Admin\ProductController@store')->name('admin.products.store');

#Subcategory routes
Route::get('/admin/subcategory', 'Admin\SubcategoryController@subcategory')->name('admin.subcategory');
Route::get('/admin/subcategory/create', 'Admin\SubcategoryController@create')->name('admin.subcategory.create');

#Subacetgory operations
Route::post('/admin/subcategory', 'Admin\SubcategoryController@storeSubcategory')->name('admin.subcategory.store');
