<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Student Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="mb-4">
                        {{ __("Student {$user->name} Logged In!") }}
                    </div>
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 text-left">Course</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($courses as $value)
                                <tr class="border-t dark:border-gray-700">
                                    <td class="px-4 py-2">{{ $value->title }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="px-4 py-2 text-gray-500" colspan="1">
                                        You are not enrolled in any courses.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>