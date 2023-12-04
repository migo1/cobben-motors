<template>
    <div class="col-sm-4 loader-container">
        <div class="img-placeholder skeleton"></div>
        <p class="year-placeholder skeleton"></p>
        <h3 class="car-name-placeholder skeleton"></h3>
        <div class="info-placeholder">
            <p class="price-placeholder skeleton"></p>
            <p class="mileage-placeholder skeleton"></p>
        </div>
        <div class="detail-text">
            <p class="status skeleton"></p>
            •
            <p class="status skeleton"></p>
            •
            <p class="status skeleton"></p>
            •
            <p class="status skeleton"></p>
        </div>
        <hr class="skeleton"/>
    </div>
</template>
<script>
export default {
    // props: ["item"],
};
</script>

<style scoped>
.loader-container {
    display: flex;
    flex-direction: column;
}

.skeleton {
    background-color: #ccc;
    animation: skeleton-loading 1s linear infinite alternate;
}

@keyframes skeleton-loading {
    0% {
        opacity: 0.3;
    }
    100% {
        opacity: 1;
    }
}
.img-placeholder {
    width: 100%;
    height: 150px;
    margin-bottom: 25px;
}

.year-placeholder {
    width: 50%;
    height: 15px;
    margin-bottom: 7px;
    /* padding-bottom: 5px; */
}

.car-name-placeholder {
    width: 100%;
    height: 20px;
    margin-top: 0;
}

.info-placeholder {
    display: flex;
    justify-content: space-between;
    margin-top: 10px;
    align-items: center;
}

.price-placeholder {
    width: 45%;
    height: 30px;
    margin-bottom: 5px;
}

.mileage-placeholder {
    width: 30%;
    height: 20px;
    margin-bottom: 5px;
}

.detail-text {
    display: flex;
    justify-content: space-between;
    margin-top: 10px;
    align-items: center;
    padding-bottom: 30px;
}

.status {
    width: 20%;
    height: 15px;
    margin-bottom: 5px;
    margin-right: 5px;
}

hr {
    margin-top: 0;
    margin-bottom: 0;
    border: 1px solid #dddddd;
    width: 100%;
}
</style>
