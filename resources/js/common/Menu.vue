<template>
    <ul class="navbar-nav ms-auto me-auto">
        <router-link active-class="active" class="mx-3 px-3  nav-items nav-link rounded" to="/">
            <i class="bi bi-house-door me-1"></i>
            Accueil
        </router-link>
        <router-link active-class="active" class="mx-3 px-3 nav-items nav-link rounded" to="/about">
            <i class="bi bi-info-circle me-1"></i>
            A propos
        </router-link>
        <router-link active-class="active" class="mx-3 px-3 nav-items nav-link rounded" to="/forum">
            <i class="bi bi-chat-dots me-1"></i>
            Forum
        </router-link>
        <router-link active-class="active" class="mx-3 px-3 nav-items nav-link rounded" to="/login">
            <i class="bi bi-clipboard me-1"></i>
            Nos Missions
        </router-link>
    </ul>
</template>
<style scoped >
    .active{
        background-color:rgba(59, 58, 58, 0.11);
    }
</style>
