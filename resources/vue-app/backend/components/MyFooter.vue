<template>
    <footer class="bg-gray-800 py-4 mt-8">
        <div class="max-w-screen-xl mx-auto text-center">
            <p class="text-sm">© {{ new Date().getFullYear() }} FunTan. All rights reserved.</p>
            <div class="mt-2">
                <a href="#" class="text-gray-400 hover:text-white mx-2">Privacy Policy</a>
                <a href="#" class="text-gray-400 hover:text-white mx-2">Terms of Service</a>
                <a href="#" class="text-gray-400 hover:text-white mx-2">Contact</a>
            </div>
        </div>
    </footer>
</template>

<script>
    export default {
        name: "MyFooter"
    }
</script>

<style scoped>

</style>