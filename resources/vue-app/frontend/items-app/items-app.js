import Vue from 'vue';
import ItemsApp from './ItemsApp.vue';
import VueRouter from 'vue-router'
import commonMixin from "../../utils/mixins/commonMixin";
import '@fortawesome/fontawesome-free/css/all.min.css';



Vue.use(VueRouter);
const router = new VueRouter({
    mode : 'history',
    routes : [],
    linkActiveClass : 'active'
});

Vue.mixin(commonMixin);

new Vue({
    el: '#items-app',
    router,
    render: h => h(ItemsApp)
});
