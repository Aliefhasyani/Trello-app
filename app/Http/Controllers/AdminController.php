<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\User;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function admin()
    {   
        $user = Auth::user();

        $total_users = User::count();
        $total_courses = Course::count();
        $total_admin = User::where('role','admin')->count();

        return view('admin.adminDashboard',compact('user','total_users','total_courses','total_admin'));
    }

    public function getCourses(){
        $response = Http::withHeaders([
            "x-rapidapi-host" => "udemy-paid-courses-for-free-api.p.rapidapi.com",
		    "x-rapidapi-key" => "2a5fcb6cacmsh3b74197809858aep180f5ejsnd185175bebfd"
        ])->withOptions([
            'verify' => false,
        ])->get('https://udemy-paid-courses-for-free-api.p.rapidapi.com/rapidapi/courses/?page=1&page_size=10');

        $courses = $response->json();

        return view('home',compact('courses'));


    }

   public function postData(){
        $response = Http::withHeaders([
            "x-rapidapi-host" => "udemy-paid-courses-for-free-api.p.rapidapi.com",
            "x-rapidapi-key" => "2a5fcb6cacmsh3b74197809858aep180f5ejsnd185175bebfd"
        ])->withOptions([
            'verify' => false,
        ])->get('https://udemy-paid-courses-for-free-api.p.rapidapi.com/rapidapi/courses/?page=1&page_size=10');

        $courses = $response->json();
        
        
        $courseList = $courses['courses'] ?? [];

        foreach ($courseList as $course) {
            Course::updateOrCreate(
                ['course_url' => $course['clean_url']], 
                [
                    'title' => $course['name'],
                    'category' => $course['category'],
                    'pic' => $course['image'],
                    'org_price' => $course['actual_price_usd'],
                    'discount_price' => $course['sale_price_usd'],
                    'coupon' => $course['url'],
                    'desc_text' => $course['description'],
                    'expiry' => $course['sale_end'],
                    'savedtime' => now(),
                ]
            );
        }

        return response()->json(['message' => 'Courses imported successfully']);
    }

    public function getAllCOurses(){
        $course = Course::all();

        return view('home',compact('course'));
    }
    
}
