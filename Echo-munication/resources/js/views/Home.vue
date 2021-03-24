<template>
	<div class="container-fluid">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <router-link to="/">Tutorials</router-link>
        </li>
        <li class="breadcrumb-item active">Vue d'ensemble</li>
      </ol>
      <div class="row">
        <div  v-for="category in categories" :key="category.id" class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-fw fa-life-ring"></i>
              </div>
              <div class="mr-5">{{ category.title }}</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <img :src="`${category.image}`" :alt="`${category.title }`" class="table-image" />
              <span class="float-right">
                <i class="fas fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
      </div>
  </div>
</template>
<script>
  import URLAPI from "../../app"

    export default {
        data() {
            return {
                categories: []
            }
        },
        created() {
            this.axios
                .get(URLAPI + 'categories/')
                .then(response => {
                    this.categories = response.data;
                });
        }
      }
</script>