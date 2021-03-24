// router.js
import Vue from 'vue';
import Router from 'vue-router';
import Home from './views/Home.vue';
import About from './views/About.vue';
import Categories from './views/Categories.vue';
import CategoryTutorials from "./views/CategoryTutorials.vue";
import Tutorial from "./views/Tutorial.vue";
import Favoris from './views/Favoris.vue';
<<<<<<< HEAD
import Connexion from './views/Connexion.vue';

=======
import Login from './views/Login.vue';
>>>>>>> main


Vue.use(Router);

const router = new Router({
    routes: [
    {
        path: '/',
        name: 'home',
        component: Home,
    },
  	{
        path: '/categories',
        name: 'categories',
        component:Categories,
    },
    {
        path: '/category/:id/tutorials',
        component: CategoryTutorials,
        name: CategoryTutorials
    },
    {
        path: '/tutorial/:id',
        component: Tutorial,
        name: Tutorial
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
        path: '/login',
        name: 'login',
        component: Login,
    },

<<<<<<< HEAD
    {
        path: '/connexion',
        name: 'connexion',
        component: Connexion,
    },

];
=======
],
>>>>>>> main

    mode: 'history',
    linkActiveClass: 'active',
    linkExactActiveClass: "exact-active",
    base: process.env.BASE_URL,
    duplicateNavigationPolicy: 'reload'
})

export default router;