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
                                    <label>Logo</label>
                                    <file-pond
                                        required
                                        name="logo"
                                        v-model="state.form.logo"
                                        v-bind:allow-multiple="false"
                                        accepted-file-types="image/jpeg, image/png"
                                        v-bind:server="{
                                            url: '',
                                            timeout: 3000,
                                            process: {
                                                url: '/admin/upload-logo',
                                                method: 'POST',
                                                headers:{
                                                    'X-CSRF-TOKEN': $page.props.csrf_token,
                                                },
                                                withCredentials: false,
                               
                                                onload: handleFilePondLoad,
                                                
                                             //   onerror: () => {}
                                            },
                                            revert: handleRevertImage,
                                        }"
                                        v-bind:files="state.myFiles"
                                        v-on:init="handleFilePondInit"
                                    >
                                    </file-pond>
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
import axios from "axios";
export default {
    setup() {
        const state = reactive({
            form: {},
            myFiles: [],
        });

        let saveFun = () => {
            var submitdata = useForm(state.form);
            submitdata.post(route("car_brands.store"));
            $("#large").modal("toggle");
            clearData();
        };

        //used when filepond plugin in initialized
        let handleFilePondInit = () => {
            // check if logo is set
            // if (state.form.logo) {
            //     // set initial values for filepond
            //     state.myFiles = [
            //         {
            //             source: '/' +  state.form.logo,
            //             options: {
            //                 type: "local",
            //                 metadata: {
            //                     poster: '/' + state.form.logo,
            //                 },
            //             },
            //         },
            //     ];
            // }else{
            //     state.myFiles = [];
            // }

        };

        //call back when image is loaded
        let handleFilePondLoad = (response) => {
            state.form.logo = response; 
        };



        let handleRevertImage = (uniqueId, load, error) => {
            axios.post('/admin/brand-image-revert', {
                logo: state.form.logo,
            });
            state.form.logo = "";
            load();
        };

        let clearData = () => {
            state.form = {
                logo: "",
                name: "",
            };
            state.myFiles = [];
        };

        return { state, saveFun, clearData, handleFilePondLoad, handleFilePondInit, handleRevertImage };
    },
};
</script>

<style scoped>
a.filepond--credits {
    display: none;
}
</style>
