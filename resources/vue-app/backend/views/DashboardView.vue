<template>
    <div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-4">
            <div v-for="i in 4" class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow p-6 dark:bg-gray-800 dark:border-gray-700">
                <h5 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Total Sales</h5>
                <p class="text-4xl font-extrabold text-gray-900 dark:text-white">$12,345</p>
                <p class="text-sm text-gray-500 dark:text-gray-400">This month</p>
                <div class="flex items-center mt-4">
                    <svg class="w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 9.293a1 1 0 011.414 0L10 12.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                    <span class="text-sm font-medium text-green-500 dark:text-green-400 ml-2">+8% from last month</span>
                </div>
            </div>
        </div>

        <!-- users chart -->
        <users-chart />
        <items-chart />
    </div>
</template>

<script>
    import UsersChart from "../components/UsersChart";
    import ItemsChart from "../components/ItemsChart";
    export default {
        name: "DashboardView",
        components: {ItemsChart, UsersChart},
    }
</script>

<style scoped>

</style>