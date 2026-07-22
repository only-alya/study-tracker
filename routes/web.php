<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudyTaskController;

Route::get('/', function () {
    return redirect('/study-tasks');
});

Route::resource('study-tasks', StudyTaskController::class);
