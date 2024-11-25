import Vue from 'vue';
import ItemsApp from './ItemsApp.vue';
import VueRouter from 'vue-router'
import route from './routes';
import commonMixin from "./mixins/commonMixin";
import '@fortawesome/fontawesome-free/css/all.min.css';



Vue.use(VueRouter);
const router = new VueRouter({
    mode : 'history',
    routes : route,
    linkActiveClass : 'active'
});

Vue.mixin(commonMixin);

new Vue({
    el: '#items-app',
    router,
    render: h => h(ItemsApp)
});
