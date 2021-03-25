<template>
	<v-container style = "margin-bottom: 100px" fill-height>

    <!-- Hero -->
    <HomeHero />
    
    
    <!-- Boucle de cartes des catégories -->
    <HomeCategories />
    <!-- Boucle de cartes des 5 derniers tutoriels -->
    <HomeTutorials />

  </v-container>
</template>
<script>
import HomeHero from '../components/HomeHero'
import HomeCategories from '../components/HomeCategories'
import HomeTutorials from '../components/HomeTutorials'
    export default {
      name: 'Home',
      components: {
      HomeHero,
      HomeCategories,
      HomeTutorials,
      }
    }
</script>