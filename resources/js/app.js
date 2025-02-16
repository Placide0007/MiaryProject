import { createApp } from "vue";
import App from './App.vue';
import 'bootstrap/dist/css/bootstrap.min.css'
import 'bootstrap/dist/js/bootstrap.min.js'
import 'bootstrap-icons/font/bootstrap-icons.min.css'
import 'typeface-poppins'
import 'typeface-raleway'
import router from './router/index';
import  Toast from "vue-toastification";
import 'vue-toastification/dist/index.css'

createApp(App)
.use(router)
.use(Toast)
.mount('#app');
