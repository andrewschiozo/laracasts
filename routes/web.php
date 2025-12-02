<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
$jobs = [
    ['id' => 1, 'title' => 'Director', 'salary' => 'R$ 10.000,00'],
    ['id' => 2, 'title' => 'Developer', 'salary' => 'R$ 8.000,00'],
    ['id' => 3, 'title' => 'Designer', 'salary' => 'R$ 6.000,00']
];
Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/jobs', function () use ($jobs) {
    return view('jobs', [
        'jobs' => $jobs
    ]);
})->name('jobs');

Route::get('/job/{id}', function ($id) use ($jobs) {
    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);

    return view('job', ['job' => $job]);
});

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