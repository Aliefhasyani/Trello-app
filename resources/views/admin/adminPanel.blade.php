<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Panel') }}
        </h2>
        <button type="submit" class="btn btn-primary btn-m mt-4 mr-3"><a href="{{route('admin.users')}}">Users Management</a></button>
        <br>
        <button type="submit" class="btn btn-primary btn-m mt-4 mr-3"><a href="{{route('admin.users')}}">Course Management</a></button>
    </x-slot>



</x-app-layout>