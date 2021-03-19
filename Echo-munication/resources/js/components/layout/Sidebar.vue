<!-- Sidebar.vue -->
<template>
	<ul class="sidebar navbar-nav">
		<li class="nav-item">
            <router-link to="/" class="nav-link" exact>
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Tutoriels</span>
            </router-link>
        </li>
		<li class="nav-item">
            <router-link to="/categories" class="nav-link" exact>
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Catégories</span>
            </router-link>
        </li>
        <li class="nav-item">
            <router-link to="/favoris" class="nav-link" exact>
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Favoris</span>
            </router-link>
        </li>
	</ul>
</template>