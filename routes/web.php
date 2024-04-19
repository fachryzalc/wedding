<?php

use Illuminate\Http\Request;
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
    return view('index');
});

Route::get('/laily', function (Request $request) {
    return view('laily', ['name' => $request->name]);
});
Route::get('/fachryzal', function (Request $request) {
    return view('fachryzal', ['name' => $request->name]);
});
Route::get('/sutrisno', function (Request $request) {
    return view('sutrisno', ['name' => $request->name]);
});
