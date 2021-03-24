<template>
	<div class="container-fluid">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <router-link to="/">Tutorials</router-link>
        </li>
        <li class="breadcrumb-item active">Vue d'ensemble</li>
      </ol>
      <div class="row">
        <div  v-for="(category, index) in categories" :key="index" class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="mr-5"><router-link :to="`/category/${category.id}/tutorials`">{{ category.title }}</router-link></div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <img :src="`${category.image}`" :alt="`${category.title }`" class="table-image" />
            </a>
          </div>
        </div>
      </div>
  </div>
</template>
<script>
    export default {
      name: 'Home',
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