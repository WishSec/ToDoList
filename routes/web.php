<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return redirect()->route('tasks.index');
});

Route::resource('tasks', TaskController::class);
Route::patch('/tasks/{task}/toggle-status',
[TaskController::class, 'index'])->name('tasks.toggle-status');