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
                    <h4 class="modal-title" id="myModalLabel17">New Brand</h4>
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
                        @submit.prevent="udpateFun()"
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
import { reactive, computed, watch } from "vue";
import { useForm } from "@inertiajs/vue3";
import { useStore } from "vuex";

export default {
    setup() {
        let store = useStore();
        const state = reactive({
            form: {},
            editdata: computed(() => {
                return store.state.editData
            })
        });

        let udpateFun = async() => {
            var submitdata = useForm(state.form);
            submitdata.patch(route("car_brands.update", {car_brand: state.form.id}));
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

        return { state, udpateFun, clearData };
    },
};
</script>
