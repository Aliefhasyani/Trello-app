<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/adminDashboard',[AdminController::class,'admin'])->name('admin.dashboard')->middleware(['auth','role:admin']);
Route::get('/studentDashboard',[StudentController::class,'student'])->name('student.dashboard')->middleware(['auth','role:student']);
Route::get('/home',[AdminController::class,'getCourses'])->name('home');

require __DIR__.'/auth.php';
