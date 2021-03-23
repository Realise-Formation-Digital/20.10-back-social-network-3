// app.js
import Vue from 'vue';
import App from './App.vue';
import router from './router';
import VueAxios from 'vue-axios';
import VueRouter from 'vue-router';
import axios from 'axios';
import 'bootstrap/dist/css/bootstrap.css'; 
import 'bootstrap';
//import vuetify from 'plugins';
import vuetify from './plugins/vuetify.js';

Vue.use(VueRouter);
Vue.use(VueAxios, axios);

new Vue({
    el: '#app',
  	router, // to use router
    vuetify: vuetify,
    render: h => h(App)
});
