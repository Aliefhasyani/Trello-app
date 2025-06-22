<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function admin()
    {   
        $user = Auth::user();
        return view('admin.adminDashboard',compact('user'));
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
}
