<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\ProfileController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [StudentController::class, 'index']);
Route::get('/departments', [DepartmentController::class, 'index']);
Route::get('/sections', [SectionController::class, 'index']);
Route::get('/profiles', [ProfileController::class, 'index']);



