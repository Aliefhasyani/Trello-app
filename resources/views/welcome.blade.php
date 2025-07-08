<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Landing</title>

   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

   
    <style>
        body {
            font-family: 'Instrument Sans', sans-serif;
            background-color: #FDFDFC;
            color: #1b1b18;
        }
        
        body.dark-mode {
            background-color: #0a0a0a;
            color: #EDEDEC;
        }
        
        .gradient-text {
            background: linear-gradient(90deg, #3b82f6 0%, #8b5cf6 50%, #ec4899 100%);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
        
        .hero-gradient {
            background: radial-gradient(circle at 10% 20%, rgba(59, 130, 246, 0.1) 0%, rgba(236, 72, 153, 0.05) 90%);
        }
        
        .feature-icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
        }
        
        .feature-card {
            background-color: white;
            border-radius: 12px;
            padding: 1.5rem;
            height: 100%;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        
        .dark-mode .feature-card {
            background-color: #111111;
        }
        
        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        .btn-gradient {
            background: linear-gradient(to right, #3b82f6, #2563eb);
            color: white;
            border: none;
            transition: all 0.3s;
        }
        
        .btn-gradient:hover {
            background: linear-gradient(to right, #2563eb, #1d4ed8);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(37, 99, 235, 0.3);
        }
    </style>
</head>

<body class="min-vh-100 d-flex flex-column">
    <div class="container my-auto py-5">

        <div class="hero-gradient rounded-3 p-4 p-md-5 my-4 my-md-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h1 class="display-4 fw-bold mb-4">
                        Web <span class="gradient-text">App</span>
                    </h1>
                    
                    <p class="lead text-muted mb-5">
                        Accelerate your learning and knowledge.
                    </p>
                    
                    
                    @if (Route::has('login'))
                        <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
                            @auth
                                @php
                                    $dashboardRoute = Auth::user()->role === 'admin' ? '/adminDashboard' : '/studentDashboard';
                                @endphp
                                <a href="{{ url($dashboardRoute) }}" class="btn btn-gradient btn-lg px-4 py-3">
                                    Go to Dashboard <i class="bi bi-arrow-right ms-2"></i>
                                </a>
                            @else
                                <a href="{{ route('login') }}" class="btn btn-outline-primary btn-lg px-4 py-3">
                                    Log In
                                </a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="btn btn-gradient btn-lg px-4 py-3">
                                        Get Started - Free
                                    </a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
            </div>
        </div>
        
  
        <div class="row g-4 my-5">
            <div class="col-md-4">
                <div class="feature-card">
                    <div class="feature-icon bg-blue-100">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#3b82f6" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="h4 fw-semibold mb-3">Huge Library of Courses</h3>
                    <p class="text-muted mb-0">Learn anything, anywhere, anytime.</p>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="feature-card">
                    <div class="feature-icon bg-purple-100">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#8b5cf6" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                        </svg>
                    </div>
                    <h3 class="h4 fw-semibold mb-3">Built With</h3>
                    <p class="text-muted mb-0">Laravel + MySQL + Bootstrap  the perfect combination for modern web apps.</p>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="feature-card">  
                    <div class="feature-icon bg-pink-100">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#ec4899" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </div>
                    <h3 class="h4 fw-semibold mb-3">Secure by Default</h3>
                    <p class="text-muted mb-0">Used Laravel's Breeze kit to keep your account safe and encrypted</p>
                </div>
            </div>
        </div>
    </div>
    
    
    <footer class="mt-auto py-4 text-center text-muted">
        <div class="container">
            <p class="mb-0">© {{ date('Y') }} Trello App. All rights reserved.</p>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    

    <script>
   
        const darkModeToggle = document.createElement('button');
        darkModeToggle.className = 'btn btn-sm btn-outline-secondary position-fixed bottom-0 end-0 m-3';
        darkModeToggle.textContent = 'Toggle Dark Mode';
        darkModeToggle.onclick = function() {
            document.body.classList.toggle('dark-mode');
        };
        document.body.appendChild(darkModeToggle);
    </script>
</body>
</html>