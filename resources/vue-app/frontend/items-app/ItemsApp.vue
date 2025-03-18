<template>
    <div class="p-6 md:p-12 space-y-8">

        <template v-if="items">
            <!-- Page Title -->
            <div class="sm:flex justify-between items-center mb-6">
                <h1 class="text-3xl font-bold mb-3 sm:mb-0">{{ title }}</h1>
                <!-- Filter -->
                <div class="flex flex-wrap gap-4 items-center sm:justify-end">
                    <!-- Type -->
                    <div class="flex flex-col">
                        <label for="typeSelect" class="text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Type:</label>
                        <select v-model="filters.type" id="typeSelect" class="bg-red-50 dark:bg-gray-700 px-4 py-2 rounded hover:bg-red-100 dark:hover:bg-gray-600 focus:outline-none">
                            <option :value="undefined">All</option>
                            <option v-for="type in types" :value="type.value">{{ type.name }}</option>
                        </select>
                    </div>
                    <!-- Category -->
                    <div class="flex flex-col">
                        <label for="categorySort" class="text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Industry:</label>
                        <select v-model="filters.category" id="categorySort" class="bg-red-50 dark:bg-gray-700 px-4 py-2 rounded hover:bg-red-100 dark:hover:bg-gray-600 focus:outline-none">
                            <option :value="undefined">All</option>
                            <option value="bollywood">Bollywood</option>
                            <option value="hollywood">Hollywood</option>
                            <option value="tollywood">Tollywood</option>
                        </select>
                    </div>
                    <!-- Genre -->
                    <div class="flex flex-col">
                        <label for="genreSort" class="text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Genre:</label>
                        <select v-model="filters.genre" id="genreSort" class="bg-red-50 dark:bg-gray-700 px-4 py-2 rounded hover:bg-red-100 dark:hover:bg-gray-600 focus:outline-none">
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
                        <label for="sortBy" class="text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Sort By:</label>
                        <select v-model="filters.sort" id="sortBy" class="bg-red-50 dark:bg-gray-700 px-4 py-2 rounded hover:bg-red-100 dark:hover:bg-gray-600 focus:outline-none">
                            <option :value="undefined">All</option>
                            <option v-for="sort in sorts" :value="sort.value">{{ sort.name }}</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Movie Grid -->

            <div v-if="isEmptyData(items)" role="status" class="h-[60vh] flex flex-col items-center justify-center">
                <span class="text-2xl">No Data To Show :(</span>
            </div>
            <div v-else class="grid grid-cols-[repeat(auto-fill,minmax(170px,1fr))] gap-4 gap-x-6 text-white">
                <div v-for="movie in items" :key="movie.id" class="relative w-48 h-64 mx-auto bg-cover bg-center rounded-md hover:scale-105 transform transition cursor-pointer" :style="{ backgroundImage: `url(${movie.imageUrl})` }">
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
            <button class="mt-4 px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 focus:outline-none mx-auto flex items-center">
                <svg aria-hidden="true" role="status" class="inline w-4 h-4 me-3 text-white animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB"/>
                    <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"/>
                </svg>
                Loading More...
            </button>
        </template>
        <div v-else role="status" class="h-[70vh] flex flex-col items-center justify-center">
            <svg aria-hidden="true" class="w-10 h-10 text-gray-200 animate-spin dark:text-gray-600 fill-red-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
            </svg>
            <span class="mt-2 text-2xl text-red-600">Loading...</span>
        </div>

    </div>
</template>

<script>
export default {
    name: 'ItemsApp',

    data() {
        return {
            filters: this.$route.query,
            items: [
                { id: 1, title: 'Movie Title 1', category: 'bollywood', genre: 'action', imageUrl: 'https://webneel.com/daily/sites/default/files/images/daily/09-2019/2-movie-poster-design-aladdin-disney-glossy-composite.jpg' },
                { id: 2, title: 'Movie Title 1', category: 'bollywood', genre: 'action', imageUrl: 'https://webneel.com/daily/sites/default/files/images/daily/09-2019/2-movie-poster-design-aladdin-disney-glossy-composite.jpg' },
                { id: 3, title: 'Movie Title 1', category: 'bollywood', genre: 'action', imageUrl: 'https://webneel.com/daily/sites/default/files/images/daily/09-2019/2-movie-poster-design-aladdin-disney-glossy-composite.jpg' },
                { id: 4, title: 'Movie Title 1', category: 'bollywood', genre: 'action', imageUrl: 'https://webneel.com/daily/sites/default/files/images/daily/09-2019/2-movie-poster-design-aladdin-disney-glossy-composite.jpg' },
                { id: 15, title: 'Movie Title 1', category: 'bollywood', genre: 'action', imageUrl: 'https://webneel.com/daily/sites/default/files/images/daily/09-2019/2-movie-poster-design-aladdin-disney-glossy-composite.jpg' },
                { id: 16, title: 'Movie Title 1', category: 'bollywood', genre: 'action', imageUrl: 'https://webneel.com/daily/sites/default/files/images/daily/09-2019/2-movie-poster-design-aladdin-disney-glossy-composite.jpg' },
                { id: 17, title: 'Movie Title 1', category: 'bollywood', genre: 'action', imageUrl: 'https://webneel.com/daily/sites/default/files/images/daily/09-2019/2-movie-poster-design-aladdin-disney-glossy-composite.jpg' },
                { id: 18, title: 'Movie Title 1', category: 'bollywood', genre: 'action', imageUrl: 'https://webneel.com/daily/sites/default/files/images/daily/09-2019/2-movie-poster-design-aladdin-disney-glossy-composite.jpg' },
                { id: 19, title: 'Movie Title 1', category: 'bollywood', genre: 'action', imageUrl: 'https://webneel.com/daily/sites/default/files/images/daily/09-2019/2-movie-poster-design-aladdin-disney-glossy-composite.jpg' },
                { id: 20, title: 'Movie Title 2', category: 'hollywood', genre: 'romance', imageUrl: 'https://webneel.com/daily/sites/default/files/images/daily/09-2019/2-movie-poster-design-aladdin-disney-glossy-composite.jpg' },
                { id: 30, title: 'Movie Title 3', category: 'tollywood', genre: 'comedy', imageUrl: 'https://webneel.com/daily/sites/default/files/images/daily/09-2019/2-movie-poster-design-aladdin-disney-glossy-composite.jpg' },
                { id: 44, title: 'Movie Title 4', category: 'bollywood', genre: 'drama', imageUrl: 'https://webneel.com/daily/sites/default/files/images/daily/09-2019/2-movie-poster-design-aladdin-disney-glossy-composite.jpg' },
                // Add more movie objects here
            ],
        };
    },
    mounted() {
        //
    },
    computed: {
        title () {
            let val = this.filters.type ? parseInt(this.filters.type) : null;
            let type = this.getFromObjArr(this.types, 'value', val);
            let title = type ? type.name : 'From All';
            this.setPageTitle({suffix: title });
            return title;
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