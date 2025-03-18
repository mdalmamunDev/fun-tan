<template>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th v-for="h in headers" :class="h.cls" scope="col">
                    <span v-if="h.sortable" @click="h.changeSort(h.name)" class="cursor-pointer hover:text-gray-100 transition-colors duration-300">
                        {{ h.name }}
                        <i class="fa-solid fa-sort ml-1"></i>
                    </span>
                    <span v-else>{{ h.name }}</span>
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Action</span>
                </th>
            </tr>
            </thead>
            <tbody>
                <slot/>
            </tbody>
        </table>
        <pagination v-if="dataList.current_page && dataList.last_page > 1" :current-page="dataList.current_page" :last-page="dataList.last_page"></pagination>
    </div>
</template>

<script>
    import Pagination from "./Pagination";
    export default {
        name: "DataTable",
        components: {Pagination},
        props: {
            headers: {
                type: Array, // Can be either an array or object
                default: () => { return []}
            },
            // initFormData: {
            //     type: Object,
            //     default: () => ({ }),
            // },
        },
        methods: {
            //
        }
    }
</script>

<style scoped>

</style>