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

Route::prefix('coffee-break-preference')->group(function (){
    Route::get('show-html-preferences','CoffeeBreakPreferencesController@showHtmlPreferences');
    Route::get('show-xml-preferences','CoffeeBreakPreferencesController@showXmlPreferences');
});