<x-guest-layout>
    <div class="card border-0 shadow-sm" style="max-width: 400px;">
        <div class="card-body p-4">
            <div class="text-center mb-4">
                <h2 class="h4 mb-2">Create Account</h2>
                <p class="text-muted small">Please fill in your details</p>
            </div>

             <head>
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
            </head>

            <form method="POST" action="{{ route('register') }}">
                @csrf

             
                <div class="mb-3">
                    <label for="name" class="form-label small">Full Name</label>
                    <input id="name" type="text" class="form-control" 
                           name="name" value="{{ old('name') }}" 
                           required autofocus autocomplete="name">
                    @error('name')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

       
                <div class="mb-3">
                    <label for="email" class="form-label small">Email Address</label>
                    <input id="email" type="email" class="form-control" 
                           name="email" value="{{ old('email') }}" 
                           required autocomplete="email">
                    @error('email')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

           
                <div class="mb-3">
                    <label for="password" class="form-label small">Password</label>
                    <input id="password" type="password" 
                           class="form-control" 
                           name="password" required autocomplete="new-password">
                    @error('password')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>
    
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label small">Confirm Password</label>
                    <input id="password_confirmation" type="password" 
                           class="form-control" 
                           name="password_confirmation" required autocomplete="new-password">
                    @error('password_confirmation')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex justify-content-between align-items-center mt-4">
                    <a class="small text-decoration-none" href="{{ route('login') }}">
                        Already registered?
                    </a>
                    <button type="submit" class="btn btn-primary">
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>