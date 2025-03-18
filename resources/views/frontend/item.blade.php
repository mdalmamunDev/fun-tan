@extends('frontend.layouts.master')
@section('content')
    <main class="p-6 md:p-12 space-y-8">
        <section class="bg-gray-800 p-6 rounded-md">
            <h2 class="text-3xl font-bold mb-4">Movie Title</h2>
            <div class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-8">
                <div class="w-full md:w-2/3">
                    <!-- Video Player -->
                    <div class="w-full relative pb-9/16">
                        <video @click.prevent="" ref="lessonVideo" class="w-full" controls>
                            <source src="{{ asset('frontend/video/video_1.mp4') }}" type="video/mp4">
                            <source src="{{ asset('frontend/video/video_1.mp4') }}" type="video/webm">
                            <source src="{{ asset('frontend/video/video_1.mp4') }}" type="video/ogg">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
                <div class="w-full md:w-1/3 space-y-4">
                    <p class="text-gray-300">Lorem ipsum dolor sit amet, consectetur adipiscing elit. This thrilling adventure dives into a world of drama and suspense.</p>
                    <p><span class="font-bold">Genre:</span> Action, Adventure</p>
                    <p><span class="font-bold">Release Date:</span> 2023</p>
                    <p><span class="font-bold">Duration:</span> 1h 45m</p>
                    <button class="bg-red-600 text-white px-6 py-3 rounded-md hover:bg-red-700"><i class="fa fa-play mr-2"></i> Play</button>
                </div>
            </div>
        </section>

        @include('frontend.layouts.sections.watch-more-section')
    </main>
@endsection