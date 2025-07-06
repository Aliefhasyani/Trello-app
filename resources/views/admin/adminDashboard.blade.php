<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between align-items-center">
       
            <div class="text-muted small">
                Welcome back, {{ $user->name }}
            </div>
        </div>
    </x-slot>

    <div class="container-fluid py-4">
        <div class="row g-4">
           
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <h6 class="text-uppercase text-muted small mb-1">Total Users</h6>
                                <h3 class="mb-0 fw-bold">{{ $total_users }}</h3>
                            </div>
                            <div class="bg-primary bg-opacity-10 p-3 rounded">
                                <i class="bi bi-people-fill text-primary fs-4"></i>
                            </div>
                        </div>
                        <div class="mt-3">
                            <a href="{{route('admin.users')}}"class="text-decoration-none small">
                                View all users <i class="bi bi-arrow-right-short"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <h6 class="text-uppercase text-muted small mb-1">Total Admins</h6>
                                <h3 class="mb-0 fw-bold">{{ $total_admin }}</h3>
                            </div>
                            <div class="bg-success bg-opacity-10 p-3 rounded">
                                <i class="bi bi-shield-lock text-success fs-4"></i>
                            </div>
                        </div>
                        <div class="mt-3">
                            <a href="{{route('admin.users')}}" class="text-decoration-none small">
                                Manage admins <i class="bi bi-arrow-right-short"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

       
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <h6 class="text-uppercase text-muted small mb-1">Total Courses</h6>
                                <h3 class="mb-0 fw-bold">{{ $total_courses }}</h3>
                            </div>
                            <div class="bg-info bg-opacity-10 p-3 rounded">
                                <i class="bi bi-book-half text-info fs-4"></i>
                            </div>
                        </div>
                        <div class="mt-3">
                            <a href="{{route('admin.courses')}}" class="text-decoration-none small">
                                View courses <i class="bi bi-arrow-right-short"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

     
    </div>

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</x-app-layout>