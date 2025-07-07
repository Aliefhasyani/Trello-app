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
                            3
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="container-fluid py-4">
        
        <div class="row g-4 mb-4">
            <div class="col-md-3">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-muted mb-2">Total Users</h6>
                                <h3 class="mb-0 fw-bold">1,248</h3>
                                <small class="text-success"><i class="bi bi-arrow-up"></i> 12.5% from last month</small>
                            </div>
                            <div class="bg-primary bg-opacity-10 rounded p-3">
                                <i class="bi bi-people-fill fs-4 text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-muted mb-2">Active Courses</h6>
                                <h3 class="mb-0 fw-bold">48</h3>
                                <small class="text-success"><i class="bi bi-arrow-up"></i> 3 new this week</small>
                            </div>
                            <div class="bg-success bg-opacity-10 rounded p-3">
                                <i class="bi bi-book-half fs-4 text-success"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-muted mb-2">Pending Requests</h6>
                                <h3 class="mb-0 fw-bold">7</h3>
                                <small class="text-warning">Requires attention</small>
                            </div>
                            <div class="bg-warning bg-opacity-10 rounded p-3">
                                <i class="bi bi-exclamation-triangle fs-4 text-warning"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-muted mb-2">System Health</h6>
                                <h3 class="mb-0 fw-bold">100%</h3>
                                <small class="text-success">All systems operational</small>
                            </div>
                            <div class="bg-info bg-opacity-10 rounded p-3">
                                <i class="bi bi-heart-pulse fs-4 text-info"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    
        <div class="row g-4 mb-4">
            <div class="col-md-6">
                <div class="card border-0 shadow-sm h-100 hover-scale">
                    <div class="card-header bg-white border-0 pb-0">
                        <h3 class="h5 mb-0 fw-semibold">User Management</h3>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-4">
                            <div class="icon-wrapper bg-primary bg-opacity-10 rounded-circle p-3 me-3" style="width: 60px; height: 60px;">
                                <i class="bi bi-people-fill fs-3 text-primary"></i>
                            </div>
                            <div>
                                <p class="text-muted mb-1">Manage all system users, roles and permissions</p>
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
                        
                        <div class="border-top pt-3">
                            <h6 class="text-muted mb-3">Recent Activity</h6>
                            <div class="list-group list-group-flush">
                                <a href="#" class="list-group-item list-group-item-action border-0 px-0 py-2">
                                    <div class="d-flex justify-content-between">
                                        <span><i class="bi bi-person-plus text-success me-2"></i> New user registered</span>
                                        <small class="text-muted">2 min ago</small>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action border-0 px-0 py-2">
                                    <div class="d-flex justify-content-between">
                                        <span><i class="bi bi-person-x text-danger me-2"></i> User account deactivated</span>
                                        <small class="text-muted">1 hour ago</small>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="card border-0 shadow-sm h-100 hover-scale">
                    <div class="card-header bg-white border-0 pb-0">
                        <h3 class="h5 mb-0 fw-semibold">Course Management</h3>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-4">
                            <div class="icon-wrapper bg-success bg-opacity-10 rounded-circle p-3 me-3" style="width: 60px; height: 60px;">
                                <i class="bi bi-book-half fs-3 text-success"></i>
                            </div>
                            <div>
                                <p class="text-muted mb-1">Create, organize and manage course content</p>
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
                        
                        <div class="border-top pt-3">
                            <h6 class="text-muted mb-3">Recent Activity</h6>
                            <div class="list-group list-group-flush">
                                <a href="#" class="list-group-item list-group-item-action border-0 px-0 py-2">
                                    <div class="d-flex justify-content-between">
                                        <span><i class="bi bi-file-earmark-plus text-success me-2"></i> New course added</span>
                                        <small class="text-muted">4 hours ago</small>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action border-0 px-0 py-2">
                                    <div class="d-flex justify-content-between">
                                        <span><i class="bi bi-pencil-square text-primary me-2"></i> Course updated</span>
                                        <small class="text-muted">1 day ago</small>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    
        <div class="row">
            <div class="col-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-header bg-white border-0">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="h5 mb-0 fw-semibold">Recent System Activity</h3>
                            <a href="#" class="btn btn-sm btn-outline-secondary">View All</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>Event</th>
                                        <th>User</th>
                                        <th>IP Address</th>
                                        <th>Timestamp</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>User Login</td>
                                        <td>admin@example.com</td>
                                        <td>192.168.1.1</td>
                                        <td>2 minutes ago</td>
                                        <td><span class="badge bg-success">Success</span></td>
                                    </tr>
                                    <tr>
                                        <td>Course Updated</td>
                                        <td>teacher@example.com</td>
                                        <td>192.168.1.45</td>
                                        <td>15 minutes ago</td>
                                        <td><span class="badge bg-success">Success</span></td>
                                    </tr>
                                    <tr>
                                        <td>Failed Login Attempt</td>
                                        <td>unknown@example.com</td>
                                        <td>84.23.156.7</td>
                                        <td>1 hour ago</td>
                                        <td><span class="badge bg-danger">Failed</span></td>
                                    </tr>
                                </tbody>
                            </table>
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
        .badge {
            font-size: 0.65em;
            padding: 0.35em 0.65em;
        }
        .table-hover tbody tr {
            transition: all 0.15s ease;
        }
        .table-hover tbody tr:hover {
            background-color: rgba(var(--bs-primary-rgb), 0.03);
        }
    </style>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
   
</x-app-layout>