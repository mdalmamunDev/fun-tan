<template>
    <div class="antialiased bg-gray-50 dark:bg-gray-900">
        <my-header />
        <side-bar />
        <main class="md:ml-64">
            <div class="m-4 mt-20 h-auto">
                <router-view />
            </div>

            <my-footer />
        </main>
    </div>
</template>

<script>
import MyFooter from "./components/MyFooter";
import SideBar from "./components/SideBar";
import MyHeader from "./components/MyHeader";
export default {
    name: 'App',
    components: {MyHeader, SideBar, MyFooter}
};
</script>

<style scoped>
h1 {
    color: #42b983;
}
</style>
