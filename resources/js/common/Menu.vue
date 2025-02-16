<template>
    <ul class="navbar-nav ms-auto me-auto">
        <router-link active-class="active" class="mx-3 px-3 nav-items nav-link rounded" to="/">
            <i class="bi bi-house-door"></i>
            Home
        </router-link>
        <router-link active-class="active" class="mx-3 px-3 nav-items nav-link rounded" to="/about">
            <i class="bi bi-info-circle"></i>
            About
        </router-link>
        <router-link active-class="active" class="mx-3 px-3 nav-items nav-link rounded" to="/forum">
            <i class="bi bi-chat-dots"></i>
            Forum
        </router-link>
        <router-link active-class="active" class="mx-3 px-3 nav-items nav-link rounded" to="/login">
            <i class="bi bi-target"></i>
            Nos Missions
        </router-link>
    </ul>
</template>
<style scoped >
    .active{
        background-color: rgba(211, 211, 211, 0.171);
    }
</style>
