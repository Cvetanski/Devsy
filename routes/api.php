<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('coffee-break-preference')->group(function (){
    Route::get('/','CoffeeBreakPreferenceController@index');
//    Route::get('show-html-preferences','CoffeeBreakPreferencesController@showHtmlPreferences');
});
