/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('tri-nav', require('./components/NavTri').default);
Vue.component('home', require('./components/Home').default);
Vue.component('comp-nav', require('./components/CompNav').default);
Vue.component('page-title', require('./components/HeaderComponent').default);

const app = new Vue({
    el: '#app',
});
