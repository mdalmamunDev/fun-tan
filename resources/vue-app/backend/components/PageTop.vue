<template>
    <div class="sm:flex gap-4 justify-between items-center rounded mb-6 p-2 py-1 bg-gradient-to-r from-red-900 to-gray-400">
        <h2 class="text-3xl font-semibold">{{ $route.meta.pageTitle }}</h2>
        <div class="flex gap-4">
            <div class="flex flex-wrap gap-4 justify-end text-xs">
                <!-- Name -->
                <div class="flex flex-col">
                    <label for="filterFilter" class="font-medium text-gray-300">Name:</label>
                    <input id="filterFilter" class="bg-gray-700 px-2 py-1 rounded hover:bg-gray-600 focus:outline-none">
                </div>

                <slot>
                <!--       Others filters will appear here         -->
                </slot>
            </div>
            <div class="flex items-center">
                <button type="button" class="mb-0 mr-0 focus:outline-none text-white bg-red-700 hover:bg-red-800 font-medium rounded-lg text-sm px-3 py-1.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700" title="Filter">
                    <i class="fa-solid fa-filter"></i>
                </button>
            </div>
        </div>
        <button type="button" class="mb-0 mr-0 focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-1.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
            <i class="fa-solid fa-plus mr-px"></i>
            Add New
        </button>
    </div>
</template>

<script>
    export default {
        name: "PageTop"
    }
</script>

<style scoped>

</style>