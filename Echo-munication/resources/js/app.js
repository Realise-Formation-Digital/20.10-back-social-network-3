// app.js
import Vue from 'vue';
import App from './App.vue';
import router from './router';
import VueAxios from 'vue-axios';
import VueRouter from 'vue-router';
import axios from 'axios';
import 'bootstrap/dist/css/bootstrap.css'; 
import 'bootstrap';
import vuetify from './src/plugins/vuetify.js' // path to vuetify export

Vue.use(VueRouter);
Vue.use(VueAxios, axios);

new Vue({
    el: '#app',
  	router, // to use router
    vuetify,
    render: h => h(App)
});
