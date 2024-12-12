<template>
    <div>
        <page-top>

        </page-top>

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
                <tr v-for="i in 9" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Item {{i}}
                    </th>
                    <td class="px-6 py-2">
                        99
                    </td>
                    <td class="px-6 py-2 text-center" v-html="showStatus({val: i%3})"></td>
                    <td class="px-6 py-2 text-right">
                        <a href="#" class="font-medium text-yellow-600 dark:text-yellow-500 hover:underline">Edit</a>
                        <span>|</span>
                        <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Drop</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

        <modal :input-fields="modalInputs">

        </modal>
    </div>

</template>

<script>
    import PageTop from "../components/PageTop";
    import Modal from "../components/Modal";
    export default {
        name: "IndustriesView",
        components: {Modal, PageTop},

        data() {
            return {
                modalInputs: [
                    this.modalInput({name: 'name', type: 'text', required: true, placeholder: 'Industry name'}),
                    this.modalInput({
                        name: 'status',
                        type: 'select',
                        required: true,
                        defaultValue: 1,
                        options : [
                            {name: 'In Active', value: 0},
                            {name: 'Active', value: 1},
                        ]
                    }),
                ],
            };
        },

        mounted() {
            //
        }
    }
</script>

<style scoped>

</style>