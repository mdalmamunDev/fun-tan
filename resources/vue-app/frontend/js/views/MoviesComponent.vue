<template>
    <div class="container padding-medium">
        <div class="section-title d-md-flex justify-content-between align-items-center mb-4">
            <h3 class="d-flex align-items-center">Movies</h3>

            <div class="d-flex justify-content-between align-items-center">
                <h6 class="d-flex align-items-center mb-0 me-2">Sort by</h6>
                <select>
                    <option>Release date</option>
                    <option>Title</option>
                </select>
            </div>
        </div>
        <items-container-component/>
    </div>
</template>

<script>
    import ItemsContainerComponent from "../components/ItemsContainerComponent";

    export default {
        name: "MoviesComponent",
        components: {ItemsContainerComponent}
    }
</script>

<style scoped>

</style>