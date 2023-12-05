<template>
    <div id="intro">
        <div class="container">
            <div class="booking-wrapper">
                <div class="booking">
                    <form class="form1" @submit.prevent="searchFun">
                        <div class="row">
                            <div class="col1">
                                <div class="select1_wrapper">
                                    <label>Manufacture</label>
                                    <div class="select1_inner">
                                        <select
                                            class=""
                                            style="width: 100%; padding: 10px"
                                            v-model="state.filter.car_brand_id"
                                            @change="loadCarModels"
                                        >
                                            <option value="">Any Make</option>
                                            <option
                                                v-for="(
                                                    car_brand, index
                                                ) in car_brands"
                                                :key="index"
                                                :value="car_brand.id"
                                            >
                                                {{ car_brand.name }}
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="select1_wrapper">
                                    <label>Model</label>
                                    <div class="select1_inner">
                                        <select
                                            class=""
                                            style="width: 100%; padding: 10px"
                                            v-model="state.filter.car_model_id"
                                        >
                                            <option value="">Any Model</option>
                                            <option
                                                v-for="(
                                                    car_model, index
                                                ) in state.carModels"
                                                :key="index"
                                                :value="car_model.id"
                                            >
                                                {{ car_model.name }}
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="select1_wrapper">
                                    <label>Min Year</label>
                                    <input
                                        type="number"
                                        class="form-control"
                                        name="min_year"
                                        v-model="state.filter.min_year"
                                        placeholder="Min Year"
                                        style="
                                            border-radius: 0px;
                                            border: 1px solid #c7bebe;
                                            box-shadow: none;
                                            color: #000;
                                        "
                                    />
                                </div>
                            </div>
                            <div class="col1">
                                <div class="select1_wrapper">
                                    <label>Max Year</label>
                                    <input
                                        type="number"
                                        class="form-control"
                                        name="max_year"
                                        v-model="state.filter.max_year"
                                        placeholder="Min Year"
                                        style="
                                            border-radius: 0px;
                                            border: 1px solid #c7bebe;
                                            box-shadow: none;
                                            color: #000;
                                        "
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col1">
                                <div class="select1_wrapper">
                                    <label>Min Price</label>
                                    <input
                                        type="number"
                                        class="form-control"
                                        name="min_price"
                                        v-model="state.filter.min_price"
                                        placeholder="Min Price"
                                        style="
                                            border-radius: 0px;
                                            border: 1px solid #c7bebe;
                                            box-shadow: none;
                                            color: #000;
                                        "
                                    />
                                </div>
                            </div>
                            <div class="col1">
                                <div class="select1_wrapper">
                                    <label>Max Price</label>
                                    <input
                                        type="number"
                                        class="form-control"
                                        name="max_price"
                                        v-model="state.filter.max_price"
                                        placeholder="Max Price"
                                        style="
                                            border-radius: 0px;
                                            border: 1px solid #c7bebe;
                                            box-shadow: none;
                                            color: #000;
                                        "
                                    />
                                </div>
                            </div>

                            <div class="col2">
                                <button
                                    type="submit"
                                    class="btn-default btn-form1-submit1"
                                >
                                    <span>SEARCH THE VEHICLE</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import { reactive, watch } from "vue";
import { router } from "@inertiajs/vue3";
export default {
    props: ["car_brands"],
    setup() {
        const state = reactive({
            filter: {
                car_brand_id: "",
                car_model_id: "",
                min_price: "",
                max_price: "",
                min_year: "",
                max_year: "",
            },
            carModels: [],
        });

        let loadCarModels = async () => {
            if (state.filter.car_brand_id) {
                state.filter.car_model_id = "";
                try {
                    const response = await fetch(
                        `/car_brand_models?car_brand_id=${state.filter.car_brand_id}`
                    );
                    const data = await response.json();
                    state.carModels = data;
                } catch (error) {
                    console.error("Error fetching car models:", error);
                }
            } else {
                state.carModels = [];
            }
        };

        let searchFun = async () => {
            await router.get(route("our_cars"), state.filter, {
                preserveState: true,
            });
        };
        watch(() => state.filter.car_brand_id, loadCarModels);

        return { state, loadCarModels, searchFun };
    },
};
</script>
<style scoped>
.booking .col2 {
    padding-left: 15px;
    padding-right: 15px;
    float: left;
    width: 60%;
    text-align: end;
}
.select1_inner:after {
    content: "";
    display: none;
}
</style>
