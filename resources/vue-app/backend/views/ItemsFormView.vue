<template>
    <div class="bg-gray-800 p-4 py-6 rounded">
        <div class="flex justify-between">
            <h1 class="text-3xl font-bold">Item Form</h1>
            <back-button />
        </div>
        <hr class="my-2">
        <div class="grid md:grid-cols-2 gap-x-4 my-4">
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-900 dark:text-white capitalize">Type:
                    <select v-model="formData.type" @change="formData.child = []" class="mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-3 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <template v-for="type in types">
                            <option :value="type.value">{{ type.name }}</option>
                        </template>
                    </select>
                </label>
            </div>
            <div v-if="formData.type === 6" class="mb-6">
                <label class="block text-sm font-medium text-gray-900 dark:text-white capitalize">Parent:
                    <select v-model="formData.parent_id" class="mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-3 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option :value="undefined">Select a parent content</option>
                        <template v-for="type in types">
                            <option :value="type.value">{{ type.name }}</option>
                        </template>
                    </select>
                </label>
            </div>
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-900 dark:text-white capitalize">Name:
                    <input v-model="formData.name" type="text" placeholder="Item Name" required class="mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                </label>
            </div>
            <div class="mb-6 md:col-span-2">
                <label class="block text-sm font-medium text-gray-900 dark:text-white capitalize">Description:
                    <textarea v-model="formData.name" rows="4" placeholder="Item Description" required class="mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"></textarea>
                </label>
            </div>
            <template v-if="formData.type !== 6">
                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-900 dark:text-white capitalize">Industry:
                        <select v-model="formData.status" class="mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-3 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option :value="0">In Active</option>
                            <option :value="1">Active</option>
                        </select>
                    </label>
                </div>
                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-900 dark:text-white capitalize">Genre:
                        <select v-model="formData.status" class="mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-3 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option :value="0">In Active</option>
                            <option :value="1">Active</option>
                        </select>
                    </label>
                </div>
                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-900 dark:text-white capitalize">Tag:
                        <select v-model="formData.status" class="mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-3 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option :value="0">In Active</option>
                            <option :value="1">Active</option>
                        </select>
                    </label>
                </div>
            </template>
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-900 dark:text-white capitalize">Rating:
                    <input v-model="formData.name" type="number" step="0.1" placeholder="Item Name" required class="mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                </label>
            </div>
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-900 dark:text-white capitalize">Date:
                    <input v-model="formData.name" type="date" required class="mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                </label>
            </div>
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-900 dark:text-white capitalize">Status:
                    <select v-model="formData.status" class="mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-3 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
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
        <fieldset v-for="(child, index) in formData.child" class="border border-gray-300 p-4 pb-0 mb-4 rounded-lg" :key="index">
            <legend class="w-full bg-gray-200 text-gray-800 text-center rounded relative">
                <span class="text-2xl">
                    <span class="font-bold">Episode {{ index + 1}}</span>{{ child.name ? ': '+child.name : '' }}
                </span>
                <button @click="removeArrItem(formData.child, child)" class="text-red-600 absolute right-4 top-1" title="Remove this episode">
                    Remove <i class="fa fa-trash"></i>
                </button>
            </legend>
            <div class="grid md:grid-cols-2 gap-x-4">
                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-900 dark:text-white capitalize">Name:
                        <input v-model="child.name" type="text" placeholder="Item Name" required class="mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </label>
                </div>
                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-900 dark:text-white capitalize">Rating:
                        <input v-model="formData.name" type="number" step="0.1" placeholder="Item Name" required class="mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </label>
                </div>
                <div class="mb-6 md:col-span-2">
                    <label class="block text-sm font-medium text-gray-900 dark:text-white capitalize">Description:
                        <textarea v-model="formData.name" rows="4" placeholder="Item Description" required class="mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"></textarea>
                    </label>
                </div>
                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-900 dark:text-white capitalize">Date:
                        <input v-model="formData.name" type="date" required class="mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </label>
                </div>
                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-900 dark:text-white capitalize">Status:
                        <select v-model="formData.status" class="mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-3 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
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
        </fieldset>
        <button v-if="[2,3].includes(formData.type)" @click="formData.child.push({})" class="mb-0 mr-0 focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
            <i class="fa-solid fa-plus mr-px"></i>
            Add Episode
        </button>
        <pre>
            {{formData}}
        </pre>
    </div>
</template>

<script>
    import BackButton from "../components/BackButton";
    export default {
        name: "ItemsFormView",
        components: {BackButton},
        data() {
            return {
                //
            };
        },
        computed: {
            itemId() {
                return this.$route.params.id || null; // Handle the case where `id` is missing
            }
        },
        mounted() {
            this.$store.commit('setFormData', {
                type: 1,
                child: [],
            });
        }
    }
</script>

<style scoped>

</style>