<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <ol class="list-unstyled">
                    @foreach ($course as $value)
                        <li class="mb-4">
                            <div class="card shadow-sm">
                                <div class="card-body text-center">
                                    <img src="{{ $value->pic ?? '' }}" alt="Course Image" width="120" class="mb-3 rounded">
                                    <h5 class="card-title">{{ $value->title ?? 'No name' }}</h5>
                                    <p class="card-text mb-1">
                                        <strong>Category:</strong> {{ $value->category ?? 'N/A' }}
                                    </p>
                                    <p class="card-text mb-1">
                                        <strong>Price:</strong> ${{ $value->org_price ?? 'N/A' }} 
                                        | <strong>Sale:</strong> ${{ $value->discount_price ?? 'N/A' }}
                                    </p>
                                    <a href="{{ route('courseDetail', ['id' => $value->id]) }}" class="btn btn-primary mt-2">Go to Course</a>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
</x-app-layout>