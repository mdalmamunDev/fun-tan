<template>
    <button @click="$router.back()" class="button bg-gray-800 hover:bg-red-600">
        <i class="fa fa-arrow-left svgIcon text-red-600"></i>
    </button>
</template>

<script>
    export default {
        name: "BackButton"
    }
</script>

<style scoped>
    .button {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        border: none;
        font-weight: 600;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0px 0px 0px 4px rgba(255, 172, 163, 0.25);
        cursor: pointer;
        transition-duration: 0.3s;
        overflow: hidden;
        position: relative;
    }

    .svgIcon {
        width: 12px;
        transition-duration: 0.3s;
    }

    .button:hover {
        width: 140px;
        border-radius: 50px;
        transition-duration: 0.3s;
        align-items: center;
    }

    .button:hover .svgIcon {
        /* width: 20px; */
        transition-duration: 0.3s;
        transform: translateX(-200px);
    }

    .button::before {
        position: absolute;
        bottom: -20px;
        content: "Go Back";
        color: white;
        /* transition-duration: .3s; */
        font-size: 0;
    }

    .button:hover::before {
        font-size: 14px;
        opacity: 1;
        bottom: unset;
        /* transform: translateY(-30px); */
        transition-duration: 0.3s;
    }
</style>