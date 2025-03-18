<template>
    <div class="sm:flex gap-4 justify-between items-center rounded mb-6 p-3 py-2 bg-gradient-to-r from-red-200 to-gray-400 dark:from-red-900 dark:to-gray-400">
        <div class="flex items-center">
            <h2 class="text-3xl font-semibold" :class="{'pe-1 border-r-4': showPagination}">{{ $route.meta.pageTitle }}</h2>
            <div v-if="showPagination" class="ms-1">
                <select v-model="filterData.per_page" @change="fetchData" class="bg-gray-700 py-1.5 rounded hover:bg-gray-600 focus:outline-none text-center">
                    <template v-for="i in perPageArr">
                        <option :value="i">{{ i }}</option>
                    </template>
                </select>
            </div>
        </div>
        <form class="flex gap-4" @submit.prevent="fetchData()">
            <div class="flex flex-wrap gap-4 justify-end text-xs">
                <!-- Name -->
                <div class="flex flex-col">
                    <label for="filterFilter" class="font-medium text-gray-300">Name:</label>
                    <input v-model="filterData.name" id="filterFilter" class="bg-gray-700 px-2 py-1 rounded hover:bg-gray-600 focus:outline-none">
                </div>

                <slot>
                <!--       Others filters will appear here         -->
                </slot>
            </div>
            <div class="flex items-center">
                <button type="submit" class="mb-0 mr-0 focus:outline-none text-white bg-red-700 hover:bg-red-800 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-red-600 dark:hover:bg-red-700" title="Filter">
                    <i class="fa-solid fa-filter"></i>
                </button>
            </div>
        </form>
        <button v-if="showAddBtn" @click="openModal" class="mb-0 mr-0 focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
            <i class="fa-solid fa-plus mr-px"></i>
            Add New
        </button>
    </div>
</template>

<script>
    export default {
        name: "PageTop",

        props: {
            showAddBtn: Boolean,
            showPagination: {
                type: Boolean,
                default: true
            },
        },
        mounted() {
            // reset filters
            this.$store.commit('setFilterData', {per_page: 15});
        }
    }
</script>

<style scoped>

</style>