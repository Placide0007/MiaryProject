
import { createRouter, createWebHashHistory } from 'vue-router';  
import Home from '../views/Home.vue';
import Register from '../views/Register.vue';

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home
  },
  {
    path: '/register',
    name: 'Register',
    component: Register
  }
];

// Création du routeur
const router = createRouter({
  history: createWebHashHistory(), 
  routes 
});

export default router;  
