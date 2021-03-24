<template>
    <div class="container">
        <!-- login form -->
        <div class="row mt-4">
            <div class="col-6 offset-3">
                <form action="#" @submit.prevent="handleLogin">
                    <h3>Login</h3>
                    <div class="form-row">
                        <input type="email" name="email" class="form-control" v-model="formData.email" placeholder="Email Address">
                    </div>
                    <div class="form-row">
                        <input type="password" name="password" class="form-control" v-model="formData.password" placeholder="Password">
                    </div>
                    <div class="form-row">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
</template>

<script>
import axios from 'axios'
    export default {
        name: 'Login',
        data() {
            return {
                    formData: {
                    email: '',
                    password: ''
                }
            }
        },
        methods: {
            handleLogin() {
                axios.get('/sanctum/csrf-cookie').then(response => {
                    axios.post('/auth', this.formData).then(response => {
                        console.log('utilisateur connecté!');
                    }).catch(error => console.log(error)); // credentials didn't match
                });
            }
            
        }
    }
</script>
<style>
    .form-row {
        margin-bottom: 8px;
    }
</style>