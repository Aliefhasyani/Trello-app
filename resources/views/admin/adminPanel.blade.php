<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between flex-wrap">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Admin Panel') }}
            </h2>
            <div class="flex gap-4 mt-4 sm:mt-0">
                <a href="{{ route('admin.users') }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-black font-semibold py-2 px-4 rounded-md shadow">
                    Users Management
                </a>
                <a href="{{ route('admin.courses') }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-black font-semibold py-2 px-4 rounded-md shadow">
                    Course Management
                </a>
            </div>
        </div>
    </x-slot>
</x-app-layout>
