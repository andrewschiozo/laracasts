<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

//Return about page
Route::get('/about', function () {
    return view('about');
})->name('about');

//Return contact page
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

//Return string
Route::get('/string', function () {
    return 'Foo, bar';
});

//Return array (JSON)
Route::get('/array', function () {
    return ['foo' => 'bar'];
});