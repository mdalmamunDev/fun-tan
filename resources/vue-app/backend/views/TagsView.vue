<template>
    <div>
        <page-top :show-add-btn="can('industry_add')" />

        <data-table :headers="tableHeaders">
            <tr v-for="(item, index) in dataList.data" :key="index" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ item.name }}</th>
                <td class="px-6 py-2">99</td>
                <td class="px-6 py-2 text-center" v-html="showStatus({val: item.status})"></td>
                <td class="px-6 py-2 text-right">
                    <button v-if="can('industry_edit')" @click="onClickUpdate(item)" class="font-medium text-yellow-600 dark:text-yellow-500 hover:underline">Edit</button>
                    <span>|</span>
                    <button v-if="can('industry_delete')" @click="deleteItem(item.id, dataList.current_page)" class="font-medium text-red-600 dark:text-red-500 hover:underline">Drop</button>
                </td>
            </tr>
        </data-table>

        <modal :input-fields="modalInputs" :def-form-data="{status: 1}"/>
    </div>

</template>

<script>
    import PageTop from "../components/PageTop";
    import Modal from "../components/Modal";
    import DataTable from "../components/DataTable";
    export default {
        name: "TagsView",
        components: {DataTable, Modal, PageTop},

        data() {
            return {
                tableHeaders: [
                    this.tableHeader({}),
                    this.tableHeader({name: 'items'}),
                    this.tableHeader({name: 'status', cls: 'px-6 py-3 text-center'}),
                ],
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
            this.fetchData();
        },

        methods: {
            //
        }
    }
</script>

<style scoped>

</style>