<template>
    <div class="card position-relative p-2 border rounded-3">
        <!-- Discount label -->
        <div class="position-absolute">
            <p class="bg-primary py-1 px-3 fs-6 text-white rounded-2">10% off</p>
        </div>

        <!-- Product image -->
        <div class="position-relative">
            <img :src="baseUrl + '/frontend/images/product-item1.png'" class="img-fluid shadow-sm rounded" alt="product item">

            <!-- Rating at the bottom-right corner -->
            <div class="rating position-absolute bottom-0 end-0 bg-light px-2 py-1 rounded-start">
                <i class="fas fa-star text-warning"></i>
                <span class="text-dark">4.5</span>
            </div>


            <!-- Play and wishlist buttons -->
            <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
                <button class="btn btn-dark rounded-circle custom-btn">
                    <i class="fas fa-play"></i>
                </button>
                <button class="btn btn-dark rounded-circle custom-btn">
                    <i class="far fa-heart"></i>
                </button>
            </div>
        </div>

        <!-- Product title and review content -->
        <h6 class="mt-3 mb-0 fw-bold">Avengers: Endgame</h6>
        <div class="review-content d-flex">
            <p class="my-2 me-2 fs-6 text-black-50">12/06/24</p>
        </div>

    </div>
</template>


<script>
    export default {
        name: "ItemCardComponent"
    }
</script>

<style scoped>
    .custom-btn {
        width: 40px;      /* Set the width */
        height: 40px;     /* Set the height to make it a circle */
        padding: 0;       /* Remove default padding */
        display: flex;    /* Flexbox to center the icon */
        justify-content: center;
        align-items: center;
        border-radius: 50%; /* Make the button circular */
        font-size: 20px;
    }
    img {
        width: 100%;                /* Ensure the image takes up the full width of the container */
        height: auto;               /* Allow the height to adjust according to the width */
        max-height: 150px;          /* Set a max-height to prevent the image from becoming too large */
        object-fit: cover;          /* Ensure the image covers the container while maintaining its aspect ratio */
    }

    /* Optional: Adjust the image height for smaller screens */
    @media (max-width: 768px) {
        img {
            max-height: 120px;      /* Reduce the max-height for smaller screens */
        }
    }

    @media (max-width: 576px) {
        img {
            max-height: 100px;      /* Further reduce the max-height for even smaller screens */
        }
    }


</style>