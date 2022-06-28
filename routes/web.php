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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/' , 'App\Http\Controllers\Frontend\PagesController@homepage')->name('homepage');
Route::get('/all-products' , 'App\Http\Controllers\Frontend\PagesController@allProducts')->name('allProducts');
Route::get('/product-details' , 'App\Http\Controllers\Frontend\PagesController@productDetails')->name('productDetails');
Route::get('/search' , 'App\Http\Controllers\Frontend\PagesController@search')->name('search');





Route::get('/cart' , 'App\Http\Controllers\Frontend\PagesController@cart')->name('cart');
Route::get('/checkout' , 'App\Http\Controllers\Frontend\PagesController@checkout')->name('checkout');
Route::get('/customer-login' , 'App\Http\Controllers\Frontend\PagesController@login')->name('customer-login');


Route::group(['prefix' => 'user'] , function(){
// User Profile

Route::get('/my-profile', 'App\Http\Controllers\Frontend\UserController@index')->name('user-profile')->middleware('auth' , 'verified');
Route::get('/profile-update/{id}', 'App\Http\Controllers\Frontend\UserController@create')->middleware('auth')->name('profile.update');
Route::post('/profile-update/{id}', 'App\Http\Controllers\Frontend\UserController@store')->middleware('auth')->name('profile.store');

// order management
Route::get('/order-history' , 'App\Http\Controllers\Frontend\OrderManagementController@index')->name('order-history');

});


// Admin Group
// Route::middleware('auth','role')->group(function () {
Route:: group(['prefix' => 'admin'] , function(){
    // Admin Dashboard page
   Route::get('/dashboard','App\Http\Controllers\Backend\PagesController@dashboard')->name('admin.dashboard')->middleware('auth' , 'role');


   // user Group

   Route::group(['prefix'  => '/users'] , function(){

    Route::get('/manage','App\Http\Controllers\Backend\UserController@index')->name('user.manage')->middleware('auth','role');
    Route::post('/store','App\Http\Controllers\Backend\UserController@store')->name('user.store')->middleware('auth','role');
    Route::get('/edit/{id}','App\Http\Controllers\Backend\UserController@edit')->name('user.edit')->middleware('auth', 'role');
    Route::post('/update/{id}','App\Http\Controllers\Backend\UserController@update')->name('user.update')->middleware('auth',  'role');
    Route::post('/destroy/{id}','App\Http\Controllers\Backend\UserController@destroy')->name('user.destroy')->middleware('auth', 'role');
 });


   //brand Group

   Route::group(['prefix' => '/brand'], function(){

   Route::get('/manage','App\Http\Controllers\Backend\BrandController@index')->name('brand.manage')->middleware('auth');
   Route::get('/create','App\Http\Controllers\Backend\BrandController@create')->name('brand.create')->middleware('auth');
   Route::post('/store','App\Http\Controllers\Backend\BrandController@store')->name('brand.store')->middleware('auth');
   Route::get('/edit/{id}','App\Http\Controllers\Backend\BrandController@edit')->name('brand.edit')->middleware('auth');
   Route::post('/update/{id}','App\Http\Controllers\Backend\BrandController@update')->name('brand.update')->middleware('auth');
   Route::post('/destroy/{id}','App\Http\Controllers\Backend\BrandController@destroy')->name('brand.destroy')->middleware('auth');


 });
 // category Group

 Route::group(['prefix'  => '/category'] , function(){

    Route::get('/manage','App\Http\Controllers\Backend\CategoryController@index')->name('category.manage')->middleware('auth');
    Route::get('/create','App\Http\Controllers\Backend\CategoryController@create')->name('category.create')->middleware('auth');
    Route::post('/store','App\Http\Controllers\Backend\CategoryController@store')->name('category.store')->middleware('auth');
    Route::get('/edit/{id}','App\Http\Controllers\Backend\CategoryController@edit')->name('category.edit')->middleware('auth');
    Route::post('/update/{id}','App\Http\Controllers\Backend\CategoryController@update')->name('category.update')->middleware('auth');
    Route::post('/destroy/{id}','App\Http\Controllers\Backend\CategoryController@destroy')->name('category.destroy')->middleware('auth');
 });


  // product Group

  Route::group(['prefix'  => '/product'] , function(){

    Route::get('/manage','App\Http\Controllers\Backend\ProductController@index')->name('product.manage')->middleware('auth');
    Route::get('/create','App\Http\Controllers\Backend\ProductController@create')->name('product.create')->middleware('auth');
    Route::post('/store','App\Http\Controllers\Backend\ProductController@store')->name('product.store')->middleware('auth');
    Route::get('/edit/{id}','App\Http\Controllers\Backend\ProductController@edit')->name('product.edit')->middleware('auth');
    Route::post('/update/{id}','App\Http\Controllers\Backend\ProductController@update')->name('product.update')->middleware('auth');
    Route::post('/destroy/{id}','App\Http\Controllers\Backend\ProductController@destroy')->name('product.destroy')->middleware('auth');
 });




});

require __DIR__.'/auth.php';

