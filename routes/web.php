<?php

use Illuminate\Support\Facades\Route;




Route::get('/',[App\Http\Controllers\ContentController::class,'showContent'])->name('content');
Route::get('/courses',[App\Http\Controllers\PagesController::class,'index'])->name('courses');
//Route::get('/courses',[App\Http\Controllers\PagesController::class,'index'])->name('courses');
Route::get('/courses/type{id}',[App\Http\Controllers\PagesController::class,'show'])->name('coursesType');
Route::get('/single/course{id}',[App\Http\Controllers\PagesController::class,'single'])->name('single');
Route::get('/search',[App\Http\Controllers\PagesController::class,'search'])->name('search');

Route::group(['prefix' => 'admin'], function () {Voyager::routes();});


