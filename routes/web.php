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

Route::get('/example', 'SystemController@ExampleComponent');
Route::get('/dashboard', 'SystemController@dashboard');
Route::get('/category-wise-report', 'SystemController@categorywiseReport');
Route::get('/custom-report', 'SystemController@customReport');
Route::get('/manage-category', 'SystemController@manageCategory');
Route::get('/manage-company', 'SystemController@manageCompany');
Route::get('/manage-groups', 'SystemController@manageGroups');
Route::get('/manage-orders', 'SystemController@manageOrders');
Route::get('/manage-products', 'SystemController@manageProducts');
Route::get('/manage-store', 'SystemController@manageStore');
Route::get('/manage-tables', 'SystemController@manageTables');
Route::get('/manage-users', 'SystemController@manageUsers');
Route::get('/menu-wise-report', 'SystemController@menuwiseReport');
Route::get('/product-assembly', 'SystemController@productAssembly');
Route::get('/product-wise-report', 'SystemController@productwiseReport');
Route::get('/raw-materials', 'SystemController@rawMaterials');
Route::get('/view-all-products', 'SystemController@viewallProducts');


