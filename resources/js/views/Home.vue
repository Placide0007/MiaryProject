<template>
    <div class="row">
        <div class="col-12 vh-100 d-flex justify-content-center bg-dark align-items-center flex-column hero-page">
            <div class="hero-content text-center">
                <p class="display-1 fw-bold text-light ">Andao Hanatsara ny ho avy.</p>
                <p class="small text-light">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil, quis.</p>
                <div class="btn-group">
                    <button class="btn btn-light py-2 px-3">
                        Hisoratra
                    </button>
                    <button class="btn btn-dark px-3 py-2">Hijery misimisy</button>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.small {
    font-size: small;
}

.hero-page {
    position: relative;
    height: 100vh;
    background-image: url('../assets/s-tsuchiya-U-wZQ_ZpQRU-unsplash.jpg');
    background-size: cover;
    background-position: bottom;
    background-attachment: fixed;
}

.hero-page::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: inherit;
    filter: blur(10px);
    z-index: 0;
}

.hero-content {
    position: relative;
    z-index: 1;
    padding: 40px;
    border-radius: 3px;
}

p {
    font-family: Raleway;
}
</style>
