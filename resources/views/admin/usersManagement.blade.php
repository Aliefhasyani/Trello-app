<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Panel') }}
        </h2>
    </x-slot>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h4 class="mb-4">Users Management</h4>
                        <table class="table table-striped table-bordered align-middle">
                            <thead class="table-dark">
                                <strong>
                                    <h4 class="mb-4">Users Registered : {{$count_users}}</h4>
                                    <h4 class="mb-4">Admins Registered : {{$count_admins}}</h4>
                                </strong>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Action</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $value)
                                <tr>
                                    <th scope="row">{{$value ->id}}</th>
                                    <td>{{$value ->name}}</td>
                                    <td>{{$value->email}}</td>
                                    <td>{{$value->role}}</td>
                                    
                                    <td>
                                        <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>