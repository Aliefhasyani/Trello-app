<x-app-layout>


    <div class="container-fluid py-4">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card border-0 shadow-sm">
                    <div class="card-header bg-white border-0 py-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="mb-0 fw-semibold">
                                <i class="bi bi-journal-bookmark me-2"></i> My Enrolled Courses
                            </h5>
                            <span class="badge bg-primary">
                                <i class="bi bi-person me-1"></i> {{ $user->name }}
                            </span>
                        </div>
                    </div>
                    
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th class="ps-4"><i class="bi bi-book me-1"></i> Course</th>
                                        <th class="text-end pe-4"><i class="bi bi-gear me-1"></i> Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($courses as $course)
                                    <tr>
                                        <td class="ps-4">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 me-3">
                                                    <i class="bi bi-journal-text fs-4 text-primary"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <strong>{{ $course->title }}</strong>
                                                    <div class="text-muted small">{{ $course->category }}</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end pe-4">
                                            <form action="{{ route('deEnroll', $course->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-danger"
                                                    onclick="return confirm('Are you sure you want to unenroll from this course?')">
                                                    <i class="bi bi-x-circle me-1"></i> Unenroll
                                                </button>
                                            </form>
                                            <a href="{{ route('courseDetail', $course->id) }}" class="btn btn-sm btn-outline-primary ms-2">
                                                <i class="bi bi-eye me-1"></i> View
                                            </a>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="2" class="text-center py-5">
                                            <i class="bi bi-journal-x text-muted" style="font-size: 3rem;"></i>
                                            <h5 class="mt-3">No Enrolled Courses</h5>
                                            <p class="text-muted">You haven't enrolled in any courses yet</p>
                                            <a href="{{ route('course') }}" class="btn btn-primary mt-2">
                                                <i class="bi bi-book me-1"></i> Browse Courses
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
        </div>
    </div>

    <style>
        .table-hover tbody tr:hover {
            background-color: rgba(var(--bs-primary-rgb), 0.05);
        }
    </style>

 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
</x-app-layout>