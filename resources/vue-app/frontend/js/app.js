import Vue from 'vue';
import App from './App.vue';
import VueRouter from 'vue-router'
import route from './routes';


Vue.use(VueRouter);
const router = new VueRouter({
    mode : 'history',
    routes : route,
    linkActiveClass : 'active'
});

new Vue({
    el: '#app',
    router,
    render: h => h(App)
});
