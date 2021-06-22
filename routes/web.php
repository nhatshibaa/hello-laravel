<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/admin/student/create', [StudentController::class, 'create']);
Route::get('/admin/student/show', [StudentController::class, 'showList']);

Route::get('/admin/teacher/create', [TeacherController::class, 'create']);
Route::get('/admin/teacher/show', [TeacherController::class, 'showList']);
