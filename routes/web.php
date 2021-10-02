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

Route::get('login', 'AuthController@login')->name('login');
Route::post('auth', 'AuthController@auth')->name('auth');

Route::group(['middleware' => 'auth'], function () {
    // Dashboard
    Route::get('/', 'DashboardController@dashboard')->name('dashboard');
    Route::get('/{id}/detail', 'DashboardController@detail')->name('dashboard.detail');

    // Inventaris
    Route::get('inventaris', 'InventarisController@index')->name('inventaris');
    Route::post('inventaris', 'InventarisController@store')->name('invetaris.store');

    // Pinjaman
    Route::get('pinjaman', 'PinjamanController@pinjaman')->name('pinjaman');
    Route::post('pinjaman', 'PinjamanController@store')->name('pinjaman.store');
    Route::get('booking', 'PinjamanController@booking')->name('pinjaman.booking');
    Route::post('/{id}/restore', 'PinjamanController@restore')->name('pinjaman.restore');

    // Filter
    Route::post('filter', 'PinjamanController@filter')->name('filter');

    // Export
    Route::get('export', 'PinjamanController@export')->name('export');

    // Logout
    Route::get('logout', 'AuthController@logout')->name('logout');
});
