<template>
    <div class="row">
        <div class="col-md-8">
            <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <router-link to="/">Tutorials</router-link>
        </li>
        <li class="breadcrumb-item active"></li>
            </ol>
            <div :key="tutorial.id" v-for="tutorial in tutorials">
                <img :src="`${tutorial.image}`" alt="Generic placeholder image">
                <div>
                    <h4 class="mt-0">
                        <router-link :to="'/tutorial/' + tutorial.id">{{ tutorial.title }}</router-link>
                    </h4>
                    {{ tutorial.content.substr(0, 180)}}
                    <ul class="list-inline list-unstyled d-flex post-info">
                        <li><span><i class="fa fa-user"></i> Auteur : <strong class="text-primary" v-if="tutorial.user">{{ tutorial.user.name }}</strong> </span>
                        </li>
                        <li> | </li>
                        <li><span><i></i> {{ tutorial.added_at }} </span></li>
                        <li> | </li>
                        <span><i></i> {{ tutorial.comments_count }} commentaires</span>
                        <li> | </li>
                        <span><i></i> {{ tutorial.likes_count }} j'aime</span>

                    </ul>
                </div>
            </div>
        </div>
    </div>
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