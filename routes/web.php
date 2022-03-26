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

Route::view('epl/selection', 'selection');

Route::view('association', 'about');
Route::view('association/leadership', 'leadership');
Route::view('association/contact', 'contact');

Route::permanentRedirect('contact', 'association/contact');

Route::view('press', 'press');
