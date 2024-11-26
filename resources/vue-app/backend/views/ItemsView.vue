<template>
    <div>
        <h2 class="text-3xl font-semibold mb-8">Movie List</h2>

        <div class="grid grid-cols-2 gap-4">
            <div v-for="i in 4" class="bg-gray-800 shadow-lg rounded-lg overflow-hidden w-full flex">
                <!-- Image Section with Duration Overlay -->
                <div class="relative w-1/3">
                    <img src="https://via.placeholder.com/300x150" alt="Movie Title 1" class="w-full h-full object-cover">
                    <!-- Duration Overlay -->
                    <div class="absolute top-2 right-2 bg-black bg-opacity-50 text-white text-xs px-2 py-1 rounded-lg">
                        <i class="fa-solid fa-clock mr-1"></i> 2h 15m
                    </div>
                </div>

                <!-- Movie Details Section -->
                <div class="p-4 w-2/3">
                    <h3 class="font-semibold text-white">Movie Title 1</h3>
                    <p class="mt-2 text-gray-300">A short description about the movie. A quick overview of the plot or genre.</p>

                    <!-- Additional Movie Info (Views, Rating, Genre, Industry) -->
                    <div class="mt-4 text-gray-400 text-sm grid grid-cols-2 gap-2">
                        <!-- Views Icon -->
                        <span class="flex items-center">
                            <i class="fa-solid fa-eye mr-2"></i> 1.5M
                        </span>

                            <!-- Rating Icon -->
                            <span class="flex items-center">
                            <i class="fa-solid fa-star mr-2"></i> 8.7
                        </span>

                            <!-- Genre Icon -->
                            <span class="flex items-center">
                            <i class="fa-solid fa-film mr-2"></i> Action, Adventure
                        </span>

                            <!-- Industry Icon -->
                            <span class="flex items-center">
                            <i class="fa-solid fa-industry mr-2"></i> Hollywood
                        </span>
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