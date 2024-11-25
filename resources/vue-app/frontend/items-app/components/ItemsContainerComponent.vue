<template>
    <div class="row">
        <div v-for="i in 12" :key="i" class="col-md-3 mb-3">
            <item-card-component/>
        </div>
    </div>
</template>

<script>
    import ItemCardComponent from "./ItemCardComponent";
    export default {
        name: "ItemsContainerComponent",
        components: {ItemCardComponent}
    }
</script>

<style scoped>

</style>