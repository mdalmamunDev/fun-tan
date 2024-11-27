import Vue from 'vue';
import App from './App.vue';
import VueRouter from 'vue-router'
import route from './routes';
import '@fortawesome/fontawesome-free/css/all.min.css';
import 'flowbite'; //tailwind js
import commonMixin from "../utils/mixins/commonMixin";
import httpMixin from "../utils/mixins/httpMixin";


Vue.use(VueRouter);
const router = new VueRouter({
    mode : 'history',
    routes : route,
    linkActiveClass : 'active'
});


Vue.mixin(commonMixin);
Vue.mixin(httpMixin);

new Vue({
    el: '#app',
    router,
    render: h => h(App)
});
