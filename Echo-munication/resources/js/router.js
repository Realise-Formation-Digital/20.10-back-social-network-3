// router.js

// On importe les différentes vues du dossier views dans le router de la manière la plus déclarative possible (c'est une bonne pratique de mettre les fichiers statiques importés en haut)
import Vue from 'vue';
import Router from 'vue-router';
import Home from './views/Home.vue';
import Categories from './views/Categories.vue';
import Favoris from './views/Favoris.vue';

Vue.use(Router);

// Routes that allow for the navigation inside the SPA
const routes = [
    {
        path: '/',
        name: 'home',
        component: Home
    },
  	{ // New route for our categories page
        path: '/categories',
        name: 'categories',
        component: Categories
    },
    { // New route for our categories page
        path: '/favoris',
        name: 'favoris',
        component: Favoris
    }
];

const router = new Router({
    mode: 'history',
    routes: routes,
  	linkActiveClass: 'active'
});

export default router;