<template>
    <div id="best" style="padding-top: 0">
        <div class="container">
            <div class="title1">
                <span>BEST OFFERS FROM COBBEN MOTORS</span>
            </div>

            <div class="tabs1">
                <div class="tabs1_tabs">
                    <ul>
                        <li class="active">
                            <!-- <a href="#tabs1-1"
                                    >OUR LATEST CARS</a
                                > -->
                        </li>
                    </ul>
                </div>
                <div class="tabs1_content">
                    <div id="tabs1-1">
                        <div class="row">
                            <div class="col-sm-12 col-md-9">
                                <div class="row">
                                   <DefaultSingleCategoryCar v-if="state.loading" v-for="index in 6" />
                                    <div
                                        v-else
                                        v-for="(item, index) in state.car_list"
                                        :key="index"
                                    >
                                        <SingleCategoryCar :item="item" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-3">
                                <ul class="ul1">
                                    <li>
                                        <a
                                            style="cursor: pointer"
                                            @click="getCarsByBrand()"
                                            >All manufacturers</a
                                        >
                                    </li>
                                    <li
                                        v-for="(car_brand, index) in car_brands"
                                        :key="index"
                                    >
                                        <BrandList
                                            :car_brand="car_brand"
                                            :getCarsByBrand="getCarsByBrand"
                                        />
                                    </li>
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
import SingleCategoryCar from "./SingleCategoryCar.vue";
import DefaultSingleCategoryCar from "./DefaultSingleCategoryCar.vue";
import BrandList from "./BrandList.vue";

export default {
    props: ["cars", "car_brands"],
    components: {
        SingleCategoryCar,
        BrandList,
        DefaultSingleCategoryCar,
    },
    setup(props) {
        const state = reactive({
            car_list: [],
            loading: false,
        });

        onMounted(() => {
            state.car_list = props.cars.data;
        });

        const getCarsByBrand = async (id = null) => {
            try {
                state.loading = true;
                const response = await axios.get(
                    route("landing_page", { brand: id })
                );
                state.car_list = response.data.cars.data;
            } catch (error) {
                console.error("Error fetching cars by brand:", error);
            }
            setTimeout(() => {
                state.loading = false;
            }, 1000);
        };

        return {
            state,
            getCarsByBrand,
        };
    },
};
</script>

