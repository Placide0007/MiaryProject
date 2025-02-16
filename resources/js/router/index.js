import { createRouter , createWebHashHistory } from "vue-router"
import Register from '@/views/Register.vue'
import Login from '@/views/Login.vue'
import Forum from '@/views/Forum.vue'
import Home from '@/views/Home.vue'
import About from '@/views/About.vue'


const routes = [
    {
        path:'/',
        name:'home',
        component:Home
    },
    {
        path:'/register',
        name:'register',
        component:Register
    },
    {
        path:'/login',
        name:'login',
        component:Login
    },
    {
        path:'/forum',
        name:'forum',
        component:Forum
    },
    {
        path:'/about',
        name:'about',
        component:About
    },

]
const router = createRouter({
    history: createWebHashHistory(),
    routes,
})

export default router
