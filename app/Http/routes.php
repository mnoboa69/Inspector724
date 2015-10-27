<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/company', '\App\Http\Administration\CtrlCompany@createCompany');

Route::get('/company', function() {
//    return view('principal');
    return view('company-form');
});

Route::get('/role', function() {
    return view('role-form');
});

Route::get('/admin/getRoles', '\App\Http\Administration\CtrlRole@getRoles');

Route::post('/admin/createCompany', '\App\Http\Administration\CtrlCompa@createCompany');

Route::post('/admin/createRole', '\App\Http\Administration\CtrlRole@store');

Route::get('/principal', function () {
    return view('principal');
});