<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;
use App\Models\Course;
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
Route::delete('/admin/panel/users/delete/{id}',[AdminController::class,'delete'])->name('admin.delete')->middleware(['auth','role:admin']);

Route::get('/admin/panel/users/create',[AdminController::class,'create'])->name('admin.create')->middleware(['auth','role:admin']);
Route::post('/admin/panel/users/createUser',[AdminController::class,'store'])->name('admin.store')->middleware(['auth','role:admin']);

Route::get('/admin/panel/users/editUser/{id}',[AdminController::class,'edit'])->name('admin.edit')->middleware(['auth','role:admin']);
Route::put('/admin/panel/users/update/{id}',[AdminController::class,'update'])->name('admin.update')->middleware(['auth','role:admin']);

Route::get('/admin/courses',[CourseController::class,'getCourses'])->name('admin.courses');
Route::delete('/admin/courses/delete/{id}',[CourseController::class,'deleteCourse'])->name('admin.deleteCourse')->middleware(['auth','role:admin']);

Route::get('/admin/courses/create',[CourseController::class,'createCourse'])->name('admin.createCourse')->middleware(['auth','role:admin,teacher']);
Route::post('/admin/courses/createCourse',[CourseController::class,'storeCourse'])->name('admin.storeCourse')->middleware(['auth','role:admin,teacher'  ]);

Route::get('/admin/edit/course/{id}',[CourseController::class,'edit'])->name('admin.editCourse')->middleware(['auth','role:admin']);
Route::put('/admin/edit/course/{id}/update',[CourseController::class,'update'])->name('admin.updateCourse')->middleware(['auth','role:admin']);

Route::get('/studentDashboard',[StudentController::class,'student'])->name('student.dashboard')->middleware(['auth','role:student']);
Route::get('/course',[CourseController::class,'getAllCourses'])->name('course');
Route::get('/course/search',[CourseController::class,'search'])->name('course.search');


Route::get('/manga',[AdminController::class,'manga'])->name('manga');

Route::get('/courseDetail/{id}',[StudentController::class,'showDetail'])->name('courseDetail')->middleware(['auth']);

Route::post('/courseDetail/{course}/enroll',[StudentController::class,'enroll'])->name('enroll')->middleware(['auth']);

Route::delete('/studentDashboard/remove/{course}',[StudentController::class,'deEnroll'])->name('deEnroll')->middleware(['auth']);








require __DIR__.'/auth.php';
