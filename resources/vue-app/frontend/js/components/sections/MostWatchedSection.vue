<template>
    <section id="best-selling-items" class="position-relative padding-large pt-5 ">
        <div class="container">
            <div class="section-title d-md-flex justify-content-between align-items-center mb-4">
                <h3 class="d-flex align-items-center">Most watched</h3>
                <a href="index.html" class="btn">View All</a>
            </div>
            <courser-left-right-btns />
            <div class="swiper product-swiper">
                <div class="swiper-wrapper">
                    <div v-for="i in 10" :key="i" class="swiper-slide">
                        <item-card-component />
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    import ItemCardComponent from "../ItemCardComponent";
    import CourserLeftRightBtns from "../CourserLeftRightBtns";
    export default {
        name: "MostWatchedSection",
        components: {CourserLeftRightBtns, ItemCardComponent}
    }
</script>

<style scoped>

</style>