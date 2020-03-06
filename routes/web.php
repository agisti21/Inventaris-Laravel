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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('inventories','InventoryController');
Route::resource('borrowings','BorrowingController');
Route::resource('rooms','RoomController');
Route::resource('types','TypeController');
Route::resource('levels','LevelController');
Route::resource('employees','EmployeeController');
Route::resource('details','DetailController');
Route::resource('statuses','StatusController');
Route::resource('reports','ReportController');
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/laporanborrowings','LaporanborrowingController@index')->name('laporanborrowings');
Route::get('/laporanborrowings/cari','LaporanborrowingController@cari');
Route::get('/laporanborrowings/print','LaporanborrowingController@print')->name('laporanborrowings.print');
Route::get('/laporanborrowings/show','LaporanborrowingController@show')->name('laporanborrowings.show');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
