<template>
  <v-container class="grey lighten-5">
        
            <v-row class="mt-14">
                <v-col offset="">
                <h2 class="text-center">A Propos de Nous</h2>
                </v-col>
            </v-row>
        
    <v-row no-gutters>
      <v-col>
        <v-card
          class="pa-20"
        >
          <ProfilElisa />
        </v-card>
      </v-col>
      <v-col order="12">
        <v-card
          class="pa-2"
        >
          <ProfilGabzz/>
        </v-card>
      </v-col>
      <v-col order="1">
        <v-card
          class="pa-2"
        >
          <ProfilKilian/>
        </v-card>
      </v-col>
    </v-row>
    <v-row no-gutters>
      <v-col order="12">
        <v-card>
          <ProfilChris/>
        </v-card>
      </v-col>
      <v-col order="1">
        <v-card>
          <ProfilSimon/>
        </v-card>
      </v-col>
    </v-row>
  </v-container>
</template>

<script>

import ProfilElisa from '../components/ProfilElisa'
import ProfilSimon from '../components/ProfilSimon'
import ProfilChris from '../components/ProfilChris'
import ProfilGabzz from '../components/ProfilGabzz'
import ProfilKilian from '../components/ProfilKilian'






export default {
    components: {
     ProfilElisa,
     ProfilSimon,
     ProfilGabzz,
     ProfilKilian,
     ProfilChris
  
     },
  
}
</script>