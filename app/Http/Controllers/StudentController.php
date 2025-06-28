<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Course;

class StudentController extends Controller
{
    public function student()
    {   
        $user = Auth::user();
             

        $courses = $user->courses;

        return view('student.studentDashboard',compact('courses','user'));
  
    }


    public function showDetail($id){
        $selected_course = Course::findorFail($id);
        
        return view('course_details',compact('selected_course'));
    }

    public function enroll(Course $course){
        $user = Auth::user();
  

        $user->courses()->attach($course->id);

        return redirect('home');
    }

    

}
