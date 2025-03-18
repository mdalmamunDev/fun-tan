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
                    <!-- Overlays -->
                    <div class="absolute top-1 right-1 bg-black bg-opacity-50 text-white text-xs px-1 py-0.5 rounded flex items-center space-x-1">
                        Tag
                    </div>
                    <div class="absolute bottom-1 right-1 bg-black bg-opacity-50 text-white text-xs px-1 py-0.5 rounded flex items-center space-x-1">
                        <span>33.5M</span>
                        <div class="w-1 h-1 bg-white rounded-full"></div>
                        <span>2:15:05</span>
                    </div>
                </div>

                <!-- Movie Details Section -->
                <div class="p-2 px-3 my-auto w-full">
                    <h4 class="font-semibold">Movie Title It's A Little Movie Title It's A Little Bigger Title</h4>

                    <div class="mt-2 flex text-xs">
                        <!-- Additional Movie Info (Views, Rating, Genre, Industry) -->
                        <div class="w-3/4 text-gray-400 grid grid-cols-2 gap-1">
                            <!-- Views Icon -->
                            <span><i class="fa-solid fa-eye mr-px text-red-600"></i> 1.5M</span>
                            <!-- Rating Icon -->
                            <span><i class="fa-solid fa-star mr-px text-red-600"></i> 8.7</span>
                            <!-- Genre Icon -->
                            <span><i class="fa-solid fa-film mr-px text-red-600"></i> Action, Adventure</span>
                            <!-- Industry Icon -->
                            <span><i class="fa-solid fa-industry mr-px text-red-600"></i> Hollywood</span>
                        </div>
                        <div class="w-1/4 flex flex-col items-end">
                            <div class="w-max text-center">
                                <div v-html="showStatus({val: 1})"></div>
                                <div class="mt-1">
                                    <i class="fa-solid fa-pen-to-square text-yellow-600 cursor-pointer" title="Edit"></i>
                                    <i class="fa-solid fa-trash text-red-600 cursor-pointer ml-3" title="Drop"></i>
                                </div>
                            </div>
                        </div>
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