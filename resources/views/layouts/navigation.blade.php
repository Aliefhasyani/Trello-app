<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700 shadow-sm">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}" class="flex items-center">
                        <img src="/images/logo.jpg" alt="Company Logo" class="h-10 w-auto rounded-full border-2 border-primary-500" style="width: 60px; height:40px">
                        <span class="ml-3 text-xl font-bold text-gray-800 dark:text-white hidden md:block">EduPlatform</span>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden sm:flex sm:items-center sm:ms-10">
                    <div class="flex space-x-4">
                        @if (Auth::user()->role == 'admin')
                        <x-nav-link :href="route('admin.dashboard')" :active="request()->routeIs('admin.dashboard')" class="group">
                            <div class="flex items-center px-3 py-2 transition-all duration-200">
                                <i class="bi bi-speedometer2 mr-2 text-lg group-hover:text-primary-600 dark:group-hover:text-primary-400"></i>
                                <span>{{ __('Dashboard') }}</span>
                                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-primary-600 transition-all duration-300 group-hover:w-full"></span>
                            </div>
                        </x-nav-link>
                        <x-nav-link :href="route('admin.panel')" :active="request()->routeIs('admin.panel')" class="group">
                            <div class="flex items-center px-3 py-2 transition-all duration-200">
                                <i class="bi bi-shield-lock mr-2 text-lg group-hover:text-primary-600 dark:group-hover:text-primary-400"></i>
                                <span>{{ __('Admin Panel') }}</span>
                                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-primary-600 transition-all duration-300 group-hover:w-full"></span>
                            </div>
                        </x-nav-link>
                        @elseif(Auth::user()->role == 'teacher')
                        <x-nav-link :href="route('teacher.dashboard')" :active="request()->routeIs('teacher.dashboard')" class="group">
                            <div class="flex items-center px-3 py-2 transition-all duration-200"> 
                                <i class="bi bi-speedometer2 mr-2 text-lg group-hover:text-primary-600 dark:group-hover:text-primary-400"></i>
                                <span>{{ __('Dashboard') }}</span>
                                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-primary-600 transition-all duration-300 group-hover:w-full"></span>
                            </div>
                        </x-nav-link>
                        @else
                         <x-nav-link :href="route('student.dashboard')" :active="request()->routeIs('student.dashboard')" class="group">
                            <div class="flex items-center px-3 py-2 transition-all duration-200"> 
                                <i class="bi bi-speedometer2 mr-2 text-lg group-hover:text-primary-600 dark:group-hover:text-primary-400"></i>
                                <span>{{ __('Dashboard') }}</span>
                                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-primary-600 transition-all duration-300 group-hover:w-full"></span>
                            </div>
                        </x-nav-link>
                        @endif
                
                        <x-nav-link :href="route('course')" :active="request()->routeIs('course')" class="group">
                            <div class="flex items-center px-3 py-2 transition-all duration-200">
                                <i class="bi bi-book mr-2 text-lg group-hover:text-primary-600 dark:group-hover:text-primary-400"></i>
                                <span>{{ __('Courses') }}</span>
                                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-primary-600 transition-all duration-300 group-hover:w-full"></span>
                            </div>
                        </x-nav-link>
                        
                        <x-nav-link :href="route('home')" :active="request()->routeIs('home')" class="group">
                            <div class="flex items-center px-3 py-2 transition-all duration-200">
                                <i class="bi bi-house mr-2 text-lg group-hover:text-primary-600 dark:group-hover:text-primary-400"></i>
                                <span>{{ __('Home') }}</span>
                                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-primary-600 transition-all duration-300 group-hover:w-full"></span>
                            </div>
                        </x-nav-link>
                    </div>
                </div>
            </div>

            <!-- Right Side Of Navbar -->
            <div class="flex items-center">
                <!-- User Dropdown -->
                <div class="hidden sm:flex sm:items-center sm:ms-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="flex items-center space-x-2 text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-gray-100 transition duration-150 ease-in-out">
                                <div class="relative">
                                    <div class="h-8 w-8 rounded-full bg-primary-500 flex items-center justify-center text-white">
                                        {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                                    </div>
                                    <span class="absolute bottom-0 right-0 block h-2 w-2 rounded-full bg-green-500 ring-2 ring-white"></span>
                                </div>
                                <span>{{ Auth::user()->name }}</span>
                                <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <div class="px-4 py-3 border-b border-gray-200 dark:border-gray-700">
                                <p class="text-sm font-medium text-gray-900 dark:text-white">{{ Auth::user()->name }}</p>
                                <p class="text-xs text-gray-500 truncate">{{ Auth::user()->email }}</p>
                            </div>
                            
                            <x-dropdown-link :href="route('profile.edit')" class="group">
                                <i class="bi bi-person mr-2 text-gray-500 group-hover:text-primary-600"></i> {{ __('Profile') }}
                            </x-dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();" class="group">
                                    <i class="bi bi-box-arrow-right mr-2 text-gray-500 group-hover:text-primary-600"></i> {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>

                <!-- Hamburger -->
                <div class="flex items-center sm:hidden ms-2">
                    <button @click="open = ! open" class="p-2 rounded-md text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none transition duration-150 ease-in-out">
                        <span class="sr-only">Open main menu</span>
                        <svg class="h-6 w-6" :class="{'hidden': open, 'block': !open }" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg class="h-6 w-6" :class="{'hidden': !open, 'block': open }" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div x-show="open" @click.away="open = false" class="sm:hidden transition-all duration-300 ease-in-out">
        <div class="pt-2 pb-3 space-y-1 bg-white dark:bg-gray-800 shadow-lg">
            @if (Auth::user()->role == 'admin')
                <x-responsive-nav-link :href="route('admin.dashboard')" :active="request()->routeIs('admin.dashboard')" class="px-4 py-3">
                    <i class="bi bi-speedometer2 mr-3 text-lg"></i> {{ __('Dashboard') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('admin.panel')" :active="request()->routeIs('admin.panel')" class="px-4 py-3">
                    <i class="bi bi-shield-lock mr-3 text-lg"></i> {{ __('Admin Panel') }}
                </x-responsive-nav-link>
            @else
                <x-responsive-nav-link :href="route('student.dashboard')" :active="request()->routeIs('student.dashboard')" class="px-4 py-3">
                    <i class="bi bi-speedometer2 mr-3 text-lg"></i> {{ __('Dashboard') }}
                </x-responsive-nav-link>
            @endif
            
            <x-responsive-nav-link :href="route('course')" :active="request()->routeIs('course')" class="px-4 py-3">
                <i class="bi bi-book mr-3 text-lg"></i> {{ __('Courses') }}
            </x-responsive-nav-link>
            
            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')" class="px-4 py-3">
                <i class="bi bi-house mr-3 text-lg"></i> {{ __('Home') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-2 border-t border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800">
            <div class="px-4">
                <div class="flex items-center">
                    <div class="shrink-0 mr-3">
                        <div class="h-10 w-10 rounded-full bg-primary-500 flex items-center justify-center text-white text-lg font-bold">
                            {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                        </div>
                    </div>
                    <div>
                        <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                        <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                    </div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')" class="px-4 py-3">
                    <i class="bi bi-person mr-3 text-lg"></i> {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();" class="px-4 py-3">
                        <i class="bi bi-box-arrow-right mr-3 text-lg"></i> {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>

<style>
    .nav-link {
        position: relative;
        transition: all 0.3s ease;
    }
    .nav-link:hover {
        transform: translateY(-2px);
    }
    .dropdown-content {
        box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }
</style>

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">