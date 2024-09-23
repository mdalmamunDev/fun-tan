<template>
    <section id="items-listing" class="padding-large">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-4 mb-lg-0 col-lg-3">
                    <div class="featured border rounded-3 p-4">
                        <div class="section-title overflow-hidden mb-5 mt-2">
                            <h3 class="d-flex flex-column mb-0">Featured</h3>
                        </div>
                        <div class="items-lists">
                            <div class="item d-flex">
                                <img :src="baseUrl + '/frontend/images/product-item2.png'"
                                     class="img-fluid shadow-sm" alt="product item">
                                <div class="item-content ms-3">
                                    <h6 class="mb-0 fw-bold"><a href="index.html">Echoes of the Ancients</a></h6>
                                    <div class="review-content d-flex">
                                        <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>

                                        <div class="rating text-warning d-flex align-items-center">
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
                                </div>
                            </div>
                            <hr class="gray-400">
                            <div class="item d-flex">
                                <img :src="baseUrl + '/frontend/images/product-item1.png'"
                                     class="img-fluid shadow-sm" alt="product item">
                                <div class="item-content ms-3">
                                    <h6 class="mb-0 fw-bold"><a href="index.html">The Midnight Garden</a></h6>
                                    <div class="review-content d-flex">
                                        <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>
                                        <div class="rating text-warning d-flex align-items-center">
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
                                </div>
                            </div>
                            <hr>
                            <div class="item d-flex">
                                <img :src="baseUrl + '/frontend/images/product-item3.png'"
                                     class="img-fluid shadow-sm" alt="product item">
                                <div class="item-content ms-3">
                                    <h6 class="mb-0 fw-bold"><a href="index.html">Shadow of the Serpent</a></h6>
                                    <div class="review-content d-flex">
                                        <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>

                                        <div class="rating text-warning d-flex align-items-center">
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4 mb-lg-0 col-lg-3">
                    <div class="latest-items border rounded-3 p-4">
                        <div class="section-title overflow-hidden mb-5 mt-2">
                            <h3 class="d-flex flex-column mb-0">Latest items</h3>
                        </div>
                        <div class="items-lists">
                            <div class="item d-flex">
                                <img :src="baseUrl + '/frontend/images/product-item4.png'"
                                     class="img-fluid shadow-sm" alt="product item">
                                <div class="item-content ms-3">
                                    <h6 class="mb-0 fw-bold"><a href="index.html">Whispering Winds</a></h6>
                                    <div class="review-content d-flex">
                                        <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>
                                        <div class="rating text-warning d-flex align-items-center">
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
                                </div>
                            </div>
                            <hr class="gray-400">
                            <div class="item d-flex">
                                <img :src="baseUrl + '/frontend/images/product-item5.png'"
                                     class="img-fluid shadow-sm" alt="product item">
                                <div class="item-content ms-3">
                                    <h6 class="mb-0 fw-bold"><a href="index.html">The Forgotten Realm</a></h6>
                                    <div class="review-content d-flex">
                                        <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>
                                        <div class="rating text-warning d-flex align-items-center">
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
                                </div>
                            </div>
                            <hr>
                            <div class="item d-flex">
                                <img :src="baseUrl + '/frontend/images/product-item6.png'"
                                     class="img-fluid shadow-sm" alt="product item">
                                <div class="item-content ms-3">
                                    <h6 class="mb-0 fw-bold"><a href="index.html">Moonlit Secrets</a></h6>
                                    <div class="review-content d-flex">
                                        <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>
                                        <div class="rating text-warning d-flex align-items-center">
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4 mb-lg-0 col-lg-3">
                    <div class="best-reviewed border rounded-3 p-4">
                        <div class="section-title overflow-hidden mb-5 mt-2">
                            <h3 class="d-flex flex-column mb-0">Best reviewed</h3>
                        </div>
                        <div class="items-lists">
                            <div class="item d-flex">
                                <img :src="baseUrl + '/frontend/images/product-item7.png'"
                                     class="img-fluid shadow-sm" alt="product item">
                                <div class="item-content ms-3">
                                    <h6 class="mb-0 fw-bold"><a href="index.html">The Crystal Key</a></h6>
                                    <div class="review-content d-flex">
                                        <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>
                                        <div class="rating text-warning d-flex align-items-center">
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
                                </div>
                            </div>
                            <hr class="gray-400">
                            <div class="item d-flex">
                                <img :src="baseUrl + '/frontend/images/product-item8.png'"
                                     class="img-fluid shadow-sm" alt="product item">
                                <div class="item-content ms-3">
                                    <h6 class="mb-0 fw-bold"><a href="index.html">Starlight Sonata</a></h6>
                                    <div class="review-content d-flex">
                                        <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>
                                        <div class="rating text-warning d-flex align-items-center">
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
                                </div>
                            </div>
                            <hr>
                            <div class="item d-flex">
                                <img :src="baseUrl + '/frontend/images/product-item9.png'"
                                     class="img-fluid shadow-sm" alt="product item">
                                <div class="item-content ms-3">
                                    <h6 class="mb-0 fw-bold"><a href="index.html">Tales of the Enchanted Forest</a>
                                    </h6>
                                    <div class="review-content d-flex">
                                        <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>
                                        <div class="rating text-warning d-flex align-items-center">
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4 mb-lg-0 col-lg-3">
                    <div class="on-sale border rounded-3 p-4">
                        <div class="section-title overflow-hidden mb-5 mt-2">
                            <h3 class="d-flex flex-column mb-0">On sale</h3>
                        </div>
                        <div class="items-lists">
                            <div class="item d-flex">
                                <img :src="baseUrl + '/frontend/images/product-item10.png'"
                                     class="img-fluid shadow-sm" alt="product item">
                                <div class="item-content ms-3">
                                    <h6 class="mb-0 fw-bold"><a href="index.html">The Phoenix Chronicles</a></h6>
                                    <div class="review-content d-flex">
                                        <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>
                                        <div class="rating text-warning d-flex align-items-center">
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <span class="price text-primary fw-bold mb-2 fs-5"><s class="text-black-50">$1666</s>
                                $999</span>
                                </div>
                            </div>
                            <hr class="gray-400">
                            <div class="item d-flex">
                                <img :src="baseUrl + '/frontend/images/product-item11.png'"
                                     class="img-fluid shadow-sm" alt="product item">
                                <div class="item-content ms-3">
                                    <h6 class="mb-0 fw-bold"><a href="index.html">Dreams of Avalon</a></h6>
                                    <div class="review-content d-flex">
                                        <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>
                                        <div class="rating text-warning d-flex align-items-center">
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <span class="price text-primary fw-bold mb-2 fs-5"><s
                                            class="text-black-50">$500</s>
                                $410</span>
                                </div>
                            </div>
                            <hr>
                            <div class="item d-flex">
                                <img :src="baseUrl + '/frontend/images/product-item12.png'"
                                     class="img-fluid shadow-sm" alt="product item">
                                <div class="item-content ms-3">
                                    <h6 class="mb-0 fw-bold"><a href="index.html">Legends of the Dragon Isles</a>
                                    </h6>
                                    <div class="review-content d-flex">
                                        <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>
                                        <div class="rating text-warning d-flex align-items-center">
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <span class="price text-primary fw-bold mb-2 fs-5"><s
                                            class="text-black-50">$600</s>
                                $500</span>
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
    export default {
        name: "ItemsListingSection"
    }
</script>

<style scoped>

</style>