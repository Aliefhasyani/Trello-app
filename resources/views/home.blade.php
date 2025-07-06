<x-app-layout>


    <div class="container-fluid py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card border-0 bg-gradient-primary-light shadow-lg overflow-hidden">
                    <div class="row g-0">
                        <div class="col-md-6 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5">
                                <h1 class="display-5 fw-bold mb-3">Welcome to Our Learning Platform!</h1>
                                <p class="lead text-muted mb-4">
                                    Discover new skills, expand your knowledge, and grow with our curated collection of courses.
                                </p>
                                <div class="d-flex gap-3">
                                    <a href="{{ route('course') }}" class="btn btn-primary px-4 py-2">
                                        <i class="bi bi-compass me-2"></i> Explore Courses
                                    </a>
                                    @auth
                                        @if(Auth::user()->role == 'admin')
                                        <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-primary px-4 py-2">
                                            <i class="bi bi-speedometer2 me-2"></i> My Dashboard
                                        </a>
                                        @else
                                        <a href="{{ route('student.dashboard') }}" class="btn btn-outline-primary px-4 py-2">
                                            <i class="bi bi-speedometer2 me-2"></i> My Dashboard
                                        </a>
                                        @endif
                                    @endauth
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-none d-md-block">
                            <div class="h-100" style="background: url('https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1471&q=80') center/cover;"></div>
                        </div>
                    </div>
                </div>

             
                <div class="mt-5">
                    <h3 class="h4 fw-bold mb-4">
                        <i class="bi bi-star-fill text-warning me-2"></i> Popular Courses
                    </h3>
                    <div class="row g-4">
                        @foreach($popular_courses as $course)
                        <div class="col-md-6 col-lg-4">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-img-top overflow-hidden" style="height: 180px;">
                                    @if($course->pic)
                                    <img src="{{ $course->pic }}" alt="{{ $course->title }}" class="img-fluid w-100 h-100 object-fit-cover">
                                    @else
                                    <div class="bg-light d-flex align-items-center justify-content-center h-100">
                                        <i class="bi bi-book text-muted" style="font-size: 3rem;"></i>
                                    </div>
                                    @endif
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title fw-semibold">{{ $course->title }}</h5>
                                    <div class="d-flex justify-content-between align-items-center mt-3">
                                        <span class="badge bg-primary bg-opacity-10 text-primary">
                                            {{ $course->category }}
                                        </span>
                                        <a href="{{ route('courseDetail', $course->id) }}" class="btn btn-sm btn-outline-primary">
                                            View Details
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="row g-4 mt-4">
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body text-center p-4">
                                <div class="icon-wrapper bg-primary bg-opacity-10 rounded-circle p-3 mb-3 mx-auto">
                                    <i class="bi bi-collection-play fs-3 text-primary"></i>
                                </div>
                                <h3 class="h5 fw-semibold mb-2">Diverse Courses</h3>
                                <p class="text-muted mb-0">
                                    Access a wide range of topics from expert instructors.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body text-center p-4">
                                <div class="icon-wrapper bg-success bg-opacity-10 rounded-circle p-3 mb-3 mx-auto">
                                    <i class="bi bi-people fs-3 text-success"></i>
                                </div>
                                <h3 class="h5 fw-semibold mb-2">Community Learning</h3>
                                <p class="text-muted mb-0">
                                    Join discussions and learn with peers.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body text-center p-4">
                                <div class="icon-wrapper bg-info bg-opacity-10 rounded-circle p-3 mb-3 mx-auto">
                                    <i class="bi bi-award fs-3 text-info"></i>
                                </div>
                                <h3 class="h5 fw-semibold mb-2">Certification</h3>
                                <p class="text-muted mb-0">
                                    Earn certificates to showcase your skills.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .bg-gradient-primary-light {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9f5ff 100%);
        }
        .icon-wrapper {
            width: 60px;
            height: 60px;
        }
        .card {
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .object-fit-cover {
            object-fit: cover;
        }
    </style>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</x-app-layout>