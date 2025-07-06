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
                    <div>
                        <a href="{{ route('admin.createCourse') }}" class="btn btn-success btn-sm">
                            <i class="bi bi-plus-lg me-1"></i> Add Course
                        </a>
                        <a href="{{ url()->previous() }}" class="btn btn-outline-secondary btn-sm ms-2">
                            <i class="bi bi-arrow-left me-1"></i> Back
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
                                <th class="text-end pe-4">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($courses as $course)
                            <tr>
                                <td class="ps-4">{{ $course->id }}</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-2">
                                            <div class="bg-light rounded p-1" style="width: 30px; height: 30px;">
                                                <i class="bi bi-book text-primary"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            {{ $course->title }}
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="badge bg-info bg-opacity-10 text-info">
                                        {{ $course->category }}
                                    </span>
                                </td>
                                <td>${{ number_format($course->org_price, 2) }}</td>
                                <td class="text-end pe-4">
                                    <div class="d-flex justify-content-end gap-2">
                                        <a href="{{ route('admin.editCourse', $course->id) }}" class="btn btn-sm btn-outline-warning">
                                            <i class="bi bi-pencil"></i> Edit
                                        </a>
                                        <form action="{{ route('admin.delete', $course->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger" 
                                                    onclick="return confirm('Are you sure you want to delete this course?')">
                                                <i class="bi bi-trash"></i> Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="text-center py-5">
                                    <i class="bi bi-book text-muted" style="font-size: 3rem;"></i>
                                    <h5 class="mt-3">No courses found</h5>
                                    <p class="text-muted">Get started by adding your first course</p>
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
            
            @if($courses instanceof \Illuminate\Pagination\LengthAwarePaginator && $courses->total() > $courses->perPage())
            <div class="card-footer bg-white border-0 py-3">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="text-muted small">
                        Showing {{ $courses->firstItem() }} to {{ $courses->lastItem() }} of {{ $courses->total() }} entries
                    </div>
                    <div>
                        {{ $courses->links() }}
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</x-app-layout>