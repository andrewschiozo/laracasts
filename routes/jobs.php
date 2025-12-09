<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

Route::middleware('auth')->group(function () {
    Route::get('/jobs/create', [JobController::class, 'create'])->name('jobs.create');

    Route::post('/jobs', [JobController::class, 'store'])->name('jobs.store');

    Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])
        ->can('edit', 'job')
        ->name('jobs.edit');

    Route::patch('/jobs/{job}', [JobController::class, 'update'])->name('jobs.update');

    Route::delete('/jobs/{job}', [JobController::class, 'destroy'])->name('jobs.destroy');
});

Route::get('/jobs', [JobController::class, 'index'])
    ->name('jobs');

Route::get('/jobs/{job}', [JobController::class, 'show'])
    ->where('job', '[0-9]+')
    ->name('jobs.show');
