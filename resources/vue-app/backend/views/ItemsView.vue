<template>
    <div>
        <h2 class="text-3xl font-semibold mb-8">Movie List</h2>

        <div class="grid lg:grid-cols-2 2xl:grid-cols-3 gap-4">
            <div v-for="i in 4" class="bg-gray-800 shadow-lg rounded-lg overflow-hidden w-full flex">
                <!-- Image Section with Duration Overlay -->
                <div class="relative w-1/4">
                    <img src="https://via.placeholder.com/150x150" alt="Movie Title 1" class="w-full h-full object-cover">
                    <!-- Duration Overlay -->
                    <div class="absolute bottom-1 right-1 bg-black bg-opacity-50 text-white text-xs px-1 py-0.5 rounded">
                        <i class="fa-solid fa-clock mr-px"></i> 2h 15m
                    </div>
                </div>

                <!-- Movie Details Section -->
                <div class="p-3 w-3/4">
                    <h3 class="font-semibold text-white">Movie Title It's A Little Bigger Title</h3>

                    <!-- Additional Movie Info (Views, Rating, Genre, Industry) -->
                    <div class="mt-2 text-gray-400 text-xs grid grid-cols-2 gap-1">
                        <!-- Views Icon -->
                        <span><i class="fa-solid fa-eye mr-px"></i> 1.5M</span>
                        <!-- Rating Icon -->
                        <span><i class="fa-solid fa-star mr-px"></i> 8.7</span>
                        <!-- Genre Icon -->
                        <span><i class="fa-solid fa-film mr-px"></i> Action, Adventure</span>
                        <!-- Industry Icon -->
                        <span><i class="fa-solid fa-industry mr-px"></i> Hollywood</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        name: "ItemsView",
    }
</script>

<style scoped>

</style>