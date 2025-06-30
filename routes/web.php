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

Route::get('/home',[AdminController::class,'home'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
  
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/adminDashboard',[AdminController::class,'admin'])->name('admin.dashboard')->middleware(['auth','role:admin']);
Route::get('/admin/panel',[AdminController::class,'adminPanel'])->name('admin.panel')->middleware(['auth','role:admin']);
Route::get('/admin/panel/users',[AdminController::class,'showUsers'])->name('admin.users')->middleware(['auth','role:admin']);
Route::get('/studentDashboard',[StudentController::class,'student'])->name('student.dashboard')->middleware(['auth','role:student']);
Route::get('/course',[AdminController::class,'getAllCourses'])->name('course');


Route::get('/courseDetail/{id}',[StudentController::class,'showDetail'])->name('courseDetail')->middleware(['auth']);
Route::post('/courseDetail/{course}/enroll',[StudentController::class,'enroll'])->name('enroll')->middleware(['auth']);
Route::delete('/studentDashboard/remove/{course}',[StudentController::class,'deEnroll'])->name('deEnroll')->middleware(['auth']);






require __DIR__.'/auth.php';
