<template>
    <div
        class="modal fade text-left"
        id="large"
        tabindex="-1"
        role="dialog"
        aria-labelledby="myModalLabel17"
        aria-hidden="true"
    >
        <div
            class="modal-dialog modal-dialog-centered modal-lg"
            role="document"
        >
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel17">New Model</h4>
                    <button
                        type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-label="Close"
                        @click="clearData"
                    >
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form
                        class="form form-vertical"
                        @submit.prevent="saveFun()"
                    >
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Year</label>
                                    <input
                                        type="number"
                                        class="form-control"
                                        placeholder="Year"
                                        v-model="state.form.year"
                                        required
                                    />
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label>Color</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="color"
                                        v-model="state.form.color"
                                        required
                                    />
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label>Select Car Brand</label>
                                    <select
                                        class="select2 form-control form-control-lg"
                                        v-model="state.form.car_brand_id"
                                        required
                                        @change="loadCarModels"
                                    >
                                        <option value="" class="first-option">
                                            --- List Of Car Brands ---
                                        </option>
                                        <option
                                            v-for="(
                                                car_brand, index
                                            ) in car_brands"
                                            :value="car_brand.id"
                                            :key="index"
                                        >
                                            {{ car_brand.name }}
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label>Select Car Model</label>
                                    <select
                                        class="select2 form-control form-control-lg"
                                        v-model="state.form.car_model_id"
                                        required
                                    >
                                        <option value="" class="first-option">
                                            --- List Of Car Models ---
                                        </option>
                                        <option
                                            v-for="(
                                                car_model, index
                                            ) in state.carModels"
                                            :value="car_model.id"
                                            :key="index"
                                        >
                                            {{ car_model.name }}
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label>Select Condition</label>
                                    <select
                                        class="select2 form-control form-control-lg"
                                        v-model="state.form.condition_id"
                                        required
                                    >
                                        <option value="" class="first-option">
                                            --- Conditions ---
                                        </option>
                                        <option
                                            v-for="(
                                                condition, index
                                            ) in conditions"
                                            :value="condition.id"
                                            :key="index"
                                        >
                                            {{ condition.status }}
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label>Select Fuel Type</label>
                                    <select
                                        class="select2 form-control form-control-lg"
                                        v-model="state.form.fuel_id"
                                        required
                                    >
                                        <option value="" class="first-option">
                                            --- Fuels ---
                                        </option>
                                        <option
                                            v-for="(
                                                fuel, index
                                            ) in fuels"
                                            :value="fuel.id"
                                            :key="index"
                                        >
                                            {{ fuel.type }}
                                        </option>
                                    </select>
                                </div>
                            </div>


                            <div class="col-12">
                                <div class="form-group">
                                    <label>Thumbnail</label>
                                    <file-pond
                                        required
                                        name="thumbnail"
                                        v-model="state.form.thumbnail"
                                        ref="pond"
                                        v-bind:allow-multiple="false"
                                        accepted-file-types="image/jpeg, image/png"
                                        v-bind:server="{
                                            url: '',
                                            timeout: 7000,
                                            process: {
                                                url: '/admin/upload-thumbnail',
                                                method: 'POST',
                                                headers: {
                                                    'X-CSRF-TOKEN':
                                                        $page.props.csrf_token,
                                                },
                                                withCredentials: false,

                                                onload: handleFilePondLoad,
                                                //   onerror: () => {}
                                            },
                                        }"
                                        v-bind:files="state.myFiles"
                                        v-on:init="handleFilePondInit"
                                    >
                                    </file-pond>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Car Images</label>
                                            <file-pond
                                                required
                                                name="cars_display"
                                                v-model="
                                                    state.form.cars_display
                                                "
                                                ref="pond"
                                                v-bind:allow-multiple="true"
                                                accepted-file-types="image/jpeg, image/png"
                                                v-bind:server="{
                                                    url: '',
                                                    timeout: 3000,
                                                    process: {
                                                        url: '/admin/upload-temp-cars',
                                                        method: 'POST',
                                                        headers: {
                                                            'X-CSRF-TOKEN':
                                                                $page.props
                                                                    .csrf_token,
                                                        },
                                                        withCredentials: false,

                                                        onload: handleFilePondCarsLoad,
                                                        //   onerror: () => {}
                                                    },
                                                }"
                                                v-bind:files="state.myCars"
                                                v-on:init="
                                                    handleFilePondCarsInit
                                                "
                                            >
                                            </file-pond>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button
                                    type="submit"
                                    class="btn btn-primary mr-1"
                                >
                                    Save
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
import { useForm } from "@inertiajs/vue3";
export default {
    props: ["car_brands", "car_models", "fuels", "conditions"],
    setup() {
        const state = reactive({
            form: {
                car_brand_id: "",
                car_model_id: "",
                thumbnail: "",
                cars_display: "",
                fuel_id: "",
                condition_id: "",
            },
            myFiles: [],
            carModels: [],
            myCars: [],
        });

        let saveFun = () => {
            console.log(state.form);
            var submitdata = useForm(state.form);
            submitdata.post(route("cars.store"));
            $("#large").modal("toggle");
            clearData();
        };

        let clearData = () => {
            state.form = {
                car_brand_id: "",
                car_model_id: "",
                thumbnail: "",
                cars_display: "",
                 fuel_id: "",
                condition_id: "",
            };
            state.myFiles = [];
            state.myCars = [];
        };

        let loadCarModels = async () => {
            if (state.form.car_brand_id) {
                try {
                    const response = await fetch(
                        `/admin/car_brand_models?car_brand_id=${state.form.car_brand_id}`
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

        let addCarsImage = (image) => {
            let arr = state.form.cars_display
                ? state.form.cars_display.split("|")
                : [];
            arr.push(image);
            state.form.cars_display = arr.join("|");
            console.log(state.form.cars_display);
        };

        let handleFilePondInit = () => {};

        let handleFilePondCarsInit = () => {};

        let handleFilePondLoad = (response) => {
            state.form.thumbnail = response;
        };

        let handleFilePondCarsLoad = (response) => {
            // state.form.cars_display = response;
            addCarsImage(response);
        };

        watch(() => state.form.car_brand_id, loadCarModels);

        return {
            state,
            saveFun,
            clearData,
            loadCarModels,
            handleFilePondLoad,
            handleFilePondInit,
            handleFilePondCarsLoad,
            handleFilePondCarsInit,
        };
    },
};
</script>

<style scoped>
option.first-option {
    width: 100%;
    text-align: center;
    font-size: 1.2rem;
    font-weight: bold;
}
</style>
