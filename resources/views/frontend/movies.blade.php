@extends('frontend.layouts.master')
@section('content')
    <main class="p-6 md:p-12 space-y-8">
        <!-- Page Title -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold">Movies</h1>
            <!-- Filter Dropdown -->
            <div class="relative">
                <button class="bg-gray-700 px-4 py-2 rounded hover:bg-gray-600 flex items-center">
                    <span>Filter</span>
                    <i class="fa fa-chevron-down ml-2"></i>
                </button>
                <div class="absolute right-0 mt-2 bg-gray-800 border border-gray-700 rounded-md shadow-lg hidden group-hover:block">
                    <a href="#" class="block px-4 py-2 hover:bg-gray-700">Action</a>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-700">Comedy</a>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-700">Drama</a>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-700">Romance</a>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-700">Sci-Fi</a>
                </div>
            </div>
        </div>
        <!-- Movie Grid -->
        <div class="grid grid-cols-[repeat(auto-fill,minmax(170px,1fr))] gap-4 gap-x-6">
            @for($i = 1; $i <= 12; $i++)
                @include('frontend.layouts.item-card')
            @endfor
        </div>
        <button class="mt-4 px-6 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 focus:outline-none mx-auto block">
            Show More
            <i class="fa-solid fa-chevron-down"></i>
        </button>
    </main>
@endsection
