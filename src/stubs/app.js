require('./bootstrap');

import Modal from 'simple-vue-modal';

window.Vue = require('vue');

window.Vue.use(Modal);

const files = require.context('./', true, /\.vue$/i)
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

const app = new Vue({
    el: '#app',
});
