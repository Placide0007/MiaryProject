<template>
    <div class="row">
        <div class="col-12 vh-100 d-flex justify-content-center bg-dark  align-items-center flex-column hero-page">
            <div class="hero-content text-center">
                <p class="display-1 fw-bold text-light">Lorem, ipsum dolor.</p>
                <p class="small text-light">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                <div class="btn-group">
                    <button class="btn btn-light px-3">S'inscrire</button>
                    <button class="btn btn-outline-light px-3">A Propos</button>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.small {
    font-size: smaller;
}

.hero-page {
    position: relative; /* Nécessaire pour positionner l'image floue */
    height: 100vh;
    background-image: url('../assets/pexels-akos-szabo-145938-440731.jpg');
    background-size: cover;
    background-position: center;
}

.hero-page::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: inherit;
    filter: blur(5px);
    z-index: 0;
}

.hero-content {
    position: relative;
    z-index: 1;
}
</style>
