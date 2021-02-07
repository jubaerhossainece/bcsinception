<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\PermissionController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\QuestionController;
use App\Http\Controllers\Backend\CourseController;
use App\Http\Controllers\Backend\ExamController;

/*
|--------------------------------------------------------------------------
| Backend Routes
|--------------------------------------------------------------------------
|
| Here is where you can register backend routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/dashboard', DashboardController::class)->name('dashboard');
Route::resource('/users', UserController::class);
Route::resource('/roles', RoleController::class);
Route::resource('/permissions', PermissionController::class);
Route::resource('/questions', QuestionController::class);
Route::get('/courses/{course}', [CourseController::class, 'link'])->name('courses');
Route::get('/exams/{id}', [ExamController::class, 'exam'])->name('exams');