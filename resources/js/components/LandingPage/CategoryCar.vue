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
                                <div v-if="state.loading">
                                loading...
                                </div>
                                    <div v-else
                                        v-for="(item, index) in state.car_list"
                                        :key="index"
                                    >
                                        <div class="col-sm-4">
                                            <div class="thumb2">
                                                <div class="thumbnail clearfix">
                                                    <figure>
                                                        <a
                                                            :href="
                                                                route(
                                                                    'car_select',
                                                                    {
                                                                        car: item.slug,
                                                                    }
                                                                )
                                                            "
                                                        >
                                                            <img
                                                                :src="
                                                                    item.thumbnail
                                                                "
                                                                alt=""
                                                                class="img-responsive"
                                                                style="
                                                                    max-width: 270px;
                                                                    max-height: 150px;
                                                                    object-fit: contain;
                                                                "
                                                            />
                                                        </a>
                                                    </figure>
                                                    <div class="caption">
                                                        <div class="txt1">
                                                            REGISTERED 2023
                                                        </div>
                                                        <div class="txt2">
                                                            {{
                                                                item.car_brand
                                                                    .name +
                                                                " " +
                                                                item.car_model
                                                                    .name
                                                            }}
                                                        </div>
                                                        <div
                                                            class="info clearfix"
                                                        >
                                                            <span class="price"
                                                                >KES
                                                                18,995</span
                                                            >
                                                            <span class="speed"
                                                                >52,000 KM</span
                                                            >
                                                        </div>
                                                        <div class="txt3">
                                                            Used •
                                                            {{ item.year }} •
                                                            Automatic •
                                                            {{ item.color }} •
                                                            Diesel
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-3">
                                <ul class="ul1">
                                    <li>
                                        <a  
                                        style="cursor: pointer"
                                        @click="
                                                getCarsByBrand()
                                            ">All manufacturers</a>
                                    </li>
                                    <!-- at click create an asyncronous function -->
                                    <li
                                        v-for="(car_brand, index) in car_brands"
                                        :key="index"
                                    >
                                        <a
                                            style="cursor: pointer"
                                            @click="
                                                getCarsByBrand(car_brand.id)
                                            "
                                            >{{ car_brand.name }}</a
                                        >
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

export default {
    props: ["cars", "car_brands"],
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
                console.log(response);
                state.car_list = response.data.cars.data;
                
            } catch (error) {
                console.error("Error fetching cars by brand:", error);
            }
            setTimeout(() => {
                state.loading = false;
            }, 1000);
            // state.loading = false;
        };

        return {
            state,
            getCarsByBrand,
        };
    },
};
</script>
