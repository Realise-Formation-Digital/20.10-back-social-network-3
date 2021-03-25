<template>
<v-container style = "margin-bottom: 100px" fill-height>
    <v-row>
        <v-row class="mt-14">
            <v-col offset="">
                <h2 class="text-center">Les tutoriels dans la catérgorie sélectionnée</h2>
            </v-col>
        </v-row>
    <v-row>
        <v-col
          col="12"
          sm="12"
          md="4"
          lg="4"
          :key="tutorial.id" v-for="tutorial in tutorials"
        >
          <v-card hover class="mb-5">
            
            <v-row>
              <v-col cols="1" :style="{'background-color': category.color}">
              </v-col>
              <v-col>
                <v-img :src="`/images/${tutorial.image}`" :alt="`${tutorial.title }`" max-width="200" max-height="200"></v-img>
                <v-card-title><router-link :to="'/tutorial/' + tutorial.id">{{ tutorial.title }}</router-link></v-card-title>
                <v-card-text>
                    {{ tutorial.content.substr(0, 100)}}
                    <v-divider class="mx-4"></v-divider>
                    <v-card-title v-if="tutorial.user">Auteur: {{ tutorial.user.name }}</v-card-title>
                    <v-divider class="mx-4"></v-divider>
                    <v-img src="/images/likes.jpg" :alt="likes" max-width="30" max-height="30" style="vertical-align: middle"></v-img>{{ tutorial.likes_count }}
                </v-card-text>
 
              </v-col>
            </v-row>

          </v-card>
        </v-col>
      </v-row>
    </v-row>
</v-container>
</template>
<script>
import Home from "./Home"
    export default {
        name: 'CategoryTutorials',
        data() {
            return {
                tutorials: [],
                category: []
            }
        },
        components: {
            Home
        },
        mounted() {
            console.log('Component mounted.')
            this.getTutorials();
        },
        methods: {
            getTutorials() {
                this.axios
                .get('http://localhost:8000/api/category/' + this.$route.params.id + '/tutorials')
                    .then(res => {
                            console.log(res.data);
                            this.tutorials = res.data;
                        }
                    )
                    .catch(err => console.log(err))
            }
        }
    }
</script>