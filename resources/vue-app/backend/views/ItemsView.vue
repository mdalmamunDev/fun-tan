<template>
    <div>
        <page-top :show-pagination="false" :show-add-btn="can('item_add')">
            <div class="flex flex-col">
                <label for="filterType" class="text-xs font-medium text-gray-300">Type:</label>
                <select id="filterType" class="bg-gray-700 px-2 py-1 rounded hover:bg-gray-600 focus:outline-none">
                    <option :value="undefined">All</option>
                </select>
            </div>
            <div class="flex flex-col">
                <label for="filterIndustry" class="text-xs font-medium text-gray-300">Industry:</label>
                <select id="filterIndustry" class="bg-gray-700 px-2 py-1 rounded hover:bg-gray-600 focus:outline-none">
                    <option :value="undefined">All</option>
                </select>
            </div>
            <div class="flex flex-col">
                <label for="filterSort" class="text-xs font-medium text-gray-300">Sort:</label>
                <select v-model="filterData.sort_by" id="filterSort" class="bg-gray-700 px-2 py-1 rounded hover:bg-gray-600 focus:outline-none">
                    <option :value="undefined">Default</option>
                    <option value="name">Name</option>
                </select>
            </div>
            <div class="flex flex-col">
                <label for="filterOrder" class="text-xs font-medium text-gray-300">Order:</label>
                <select v-model="filterData.sort_order" id="filterOrder" class="bg-gray-700 px-2 py-1 rounded hover:bg-gray-600 focus:outline-none">
                    <option :value="undefined">Default</option>
                    <option value="ASC">ASC</option>
                    <option value="DESC">DESC</option>
                </select>
            </div>
        </page-top>
        <div class="grid lg:grid-cols-2 2xl:grid-cols-3 gap-x-4 gap-2">
            <div v-for="i in 10" class="bg-gray-800 shadow-lg rounded-lg overflow-hidden w-full flex">
                <!-- Image Section with Duration Overlay -->
                <div class="relative w-36 h-28">
                    <img src="https://marketplace.canva.com/EAFTl0ixW_k/1/0/1131w/canva-black-white-minimal-alone-movie-poster-YZ-0GJ13Nc8.jpg" alt="Movie Title 1" class="w-full h-full object-cover">
                    <!-- Overlays -->
                    <div class="absolute top-1 right-1 bg-black bg-opacity-50 text-white text-xs px-1 py-0.5 rounded flex items-center space-x-1">
                        Tag
                    </div>
                    <div class="absolute bottom-1 right-1 bg-black bg-opacity-50 text-white text-xs px-1 py-0.5 rounded flex items-center space-x-1">
                        <span>33.5M</span>
                        <div class="w-1 h-1 bg-white rounded-full"></div>
                        <span>2:15:05</span>
                    </div>
                </div>

                <!-- Movie Details Section -->
                <div class="p-2 px-3 my-auto w-full">
                    <h4 class="font-semibold">Movie Title It's A Little Movie Title It's A Little Bigger Title</h4>

                    <div class="mt-2 flex text-xs">
                        <!-- Additional Movie Info (Views, Rating, Genre, Industry) -->
                        <div class="w-3/4 text-gray-400 grid grid-cols-2 gap-1">
                            <!-- Views Icon -->
                            <span><i class="fa-solid fa-eye mr-px text-red-600"></i> 1.5M</span>
                            <!-- Rating Icon -->
                            <span><i class="fa-solid fa-star mr-px text-red-600"></i> 8.7</span>
                            <!-- Genre Icon -->
                            <span><i class="fa-solid fa-film mr-px text-red-600"></i> Action, Adventure</span>
                            <!-- Industry Icon -->
                            <span><i class="fa-solid fa-industry mr-px text-red-600"></i> Hollywood</span>
                        </div>
                        <div class="w-1/4 flex flex-col items-end">
                            <div class="w-max text-center">
                                <div>
                                    <status-button :id="1" :status="1"/>
                                </div>
                                <div class="mt-1">
                                    <i
                                            v-if="can('item_edit')"
                                            @click="onClickUpdate({})"
                                            class="fa-solid fa-pen-to-square text-yellow-600 cursor-pointer"
                                            title="Edit"></i>
                                    <i class="fa-solid fa-trash text-red-600 cursor-pointer ml-3" title="Drop"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <modal width="4xl">
            <div class="grid md:grid-cols-2 gap-x-4">
                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-900 dark:text-white capitalize">Name:
                        <input v-model="formData.name" type="text" placeholder="Item Name" required class="mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </label>
                </div>
                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-900 dark:text-white capitalize">Industry:
                        <select v-model="formData.status" class="mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option :value="0">In Active</option>
                            <option :value="1">Active</option>
                        </select>
                    </label>
                </div>
                <div class="mb-6 md:col-span-2">
                    <label class="block text-sm font-medium text-gray-900 dark:text-white capitalize">Description:
                        <textarea v-model="formData.name" rows="4" placeholder="Item Description" required class="mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"></textarea>
                    </label>
                </div>
                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-900 dark:text-white capitalize">Genre:
                        <select v-model="formData.status" class="mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option :value="0">In Active</option>
                            <option :value="1">Active</option>
                        </select>
                    </label>
                </div>
                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-900 dark:text-white capitalize">Tag:
                        <select v-model="formData.status" class="mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option :value="0">In Active</option>
                            <option :value="1">Active</option>
                        </select>
                    </label>
                </div>
                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-900 dark:text-white capitalize">Rating:
                        <input v-model="formData.name" type="number" step="0.1" placeholder="Item Name" required class="mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
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
                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-900 dark:text-white capitalize">Thumbnail:
                        <input type="file" required class="mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </label>
                </div>
                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-900 dark:text-white capitalize">File/Content:
                        <input type="file" required class="mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </label>
                </div>
            </div>
        </modal>
    </div>

</template>

<script>
    import PageTop from "../components/PageTop";
    import StatusButton from "../components/StatusButton";
    import Modal from "../components/Modal";
    export default {
        name: "ItemsView",
        components: {Modal, StatusButton, PageTop},

        data() {
            return {
                //
            };
        },
    }
</script>

<style scoped>

</style>