<x-app-layout>
    <x-slot name="header">
        <h2 class="fw-semibold fs-3 text-dark">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow rounded">
                    <div class="card-body text-center">
                        <h1 class="card-title fw-bold mb-3">Welcome to the Homepage!</h1>
                        <p class="card-text fs-5 text-muted">
                            This is your starting point. Use the menu above to explore the courses catalog and visit your dashboard to manage your content.
                        </p>
                        <a href="{{route('course')}}" class="btn btn-primary mt-3">Explore Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
