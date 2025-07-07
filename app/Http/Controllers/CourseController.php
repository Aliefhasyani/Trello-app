<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use \Illuminate\Validation\ValidationException; 

class CourseController extends Controller
{
    public function getCourses(){
        $courses = Course::all();

        return view('admin.coursesManagement',compact('courses'));
    }

    public function deleteCourse($id){
        $course = Course::findOrFail($id);

        $course->delete();

        return redirect()->route('admin.courses');
    }
    
    public function createCourse(){
        return view('admin.createCourse');
    }

    public function storeCourse(Request $request){
        $course = $request->validate([
            'course_url' => 'required|string|max:255|unique:courses,course_url',
            'title' => 'required|string|max:255',
            'category' => 'nullable|string|max:255',
            'pic' => 'nullable|string|max:255', 
            'org_price' => 'nullable|numeric|min:0',
            'discount_price' => 'nullable|numeric|min:0|lte:org_price',
            'desc_text' => 'nullable|string',
            'coupon' => 'nullable|string', 
            'expiry' => 'nullable|date',
        ]);

        $course['savedtime'] = now();
        Course::create($course);
        
        return redirect()->route('admin.courses');
    }
    
    public function getAllCourses() {
        $course = Course::withCount('users')->get(); 
        
        return view('course', compact('course'));
    }


    public function edit($id){
        $course = Course::findOrFail($id);

        return view('admin.editCourse',compact('course'));
    }

    public function update(Request $request, $id){
        $course = Course::findOrFail($id);

        try {
            $data = $request->validate([
                'course_url' => 'required|string|max:255|unique:courses,course_url,' . $id,
                'title' => 'required|string|max:255',
                'category' => 'nullable|string|max:255',
                'org_price' => 'nullable|numeric|min:0',
                'discount_price' => 'nullable|numeric|min:0|lte:org_price',
                'desc_text' => 'nullable|string',
                'coupon' => 'nullable|string', 
                'expiry' => 'nullable|date',
            ]);
        } catch (ValidationException $e) {
            dd($e->validator->errors()->all());
        }

        $course->update($data);
        
        return redirect()->route('admin.courses');
    }

    public function search(Request $request){
        $item = $request->search;

        $course = Course::where('title','like','%'.$item.'%')->get();

        return view('course',compact('item','course'));
    }



}
