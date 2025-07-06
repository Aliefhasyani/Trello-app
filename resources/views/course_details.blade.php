<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="h4 fw-semibold mb-0 text-dark">
                <i class="bi bi-book me-2"></i> {{ __('Course Details') }}
            </h2>
            <a href="{{ url()->previous() }}" class="btn btn-outline-secondary btn-sm">
                <i class="bi bi-arrow-left me-1"></i> Back
            </a>
        </div>
    </x-slot>

    <div class="container-fluid py-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                  
                        <div class="text-center mb-4">
                            @if($selected_course->pic)
                                <img src="{{ $selected_course->pic }}" alt="{{ $selected_course->title }}" 
                                     class="img-fluid rounded" style="max-height: 300px; width: auto;">
                            @else
                                <div class="bg-light rounded d-flex align-items-center justify-content-center" 
                                     style="height: 200px;">
                                    <i class="bi bi-book text-muted" style="font-size: 3rem;"></i>
                                </div>
                            @endif
                        </div>

 
                        <div class="text-center mb-4">
                            <h1 class="h3 fw-bold mb-2">{{ $selected_course->title }}</h1>
                            <span class="badge bg-primary bg-opacity-10 text-primary mb-3">
                                {{ $selected_course->category }}
                            </span>
                        </div>

                
                        <div class="mb-4 p-3 bg-light rounded">
                            <h4 class="h5 fw-semibold mb-3">About This Course</h4>
                            <p class="mb-0">{{ $selected_course->desc_text }}</p>
                        </div>

            
                        <div class="text-center mt-4">
                            @if(Auth::user()->role != 'admin')
                                <form action="{{ route('enroll', $selected_course->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-success px-4 py-2">
                                        <i class="bi bi-cart-plus me-2"></i> Enroll Now
                                    </button>
                                </form>
                            @endif
                            
                            <a href="{{ url()->previous() }}" class="btn btn-outline-secondary px-4 py-2 ms-2">
                                <i class="bi bi-arrow-left me-2"></i> Back to Courses
                            </a>
                            <p class="mt-3 text-muted">Users Enrolled: {{ $selected_course->users_count }}</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</x-app-layout>