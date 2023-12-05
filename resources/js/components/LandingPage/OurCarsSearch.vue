<template>
 <div
                        class="col-sm-12 col-md-3 col-md-pull-3-l column-sidebar"
                    >
                        <div class="sidebar-form-wrapper">
                            <div class="sidebar-form">
                                <form class="form2" @submit.prevent="searchFun">
                                    <div class="select1_wrapper">
                                        <label>SELECT A MANUFACTURER</label>
                                        <div class="select1_inner">
                                            <select
                                                class=""
                                                style="width: 100%;padding:10px"
                                                v-model="state.filter.car_brand_id"
                                               @change="loadCarModels"
                                            >
                                                <option value="">
                                                    Any Make
                                                </option>
                                                <option
                                                    v-for="(car_brand, index) in car_brands"
                                                    :key="index"
                                                    :value="car_brand.id"
                                                    
                                                >
                                                    {{ car_brand.name }}
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="select1_wrapper">
                                        <label>SELECT A MODEL</label>
                                        <div class="select1_inner">
                                            <select
                                                class=""
                                                style="width: 100%;padding:10px"
                                                v-model="state.filter.car_model_id"
                                            >
                                                <option value="">
                                                    Any Model
                                                </option>
                                                <option
                                                    v-for="(car_model, index) in state.carModels"
                                                    :key="index"
                                                    :value="car_model.id"
                                                >
                                                    {{ car_model.name }}
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="select1_wrapper">
                                        <label>MIN PRICE</label>

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

                                    <div class="select1_wrapper">
                                        <label>MAX PRICE</label>
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

                                    <div class="select1_wrapper">
                                        <label>MIN YEAR</label>

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

                                    <div class="select1_wrapper">
                                        <label>MAX YEAR</label>
                                        <input
                                            type="number"
                                            class="form-control"
                                            name="max_year"
                                            v-model="state.filter.max_year"
                                            placeholder="Max Year"
                                            style="
                                                border-radius: 0px;
                                                border: 1px solid #c7bebe;
                                                box-shadow: none;
                                                color: #000;
                                            "
                                        />
                                    </div>

                                    <button
                                        type="submit"
                                        class="btn-default btn-form2-submit"
                                    >
                                        SUBMIT FILTERS
                                    </button>
                                </form>
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
}
</script>

<style scoped>
 .select1_inner:after {
    content: '';
    display: none;
}
</style>