
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('../bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import routes from './router';
import VueRouter from 'vue-router';
import store from './store/index.js'
import Vuetable from 'vuetable-2/src/components/Vuetable'
Vue.component('main-app', require('./components/MainApp.vue'));
Vue.use(VueRouter);
Vue.use(Vuetable);
const router = new VueRouter({
  mode: 'history',
  routes
})

const app = new Vue({
    el: '#app',
    router,
    store
});
