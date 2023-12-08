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

Route::get('/', 'HomeController@index')->name('home.index');
Route::get('/product/details/{product_id}', 'HomeController@productDetails')->name('home.productDetails');

Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verifyUser')->name('login.verifyUser');

Route::get('/logout', 'LoginController@logout')->name('login.logout');


Route::middleware('employeeSession')->group(function () {

    Route::get('/employee/home', 'EmployeeController@index')->name('employee.index');

    Route::get('/employee/product/list', 'ProductController@productList')->name('product.productList');

    Route::get('/employee/product/add', 'ProductController@addProduct')->name('product.addProduct');
    Route::post('/employee/product/add', 'ProductController@insertProduct')->name('product.insertProduct');

    Route::get('/employee/product/edit/{product_id}', 'ProductController@editProduct')->name('product.editProduct');
    Route::post('/employee/product/edit/{product_id}', 'ProductController@updateProduct')->name('product.updateProduct');

    Route::get('/employee/product/delete/{product_id}', 'ProductController@deleteProduct')->name('product.deleteProduct');
});
