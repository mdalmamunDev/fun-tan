<template>
    <div>
        <page-top>
            <div class="flex flex-col">
                <label for="filterType" class="text-xs font-medium text-gray-300">Type:</label>
                <select id="filterType" class="bg-gray-700 px-2 py-1 rounded hover:bg-gray-600 focus:outline-none">
                    <option :value="undefined">All</option>
                </select>
            </div>
            <div class="flex flex-col">
                <label for="filterIndustry" class="text-xs font-medium text-gray-300">Industry:</label>
                <select id="filterIndustry" class="bg-gray-700 px-2 py-1 rounded hover:bg-gray-600 focus:outline-none">
                    <option :value="undefined">All</option>
                </select>
            </div>
        </page-top>
        <div class="grid lg:grid-cols-2 2xl:grid-cols-3 gap-x-4 gap-2">
            <div v-for="i in 10" class="bg-gray-800 shadow-lg rounded-lg overflow-hidden w-full flex">
                <!-- Image Section with Duration Overlay -->
                <div class="relative w-36 h-28">
                    <img src="https://via.placeholder.com/150x150" alt="Movie Title 1" class="w-full h-full object-cover">
                    <!-- Duration Overlay -->
                    <div class="absolute bottom-1 right-1 bg-black bg-opacity-50 text-white text-xs px-1 py-0.5 rounded">
                        2:15:05
                    </div>
                </div>

                <!-- Movie Details Section -->
                <div class="p-2 px-3 my-auto">
                    <h4 class="font-semibold">Movie Title It's A Little Movie Title It's A Little Bigger Title</h4>

                    <!-- Additional Movie Info (Views, Rating, Genre, Industry) -->
                    <div class="mt-2 text-gray-400 text-xs grid grid-cols-2 gap-1">
                        <!-- Views Icon -->
                        <span><i class="fa-solid fa-eye mr-px text-red-600"></i> 1.5M</span>
                        <!-- Rating Icon -->
                        <span><i class="fa-solid fa-star mr-px text-red-600"></i> 8.7</span>
                        <!-- Genre Icon -->
                        <span><i class="fa-solid fa-film mr-px text-red-600"></i> Action, Adventure</span>
                        <!-- Industry Icon -->
                        <span><i class="fa-solid fa-industry mr-px text-red-600"></i> Hollywood</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    import PageTop from "../components/PageTop";
    export default {
        name: "ItemsView",
        components: {PageTop},
    }
</script>

<style scoped>

</style>