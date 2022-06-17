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

Route::view('/', 'welcome');

Route::get('/privacy', \App\Http\Controllers\PrivacyPolicyController::class);
Route::get('/terms', \App\Http\Controllers\TermsController::class);

Route::view('epl/selection', 'selection');
Route::view('epl/training', 'training');

Route::view('association', 'about');
Route::view('association/team', 'team');

Route::view('contact', 'contact');

Route::view('press', 'press');

Route::view('remembering', 'remembering');
