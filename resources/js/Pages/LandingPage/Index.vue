<template>
    <div>
        <div id="home" class="">
            <div id="slides_wrapper" class="">
                <div id="slides">
                    <ul class="slides-container">
                        <li class="nav1">
                            <img
                                src="/customer/images/slide03.jpg"
                                alt=""
                                class="img"
                            />
                            <div class="caption">
                                <div class="container">
                                    <div class="txt1">
                                        <span>FIND YOUR DREAM CAR</span>
                                    </div>
                                    <div class="txt2">CAR M5 GRAN TURISMO</div>
                                </div>
                            </div>
                        </li>
                        <li class="nav2">
                            <img
                                src="/customer/images/slide04.jpg"
                                alt=""
                                class="img"
                            />
                            <div class="caption">
                                <div class="container">
                                    <div class="txt1">
                                        <span>FIND YOUR DREAM CAR</span>
                                    </div>
                                    <div class="txt2">
                                        AUTO 330e iPERFORMANCE
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <nav class="slides-navigation">
                        <a href="#" class="next"></a>
                        <a href="#" class="prev"></a>
                    </nav>
                </div>
            </div>
        </div>
        <Search :car_brands="car_brands" />
        <CategoryCar :cars="cars" :car_brands="car_brands" />
        <About />
        <StatsVue />
        <Testimonials />
    </div>
</template>

<script>
import CustomerLayout from "../../Shared/Layouts/Customer.vue";
import CategoryCar from "../../components/LandingPage/CategoryCar.vue";
import StatsVue from "../../components/LandingPage/Stats.vue";
import Testimonials from "../../components/LandingPage/Testimonials.vue";
import About from "../../components/LandingPage/About.vue";
import Search from "../../components/LandingPage/IndexSearch.vue";

export default {
    layout: CustomerLayout,
    components: {
        CategoryCar,
        StatsVue,
        Testimonials,
        About,
        Search,
    },
    props: ["cars", "car_brands"],
};
</script>
<style scoped>
.logo_wrapper {
    font-size: x-large;
    font-weight: 700;
    color: #48ba7e;
    padding-top: 8px;
}
</style>
