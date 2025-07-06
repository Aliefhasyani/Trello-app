<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="h4 fw-semibold text-dark mb-0">
                <i class="bi bi-book me-2"></i> {{ __('Admin Controls') }}
            </h2>
        </div>
    </x-slot>

    <div class="container-fluid py-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm">
                    <div class="card-header bg-white border-0 py-3">
                        <h4 class="mb-0 fw-semibold">
                            <i class="bi bi-plus-circle me-2"></i> Create New Course
                        </h4>
                    </div>
                    
                    <div class="card-body pt-4">
                        <form method="POST" action="{{ route('admin.storeCourse') }}" class="needs-validation" novalidate>
                            @csrf
                            
    
                            <div class="mb-4">
                                <label for="course_url" class="form-label fw-medium">Course URL Slug</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="bi bi-link-45deg"></i>
                                    </span>
                                    <input type="text" class="form-control" id="course_url" name="course_url" 
                                           placeholder="laravel-bootcamp-2025" required>
                                </div>
                                <div class="form-text">Use lowercase with hyphens (no spaces)</div>
                            </div>
                            
          
                            <div class="mb-4">
                                <label for="title" class="form-label fw-medium">Course Title</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="bi bi-card-heading"></i>
                                    </span>
                                    <input type="text" class="form-control" id="title" name="title" 
                                           placeholder="Complete Laravel Bootcamp" required>
                                </div>
                            </div>
                            
            
                            <div class="mb-4">
                                <label for="category" class="form-label fw-medium">Category</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="bi bi-tag"></i>
                                    </span>
                                    <input type="text" class="form-control" id="category" name="category" 
                                           placeholder="Web Development">
                                </div>
                            </div>
                               
                            <div class="row g-3 mb-4">
                                <div class="col-md-6">
                                    <label for="org_price" class="form-label fw-medium">Original Price ($)</label>
                                    <div class="input-group">
                                        <span class="input-group-text">$</span>
                                        <input type="number" class="form-control" id="org_price" name="org_price" 
                                               step="0.01" placeholder="499.00" min="0">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="discount_price" class="form-label fw-medium">Discount Price ($)</label>
                                    <div class="input-group">
                                        <span class="input-group-text">$</span>
                                        <input type="number" class="form-control" id="discount_price" name="discount_price" 
                                               step="0.01" placeholder="249.00" min="0">
                                    </div>
                                </div>
                            </div>
                            
         
                            <div class="mb-4">
                                <label for="desc_text" class="form-label fw-medium">Course Description</label>
                                <textarea class="form-control" id="desc_text" name="desc_text" rows="4" 
                                          placeholder="Describe what students will learn in this course..."></textarea>
                            </div>
                            
                 
                            <div class="card border-0 bg-light mb-4">
                                <div class="card-body">
                                    <h5 class="h6 fw-semibold mb-3">
                                        <i class="bi bi-percent me-2"></i> Coupon Details (Optional)
                                    </h5>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label for="coupon" class="form-label">Coupon Code</label>
                                            <input type="text" class="form-control" id="coupon" name="coupon" 
                                                   placeholder="SUMMER2024">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="expiry" class="form-label">Expiry Date</label>
                                            <input type="datetime-local" class="form-control" id="expiry" name="expiry">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                     
                            <div class="d-grid mt-4">
                                <button type="submit" class="btn btn-primary py-2">
                                    <i class="bi bi-save me-2"></i> Create Course
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .card {
            border-radius: 0.5rem;
        }
        .form-control, .form-select, .input-group-text {
            padding: 0.75rem 1rem;
        }
        .input-group-text {
            background-color: #f8f9fa;
        }
        .bg-light {
            background-color: #f8f9fa !important;
        }
    </style>

  
    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</x-app-layout>