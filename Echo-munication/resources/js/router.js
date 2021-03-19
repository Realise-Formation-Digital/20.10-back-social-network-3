// router.js
import Vue from 'vue';
import Router from 'vue-router';
import Home from './views/Home.vue';
import About from './views/About.vue';
import Categories from './views/Categories.vue';
import Favoris from './views/Favoris.vue';


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
        component:Categories,
    },
    {
        path: '/about',
        name: 'about',
        component: About,
    },

    {
        path: '/favoris',
        name: 'favoris',
        component: Favoris,
    },

    {
        path: '/connexion',
        name: 'connexion',
        component: Connexion,
    },

];

const router = new Router({
    mode: 'history',
    routes: routes,
  	linkActiveClass: 'active'
});

export default router;