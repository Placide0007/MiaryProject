<template>
    <header class="navbar navbar-expand-md bg-light navbar-light">
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#content">
            <i class="navbar-toggler-icon"></i>
        </button>
        <div class="collapse navbar-collapse" id="content">
            <ul class="navbar-nav">
                <router-link class="nav-links nav-items" to="/" >Home</router-link>
                <router-link class="nav-links nav-items" to="/register" >Register</router-link>
            </ul>
        </div>
    </header>
</template>