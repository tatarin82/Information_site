<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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
Route::post('/schemes/add', function(Request $request){
    // $request->file('pdf')->store('');
    $path = Storage::disk('public')->put('',$request->file('pdf'));
    return $path;
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';
