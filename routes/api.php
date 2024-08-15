<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::controller(TaskController::class)->group(function () {
    Route::get('/tasks', 'index');
    Route::post('/tasks', 'store');
    Route::get('/tasks/{task}', 'show');
    Route::put('/tasks/{task}', 'update');
    Route::delete('/tasks/{task}', 'destroy');
});

if (config('app.env') == 'local' and config('app.debug')) {
    Route::get('/users/{user}', [UserController::class, 'show']);
}
