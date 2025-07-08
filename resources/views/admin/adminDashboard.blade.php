<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="h5 mb-0">Dashboard Overview</h2>
            <div class="text-muted">
                Welcome back, {{ $user->name }}
            </div>
        </div>
    </x-slot>

    <div class="container-fluid py-4">

        <div class="row g-4 mb-4">
   
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div>
                                <span class="text-muted text-uppercase small">Total Users</span>
                                <h2 class="mb-0 fw-bold">{{ $total_users }}</h2>
                            </div>
                            <div class="bg-primary bg-opacity-10 p-3 rounded-circle">
                                <i class="bi bi-people-fill text-primary fs-4"></i>
                            </div>
                        </div>
                        <a href="{{ route('admin.users') }}" class="btn btn-sm btn-outline-primary mt-auto align-self-start">
                            View all users <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div>
                                <span class="text-muted text-uppercase small">Total Admins</span>
                                <h2 class="mb-0 fw-bold">{{ $total_admin }}</h2>
                            </div>
                            <div class="bg-success bg-opacity-10 p-3 rounded-circle">
                                <i class="bi bi-shield-lock text-success fs-4"></i>
                            </div>
                        </div>
                        <a href="{{ route('admin.users') }}" class="btn btn-sm btn-outline-success mt-auto align-self-start">
                            Manage admins <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div>
                                <span class="text-muted text-uppercase small">Total Courses</span>
                                <h2 class="mb-0 fw-bold">{{ $total_courses }}</h2>
                            </div>
                            <div class="bg-info bg-opacity-10 p-3 rounded-circle">
                                <i class="bi bi-book-half text-info fs-4"></i>
                            </div>
                        </div>
                        <a href="{{ route('admin.courses') }}" class="btn btn-sm btn-outline-info mt-auto align-self-start">
                            View courses <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Quick Actions</h5>
                        <div class="d-flex flex-wrap gap-2">
                            <a href="{{ route('admin.users') }}" class="btn btn-primary">
                                <i class="bi bi-people-fill me-1"></i> Manage Users
                            </a>
                            <a href="{{ route('admin.courses') }}" class="btn btn-info text-white">
                                <i class="bi bi-book-half me-1"></i> Manage Courses
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