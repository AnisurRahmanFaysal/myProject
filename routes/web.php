<?php

use Illuminate\Support\Facades\Route;

Route::view(uri: '/', view: 'welcome');


//Route::get('/home', 'App\Http\Controllers\HomeController@index');
Route::get(uri: '/home', action: 'App\Http\Controllers\HomeController@index');




Route::get('/home/{userid}/{age}', function ($userid, $age) {
    $userName = request(key: 'username');
    $items = array('table', 'chair', 'stool');
    return view('homepage', ['products' => $items, 'username' => $userName, 'userid' => $userid, 'age' => $age]);
});

Route::get('/custom-form', function () {

    return view('customform');
});


Route::post('/form-submit', function () {

    dd(request()->all());
});
