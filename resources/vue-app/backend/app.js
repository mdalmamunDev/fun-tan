import Vue from 'vue';
import Vuex from 'vuex';
import {store as storeData} from "../utils/store";
import App from './App.vue';
import VueRouter from 'vue-router'
import route from './routes';
import Toast from 'vue-toastification';
import 'vue-toastification/dist/index.css'; // Import default styles
import '@fortawesome/fontawesome-free/css/all.min.css';
import 'flowbite'; //tailwind js
import commonMixin from "../utils/mixins/commonMixin";
import httpMixin from "../utils/mixins/httpMixin";


Vue.use(Vuex);
const store = new Vuex.Store(storeData);

Vue.use(VueRouter);
const router = new VueRouter({
    mode : 'history',
    routes : route,
    linkActiveClass : 'active'
});

// toast
Vue.use(Toast, {
    timeout: 3000,
    position: "bottom-right"
});

Vue.mixin(commonMixin);
Vue.mixin(httpMixin);

new Vue({
    el: '#app',
    router, store,
    render: h => h(App)
});
