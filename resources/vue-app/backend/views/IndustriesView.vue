<template>
    <div>
        <page-top :show-add-btn="can('industry_add')" />

        <data-table :headers="tableHeaders">
            <tr v-for="(item, index) in dataList.data" :key="index" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ item.name }}</th>
                <td class="px-6 py-2">99</td>
                <td class="px-6 py-2 text-center">
                    <status-button :id="item.id" :status="item.status" />
                </td>
                <td class="px-6 py-2 text-right">
                    <button v-if="can('industry_edit')" @click="onClickUpdate(item)" class="font-medium text-yellow-600 dark:text-yellow-500 hover:underline">Edit</button>
                    <span>|</span>
                    <button v-if="can('industry_delete')" @click="deleteItem(item.id, dataList.current_page)" class="font-medium text-red-600 dark:text-red-500 hover:underline">Drop</button>
                </td>
            </tr>
        </data-table>

        <modal>
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-900 dark:text-white capitalize">Name:
                    <input v-model="formData.name" type="text" placeholder="Industry Name" required class="mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                </label>
            </div>
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-900 dark:text-white capitalize">Status:
                <select v-model="formData.status" class="mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    <option :value="0">In Active</option>
                    <option :value="1">Active</option>
                </select>
                </label>
            </div>
        </modal>
    </div>

</template>

<script>
    import PageTop from "../components/PageTop";
    import Modal from "../components/Modal";
    import DataTable from "../components/DataTable";
    import StatusButton from "../components/StatusButton";
    export default {
        name: "IndustriesView",
        components: {StatusButton, DataTable, Modal, PageTop},

        data() {
            return {
                tableHeaders: [
                    this.tableHeader(),
                    this.tableHeader({name: 'items'}),
                    this.tableHeader({name: 'status', cls: 'px-6 py-3 text-center'}),
                ],
            };
        },

        mounted() {
            this.fetchData();
        },

        methods: {
            //
        }
    }
</script>

<style scoped>

</style>