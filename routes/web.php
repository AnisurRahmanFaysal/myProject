<?php

use Illuminate\Support\Facades\Route;

Route::view(uri: '/', view: ('welcome'));

Route::get('/home', function () {
    $items = array('table', 'chair', 'stool');
    return view('homepage', ['products' => $items]);
});
