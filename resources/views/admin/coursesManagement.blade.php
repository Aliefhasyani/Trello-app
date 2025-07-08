<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="h4 fw-semibold mb-0 text-dark">
                <i class="bi bi-gear me-2"></i> {{ __('Admin Panel') }}
            </h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Courses</li>
                </ol>
            </nav>
        </div>
    </x-slot>

    <div class="container-fluid py-4">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white border-0 py-3">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="mb-0 fw-semibold">
                        <i class="bi bi-book me-2"></i> Courses Management
                    </h5>
                    <div class="d-flex gap-2">
                        <a href="{{ route('admin.createCourse') }}" class="btn btn-success btn-sm">
                            <i class="bi bi-plus-lg me-1"></i> Add Course
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
                                <th>COURSE TITLE</th>
                                <th>CATEGORY</th>
                                <th>PRICE</th>
                                <th>STATUS</th>
                                <th class="text-end pe-4">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($courses as $course)
                            <tr>
                                <td class="ps-4">{{ $course->id }}</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        @if($course->pic)
                                        <img src="{{ $course->pic }}" alt="{{ $course->title }}" 
                                             class="rounded me-2" width="40" height="40" style="object-fit: cover;">
                                        @else
                                        <div class="bg-light rounded d-flex align-items-center justify-content-center me-2" 
                                             style="width: 40px; height: 40px;">
                                            <i class="bi bi-book text-primary"></i>
                                        </div>
                                        @endif
                                        <div>
                                            <div class="fw-semibold">{{ $course->title }}</div>
                                            <div class="text-muted small">{{ Str::limit($course->desc_text, 50) }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="badge bg-info bg-opacity-10 text-info">
                                        {{ $course->category ?? 'Uncategorized' }}
                                    </span>
                                </td>
                                <td>
                                    @if($course->discount_price)
                                    <div>
                                        
                                        <span class=" text-muted small ms-1">${{ number_format($course->org_price,1) }}</span>
                                    </div>
                                    @else
                                    <span class="fw-semibold">${{ number_format($course->org_price, 2) }}</span>
                                    @endif
                                </td>
                                <td>
                                    @if($course->expiry && now()->gt($course->expiry))
                                    <span class="badge bg-danger bg-opacity-10 text-danger">Expired</span>
                                    @else
                                    <span class="badge bg-success bg-opacity-10 text-success">Active</span>
                                    @endif
                                </td>
                                <td class="text-end pe-4">
                                    <div class="d-flex justify-content-end gap-2">
                                        <a href="{{ route('courseDetail', $course->id) }}" class="btn btn-sm btn-outline-primary" 
                                           data-bs-toggle="tooltip" title="View">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="{{ route('admin.editCourse', $course->id) }}" class="btn btn-sm btn-outline-warning"
                                           data-bs-toggle="tooltip" title="Edit">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <form action="{{ route('admin.deleteCourse', $course->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger" 
                                                    data-bs-toggle="tooltip" title="Delete"
                                                    onclick="return confirm('Are you sure you want to delete this course?')">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="text-center py-5">
                                  
                                    <a href="{{ route('admin.createCourse') }}" class="btn btn-success mt-2">
                                        <i class="bi bi-plus-lg me-1"></i> Add Course
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