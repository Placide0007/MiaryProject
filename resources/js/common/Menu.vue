<template>
    <ul class="navbar-nav ms-auto me-auto">
        <router-link active-class="active" class="mx-3 px-3 nav-items nav-link rounded" to="/">Home</router-link>
        <router-link active-class="active" class="mx-3 px-3 nav-items nav-link rounded" to="/about">About</router-link>
        <router-link active-class="active" class="mx-3 px-3 nav-items nav-link rounded" to="/forum">Forum</router-link>
        <router-link active-class="active" class="mx-3 px-3 nav-items nav-link rounded" to="/login">register</router-link>
    </ul>
</template>
<style scoped >
    .active{
        background-color: rgba(211, 211, 211, 0.089);
    }
</style>
