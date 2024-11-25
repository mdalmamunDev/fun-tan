<template>
    <div>
        <h1 class="text-amber-800">Hello Tailwind</h1>
    </div>
</template>

<script>
    export default {
        name: "HomeComponent",
    }
</script>

<style scoped>

</style>


<!--<template>-->
<!--    <div class="p-6 md:p-12 space-y-8">-->
<!--        &lt;!&ndash; Page Title &ndash;&gt;-->
<!--        <div class="flex justify-between items-center mb-6">-->
<!--            <h1 class="text-3xl font-bold">Movies</h1>-->
<!--            &lt;!&ndash; Filter &ndash;&gt;-->
<!--            <div class="flex flex-wrap gap-4 items-center">-->
<!--                &lt;!&ndash; Category &ndash;&gt;-->
<!--                <div class="flex flex-col">-->
<!--                    <label for="categorySort" class="text-sm font-medium text-gray-300 mb-1">Industry</label>-->
<!--                    <select v-model="filters.category" id="categorySort" class="bg-gray-700 px-4 py-2 rounded hover:bg-gray-600 focus:outline-none">-->
<!--                        <option value="bollywood">Bollywood</option>-->
<!--                        <option value="hollywood">Hollywood</option>-->
<!--                        <option value="tollywood">Tollywood</option>-->
<!--                    </select>-->
<!--                </div>-->
<!--                &lt;!&ndash; Genre &ndash;&gt;-->
<!--                <div class="flex flex-col">-->
<!--                    <label for="genreSort" class="text-sm font-medium text-gray-300 mb-1">Genre</label>-->
<!--                    <select v-model="filters.genre" id="genreSort" class="bg-gray-700 px-4 py-2 rounded hover:bg-gray-600 focus:outline-none">-->
<!--                        <option value="sci-fi">Sci-Fi</option>-->
<!--                        <option value="romance">Romance</option>-->
<!--                        <option value="comedy">Comedy</option>-->
<!--                        <option value="action">Action</option>-->
<!--                        <option value="drama">Drama</option>-->
<!--                    </select>-->
<!--                </div>-->
<!--                &lt;!&ndash; Sort By &ndash;&gt;-->
<!--                <div class="flex flex-col">-->
<!--                    <label for="sortBy" class="text-sm font-medium text-gray-300 mb-1">Sort By</label>-->
<!--                    <select v-model="filters.sortBy" id="sortBy" class="bg-gray-700 px-4 py-2 rounded hover:bg-gray-600 focus:outline-none">-->
<!--                        <option value="name">Name</option>-->
<!--                        <option value="date">Date</option>-->
<!--                        <option value="views">Views</option>-->
<!--                        <option value="duration">Duration</option>-->
<!--                    </select>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->

<!--        &lt;!&ndash; Movie Grid &ndash;&gt;-->
<!--        <div class="grid grid-cols-[repeat(auto-fill,minmax(170px,1fr))] gap-4 gap-x-6">-->
<!--            <div v-for="movie in filteredMovies" :key="movie.id" class="relative w-48 h-64 bg-cover bg-center rounded-md hover:scale-105 transform transition cursor-pointer" :style="{ backgroundImage: `url(${movie.imageUrl})` }">-->
<!--                <div class="p-2 w-48">-->
<!--                    <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-80 rounded-md"></div>-->
<!--                    <div class="absolute bottom-2 left-2 text-sm font-semibold">{{ movie.title }}</div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->

<!--        &lt;!&ndash; Show More Button &ndash;&gt;-->
<!--        <button @click="loadMore" class="mt-4 px-6 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 focus:outline-none mx-auto block">-->
<!--            Show More-->
<!--            <i class="fa-solid fa-chevron-down"></i>-->
<!--        </button>-->
<!--    </div>-->
<!--</template>-->

<!--<script>-->
<!--    export default {-->
<!--        name: "HomeComponent",-->

<!--        data() {-->
<!--            return {-->
<!--                filters: {-->
<!--                    category: 'bollywood',-->
<!--                    genre: 'sci-fi',-->
<!--                    sortBy: 'name',-->
<!--                },-->
<!--                movies: [-->
<!--                    { id: 1, title: 'Movie Title 1', category: 'bollywood', genre: 'action', imageUrl: 'https://via.placeholder.com/200x300?text=Movie+1' },-->
<!--                    { id: 2, title: 'Movie Title 2', category: 'hollywood', genre: 'romance', imageUrl: 'https://via.placeholder.com/200x300?text=Movie+2' },-->
<!--                    { id: 3, title: 'Movie Title 3', category: 'tollywood', genre: 'comedy', imageUrl: 'https://via.placeholder.com/200x300?text=Movie+3' },-->
<!--                    { id: 4, title: 'Movie Title 4', category: 'bollywood', genre: 'drama', imageUrl: 'https://via.placeholder.com/200x300?text=Movie+4' },-->
<!--                    // Add more movie objects here-->
<!--                ],-->
<!--                movieLimit: 12,-->
<!--            };-->
<!--        },-->
<!--        computed: {-->
<!--            filteredMovies() {-->
<!--                return this.movies-->
<!--                    .filter(movie => movie.category === this.filters.category)-->
<!--                    .filter(movie => movie.genre === this.filters.genre)-->
<!--                    .sort((a, b) => {-->
<!--                        if (this.filters.sortBy === 'name') {-->
<!--                            return a.title.localeCompare(b.title);-->
<!--                        }-->
<!--                        // Add other sorting logic based on 'date', 'views', 'duration'-->
<!--                        return 0;-->
<!--                    })-->
<!--                    .slice(0, this.movieLimit);-->
<!--            },-->
<!--        },-->
<!--        methods: {-->
<!--            loadMore() {-->
<!--                this.movieLimit += 12;-->
<!--            },-->
<!--        },-->
<!--    };-->
<!--</script>-->

<!--<style scoped>-->
<!--    /* Add your custom styles here */-->
<!--</style>-->