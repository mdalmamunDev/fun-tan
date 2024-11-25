<template>
    <div>
        <my-header />
        <router-view />
        <my-footer />
    </div>
</template>

<script>
import MyHeader from "./components/MyHeader";
import MyFooter from "./components/MyFooter";
export default {
    name: 'ItemsApp',
    components: {MyFooter, MyHeader},
};
</script>

<style scoped>
</style>
