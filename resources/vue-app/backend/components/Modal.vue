<template>
    <div v-if="showModal" class="fixed inset-0 flex justify-center items-center bg-black bg-opacity-50 z-50">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        {{ $route.meta.pageTitle }}
                    </h3>
                    <button @click="closeModal" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form class="p-4 md:p-5" @submit.prevent="handleSubmit">
                    <div :class="`grid gap-4 mb-8 grid-cols-2`">
                        <div v-for="field in inputFields" :class="`col-span-${field.colSpan}`">
                            <label :for="field.name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white capitalize">{{ field.name }}</label>
                            <select
                                    v-if="field.type === 'select'"
                                    v-model="formData[field.name]"
                                    :name="field.name"
                                    :id="field.name"
                                    :required="field.required"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            >
                                <option v-for="opt in field.options" :value="opt.value">{{ opt.name }}</option>
                            </select>
                            <input
                                    v-else
                                    v-model="formData[field.name]"
                                    :type="field.type"
                                    :name="field.name"
                                    :id="field.name"
                                    :placeholder="field.placeholder"
                                    :required="field.required"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            >
                        </div>
<!--                        <div class="col-span-2">-->
<!--                            <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>-->
<!--                            <select v-model="formData.status" id="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">-->
<!--                                <option :value="1">Active</option>-->
<!--                                <option :value="0">In Active</option>-->
<!--                            </select>-->
<!--                        </div>-->
<!--                        <div class="col-span-2">-->
<!--                            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Description</label>-->
<!--                            <textarea id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write product description here"></textarea>-->
<!--                        </div>-->
                    </div>
                    <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                        Submit
                    </button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Modal",

        props: {
            inputFields: {
                type: Array,
                default: [],
            },
            currentPage: Number,
        },

        mounted() {
            // set defaults
            for (const field of this.inputFields) {
                if (field.defaultValue) {
                    this.formData[field.name] = field.defaultValue;
                }
            }
        },

        methods: {
            handleSubmit() {
                let urlSuffix = this.formData.id ?? false;
                let method = this.formData.id ? 'put' : 'post';

                const _this = this;
                this.httpReq({
                    urlSuffix: urlSuffix,
                    method: method,
                    callback: (response) => {
                        if (response.data) {
                            // Show success toast notification instead of alert
                            // _this.showToast(response.data.message, response.data.status === _this.CODE_SUCCESS ? 'success' : 'error');
                            _this.fetchData(this.generateUrl(false, false, {page: _this.currentPage}));
                        }
                    }
                });

                this.closeModal();
            },
        },
    }
</script>

<style scoped>

</style>