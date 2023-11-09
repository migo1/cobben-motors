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
                    <h4 class="modal-title" id="myModalLabel17">Update Role</h4>
                    <button
                        type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-label="Close"
                        @click="clearData()"
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
                                    <label>Role Name</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="Name"
                                        v-model="state.form.name"
                                        required
                                    />
                                </div>
                            </div>

                            <div
                                class="col-12"
                                style="height: 60vh; overflow-y: auto"
                            >
                                <div class="form-group">
                                    <strong>Permission:</strong>
                                    <br />

                                    <ul class="list-group">
                                        <li
                                            class="list-group-item"
                                            v-for="(item, index) in permissions"
                                            :key="index"
                                        >
                                            <div class="row">
                                                <label class="col-3">{{
                                                    index
                                                }}</label>
                                                <div class="col-9 row">
                                                    <label
                                                        v-for="(
                                                            perm, index2
                                                        ) in item"
                                                        :key="index2"
                                                        class="col-3"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            name="permission[]"
                                                            class="name"
                                                            v-model="
                                                                state.form
                                                                    .permission
                                                            "
                                                            :value="perm.id"
                                                        />
                                                        {{
                                                            perm.extracted
                                                        }}</label
                                                    >
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-12 mt-1">
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
    layout: "Vertical",
    props: ["permissions"],
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
            submitdata.patch(route("roles.update", { role: state.form.id }));
            $("#editmodal").modal("toggle");
            clearData();
        };

        let clearData = () => {
            store.commit("clearEditData");
        };

        let retrievePermissions = async (Id) => {
            try {
                var response = await axios({
                    url: route("roles.ajax.permissions", { id: Id }),
                    method: "GET",
                });

                if (response.data.rolePermissions !== null) {
                    state.form.permission = response.data.rolePermissions;
                }
            }
            catch (error) {
                if (error.response) {
                    state.errors = error.response.data.message;
                } else {
                    state.errors = "Something Went Wrong";
                }
            }
        };

        watch(
            () => state.editdata,
            (newval) => {
                if (newval !== null) {
                    state.form = newval;
                    retrievePermissions(newval.id);
                }
            }
        );

        return { state, updateFun, clearData };
    },

};
</script>
