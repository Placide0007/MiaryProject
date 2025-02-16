<template>
    <Header/>
    <div class="container-fluid bg-dark">
        <router-view/>
    </div>
</template>
<script setup >
    import Header from './components/layout/Header.vue'
</script>
