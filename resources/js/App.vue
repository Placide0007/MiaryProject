<template>
    <Header/>
    <div class="container">
        <router-view/>
    </div>
</template>
<script setup >
    import Header from './components/layout/Header.vue'
</script>