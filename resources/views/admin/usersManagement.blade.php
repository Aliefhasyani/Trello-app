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
                                        <button class="btn btn-success btn-m mb-3">
                                            <a href="{{route('admin.create')}}">
                                                Add User
                                            </a>
                                        </button>
                                    </strong>
                                    
                                  <tr>
                                      <th scope="col">ID</th>
                                      <th scope="col">NAME</th>
                                      <th scope="col">EMAIL</th>
                                      <th scope="col">ROLE</th>
                                      <th scope="col">ACTION</th>
                                      
                                  </tr>
                                        
                            </thead>
                            <tbody>
                                @foreach($users as $value)
                                <tr>
                                    <th scope="row">{{$value ->id}}</th>
                                    <td><strong>{{$value ->name}}</strong></td>
                                    <td><strong>{{$value->email}}</strong></td>
                                    <td><strong>{{$value->role}}</strong></td>
                                <td>
                                    <form action="{{ route('admin.delete', ['id' => $value->id]) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        @if($value->role == 'admin')
                                            <button class="btn btn-danger btn-m" type="submit" disabled>Delete</button>
                                        @else
                                            <button class="btn btn-danger btn-m" type="submit">Delete</button>
                                        @endif
                                    </form>

                                    <a href="{{route('admin.edit',['id'=>$value->id])}}" method="GET" class="btn btn-warning btn-sm" >Edit</button>
                                </td>
                                  

                                     
                                            
                                              
                                        
                                    
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a href="{{url()->previous()}}" class="btn btn-dark btn-sm" >Previous Page<a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>