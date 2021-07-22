<?php

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

Route::get('/', function () {
    return view('tamplate.index');
});

Route::prefix('admin')->group(function () {
   
    Route::get('/projects', function () {
        return view('project-supervisor.project-index');
    })->name('project.index');
    Route::get('/projects/show', function () {
        return view('project-supervisor.project-show');
    })->name('project.show');
});
