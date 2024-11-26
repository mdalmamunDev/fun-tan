import Vue from 'vue';
import App from './App.vue';
import VueRouter from 'vue-router'
import route from './routes';
import '@fortawesome/fontawesome-free/css/all.min.css';
import 'flowbite'; //tailwind js
import commonMixin from "../utils/mixins/commonMixin";


Vue.use(VueRouter);
const router = new VueRouter({
    mode : 'history',
    routes : route,
    linkActiveClass : 'active'
});


Vue.mixin(commonMixin);

new Vue({
    el: '#app',
    router,
    render: h => h(App)
});
