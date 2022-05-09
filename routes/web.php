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




Route::namespace('User\auth')->group(function()
{
    Route::get('/register','Registercontroller@page_register')->name('page_register');
    Route::post('register','Registercontroller@register')->name('register');

    Route::get('/','Logincontroller@index')->name('index');
    Route::post('/login','Logincontroller@login')->name('login');

    Route::get('/logout','Logincontroller@logout')->name('logout');
});

Route::prefix('home')->name('home.')->namespace('User\home')->group(function()
{
    Route::get('index','Homecontroller@index')->name('home');
});

 Route::prefix('categroy')->name('add.')->namespace('User\categroy')->group(function()
 {
    Route::get('add','Categroycontroller@index')->name('add');
    Route::Post('addcategroy','Categroycontroller@addcategroy')->name('addcategroy');

 });

 Route::prefix('Transaction')->name('transaction.')->namespace('User\transaction')->group(function()
 {
    Route::get('transaction','TransactionController@index')->name('transaction');
    Route::post('addtransaction','TransactionController@add')->name('addtransaction');


 });


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
