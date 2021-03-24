<template>
        <v-app-bar
        app
        color="primary"
        dark
        >
        <v-toolbar-title>Echo'munication</v-toolbar-title>
        <v-spacer></v-spacer>
        
        

        <v-btn
            v-for="link in links" :key="link.name"
            :href="link.link"
            text
        >
            <span class="mr-2">
              <!-- <router-link :to="{link.link}">{{ link.name }}</router-link> -->
              {{ link.name }}
            </span>
        </v-btn>

    </v-app-bar>
</template>

<script>
export default {
    name: 'AppHeader',
    data: function () {
      return {
        links: [
          { 
            name: 'Accueil',
            link: '#',
          },
          { 
            name: 'Tutoriels',
            link: '#',
          },
          { 
            name: 'Mes favoris',
            link: '#',
          },
          { 
            name: 'Se connecter',
            link: '#',
          },
        ]
      }
    }
}
</script>