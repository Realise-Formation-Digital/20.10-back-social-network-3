<template>
    <v-col 
        sm="5"
    >
        <!-- La hauteur de 100% permet de faire en sorte que les deux cartes aient la même taille -->
          <v-card 
            class="align-stretch elevation-5" 
            height="100%" 
          > 
            <v-row class="d-flex justify-center">
                <v-card-title class="mb-4">
                  Ajout de tutoriel
                </v-card-title>
                <v-card-subtitle class="mx-10">
                  Vous avez regardé, écouté ou lu un tutoriel de qualité que vous souhaiteriez partager ?
                </v-card-subtitle>
                <v-card-actions>
                  <v-btn class="ma-2" outlined color="indigo">Proposer un tutoriel</v-btn>
                </v-card-actions>
            </v-row>
          </v-card>
      </v-col>
</template>

<script>
export default {
    name: 'AddingTutorialCard'
}
</script>