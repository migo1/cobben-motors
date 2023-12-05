<template>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">
                           Our Cars
                        </h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                </li>
                                <li class="breadcrumb-item active">Our Cars</li>
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
                            <h4 class="card-title">Our Cars</h4>

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
                            <Search :car_brands="car_brands" :car_models="car_models"></Search>
                        </div>

                        <div class="table-responsive table-hover table-striped">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Year</th>
                                        <th>Color</th>
                                        <th>Brand</th>
                                        <th>Model</th>
                                        <th>Thumbnail</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr
                                        v-for="(item, index) in cars.data"
                                        :key="index"
                                    >
                                        <td>{{ index + 1 }}</td>
                                        <td>{{ item.year }}</td>
                                        <td>{{ item.color }}</td>
                                        <td>
                                        {{ item.car_brand.name }}
                                        </td>
                                        <td>
                                        {{ item.car_model.name }}
                                        </td>
                                        <td>
                                          <img
                                                :src="item.thumbnail"
                                                alt="Car Logo"
                                                style="
                                                    max-width: 70px;
                                                    max-height: 70px;
                                                "
                                            /></td>
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
                                                        class="dropdown-item bg-light-primary"
                                                         href="javascript:void(0);"
                                                         data-toggle="modal"
                                                        data-target="#addFeature"
                                                        @click="
                                                            featureData(
                                                                item.id
                                                            )"
                                                    >
                                                        <feather
                                                            type="eye"
                                                            class="mr-50"
                                                        ></feather>

                                                        <span>Features</span>
                                                    </a>
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
                                                            deleteFun(item.slug)
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
         <Create :car_brands="car_brands" :conditions="conditions" :fuels="fuels"></Create>
        <Edit :car_brands="car_brands" :conditions="conditions" :fuels="fuels"></Edit>
        <Feature />
    </div>
</template>

<script>
import { reactive, computed } from "vue";
import { useStore } from "vuex";
import { router, Link } from "@inertiajs/vue3";

import MainLayout from "../../Shared/Layouts/Vertical.vue";
import Search from "../../components/Cars/Search.vue";
import Create from "../../components/Cars/Create.vue";
import Edit from "../../components/Cars/Edit.vue";
import Feature from "../../components/Cars/Feature.vue";
export default {
    layout: MainLayout,
    components: {
        Search,
        Create,
        Edit,
        Link,
        Feature,
    },
    props: ["cars","car_models", "car_brands", "fuels", "conditions"],

    setup() {
   const store = useStore();
          const state = reactive({
            displaySearch: computed(() => store.state.displaysearch),
            searchState: computed(() => store.state.SuccesssearchState),
        })

        let getFun = () => {
            router.get("/admin/cars");
        };
        let editFun = (data) => {
            store.commit("editDataState", data);
        };

        let featureData = (car_id) => {
            store.commit("featureCarIdState", car_id);
        };
        let toggleSearchForm = () => {
            store.commit("toggleSearch");
        };
        let deleteFun = (slug) => {
            var getconfirmation = confirm(
                "Are you sure You Want to Delete This Record?"
            );
            if (getconfirmation == true) {
                router.delete(route("cars.destroy", slug));
            }
        };
          return {
            getFun,
            editFun,
            toggleSearchForm,
              deleteFun,
            featureData,
            state
        };

    },

};
</script>
