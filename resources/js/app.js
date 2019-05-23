/**
 * First, we will load all of this project's Javascript utilities and other
 * dependencies. Then, we will be ready to develop a robust and powerful
 * application frontend using useful Laravel and JavaScript libraries.
 */

require('./bootstrap');

window.Vue = require('vue');

Vue.component('sidebar', require('./components/Sidebar.vue').default);
Vue.component('posts', require('./components/Posts.vue').default);

const app = new Vue({
    el: '#app'
});
