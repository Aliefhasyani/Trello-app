<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="h4 fw-semibold text-dark mb-0">
                <i class="bi bi-shield-lock me-2"></i> {{ __('Admin Controls') }}
            </h2>
        </div>
    </x-slot>

    <div class="container-fluid py-4">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-6">
                <div class="card border-0 shadow-sm">
                    <div class="card-header bg-white border-0 py-3">
                        <h4 class="mb-0 fw-semibold">
                            <i class="bi bi-person-plus me-2"></i> Create New User
                        </h4>
                    </div>
                    
                    <div class="card-body pt-4">
                        <form method="POST" action="{{ route('admin.store') }}">
                            @csrf
                            
                
                            <div class="mb-4">
                                <label for="name" class="form-label fw-medium">Full Name</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="bi bi-person"></i>
                                    </span>
                                    <input type="text" class="form-control" id="name" name="name" 
                                           placeholder="John Doe" required>
                                </div>
                            </div>
                            
              
                            <div class="mb-4">
                                <label for="email" class="form-label fw-medium">Email Address</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="bi bi-envelope"></i>
                                    </span>
                                    <input type="email" class="form-control" id="email" name="email" 
                                           placeholder="example@domain.com" required>
                                </div>
                            </div>
                            
                            <div class="mb-4">
                                <label for="password" class="form-label fw-medium">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="bi bi-lock"></i>
                                    </span>
                                    <input type="password" class="form-control" id="password" name="password" 
                                           placeholder="Create a strong password" required>
                                    <button class="btn btn-outline-secondary toggle-password" type="button">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                </div>
                                <div class="form-text">Minimum 8 characters with numbers and symbols</div>
                            </div>
                            
                    
                            <div class="mb-4">
                                <label for="role" class="form-label fw-medium">User Role</label>
                                <select name="role" id="role" class="form-select" required>
                                    <option value="" disabled selected>Select a role</option>
                                    <option value="admin">Administrator</option>
                                    <option value="teacher">Teacher</option>
                                    <option value="student">Student</option>
                                </select>
                            </div>
                            
                    
                            <div class="d-grid mt-4">
                                <button type="submit" class="btn btn-primary py-2">
                                    <i class="bi bi-person-add me-2"></i> Create User
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
        .form-control, .form-select {
            padding: 0.75rem 1rem;
        }
        .input-group-text {
            background-color: #f8f9fa;
        }
    </style>

  
    <script>
        document.querySelector('.toggle-password').addEventListener('click', function() {
            const passwordInput = document.getElementById('password');
            const icon = this.querySelector('i');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.remove('bi-eye');
                icon.classList.add('bi-eye-slash');
            } else {
                passwordInput.type = 'password';
                icon.classList.remove('bi-eye-slash');
                icon.classList.add('bi-eye');
            }
        });
    </script>

  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</x-app-layout>