<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectDetailedController;

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

Route::get('/not_found', function () {
    return view('not_found');
});


Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/work', function () {
    return view('work');
});

//Project routes
Route::get('/projects', [ProjectController::class, 'list'])->name('projects.list');
Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');
Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');
Route::get('/projects/{id}', [ProjectController::class, 'show'])->name('projects.show');
// Route::get('/projects/{id}/edit', [ProjectController::class, 'edit'])->name('projects.edit');
// Route::put('/projects/{id}', [ProjectController::class, 'update'])->name('projects.update');
// Route::delete('/projects/{id}', [ProjectController::class, 'destroy'])->name('projects.destroy');

//Project Detailed routes
// Route::get('/project_detailed', [ProjectDetailedController::class, 'list'])->name('project_detailed.list');
Route::get('/project_detailed/create', [ProjectDetailedController::class, 'create'])->name('project_detailed.create');
Route::post('/project_detailed', [ProjectDetailedController::class, 'store'])->name('project_detailed.store');
Route::get('/project_detailed/{id}', [ProjectDetailedController::class, 'show'])->name('projects.show');
// Route::get('/projects/{id}/edit', [ProjectDetailedController::class, 'edit'])->name('projects.edit');
// Route::put('/projects/{id}', [ProjectDetailedController::class, 'update'])->name('projects.update');
// Route::delete('/projects/{id}', [ProjectDetailedController::class, 'destroy'])->name('projects.destroy');