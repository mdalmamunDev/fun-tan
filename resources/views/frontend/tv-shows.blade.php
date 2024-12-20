@extends('frontend.layouts.master')
@section('content')
    <main class="p-6 md:p-12 space-y-8">
        <!-- Page Title -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold">TV Shows</h1>
            <!-- Filter -->
            <div class="flex flex-wrap gap-4 items-center">
                <!-- Category -->
                <div class="flex flex-col">
                    <label for="categorySort" class="text-sm font-medium text-gray-300 mb-1">Industry</label>
                    <select id="categorySort" class="bg-gray-700 px-4 py-2 rounded hover:bg-gray-600 focus:outline-none">
                        <option value="bollywood">Bollywood</option>
                        <option value="hollywood">Hollywood</option>
                        <option value="tollywood">Tollywood</option>
                    </select>
                </div>
                <!-- Genre -->
                <div class="flex flex-col">
                    <label for="categorySort" class="text-sm font-medium text-gray-300 mb-1">Genre</label>
                    <select id="categorySort" class="bg-gray-700 px-4 py-2 rounded hover:bg-gray-600 focus:outline-none">
                        <option value="sci-fi">Sci-Fi</option>
                        <option value="romance">Romance</option>
                        <option value="comedy">Comedy</option>
                        <option value="action">Action</option>
                        <option value="drama">Drama</option>
                    </select>
                </div>
                <!-- Sort By -->
                <div class="flex flex-col">
                    <label for="sortBy" class="text-sm font-medium text-gray-300 mb-1">Sort By</label>
                    <select id="sortBy" class="bg-gray-700 px-4 py-2 rounded hover:bg-gray-600 focus:outline-none">
                        <option value="name">Name</option>
                        <option value="date">Date</option>
                        <option value="views">Views</option>
                        <option value="duration">Duration</option>
                    </select>
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
