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
                        <strong><h4 class="mb-4">Create a New Course</h4></strong>
                        <form method="POST" action="{{ route('admin.storeCourse') }}">
                            @csrf
                            
                            <div class="mb-3">
                                <strong><label for="course_url" class="form-label">Course URL</label></strong>
                                <input type="text" class="form-control" id="course_url" name="course_url" placeholder="e.g. laravel-bootcamp-2025" required>
                            </div>

                            <div class="mb-3">
                                <strong><label for="title" class="form-label">Title</label></strong>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Course title" required>
                            </div>

                            <div class="mb-3">
                                <strong><label for="category" class="form-label">Category</label></strong>
                                <input type="text" class="form-control" id="category" name="category" placeholder="e.g. Web Development">
                            </div>


                            <div class="mb-3">
                                <strong><label for="org_price" class="form-label">Original Price (USD)</label></strong>
                                <input type="number" class="form-control" id="org_price" name="org_price" step="0.01" placeholder="e.g. 499000">
                            </div>

                            <div class="mb-3">
                                <strong><label for="discount_price" class="form-label">Discount Price (USD)</label></strong>
                                <input type="number" class="form-control" id="discount_price" name="discount_price" step="0.01" placeholder="e.g. 249000">
                            </div>

                            <div class="mb-3">
                                <strong><label for="desc_text" class="form-label">Description</label></strong>
                                <textarea class="form-control" id="desc_text" name="desc_text" rows="3" placeholder="Describe the course..."></textarea>
                            </div>

                            <div class="mb-3">
                                <strong><label for="coupon" class="form-label">Coupon Code</label></strong>
                                <input type="text" class="form-control" id="coupon" name="coupon" placeholder="e.g. NEWYEAR50">
                            </div>

                            <div class="mb-3">
                                <strong><label for="expiry" class="form-label">Coupon Expiry</label></strong>
                                <input type="datetime-local" class="form-control" id="expiry" name="expiry">
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Create Course</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
