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
            </router-link>
        </li>
        <li class="nav-item">
            <router-link to="/favoris" class="nav-link" exact>
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Favoris</span>
            </router-link>
        </li>
        <li v-for="tutorial in tutorials" :key="tutorial.id" class="nav-item">
            <i class="fas fa-fw fa-chart-area"></i>
                <span>LES DERNIERS TUTORIELS</span>
            <span><a href="" class="nav-link">{{ tutorial.title }}</a></span>
        </li>
	</ul>
</template>
<script>
    export default {
        data() {
            return {
                tutorials: []
            }
        },
        created() {
            this.axios
                .get('http://localhost:8000/api/tutorials/')
                .then(response => {
                    this.tutorials = response.data;
                });
        }
      }
</script>