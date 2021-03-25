<template>
    <v-row>
        <v-row class="mt-14">
            <v-col offset="">
                <h2 class="text-center">Les 5 derniers tutoriels</h2>
            </v-col>
        </v-row>
    <v-row>
        <v-col
          col="12"
          sm="12"
          md="4"
          lg="4"
          v-for="tutorial in tutorials" :key="tutorial.id"
        >
          <v-card hover class="mb-5">
            
            <v-row>
              <v-col cols="1">
              </v-col>
              <v-col>
                <v-img :src="`/images/${tutorial.image}`" :alt="`${tutorial.title }`" max-width="200" max-height="200"></v-img>
                <v-card-title><router-link :to="'/tutorial/' + tutorial.id">{{ tutorial.title }}</router-link></v-card-title>
 
              </v-col>
            </v-row>

          </v-card>
        </v-col>
      </v-row>
    </v-row>
</template>
<script>
    export default {
        name: 'HomeTutorials',
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