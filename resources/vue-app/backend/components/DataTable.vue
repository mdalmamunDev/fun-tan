<template>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Name
                    <i class="fa-solid fa-sort ml-1"></i>
                </th>
                <th scope="col" class="px-6 py-3">
                    Items
                    <i class="fa-solid fa-sort ml-1"></i>
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Status
                    <i class="fa-solid fa-sort ml-1"></i>
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
    </div>
</template>

<script>
    export default {
        name: "DataTable",

        props: {
            headings: {
                type: Array, // Can be either an array or object
                default: () => { return []}
            },
            // initFormData: {
            //     type: Object,
            //     default: () => ({ }),
            // },
        },
    }
</script>

<style scoped>

</style>