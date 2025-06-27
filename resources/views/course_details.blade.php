<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Course Detail') }}
        </h2>
    </x-slot>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-lg">
                    <div class="card-body text-center">
                        <img src="{{ $selected_course->pic }}" alt="Course Image" class="mb-4 rounded" style="max-width: 320px; width: 100%; height: auto;">
                        <h2 class="card-title mb-2">{{ $selected_course->title }}</h2>
                        <h5 class="text-muted mb-3">{{ $selected_course->category }}</h5>
                        <p class="card-text mb-4">{{ $selected_course->desc_text }}</p>
                        <div class="mb-3">
                            <span class="badge bg-primary">Original Price: ${{ $selected_course->org_price }}</span>
                            <span class="badge bg-success ms-2">Discounted Price: ${{ $selected_course->discount_price }}</span>
                        </div>
                        <a href="{{ $selected_course->coupon ?? $selected_course->course_url }}" target="_blank" class="btn btn-primary btn-m">
                            Go to Course
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>