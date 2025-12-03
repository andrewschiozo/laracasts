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
    return view('jobs.index', [
        'jobs' => Job::with('employer')->latest()->simplePaginate(perPage: 6)
    ]);
})->name('jobs');

Route::get('/jobs/create', function () {
    return view('jobs.create');
});

Route::get('/job/{id}', function ($id) {
    $job = Job::find($id);

    return view('jobs.show', ['job' => $job]);
});

Route::post('/jobs', function () {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required'],
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1,
    ]);

    return redirect('/jobs');
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
