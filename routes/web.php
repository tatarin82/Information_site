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

Route::get('/', 'HomeController@index')->name('home.index');
Route::get('/indexpage', 'IndexpageController@index')->name('indexpage.index');
Route::get('/schemes', 'SchemesController@index')->name('schemes.index');
Route::get('/lab', 'LabController@index')->name('lab.index');
Route::get('/contacts', 'ContactsController@index')->name('contacts.index');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';
