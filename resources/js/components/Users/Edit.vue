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
                    <h4 class="modal-title" id="myModalLabel17">New User</h4>
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
                                    <label>User Name</label>
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
                                    <label>Email Address</label>
                                    <input
                                        type="email"
                                        class="form-control"
                                        placeholder="Email"
                                        v-model="state.form.email"
                                        required
                                    />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="Password"
                                        v-model="state.form.password"
                                    />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="Password"
                                        v-model="state.form.confirm_password"
                                    />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Select Role</label>
                                    <select
                                        class="form-control form-control-lg"
                                        id="bankSelect"
                                        multiple
                                        v-model="state.form.role_id"
                                    >
                                        <option
                                            v-for="(role, index) in roles"
                                            :value="role.id"
                                            :key="index"
                                        >
                                            {{ role.name }}
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
import { reactive, computed, watch } from "vue";
import { useForm } from "@inertiajs/vue3";
import { useStore } from "vuex";

export default {
    props: ["roles"],
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
           if (state.form.password !== state.form.confirm_password) {
        state.errors = "The password field must match confirm-password.";
        return; 
    }
            var submitdata = useForm(state.form);
            submitdata.patch(route("users.update", { user: state.form.id }));
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
                    state.form.role_id = newval.roles.map((item) => item.id);
                }
            }
        );

        return {
            state,
            updateFun,
            clearData,
        };
    },
};
</script>
