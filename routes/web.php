<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UsersController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::resource('/project', ProjectController::class);
Route::middleware('auth')->group(function () {
    Route::get('/users', [UsersController::class, 'index'])->name('profile.users');
    Route::get('/dashboard', [ProjectController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
    Route::get('/edit-project/{id}',[ProjectController::class,'edit']);
    Route::post('project-update',[ProjectController::class, 'update']);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/projects',[ProjectController::class, 'index']);
    Route::get('/projects',[ProjectController::class,'add'])->name('projects.add');
    Route::post('/project-save', [ProjectController::class, 'store'])->name('projects.store');
});

require __DIR__.'/auth.php';
