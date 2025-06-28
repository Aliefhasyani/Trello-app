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
                        <img src="{{ $selected_course->pic }}" alt="Course Image" class="mb-4 rounded mx-auto d-block" style="max-width: 320px; width: 100%; height: auto;">
                        <h2 class="card-title mb-2">{{ $selected_course->title }}</h2>
                        <h5 class="text-muted mb-3">{{ $selected_course->category }}</h5>
                        <p class="card-text mb-4">{{ $selected_course->desc_text }}</p>
                        <form action="{{route('enroll',['course' => $selected_course->id])}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-primary btn-sm">Enroll</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>