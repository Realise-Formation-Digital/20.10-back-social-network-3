// app.js
window.Vue = require('vue');

import { library } from '@fortawesome/fontawesome-svg-core';
import { faUserSecret } from '@fortawesome/free-solid-svg-icons';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
import Vue from 'vue';
import App from './App.vue';
import router from './router';
import VueAxios from 'vue-axios';
import VueRouter from 'vue-router';
import axios from 'axios';
import vuetify from './vuetify'
import 'bootstrap/dist/css/bootstrap.css'; 
import 'bootstrap';

library.add(faUserSecret)

Vue.component('font-awesome-icon', FontAwesomeIcon)

Vue.config.productionTip = false

Vue.use(VueRouter);
Vue.use(VueAxios, axios);

new Vue({
    el: '#app',
  	router, // to use router
    vuetify,
    template: '<App/>',
    render: h => h(App)
});
