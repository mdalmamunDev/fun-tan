<section>
    <h2 class="text-xl font-semibold mb-4">Trending Now</h2>
    <div class="flex items-center">
        <!-- go left -->
        <div class="absolute left-3 md:left-9 w-6 h-40 bg-gray-700 rounded-md flex items-center justify-center cursor-pointer p-2 z-10" onclick="scrollLay('trendingScroll', -200)">
            <i class="fa-solid fa-angle-left"></i>
        </div>
        <div id="trendingScroll" class="flex p-2 space-x-3 overflow-x-scroll scrollbar-hide scroll-smooth">
            @for($i = 1; $i <= 10; $i++)
                @include('frontend.layouts.item-card')
            @endfor
        </div>
        <!-- go right -->
        <div class="absolute right-3 md:right-9 w-6 h-40 bg-gray-700 rounded-md flex items-center justify-center cursor-pointer p-2 z-10" onclick="scrollLay('trendingScroll', 200)">
            <i class="fa-solid fa-angle-right"></i>
        </div>
    </div>
</section>