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
                                    <label>Name</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="Name"
                                        v-model="state.form.name"
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
import { reactive } from "vue";
import { useForm } from "@inertiajs/vue3";
export default {
    props: ["car_brands"],
    setup() {
        const state = reactive({
            form: {
                name: "",
                car_brand_id: "",
            },
        });

        let saveFun = () => {
            console.log(state.form);
            var submitdata = useForm(state.form);
            submitdata.post(route("car_models.store"));
            $("#large").modal("toggle");
            clearData();
        };

        let clearData = () => {
            state.form = {
                name: "",
                car_brand_id: "",
            };
        };

        return { state, saveFun, clearData };
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
