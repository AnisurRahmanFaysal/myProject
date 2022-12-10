<?php

use Illuminate\Support\Facades\Route;

Route::view(uri: '/', view: 'welcome');
Route::get(uri: '/home', action: 'App\Http\Controllers\HomeController@index');
Route::get('/home/{userid}/{age}',action:'App\Http\Controllers\HomeController@Show');

Route::get(uri: '/insert', action: 'App\Http\Controllers\HomeController@insertOperation');
Route::get(uri: '/read', action: 'App\Http\Controllers\HomeController@readOperation');
Route::get(uri: '/update', action: 'App\Http\Controllers\HomeController@updateOperation');
Route::get(uri: '/delete', action: 'App\Http\Controllers\HomeController@deleteOperation');

Route::get('/custom-form', function () {

    return view('customform');
});


Route::post('/form-submit', function () {

    dd(request()->all());
});
