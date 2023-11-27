<template>
    <div>
        <div class="top0">
            <div class="container">
                <div class="block-left">
                    <div class="address1">
                        <span aria-hidden="true" class="ei icon_pin"></span
                        >WESTLANDS NAIROBI KENYA
                    </div>
                    <div class="phone1">
                        <span aria-hidden="true" class="ei icon_phone"></span
                        >0700.....
                    </div>
                    <div class="social_wrapper">
                        <ul class="social clearfix">
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"
                                    ><i class="fa fa-google-plus"></i
                                ></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="block-right">
                    <div class="signin1">
                        <a :href="route('adminLogin')">SIGN IN</a>
                    </div>
                </div>
            </div>
        </div>

        <div id="top1">
            <div class="top2_wrapper" id="top2">
                <div class="container">
                    <div class="top2 clearfix">
                        <header>
                            <div class="logo_wrapper">
                                COBBEN MOTORS
                                <!-- <a href="index.html" class="logo scroll-to">
                                    <img
                                        src="/customer/images/logo.png"
                                        alt=""
                                        class="img-responsive"
                                    />
                                </a> -->
                            </div>
                        </header>

                        <div class="navbar navbar_ navbar-default">
                            <button
                                type="button"
                                class="navbar-toggle collapsed"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                            >
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div
                                class="navbar-collapse navbar-collapse_ collapse"
                            >
                                <ul class="nav navbar-nav sf-menu clearfix">
                                    <li>
                                        <a :href="route('landing_page')"
                                            >HOME</a
                                        >
                                    </li>
                                    <li>
                                        <a :href="route('our_cars')"
                                            >OUR CARS</a
                                        >
                                    </li>
                                    <li><a :href="route('car_details')">Car Detail</a></li>
                                    <!-- <li><a href="#best">Best offers</a></li>
                                    <li>
                                        <a href="#testimonials">Testimonial</a>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import { reactive, onMounted } from "vue";
import { useForm, Link } from "@inertiajs/vue3";
export default {
    components: { Link },
}
</script>
<style scoped>
.logo_wrapper {
    font-size: x-large;
    font-weight: 700;
    color: #48ba7e;
    padding-top: 8px;
}
</style>
