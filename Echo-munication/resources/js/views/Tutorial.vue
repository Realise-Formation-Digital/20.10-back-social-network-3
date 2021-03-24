<template>

        <div>
            <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <router-link to="/">Tutorials</router-link>
        </li>
        <li class="breadcrumb-item active">{{ tutorial.title }}</li>
            </ol>

            <!-- Title -->
            <h1 class="mt-4">{{ tutorial.title }}</h1>

            <!-- Author -->
            <p class="alert alert-info" style="width: fit-content; padding: 5px; color: #142d31;" v-if="tutorial.category">
                {{ tutorial.category.title }}
            </p>

            <hr>

            <!-- Date/Time Comments Likes-->
            <p>Publié <strong class="badge badge-primary p-1">{{ tutorial.added_at }}</strong> à <strong class="badge badge-danger p-1"> 12:00 PM</strong>
                <span class="float-right"><strong class="badge badge-info p-1">{{ comments.length }}</strong> commentaires</span></p>
                <span class="float-right"><strong class="badge badge-info p-1">{{ tutorial.likes_count }}</strong> j'aime</span>

            <hr>

            <!-- Preview Image -->
            <img class="img-fluid rounded" :src="`${tutorial.image}`" style="width:300px;max-height:300px" alt="">

            <hr>

            <!-- Tutorial Content -->
            {{ tutorial.content }}

            <hr>

           <!-- Comment(s) -->
            <div class="media mb-4" v-for="(comment, index) in tutorial.comments" :key="index">
                <img class="d-flex mr-3 rounded-circle" :src="'/img/'+comment.user.avatar" alt="">
                <div class="media-body">
                    <h5 class="mt-0">{{ comment.user.name }}</h5>
                    {{ comment.content }}
                </div>
            </div>

        </div>

</template>

<script>
    export default {
        name: 'Tutorial',
        data() {
            return{
                tutorial: '',
                tutorial_id: '',
                comment_content: '',
                comments: [],
                likes: ""
            }
        },
        created() {
            this.getTutorial();
        },
        methods:{
            getTutorial(){
                this.axios
                .get('http://localhost:8000/api/tutorials/'+this.$route.params.id)
                    .then(res =>{
                        this.tutorial = res.data;
                        this.tutorial_id = this.tutorial.id
                        this.comments = this.tutorial.comments
                        this.likes = this.tutorial.likes
                    })
                    .catch(err => {
                        console.log(err)
                    })
            },
            
        },
    }
</script>