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
            <span style="color:white">LES DERNIERS TUTORIELS</span>
        </li>
        <li v-for="tutorial in tutorials" :key="tutorial.id" class="nav-item">
            <i class="fas fa-fw fa-chart-area"></i>
            <span><router-link :to="'/tutorial/' + tutorial.id">{{ tutorial.title }}</router-link></span>
            </li>
	</ul>
</template>
<script>
    export default {
        name: 'Sidebar',
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
                })
                .catch(err => {
                        console.log(err)
                    })
        }        
  }
</script>