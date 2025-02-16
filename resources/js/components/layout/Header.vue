<template>
    <header class="navbar navbar-expand-md bg-dark navbar-dark py-2 px-4 sticky-top">
        <a href="" class="navbar-brand">
            LOGO
        </a>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#content">
            <i class="navbar-toggler-icon"></i>
        </button>
        <div class="collapse navbar-collapse" id="content">
            <Menu/>
            <form action="">
                <router-link active-class="active" class="btn btn-success px-3" to="/login" >Login</router-link>
            </form>
        </div>
    </header>
</template>
<script setup >
    import Menu from '../../common/Menu.vue';
</script>
<style scoped >
    .active{
        background-color: rgba(211, 211, 211, 0.089);
    }
</style>
