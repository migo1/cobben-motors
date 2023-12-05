<template>
    <div
        class="modal fade text-left"
        id="addFeature"
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
                    <h4 class="modal-title" id="myModalLabel17">
                        Add Car Features
                    </h4>
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
                        @submit.prevent="addFeature"
                    >
                        <div class="row">
                            <div
                                class="row col-12 feature-container"
                                v-for="(field, index) in state.form.fields"
                                :key="index"
                            >
                                <div class="col-8">
                                    <div class="form-group">
                                        <label>Feature(s) {{ index }}</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            placeholder="Feature"
                                            v-model="field.value"
                                            required
                                        />
                                    </div>
                                </div>

                                <div class="col-2 feature-btn">
                                    <a
                                        href="javascript:void(0);"
                                        class="btn btn-sm btn-success"
                                        @click="addField(index)"
                                        v-if="
                                            index ===
                                            state.form.fields.length - 1
                                        "
                                    >
                                        <feather type="plus"></feather>
                                    </a>
                                </div>

                                <div class="col-2 feature-btn">
                                    <a
                                        href="javascript:void(0);"
                                        class="btn btn-sm btn-danger"
                                        @click="removeField(index)"
                                        v-if="state.form.fields.length > 1"
                                    >
                                        <feather type="minus"></feather>
                                    </a>
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
            form: {
                fields: [{ value: "" }],
            },

            car_id: computed(() => {
                return store.state.featureCar.id;
            }),

            editdata: computed(() => {
                return store.state.featureCar;
            }),
        });

        let addFeature = () => {
            console.log(state.form);
            var submitdata = useForm({
                features: state.form.fields,
                car_id: state.car_id,
            });
            submitdata.post(route("cars.add_features"));
            $("#addFeature").modal("toggle");
            clearData();
        };

        let clearData = () => {
            state.form.fields = [{ value: "" }];
        };

        const addField = (index) => {
            state.form.fields.splice(index + 1, 0, { value: "" });
            // console.log("car_id",state.car_id);
        };

        const removeField = (index) => {
            state.form.fields.splice(index, 1);
        };

   watch(
    () => state.editdata,
    (newval) => {
        if (newval !== null && Array.isArray(newval.features) && newval.features.length > 0) {
            // console.log("fields", newval.features);

            // Assuming newval.features is an array
            state.form.fields = newval.features.map(featureObj => ({
                value: featureObj.feature, // Update this line based on the actual structure
            }));
        }
    }
);


        return {
            state,
            addFeature,
            clearData,
            addField,
            removeField,
        };
    },
};
</script>

<style scoped>
.feature-btn {
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.feature-btn button {
    padding: 3px 9px;
}
</style>
