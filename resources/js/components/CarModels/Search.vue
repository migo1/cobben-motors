<template>
    <div class="col-12">
        <form class="form form-vertical" @submit.prevent="searchFun">
            <div class="row">
                <div class="col-4">
                    <div class="form-group">
                        <input
                            type="text"
                            class="form-control"
                            placeholder="Search by Name"
                            v-model="state.submitdata.search"
                        />
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <select
                            class="select2 form-control form-control-lg"
                            v-model="state.submitdata.car_brand_id"
                            required
                        >
                            <option value="" class="first-option">
                                --- List Of Car Brands ---
                            </option>
                            <option
                                v-for="(car_brand, index) in car_brands"
                                :value="car_brand.id"
                                :key="index"
                            >
                                {{ car_brand.name }}
                            </option>
                        </select>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <button
                            type="submit"
                            class="btn btn-primary mr-1 control"
                        >
                            Search
                        </button>
                    </div>
                </div>

                <div class="col-12" v-if="state.errors !== null">
                    <span class="badge badge-light-danger mb-2 errorbadge">{{
                        state.errors
                    }}</span>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
import { reactive } from "vue";
import { router } from "@inertiajs/vue3";
export default {
    layout: "Vertical",
    props: ["car_brands"],
    setup() {
        const state = reactive({
            errors: null,
            submitdata: {
                search: null,
                car_brand_id: null,
            },
        });
        let clearData = () => {
            state.submitdata.search = null;
        };
        let closed = () => {
            state.submitdata.search = null;
        };
        let searchFun = async () => {
            await router.get(route("car_models.index"), state.submitdata, {
                preserveState: true,
            });
        };

        return { state, searchFun };
    },
};
</script>
