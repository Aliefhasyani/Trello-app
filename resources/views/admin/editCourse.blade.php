<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Controls') }}
        </h2>
    </x-slot>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <strong><h4 class="mb-4">Edit a Course</h4></strong>
                        <form method="POST" action="{{ route('admin.updateCourse', ['id' => $course->id]) }}">
                            @csrf
                            @method('PUT') 

                            <div class="mb-3">
                                <strong><label for="course_url" class="form-label">Course URL</label></strong>
                                <input type="text" class="form-control" id="course_url" name="course_url" placeholder="e.g. laravel-bootcamp-2025" value="{{ old('course_url', $course->course_url) }}" required>
                            </div>

                            <div class="mb-3">
                                <strong><label for="title" class="form-label">Title</label></strong>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Course title" value="{{ old('title', $course->title) }}" required>
                            </div>

                            <div class="mb-3">
                                <strong><label for="category" class="form-label">Category</label></strong>
                                <input type="text" class="form-control" id="category" name="category" placeholder="e.g. Web Development" value="{{ old('category', $course->category) }}">
                            </div>

                            <div class="mb-3">
                                <strong><label for="org_price" class="form-label">Original Price (USD)</label></strong>
                                <input type="number" class="form-control" id="org_price" name="org_price" step="0.01" placeholder="e.g. 499000" value="{{ old('org_price', $course->org_price) }}">
                            </div>

                            <div class="mb-3">
                                <strong><label for="discount_price" class="form-label">Discount Price (USD)</label></strong>
                                <input type="number" class="form-control" id="discount_price" name="discount_price" step="0.01" placeholder="e.g. 249000" value="{{ old('discount_price', $course->discount_price) }}">
                            </div>

                            <div class="mb-3">
                                <strong><label for="desc_text" class="form-label">Description</label></strong>
                                <textarea class="form-control" id="desc_text" name="desc_text" rows="3" placeholder="Describe the course...">{{ old('desc_text', $course->desc_text) }}</textarea>
                            </div>

                            <div class="mb-3">
                                <strong><label for="coupon" class="form-label">Coupon Code</label></strong>
                                <input type="text" class="form-control" id="coupon" name="coupon" placeholder="e.g. NEWYEAR50" value="{{ old('coupon', $course->coupon) }}">
                            </div>

                            <div class="mb-3">
                                <strong><label for="expiry" class="form-label">Coupon Expiry</label></strong>
                                <input type="datetime-local" class="form-control" id="expiry" name="expiry"
                                    value="{{ old('expiry', $course->expiry ? \Carbon\Carbon::parse($course->expiry)->format('Y-m-d\TH:i') : '') }}">
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Update Course</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
