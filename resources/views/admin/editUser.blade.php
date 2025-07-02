<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Controls') }}
        </h2>
    </x-slot>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <strong><h4 class="mb-4">Edit a  User</h4></strong>
                         <form method="POST" action="{{route('admin.update',['id'=>$user->id])}}">
                            @csrf
                            <div class="mb-3">
                                <strong><label for="name" class="form-label">Username</label></strong>
                                <input type="text" class="form-control" id="name"  name="name" placeholder="Enter full name" value="{{old('username',$user->name)}}" required>
                            </div>
                            <div class="mb-3">
                                <strong><label for="email" class="form-label">Email</label></strong>
                                <input type="email" class="form-control" id="email"  name="email" placeholder="example@gmail.com" value="{{old('username',$user->email)}}" required>
                            </div>
                            <div class="mb-3">
                                <strong><label for="password" class="form-label">Password</label></strong>
                                <input type="password" class="form-control" id="password"  name="password" placeholder="Super Secret Password" required>
                            </div>
                          <div class="mb-3">
                            <strong><label for="role" class="form-label">Role</label></strong>
                                <select name="role" id="role" class="form-select" required>
                                    <option value="" disabled selected>Select a role</option>
                                    <option value="admin">Admin</option>
                                    <option value="teacher">Teacher</option>
                                    <option value="student">Student</option>
                                </select>
                            </div>
                                    
                                
                           
                               
                                <button type="submit" class="btn btn-primary w-100">Edit User</button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>