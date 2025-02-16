import { createApp } from "vue";
import App from './App.vue';
import 'bootstrap/dist/css/bootstrap.min.css'
import 'bootstrap/dist/js/bootstrap.min.js'
import 'bootstrap-icons/font/bootstrap-icons.min.css'
import 'typeface-poppins'
import 'typeface-raleway'
import router from './router/index';

createApp(App)
.use(router)
.mount('#app');
