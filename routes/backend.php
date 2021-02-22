<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\PermissionController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\QuestionController;
use App\Http\Controllers\Backend\CourseController;
use App\Http\Controllers\Backend\ExamController;
use App\Http\Controllers\Backend\PasswordController;

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
Route::get('/courses/{category}', [CourseController::class, 'link'])->name('courses');
Route::get('/courses/instant/{id}', [CourseController::class, 'instant_exams'])->name('courses.instant');
Route::get('/exams/{id}', [ExamController::class, 'exam'])->name('exams');
Route::get('/download/{id}', [ExamController::class, 'downloadPDF'])->name('download');
Route::get('/password/edit', [PasswordController::class, 'edit'])->name('password.edit');
Route::put('/password/update', [PasswordController::class, 'update'])->name('password.update');