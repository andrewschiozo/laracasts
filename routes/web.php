<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/jobs', function () {
//     Job::create(['title' => 'Director', 'salary' => 'R$ 10.000,00']);
//     Job::create(['title' => 'Developer', 'salary' => 'R$ 8.000,00']);
//     Job::create(['title' => 'Designer', 'salary' => 'R$ 6.000,00']);
    return view('jobs', [
        'jobs' => Job::all()
    ]);
})->name('jobs');

Route::get('/job/{id}', function ($id) {
    $job = Job::find($id);

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
