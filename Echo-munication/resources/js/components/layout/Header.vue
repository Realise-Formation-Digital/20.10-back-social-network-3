<template>
  <div style = "margin-bottom: 100px">
    <v-app-bar
      color="deep-purple accent-4"
      dense
      dark
      fixed
    >
      <v-toolbar-title><router-link to="/" class="nav-link" exact>Echo'munication</router-link></v-toolbar-title>

      <v-spacer></v-spacer>

      <v-btn>
        <router-link to="/about" class="nav-link" exact>A propos</router-link>
      </v-btn>
      <v-btn>
        <router-link to="/login" class="nav-link" exact>Login</router-link>
      </v-btn>
      
    </v-app-bar>
  </div>
</template>
<script>
    export default {
        name: 'Header',
    }
</script>