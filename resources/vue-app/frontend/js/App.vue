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
    name: 'App',
    components: {MyFooter, MyHeader}
};
</script>

<style scoped>
</style>
