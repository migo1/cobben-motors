<template>
    <a style="cursor: pointer" @click="getCarsByBrand(car_brand.id)">{{
        car_brand.name
    }}</a>
</template>
<script>
export default {
    props: ["car_brand", "getCarsByBrand"]


    
}
</script>
