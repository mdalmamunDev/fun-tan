<template>
    <section id="best-selling-items" class="position-relative my-5">
        <div class="container">
            <div class="section-title d-md-flex justify-content-between align-items-center mb-4">
                <h3 class="d-flex align-items-center">Recent Collections</h3>
                <a href="index.html" class="btn">View All</a>
            </div>
            <items-container-component />
        </div>
    </section>
</template>

<script>
    import ItemCardComponent from "../ItemCardComponent";
    import ItemsContainerComponent from "../ItemsContainerComponent";

    export default {
        name: "RecentCollectionsSection",
        components: {ItemsContainerComponent, ItemCardComponent}
    }
</script>

<style scoped>

</style>