<template>
    <div>
        <billboard-section />
        <company-services-section />
        <recent-collections-section />
        <most-watched-section />
        <limited-offer-section />
        <items-listing-section />
        <categories-section />
        <customers-reviews-section />
        <latest-posts-section />
        <instagram-section />
    </div>
</template>

<script>
    import BillboardSection from "../components/sections/BillboardSection";
    import CompanyServicesSection from "../components/sections/CompanyServicesSection";
    import MostWatchedSection from "../components/sections/MostWatchedSection";
    import LimitedOfferSection from "../components/sections/LimitedOfferSection";
    import ItemsListingSection from "../components/sections/ItemsListingSection";
    import CategoriesSection from "../components/sections/CategoriesSection";
    import CustomersReviewsSection from "../components/sections/CustomersReviewsSection";
    import LatestPostsSection from "../components/sections/LatestPostsSection";
    import InstagramSection from "../components/sections/InstagramSection";
    import MyFooter from "../components/MyFooter";
    import RecentCollectionsSection from "../components/sections/RecentCollectionsSection";
    export default {
        name: "HomeComponent",
        components: {
            RecentCollectionsSection,
            MyFooter,
            InstagramSection,
            LatestPostsSection,
            CustomersReviewsSection,
            CategoriesSection,
            ItemsListingSection,
            LimitedOfferSection, MostWatchedSection, CompanyServicesSection, BillboardSection}
    }
</script>

<style scoped>

</style>