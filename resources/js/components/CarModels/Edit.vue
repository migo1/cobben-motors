<template>
    <div
        class="modal fade text-left"
        id="editmodal"
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
                    <h4 class="modal-title" id="myModalLabel17">Edit Model</h4>
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
                        @submit.prevent="updateFun()"
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
                                    Update
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
import { reactive, computed, watch  } from "vue";
import { useForm } from "@inertiajs/vue3";
import { useStore } from "vuex";

export default {
    props: ["car_brands"],
    setup() {
        let store = useStore();
        const state = reactive({
            form: {},
            errors: "",
            editdata: computed(() => {
                return store.state.editData;
            }),
        });

        let updateFun = async () => {
            var submitdata = useForm(state.form);
            submitdata.patch(route("car_models.update", { car_model: state.form.id }));
            $("#editmodal").modal("toggle");
            clearData();
        };

        let clearData = () => {
            store.commit("clearEditData");
        };

          watch(
            () => state.editdata,
            (newval) => {
                if (newval !== null) {
                    state.form = newval;
                }
            }
        );

        return { state, updateFun, clearData };
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
