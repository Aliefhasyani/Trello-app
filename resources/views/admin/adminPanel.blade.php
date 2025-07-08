<x-app-layout>
    <x-slot name="header">
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center py-3">
                <div class="d-flex align-items-center">
                    <i class="bi bi-shield-lock fs-4 text-primary me-2"></i>
                    <h1 class="h4 mb-0 fw-semibold text-dark">
                        {{ __('Admin Dashboard') }}
                    </h1>
                </div>
                
                <div class="d-flex gap-2">
                    <div class="dropdown">
                        <button class="btn btn-outline-primary d-flex align-items-center py-2 px-3 dropdown-toggle" 
                                type="button" id="quickActionsDropdown" data-bs-toggle="dropdown">
                            <i class="bi bi-lightning-charge-fill me-2"></i>
                            Quick Actions
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="quickActionsDropdown">
                            <li><a class="dropdown-item" href="{{ route('admin.create') }}"><i class="bi bi-person-plus me-2"></i>Add New User</a></li>
                            <li><a class="dropdown-item" href="{{ route('admin.createCourse') }}"><i class="bi bi-file-earmark-plus me-2"></i>Create Course</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i>Settings</a></li>
                        </ul>
                    </div>
                    <button class="btn btn-primary d-flex align-items-center py-2 px-3" id="notificationsBtn">
                        <i class="bi bi-bell-fill me-2"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            0
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="container-fluid py-4">
      
        <div class="row g-4 mb-4">
            <div class="col-md-6">
                <div class="card border-0 shadow-sm h-100 hover-scale">
                    <div class="card-header bg-white border-0 pb-0">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="h5 mb-0 fw-semibold">User Management</h3>
                            <span class="badge bg-primary bg-opacity-10 text-primary fs-6">
                                <i class="bi bi-people-fill me-1"></i> {{ $count_users }} Users
                            </span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="icon-wrapper bg-primary bg-opacity-10 rounded-circle p-3 me-3" style="width: 60px; height: 60px;">
                                <i class="bi bi-people-fill fs-3 text-primary"></i>
                            </div>
                            <div>
                                <p class="text-muted mb-3">Manage all system users, roles and permissions</p>
                                <div class="d-flex gap-2">
                                    <a href="{{ route('admin.users') }}" class="btn btn-primary px-3">
                                        <span class="d-inline-flex align-items-center">
                                            View All <i class="bi bi-chevron-right ms-2"></i>
                                        </span>
                                    </a>
                                    <a href="{{ route('admin.create') }}" class="btn btn-outline-primary px-3">
                                        <span class="d-inline-flex align-items-center">
                                            Add New <i class="bi bi-plus ms-2"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="card border-0 shadow-sm h-100 hover-scale">
                    <div class="card-header bg-white border-0 pb-0">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="h5 mb-0 fw-semibold">Course Management</h3>
                            <span class="badge bg-success bg-opacity-10 text-success fs-6">
                                <i class="bi bi-book-half me-1"></i> {{ $count_courses }} Courses
                            </span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="icon-wrapper bg-success bg-opacity-10 rounded-circle p-3 me-3" style="width: 60px; height: 60px;">
                                <i class="bi bi-book-half fs-3 text-success"></i>
                            </div>
                            <div>
                                <p class="text-muted mb-3">Create, organize and manage course content</p>
                                <div class="d-flex gap-2">
                                    <a href="{{ route('admin.courses') }}" class="btn btn-success px-3">
                                        <span class="d-inline-flex align-items-center">
                                            View All <i class="bi bi-chevron-right ms-2"></i>
                                        </span>
                                    </a>
                                    <a href="{{ route('admin.createCourse') }}" class="btn btn-outline-success px-3">
                                        <span class="d-inline-flex align-items-center">
                                            Add New <i class="bi bi-plus ms-2"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
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
        .card:hover .icon-wrapper.bg-primary {
            background-color: rgba(var(--bs-primary-rgb), 0.15) !important;
        }
        .card:hover .icon-wrapper.bg-success {
            background-color: rgba(var(--bs-success-rgb), 0.15) !important;
        }
    </style>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</x-app-layout>