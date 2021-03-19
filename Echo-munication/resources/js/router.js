// router.js
import Vue from 'vue';
import Router from 'vue-router';
import Home from './views/Home.vue';

Vue.use(Router);

const routes = [
    {
        path: '/',
        name: 'home',
        component: Home,
    },
  	{ // new route for our categories page
        path: '/categories',
        name: 'categories',
        component: () => import('./views/Categories.vue'), // Vue we just created
    },
];

const router = new Router({
    mode: 'history',
    routes: routes,
  	linkActiveClass: 'active'
});

export default router;