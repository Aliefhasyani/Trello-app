<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Course;

class StudentController extends Controller
{
    public function student()
    {   
        $user = Auth::user();
        return view('student.studentDashboard',compact('user'));
    }


    public function showDetail($id){
        $selected_course = Course::findorFail($id);
        
        return view('course_details',compact('selected_course'));
    }
}
