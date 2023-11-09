<template>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">
                            Car Models
                        </h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                </li>
                                <li class="breadcrumb-item active">Car Models</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-body">
            <div class="row" id="basic-table">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header py-1">
                            <h4 class="card-title">Car Models</h4>

                            <div class="float-right">
                                <button
                                    type="button"
                                    class="btn btn-outline-primary float-right btn-sm"
                                    data-toggle="modal"
                                    data-target="#large"
                                >
                                    <feather type="plus"></feather>
                                </button>
                                <div class="btn-group dropstart float-right">
                        
                                </div>
                                <button
                                    class="btn btn-outline-primary float-right mr-1 btn-sm"
                                    @click="getFun"
                                >
                                    <feather type="refresh-ccw"></feather>
                                </button>

                                <button
                                    class="btn btn-outline-primary float-right mr-1 btn-sm"
                                    @click="toggleSearchForm"
                                >
                                    <feather type="search"></feather>
                                </button>
                            </div>
                        </div>

                        <div v-show="state.displaySearch">
                            <Search :car_brands="car_brands"></Search>
                        </div>

                        <div class="table-responsive table-hover table-striped">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Brand</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr
                                        v-for="(item, index) in car_models.data"
                                        :key="index"
                                    >
                                        <td>{{ index + 1 }}</td>
                                        <td>{{ item.name }}</td>
                                        <td>
                                        {{ item.car_brand.name }}
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button
                                                    type="button"
                                                    class="btn btn-sm dropdown-toggle hide-arrow"
                                                    data-toggle="dropdown"
                                                >
                                                    <feather
                                                        type="more-vertical"
                                                    ></feather>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a
                                                        class="dropdown-item bg-light-warning"
                                                        href="javascript:void(0);"
                                                        data-toggle="modal"
                                                        data-target="#editmodal"
                                                        @click="editFun(item)"
                                                    >
                                                        <feather
                                                            type="edit-2"
                                                            class="mr-50"
                                                        ></feather>

                                                        <span>Edit</span>
                                                    </a>
                                                    <a
                                                        class="dropdown-item bg-light-danger"
                                                        href="javascript:void(0);"
                                                        @click="
                                                            deleteFun(item.id)
                                                        "
                                                    >
                                                        <feather
                                                            type="trash"
                                                            class="mr-50"
                                                        ></feather>

                                                        <span>Delete</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="mx-2 mt-3">
                                <pagination :data="car_models" :limit="1">
                                    <span slot="prev-nav"
                                        ><feather type="arrow-left"></feather
                                    ></span>
                                    <span slot="next-nav"
                                        ><feather type="arrow-right"></feather
                                    ></span>
                                </pagination>

                                <pagination class="mt-6" :links="car_models.links" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <Create :car_brands="car_brands"></Create>
        <Edit :car_brands="car_brands"></Edit>
    </div>
</template>

<script>
import { reactive, computed } from "vue";
import { useStore } from "vuex";
import { router } from "@inertiajs/vue3";

import MainLayout from "../../Shared/Layouts/Vertical.vue";
import Search from "../../components/CarModels/Search.vue";
import Create from "../../components/CarModels/Create.vue";
import Edit from "../../components/CarModels/Edit.vue";
export default {
    layout: MainLayout,
    components: {
        Search,
        Create,
        Edit,
    },
    props: ["car_models", "car_brands"],

    setup() {
   const store = useStore();
          const state = reactive({
            displaySearch: computed(() => store.state.displaysearch),
            searchState: computed(() => store.state.SuccesssearchState),
        })

        let getFun = () => {
            router.get("/admin/car_models");
        };
        let editFun = (data) => {
            store.commit("editDataState", data);
        };
        let toggleSearchForm = () => {
            store.commit("toggleSearch");
        };
        let deleteFun = (id) => {
            var getconfirmation = confirm(
                "Are you sure You Want to Delete This Record?"
            );
            if (getconfirmation == true) {
                router.delete(route("car_models.destroy", id));
            }
        };
          return {
            getFun,
            editFun,
            toggleSearchForm,
            deleteFun,
            state
        };

    },

};
</script>