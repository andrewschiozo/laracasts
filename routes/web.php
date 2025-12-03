<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

// Index
Route::get('/jobs', function () {
    return view('jobs.index', [
        'jobs' => Job::with('employer')->latest()->simplePaginate(perPage: 6)
    ]);
})->name('jobs');

// Create
Route::get('/jobs/create', function () {
    return view('jobs.create');
});

// Show
Route::get('/job/{id}', function ($id) {
    $job = Job::find($id);

    return view('jobs.show', ['job' => $job]);
});

// Store
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

// Edit
Route::get('/job/{id}/edit', function ($id) {
    $job = Job::find($id);

    return view('jobs.edit', ['job' => $job]);
});

// Update
Route::patch('/job/{id}', function ($id) {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required'],
    ]);

    //authorize (On hold...)

    $job = Job::findOrFail($id);

    $job->update([
        'title'=> request('title'),
        'salary' => request('salary'),
    ]);

    return redirect('/job/' . $job->id);
});

// Destroy
Route::delete('/job/{id}', function ($id) {
    // authorize (On hold...)
    $job = Job::findOrFail($id);
    $job->delete();

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
