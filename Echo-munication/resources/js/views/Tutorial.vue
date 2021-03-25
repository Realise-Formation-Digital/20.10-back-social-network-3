<template>
    <v-container style = "margin-bottom: 100px">
        <v-layout row>
            <v-flex s12>
                <v-card>
                    <v-img
                    height="500px"
                    :src="`/images/${tutorial.image}`">
                    </v-img>
                    <v-card-text>
                        <h1>
                        {{ tutorial.title }}
                        </h1>
                        <v-divider></v-divider>
                        <h3 v-if="tutorial.category">{{ tutorial.category.title }}</h3>
                        <v-divider></v-divider>
                        <h3>Auteur: <span>{{ tutorial.user.name }}</span></h3>
                        <v-divider></v-divider>
                        <v-img src="/images/likes.jpg" :alt="likes" max-width="30" max-height="30" style="vertical-align: middle"></v-img>{{ tutorial.likes_count }}
                        <v-img src="/images/comment.png" :alt="comments" max-width="30" max-height="30" style="vertical-align: middle"></v-img>{{ comments.length }}
                    </v-card-text>
                    <v-card-text>
                        <p>
                        {{ tutorial.content }}
                        </p>
                    </v-card-text>
                        <v-divider></v-divider>
                        <h3 class="text-center"><span>Commentaires</span></h3>
                    <v-card-text v-for="(comment, index) in tutorial.comments" :key="index">
                        <v-img :src="`${comment.user.avatar}`" max-width="80" max-height="80" class="d-flex mr-3 rounded-circle"></v-img>
                        <h5>{{ comment.user.name }}</h5>
                        <p>{{ comment.content }}</p>
                        <v-divider></v-divider>
                    </v-card-text>
                </v-card>
            </v-flex>
        </v-layout>
    </v-container>
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