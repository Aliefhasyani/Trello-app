<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\User;
use App\Models\Course;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


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

    
    public function home() {
        $popular_courses = Course::Withcount('users')->orderByDesc('users_count')->take(3)->get();

        return view('home',compact('popular_courses'));
    }

    public function adminPanel(){
        
        return view('admin.adminPanel');
    }


    public function showUsers(){
        $users = User::orderBy('role','asc')->get();
        $count_users = User::count();
        $count_admins = User::where('role','admin')->count();

        return view('admin.usersManagement',compact('users','count_users','count_admins'));
    }

    public function delete($id){
        $user = User::findOrFail($id);

        $user->delete();
        
        return redirect()->route('admin.users');
    }

    public function create(){
        return view('admin.createUser');
    }

    public function store(Request $request){
        $user = $request->validate([
            'name'=>'string|max: 255|required',
            'email'=>'string|required',
            'password'=>'string|max: 255|required',
            'role'=>'in:admin,teacher,student',

        ]);

        $user['password'] = Hash::make($user['password']);

        User::create($user);

        return redirect()->route('admin.users');
    }

    public function edit($id){
        $user = User::findOrFail($id);
        return view('admin.editUser',compact('user'));
    }
    
    public function update(Request $request,$id){
        $user = User::findOrFail($id);

        $data = $request->validate([
            'name' => 'string|max:255|required',
            'email' => 'string|max:255|required',
            'password' => 'string|max:255|required',
            'role' => 'in:admin,teacher,student',
        ]);
        
        $user['password'] = Hash::make($user['password']);

        $user->update($data);


        return redirect()->route('admin.users');
    }

    public function manga(){
        $response = Http::withOptions([
            'verify' => false,
        ])->get("https://api.mangadex.org/manga");

        return response()->json($response->json());
    }

    
    
}
