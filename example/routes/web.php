<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

//Return string
Route::get('/string', function () {
    return 'Foo, bar';
});

//Return array
Route::get('/array', function () {
    return ['foo' => 'bar'];
});

//Return about page
Route::get('/about', function () {
    return view('about');
});

//Return contact page
Route::get('/contact', function () {
    return view('contact');
});