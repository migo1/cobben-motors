<template>
    <div>
        <div class="top3-wrapper">
            <div class="container">
                <div class="top3 clearfix">
                    <!-- <div class="tabs-wrapper">
                        <div class="txt">SELECT VIEW</div>
                        <div class="tabs1-wrapper">
                            <ul
                                class="tabs clearfix"
                                data-tabgroup="first-tab-group"
                            >
                                <li class="active">
                                    <a href="#tabs2-1"
                                        ><i class="fa fa-list"></i
                                    ></a>
                                </li>
                                <li>
                                    <a href="#tabs2-2"
                                        ><i class="fa fa-th"></i
                                    ></a>
                                </li>
                            </ul>
                        </div>
                    </div> -->

                    <!-- <div class="sort-wrapper">
                        <div class="txt">sort by</div>
                        <div class="select1_wrapper">
                            <label>Sort</label>
                            <div class="select1_inner">
                                <select
                                    class="select2 select"
                                    style="width: 100%"
                                >
                                    <option value="1">Last Added</option>
                                    <option value="2">Popular</option>
                                    <option value="3">Price</option>
                                </select>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>

        <div class="breadcrumbs1_wrapper">
            <div class="container">
                <div class="breadcrumbs1">
                    <a href="#">Home</a><span></span>Search Results
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container">
                <div class="row">
                <OurCarsSearch :car_brands="car_brands"/>
                    <div
                        class="col-sm-12 col-md-9 col-md-push-9-l column-content"
                    >
                        <OurCarsListVue :cars="cars" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import CustomerLayout from "../../Shared/Layouts/Customer.vue";
import OurCarsListVue from "../../components/LandingPage/OurCarsList.vue";
import OurCarsSearch from "../../components/LandingPage/OurCarsSearch.vue";
import { reactive, watch } from "vue";
import { router } from "@inertiajs/vue3";

export default {
    layout: CustomerLayout,
    components: {
        OurCarsListVue,
        OurCarsSearch
    },
    props: ["cars", "car_brands"],

    setup() {

    },
};
</script>
