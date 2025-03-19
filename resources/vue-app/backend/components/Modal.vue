<template>
    <div v-if="showModal" class="fixed inset-0 flex justify-center items-center bg-black bg-opacity-50 z-50">
        <div :class="['relative m-4 max-h-full overflow-auto w-full', extraClass]">
        <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        {{ $route.meta.pageTitle }}
                    </h3>
                    <button @click="closeModal(defFormData)" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form class="p-4 md:p-5" @submit.prevent="handleSubmit">
                    <slot />
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
            defFormData: {
                type: Object,
                default: () => ({status: 1})
            },
            extraClass: {
                type: String,
                default: 'max-w-md'
            },
        },

        mounted() {
            // set defaults
            this.$store.commit('setFormData', this.defFormData);
        },

        methods: {
            handleSubmit() {
                let urlSuffix = this.formData.id ?? false;
                let method = this.formData.id ? 'put' : 'post';

                const _this = this;
                this.httpReq({
                    urlSuffix: urlSuffix,
                    method: method,
                    callback: () => {
                        _this.fetchData({params: {page: _this.dataList.current_page}});
                    }
                });

                this.closeModal(this.defFormData);
            },
        },
    }
</script>

<style scoped>

</style>