<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function student()
    {   
        $user = Auth::user();
        return view('student.studentDashboard',compact('user'));
    }
}
