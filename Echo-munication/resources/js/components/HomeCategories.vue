<template>
    <v-row>
        <v-row class="mt-14">
            <v-col offset="">
                <h2 class="text-center">Catégories à parcourir</h2>
            </v-col>
        </v-row>
    <v-row>
        <v-col
          col="12"
          sm="12"
          md="4"
          lg="4"
          v-for="(category, index) in categories" :key="index"
        >
          <v-card hover class="mb-5">
            
            <v-row>
              <v-col cols="1" :style="{'background-color': category.color}">
              </v-col>
              <v-col>
                <v-img :src="`/images/${category.image}`" :alt="`${category.title }`" max-width="200" max-height="200"></v-img>
                <v-card-title><router-link :to="`/category/${category.id}/tutorials`">{{ category.title }}</router-link></v-card-title>
 
              </v-col>
            </v-row>

          </v-card>
        </v-col>
      </v-row>
    </v-row>
</template>
<script>
export default {
    name: 'HomeCategories',
    data() {
            return{
                categories: ''
            }
        },
        created() {
            this.getCategories();
        },
        methods:{
            getCategories(){
              this.axios
                .get('http://localhost:8000/api/categories/')
                    .then(res => this.categories = res.data)
                    .catch(err => console.log(err))
            }
        }
    }
</script>