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

// ---------------- route for home --------------------
Route::get('/', 'StatesController@home');

// ---------------- route for create ------------------
Route::get('/create', 'StatesController@create');



// ---------------- edit ------------------------------
Route::get('/states/{id}/edit', 'StatesController@edit');
Route::put('/update/{id}/edit', 'StatesController@update');     // triggers update method and redirects back to show route

//  ----------------- SHOW ------------------
Route::get('/show', 'StatesController@showAll')->name('show');
Route::post('/show', 'StatesController@store');     // triggers store method and redirects back to show route

// ------------------- DELETE -----------------
Route::get('/states/{id}/delete', 'StatesController@delete');





Route::get('/test', 'StatesController@test');