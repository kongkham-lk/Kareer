<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\HttpRequestController;
use Illuminate\Support\Facades\Route;

Route::get('/', [JobController::class, 'index']);
Route::get('/search', SearchController::class); // when there is only 1 method on that controller
Route::get('/tags/{tag:name}', TagController::class); // when there is only 1 method on that controller
Route::get('/ping', [HttpRequestController::class, 'ping']);

Route::middleware(['guest'])->group(function () {
    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store']);

    Route::get('/login', [SessionController::class, 'create']);
    Route::post('/login', [SessionController::class, 'store']);
});

Route::middleware(['auth'])->group(function () {
    Route::delete('/logout', [SessionController::class, 'destroy']);

    Route::get('/jobs/create', [JobController::class, 'create']);
    Route::post('/jobs/create', [JobController::class, 'store']);
});

Route::get('/jobs/{job}', [JobController::class, 'show']);

Route::middleware(['auth'])->group(function () {
    Route::get('/jobs/{job}/edit', [JobController::class,'edit']);
    Route::patch('/jobs/{job}', [JobController::class,'update']);
    Route::delete('/jobs/{job}', [JobController::class,'delete']);
})->can('edit', 'job');
