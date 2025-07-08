<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="h4 fw-semibold mb-0 text-dark">
                <i class="bi bi-people-fill me-2"></i> {{ __('User Management') }}
            </h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Users</li>
                </ol>
            </nav>
        </div>
    </x-slot>

    <div class="container-fluid py-4">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white border-0 py-3">
                <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
                    <div>
                        <h5 class="mb-0 fw-semibold">
                            <i class="bi bi-person-lines-fill me-2"></i> Manage Users
                        </h5>
                        <div class="d-flex gap-4 mt-2 flex-wrap">
                            <span class="badge bg-primary bg-opacity-10 text-primary">
                                <i class="bi bi-people me-1"></i> Total: {{ $count_users }}
                            </span>
                            <span class="badge bg-success bg-opacity-10 text-success">
                                <i class="bi bi-shield-lock me-1"></i> Admins: {{ $count_admins }}
                            </span>
                         
                            <span class="badge bg-secondary bg-opacity-10 text-secondary">
                                <i class="bi bi-person me-1"></i> Students: {{ $count_students ?? 0 }}
                            </span>
                        </div>
                    </div>
                    <div class="d-flex gap-2">
                        <form action="{{ route('admin.users') }}" method="GET" class="d-flex">
                            <div class="input-group input-group-sm" style="width: 200px;">
                                <input type="text" name="search" class="form-control" 
                                       placeholder="Search users..." value="{{ request('search') }}">
                                <button class="btn btn-outline-secondary" type="submit">
                                    <i class="bi bi-search"></i>
                                </button>
                            </div>
                        </form>
                        <a href="{{ route('admin.create') }}" class="btn btn-success btn-sm">
                            <i class="bi bi-plus-lg me-1"></i> Add User
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead class="table-light">
                            <tr>
                                <th class="ps-4">ID</th>
                                <th>USER</th>
                                <th>EMAIL</th>
                                <th>ROLE</th>
                                <th>STATUS</th>
                                <th class="text-end pe-4">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($users as $user)
                            <tr>
                                <td class="ps-4">{{ $user->id }}</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        
                                        <div class="bg-light rounded-circle d-flex align-items-center justify-content-center me-2" 
                                             style="width: 32px; height: 32px;">
                                            <i class="bi bi-person-fill text-primary"></i>
                                        </div>
                                        
                                        <div>
                                            <div class="fw-semibold">{{ $user->name }}</div>
                                        
                                        </div>
                                    </div>
                                </td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @if($user->role == 'admin')
                                        <span class="badge bg-success">
                                            <i class="bi bi-shield-lock me-1"></i> Admin
                                        </span>
                                    @elseif($user->role == 'teacher')
                                        <span class="badge bg-info">
                                            <i class="bi bi-person-video3 me-1"></i> Teacher
                                        </span>
                                    @else
                                        <span class="badge bg-primary">
                                            <i class="bi bi-person me-1"></i> Student
                                        </span>
                                    @endif
                                </td>
                                <td>
                                    @if($user->email_verified_at)
                                        <span class="badge bg-success bg-opacity-10 text-success">
                                            <i class="bi bi-check-circle me-1"></i> Verified
                                        </span>
                                    @else
                                        <span class="badge bg-warning bg-opacity-10 text-warning">
                                            <i class="bi bi-exclamation-triangle me-1"></i> Unverified
                                        </span>
                                    @endif
                                </td>
                                <td class="text-end pe-4">
                                    <div class="d-flex justify-content-end gap-2">
                                    
                                        <a href="{{ route('admin.edit', $user->id) }}" 
                                           class="btn btn-sm btn-outline-warning"
                                           data-bs-toggle="tooltip" title="Edit">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <form action="{{ route('admin.delete', $user->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger"
                                                    data-bs-toggle="tooltip" title="Delete"
                                                    @if($user->role == 'admin') disabled @endif
                                                    onclick="return confirm('Are you sure you want to delete this user?')">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="text-center py-5">
                                    <i class="bi bi-people text-muted" style="font-size: 3rem;"></i>
                                    <h5 class="mt-3">No users found</h5>
                                    <p class="text-muted">@if(request('search'))Try different search terms @else Get started by adding your first user @endif</p>
                                    <a href="{{ route('admin.create') }}" class="btn btn-success mt-2">
                                        <i class="bi bi-plus-lg me-1"></i> Add User
                                    </a>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            
           
        </div>
    </div>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        
        document.addEventListener('DOMContentLoaded', function() {
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl)
            });
        });
    </script>
</x-app-layout>