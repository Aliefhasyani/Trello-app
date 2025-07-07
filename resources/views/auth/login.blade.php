<x-guest-layout>

    @if(session('status'))
        <div class="alert alert-info mb-4 text-center small">
            {{ session('status') }}
        </div>
    @endif
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>


    <div class="card border-0 shadow-sm" style="max-width: 400px;">
        <div class="card-body p-4">
            <div class="text-center mb-4">
                <h2 class="h4 mb-2">Welcome Back</h2>
                <p class="text-muted small">Please enter your login details</p>
            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-3">
                    <label for="email" class="form-label small">Email address</label>
                    <input id="email" type="email" class="form-control" 
                           name="email" value="{{ old('email') }}" 
                           required autofocus autocomplete="email">
                    @error('email')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label small">Password</label>
                    <div class="input-group">
                        <input id="password" type="password" 
                               class="form-control" 
                               name="password" required autocomplete="current-password">
                        <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                            <i class="bi bi-eye-slash" id="toggleIcon"></i>
                        </button>
                    </div>
                    @error('password')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="remember_me" name="remember">
                        <label class="form-check-label small" for="remember_me">Remember me</label>
                    </div>
                    @if (Route::has('password.request'))
                        <a class="small text-decoration-none" href="{{ route('password.request') }}">
                            Forgot password?
                        </a>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary w-100 mb-3">
                    Sign In
                </button>

                @if(Route::has('register'))
                    <div class="text-center mt-4 pt-3 border-top">
                        <p class="small text-muted mb-0">Don't have an account? 
                            <a href="{{ route('register') }}" class="text-decoration-none">Sign up</a>
                        </p>
                    </div>
                @endif
            </form>
        </div>
    </div>

    <script>
        document.getElementById('togglePassword').addEventListener('click', function() {
            const passwordInput = document.getElementById('password');
            const toggleIcon = document.getElementById('toggleIcon');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.classList.remove('bi-eye-slash');
                toggleIcon.classList.add('bi-eye');
            } else {
                passwordInput.type = 'password';
                toggleIcon.classList.remove('bi-eye');
                toggleIcon.classList.add('bi-eye-slash');
            }
        });
    </script>
</x-guest-layout>