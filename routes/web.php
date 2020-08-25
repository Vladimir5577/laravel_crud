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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', function () {
    return view('home');
})->name('home');

// Submit
Route::post('/submit', 'ContactController@submit')->name('submit');

// Database
Route::get('/database', 'ContactController@database')->name('database');

// Detail
Route::get('/detail/{id}', 'ContactController@detail')->name('detail');

// Edit
Route::get('/edit/{id}', 'ContactController@edit')->name('edit');

// Update
Route::post('/update_record/{id}', 'ContactController@update_record')->name('update_record');

// Delete
Route::get('/delete/{id}', 'ContactController@delete')->name('delete');

