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

Route::get('/login', 'AuthController@index')->name('login');
Route::post('/postlogin', 'AuthController@postlogin')->name('postlogin');
Route::get('/register', 'AuthController@register')->name('register');
Route::post('/postregister', 'AuthController@postregister')->name('postregister');
Route::get('/logout', 'AuthController@logout')->name('logout');

Route::group(['middleware' => 'auth'], function(){

    Route::group(['middleware' => 'checkadmin'], function(){

        Route::get('/admin/dashboard', 'PagesController@admin')->name('admindsb');

        Route::resource('/master/admin', 'AdminController');
        Route::resource('/master/agen', 'AgenController');

    });

    Route::group(['middleware' => 'checkagen'], function(){

        Route::get('/agen/dashboard', 'PagesController@agen')->name('agendsb');

        Route::resource('/master/penghuni', 'PenghuniController');
        Route::resource('/master/pelamar', 'PelamarController');
        
        Route::resource('/master/tower', 'TowerController');
        Route::resource('/master/tipe', 'TipeController');
        Route::resource('/master/fasilitas', 'FasilitasController');
        Route::resource('/master/unit', 'UnitController');

        Route::resource('/transaksi/persewaan', 'PersewaanController');
        Route::post('/transaksi/persewaan/{persewaan}', 'PersewaanController@bayar');

        Route::resource('/transaksi/invoice', 'InvoiceController');

        Route::resource('/akun/saldo', 'SaldoController');
        Route::resource('/akun/log', 'LogController');

    });

    Route::get('/penghuni/dashboard', 'PagesController@penghuni')->name('penghunidsb');

});


