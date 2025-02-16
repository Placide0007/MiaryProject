<template>
    <header class="navbar navbar-expand-md bg-light navbar-light py-2 px-4 sticky-top shadow ">
        <a href="" class="navbar-brand  text-success fw-bold">
            Tantsaha
        </a>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#content">
            <i class="navbar-toggler-icon"></i>
        </button>
        <div class="collapse navbar-collapse" id="content">
            <Menu/>
            <form action="">
                <router-link active-class="active" class="btn btn-success px-3" to="/register" >
                    <i class="bi bi-box-arrow-in-right"></i>
                    Se connecter
                </router-link>
            </form>
        </div>
    </header>
</template>
<script setup >
    import Menu from '../../common/Menu.vue';
</script>
<style scoped >

</style>
