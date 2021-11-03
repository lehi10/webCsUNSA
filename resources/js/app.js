
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('header-component', require('./components/HeaderComponent.vue'));
Vue.component('aboutus-component', require('./components/AboutusComponent.vue'));
Vue.component('firstvideo-component', require('./components/FirstvideoComponent.vue'));
Vue.component('ponents-component', require('./components/PonentsComponent.vue'));
Vue.component('program-component', require('./components/ProgramComponent.vue'));
Vue.component('modal-persona-component', require('./components/PersonaModalComponent.vue'));
Vue.component('sponsors-component', require('./components/SponsorsComponent.vue'));
Vue.component('venue-component', require('./components/VenueComponent.vue'));
//Vue.component('program-component', require('./components/ProgramComponent.vue'));
Vue.component('footer-component', require('./components/FooterComponent.vue'));

const app = new Vue({
    el: '#app'
});
