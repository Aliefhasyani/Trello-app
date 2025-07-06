<x-app-layout>
    <x-slot name="header">
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center py-3">
                <div class="d-flex align-items-center">
                    <i class="bi bi-shield-lock fs-4 text-primary me-2"></i>
                    <h1 class="h4 mb-0 fw-semibold text-dark">
                        {{ __('Admin Panel') }}
                    </h1>
                </div>
                
                <div class="d-flex gap-2">
                    <a href="{{ route('admin.users') }}" class="btn btn-outline-primary d-flex align-items-center py-2 px-3">
                        <i class="bi bi-people-fill me-2"></i>
                        Users
                    </a>
                    <a href="{{ route('admin.courses') }}" class="btn btn-outline-primary d-flex align-items-center py-2 px-3">
                        <i class="bi bi-book-half me-2"></i>
                        Courses
                    </a>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="container-fluid py-4">
        <div class="row g-4">
         
            <div class="col-md-6">
                <div class="card border-0 shadow-sm h-100 hover-scale">
                    <div class="card-body text-center p-4">
                        <div class="icon-wrapper bg-primary bg-opacity-10 rounded-circle p-3 mb-3 mx-auto" style="width: 60px; height: 60px;">
                            <i class="bi bi-people-fill fs-3 text-primary"></i>
                        </div>
                        <h3 class="h5 mb-2 fw-semibold">User Management</h3>
                        <p class="text-muted mb-3">Manage all system users and permissions</p>
                        <a href="{{ route('admin.users') }}" class="btn btn-outline-primary px-4">
                            <span class="d-inline-flex align-items-center">
                                Manage Users <i class="bi bi-chevron-right ms-2"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            
          
            <div class="col-md-6">
                <div class="card border-0 shadow-sm h-100 hover-scale">
                    <div class="card-body text-center p-4">
                        <div class="icon-wrapper bg-success bg-opacity-10 rounded-circle p-3 mb-3 mx-auto" style="width: 60px; height: 60px;">
                            <i class="bi bi-book-half fs-3 text-success"></i>
                        </div>
                        <h3 class="h5 mb-2 fw-semibold">Course Management</h3>
                        <p class="text-muted mb-3">Create and organize course content</p>
                        <a href="{{ route('admin.courses') }}" class="btn btn-outline-success px-4">
                            <span class="d-inline-flex align-items-center">
                                Manage Courses <i class="bi bi-chevron-right ms-2"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .hover-scale {
            transition: all 0.2s ease;
            border: 1px solid rgba(0,0,0,0.05);
        }
        .hover-scale:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(0,0,0,0.1);
        }
        .icon-wrapper {
            transition: all 0.2s ease;
        }
        .card:hover .icon-wrapper {
            background-color: rgba(var(--bs-primary-rgb), 0.15) !important;
        }
        .card:hover .icon-wrapper.text-success {
            background-color: rgba(var(--bs-success-rgb), 0.15) !important;
        }
    </style>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</x-app-layout>