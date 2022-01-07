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
    Route::get('show-html-preferences','CoffeeBreakPreferenceController@showHtmlPreferences');
    Route::get('show-xml-preferences','CoffeeBreakPreferenceController@showXmlPreferences');
//    Route::get('show-xml-preferences',function (){
//        $preferenes = \App\CoffeeBreakPreference\CoffeeBreakPreference::all();
//        return response()->xml(['preferenes'=>$preferenes]);
//    });
});
