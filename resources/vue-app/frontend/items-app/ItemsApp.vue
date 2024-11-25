<template>
    <div class="p-6 md:p-12 space-y-8">
        <!-- Page Title -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold">{{ title }}</h1>
            <!-- Filter -->
            <div class="flex flex-wrap gap-4 items-center">
                <!-- Type -->
                <div class="flex flex-col">
                    <label for="typeSelect" class="text-sm font-medium text-gray-300 mb-1">Type</label>
                    <select v-model="filters.type" id="typeSelect" class="bg-gray-700 px-4 py-2 rounded hover:bg-gray-600 focus:outline-none">
                        <option :value="undefined">All</option>
                        <option v-for="type in types" :value="type.value">{{ type.name }}</option>
                    </select>
                </div>
                <!-- Category -->
                <div class="flex flex-col">
                    <label for="categorySort" class="text-sm font-medium text-gray-300 mb-1">Industry</label>
                    <select v-model="filters.category" id="categorySort" class="bg-gray-700 px-4 py-2 rounded hover:bg-gray-600 focus:outline-none">
                        <option :value="undefined">All</option>
                        <option value="bollywood">Bollywood</option>
                        <option value="hollywood">Hollywood</option>
                        <option value="tollywood">Tollywood</option>
                    </select>
                </div>
                <!-- Genre -->
                <div class="flex flex-col">
                    <label for="genreSort" class="text-sm font-medium text-gray-300 mb-1">Genre</label>
                    <select v-model="filters.genre" id="genreSort" class="bg-gray-700 px-4 py-2 rounded hover:bg-gray-600 focus:outline-none">
                        <option :value="undefined">All</option>
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
                    <select v-model="filters.sort" id="sortBy" class="bg-gray-700 px-4 py-2 rounded hover:bg-gray-600 focus:outline-none">
                        <option :value="undefined">All</option>
                        <option v-for="sort in sorts" :value="sort.value">{{ sort.name }}</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Movie Grid -->
        <div class="grid grid-cols-[repeat(auto-fill,minmax(170px,1fr))] gap-4 gap-x-6">
            <div v-for="movie in movies" :key="movie.id" class="relative w-48 h-64 bg-cover bg-center rounded-md hover:scale-105 transform transition cursor-pointer" :style="{ backgroundImage: `url(${movie.imageUrl})` }">
                <div class="p-2 w-48">
                    <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-80 rounded-md"></div>
                    <div class="absolute top-2 left-2 text-sm font-semibold">Hollywood</div>
                    <div class="absolute top-2 right-2 text-sm font-semibold">Sci-Fi</div>
                    <div class="absolute bottom-2 left-2 text-sm font-semibold">{{ movie.title }}</div>
                    <div class="absolute bottom-2 right-2 text-sm font-semibold" title="IMDb Rating">
                        <i class="fas fa-star text-yellow-400"></i> 8.6
                    </div>
                </div>
            </div>
        </div>

        <!-- Show More Button -->
        <button class="mt-4 px-6 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 focus:outline-none mx-auto block">
            Show More
            <i class="fa-solid fa-chevron-down"></i>
        </button>
    </div>
</template>

<script>
export default {
    name: 'ItemsApp',

    data() {
        return {
            filters: this.$route.query,
            movies: [
                { id: 1, title: 'Movie Title 1', category: 'bollywood', genre: 'action', imageUrl: 'https://via.placeholder.com/200x300?text=Movie' },
                { id: 2, title: 'Movie Title 1', category: 'bollywood', genre: 'action', imageUrl: 'https://via.placeholder.com/200x300?text=Movie' },
                { id: 3, title: 'Movie Title 1', category: 'bollywood', genre: 'action', imageUrl: 'https://via.placeholder.com/200x300?text=Movie' },
                { id: 4, title: 'Movie Title 1', category: 'bollywood', genre: 'action', imageUrl: 'https://via.placeholder.com/200x300?text=Movie' },
                { id: 15, title: 'Movie Title 1', category: 'bollywood', genre: 'action', imageUrl: 'https://via.placeholder.com/200x300?text=Movie' },
                { id: 16, title: 'Movie Title 1', category: 'bollywood', genre: 'action', imageUrl: 'https://via.placeholder.com/200x300?text=Movie' },
                { id: 17, title: 'Movie Title 1', category: 'bollywood', genre: 'action', imageUrl: 'https://via.placeholder.com/200x300?text=Movie' },
                { id: 18, title: 'Movie Title 1', category: 'bollywood', genre: 'action', imageUrl: 'https://via.placeholder.com/200x300?text=Movie' },
                { id: 19, title: 'Movie Title 1', category: 'bollywood', genre: 'action', imageUrl: 'https://via.placeholder.com/200x300?text=Movie' },
                { id: 20, title: 'Movie Title 2', category: 'hollywood', genre: 'romance', imageUrl: 'https://via.placeholder.com/200x300?text=Movie' },
                { id: 30, title: 'Movie Title 3', category: 'tollywood', genre: 'comedy', imageUrl: 'https://via.placeholder.com/200x300?text=Movie' },
                { id: 44, title: 'Movie Title 4', category: 'bollywood', genre: 'drama', imageUrl: 'https://via.placeholder.com/200x300?text=Movie' },
                // Add more movie objects here
            ],
        };
    },
    mounted() {
        // Set the page title from route meta
    },
    computed: {
        title () {
            let val = this.filters.type ? parseInt(this.filters.type) : null;
            let type = this.getFromObjArr(this.types, 'value', val);
            return type ? type.name : 'From All';
        }
    },
    methods: {
        //
    },
};
</script>

<style scoped>
    /* Add your custom styles here */
</style>