<x-app-layout>


    <div class="container-fluid py-4">
        <div class="row g-4">
            <form action="{{ route('course.search') }}" method="GET" class="mb-4">
                <div class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="Search courses..." value="{{ request('search') }}">
                    <button class="btn btn-primary" type="submit">
                        <i class="bi bi-search"></i> Search
                    </button>
                </div>
            </form>

            @forelse ($course as $value)
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm h-100 hover-scale">
                    <div class="card-body text-center p-4">
                        @if($value->pic)
                        <img src="{{ $value->pic }}" alt="Course Image" class="img-fluid rounded mb-3" style="height: 120px; width: auto; max-width: 100%; display:flex; align-items:center;">
                        @else
                        <div class="bg-light rounded d-flex align-items-center justify-content-center mb-3" style="height: 120px;">
                            <i class="bi bi-book text-muted" style="font-size: 3rem;"></i>
                        </div>
                        @endif
                        
                        <h5 class="card-title fw-semibold mb-2">{{ $value->title ?? 'Untitled Course' }}</h5>
                        
                        <div class="d-flex justify-content-center gap-3 mb-3">
                            <span class="badge bg-primary bg-opacity-10 text-primary">
                                {{ $value->category ?? 'N/A' }}
                            </span>
                        </div>
                        
                        <a href="{{ route('courseDetail', $value->id) }}" class="btn btn-outline-primary w-100 d-flex align-items-center justify-content-center">
                            View Details <i class="bi bi-chevron-right ms-2"></i>
                        </a>
                        <p class="text-muted mt-2">Users Enrolled: {{ $value->users_count }}</p>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-body text-center py-5">
                        <i class="bi bi-book text-muted" style="font-size: 3rem;"></i>
                        <h5 class="mt-3">No courses available</h5>
                        <p class="text-muted">Check back later for new courses</p>
                    </div>
                </div>
            </div>
            @endforelse
        </div>
    </div>

    <style>
        .hover-scale {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .hover-scale:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
        }
    </style>

   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</x-app-layout>