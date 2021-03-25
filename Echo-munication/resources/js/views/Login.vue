<template>
  <v-form v-model="valid" action="#" @submit.prevent="handleLogin">
    <v-container>
      <v-row>
        <v-col
          cols="12"
          md="4"
        >
          <v-text-field
            v-model="formData.email"
            :rules="emailRules"
            label="E-mail"
            required
          ></v-text-field>
        </v-col>

        <v-col
          cols="12"
          md="4"
        >
          <v-text-field
            v-model="formData.password"
            :rules="passwordRules"
            :counter="10"
            label="Mot de passe"
            required
          ></v-text-field>
        </v-col>
        <v-col
          cols="12"
          md="4"
        >
          <v-btn
          :disabled="!valid"
          color="success"
          class="mr-4"
          @click="submit"
          >Login</v-btn>
        </v-col>
      </v-row>
    </v-container>
  </v-form>
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