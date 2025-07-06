<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="h4 fw-semibold text-dark mb-0">
                <i class="bi bi-people me-2"></i> {{ __('Admin Controls') }}
            </h2>
        </div>
    </x-slot>

    <div class="container-fluid py-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm">
                    <div class="card-header bg-white border-0 py-3">
                        <h4 class="mb-0 fw-semibold">
                            <i class="bi bi-pencil-square me-2"></i> Edit User: {{ $user->name }}
                        </h4>
                    </div>
                    
                    <div class="card-body pt-4">
                        <form method="POST" action="{{ route('admin.update', $user->id) }}" class="needs-validation" novalidate>
                            @csrf
                            @method('PUT')
                            
                            <div class="mb-4">
                                <label for="name" class="form-label fw-medium">Username</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="bi bi-person"></i>
                                    </span>
                                    <input type="text" class="form-control" id="name" name="name" 
                                           placeholder="Enter full name" required value="{{ old('name', $user->name) }}">
                                </div>
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                            
                            <div class="mb-4">
                                <label for="email" class="form-label fw-medium">Email</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="bi bi-envelope"></i>
                                    </span>
                                    <input type="email" class="form-control" id="email" name="email" 
                                           placeholder="example@gmail.com" required value="{{ old('email', $user->email) }}">
                                </div>
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            
                            <div class="mb-4">
                                <label for="password" class="form-label fw-medium">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="bi bi-lock"></i>
                                    </span>
                                    <input type="password" class="form-control" id="password" name="password" >
                                    
                                </div>
                                <div class="form-text">Minimum 8 characters</div>
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                            
                            <div class="card border-0 bg-light mb-4">
                                <div class="card-body">
                                    <h5 class="h6 fw-semibold mb-3">
                                        <i class="bi bi-shield me-2"></i> User Role
                                    </h5>
                                    <div class="mb-3">
                                        <label for="role" class="form-label fw-medium">Select Role</label>
                                        <select name="role" id="role" class="form-select" required>
                                            <option value="" disabled>Select a role</option>
                                            <option value="admin" {{ old('role', $user->role) == 'admin' ? 'selected' : '' }}>Admin</option>
                                            <option value="teacher" {{ old('role', $user->role) == 'teacher' ? 'selected' : '' }}>Teacher</option>
                                            <option value="student" {{ old('role', $user->role) == 'student' ? 'selected' : '' }}>Student</option>
                                        </select>
                                        <x-input-error :messages="$errors->get('role')" class="mt-2" />
                                    </div>
                                </div>
                            </div>
                            
                            <div class="d-flex justify-content-between mt-4">
                                <a href="{{ route('admin.users') }}" class="btn btn-outline-secondary py-2">
                                    <i class="bi bi-arrow-left me-2"></i> Cancel
                                </a>
                                <button type="submit" class="btn btn-primary py-2">
                                    <i class="bi bi-save me-2"></i> Update User
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