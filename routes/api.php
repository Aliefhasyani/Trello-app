<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::post('/postData', [AdminController::class, 'postData']);