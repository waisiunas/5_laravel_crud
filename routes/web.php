<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [CourseController::class, 'index'])->name('course.index');
Route::get('course/create', [CourseController::class, 'create'])->name('course.create');
Route::post('course/create', [CourseController::class, 'store']);
Route::get('course/{course}/edit', [CourseController::class, 'edit'])->name('course.edit');
Route::post('course/{course}/edit', [CourseController::class, 'update']);
Route::get('course/{course}/destroy', [CourseController::class, 'destroy'])->name('course.destroy');
