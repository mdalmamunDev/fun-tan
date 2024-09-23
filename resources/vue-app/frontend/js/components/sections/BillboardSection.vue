<template>
    <section id="billboard" class="position-relative d-flex align-items-center py-5 bg-light-gray"
             :style="{
           backgroundImage: 'url(' + baseUrl + '/frontend/images/banner-image-bg.jpg)',
           backgroundSize: 'cover',
           backgroundRepeat: 'no-repeat',
           backgroundPosition: 'center',
           height: '800px'
         }">
        <courser-left-right-btns />
        <div class="swiper main-swiper h-full">
            <div class="swiper-wrapper d-flex align-items-center h-full">
                <div v-for="i in 5" :key="i" class="swiper-slide h-full">
                    <div class="container h-full">
                        <div class="row d-flex flex-column-reverse flex-md-row align-items-center h-full">
                            <div class="col-md-5 offset-md-1 mt-5 mt-md-0 text-center text-md-start">
                                <div class="banner-content">
                                    <h2>The Fine Print Book Collection</h2>
                                    <p>Best Offer Save 30%. Grab it now!</p>
                                    <a href="index.html" class="btn mt-3">Shop Collection</a>
                                </div>
                            </div>
                            <div class="col-md-6 text-center p-5 h-full">
                                <div class="image-holder h-full">
                                    <img :src="baseUrl + '/frontend/images/product-item1.png'" class="img-fluid h-full"
                                         alt="banner">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    import CourserLeftRightBtns from "../CourserLeftRightBtns";
    export default {
        name: "BillboardSection",
        components: {CourserLeftRightBtns}
    }
</script>

<style scoped>
    .h-full {
        height: 100%;
    }
</style>