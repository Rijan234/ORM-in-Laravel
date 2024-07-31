<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\ShowCourse;
use App\Http\Controllers\ShowcourseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TenantController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('fe.home');
Route::get('/student/course/{id}' , [ShowcourseController::class , 'showcourse']);

Route::resource('landlord', TenantController::class)->names('landlord');
Route::resource('library', AuthorController::class)->names('library');
Route::resource('student', StudentController::class)->names('student');
