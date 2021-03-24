// app.js
import Vue from 'vue';
import App from './App.vue';
import router from './router';
import VueAxios from 'vue-axios';
import VueRouter from 'vue-router';
import axios from 'axios';
import 'bootstrap/dist/css/bootstrap.css'; 
import 'bootstrap';
export const URLAPI = "http://127.0.0.1:8001/api/";

Vue.use(VueRouter);
Vue.use(VueAxios, axios);

new Vue({
    el: '#app',
  	router, // to use router
    render: h => h(App)
});
