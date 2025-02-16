<template>
    <div class="vh-100 d-flex justify-content-center align-items-center">
      <form class="shadow p-4 bg-white rounded" @submit.prevent="handleSubmit" style="width: 400px;" method="Post">
        <h1 class="fw-bold text-center mb-4">Inscription</h1>
        <div class="mb-2">
          <label class="form-label" for="name">Nom</label>
          <input v-model="form.name" name="name" id="name" type="text" class="bg-light form-control" required>
        </div>
        <div class="mb-2">
          <label class="form-label" for="email">Email</label>
          <input v-model="form.email" name="email" id="email" type="email" class="form-control bg-light">
        </div>
        <div class="mb-3">
          <label class="form-label" for="password">Mot de passe</label>
          <input v-model="form.password" name="password" id="password" type="password" class="bg-light form-control" required>
        </div>
        <div class="mb-2">
          <input type="submit" value="Soumettre" class="btn form-control btn-success">
        </div>
        <div class="mb-2">
          <label for="">A déjà un compte ?</label>
          <a class="fw-bold" href="">Se connecter</a>
        </div>
      </form>
    </div>
  </template>
  
  <script setup>
  import { ref } from 'vue';
  import axios from 'axios';
  import { useToast } from 'vue-toastification';

  const toast = useToast();
  const form = ref({
    name: '',
    email: '',
    password: ''
  });
  
  const handleSubmit = async () => {
    try {
      const response = await axios.post('http://127.0.0.1:8000/api/register', form.value);
      if (response.data.success) {
        toast.success(response.data.message);
        router.push('/')
      }
    } catch (error) {
        toast.error('Une erreur est survenue lors de l\'inscription.');
    }
  };
  </script>
  
  <style scoped>

  </style>
  