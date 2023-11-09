<template>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">
                            Users
                        </h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                </li>
                                <li class="breadcrumb-item active">Users</li>
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
                            <h4 class="card-title">Users</h4>

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
                                    <!-- <a
                                        class="btn btn-outline-success dropdown-toggle btn-sm mr-1"
                                        type="button"
                                        id="dropdownMenuButton701"
                                        data-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                        href="javascript:void(0);"
                                    >
                                        <feather type="file-text"></feather>
                                    </a> -->
                                    <!-- <div
                                        class="dropdown-menu"
                                        aria-labelledby="dropdownMenuButton701"
                                    >
                                        <a
                                            class="dropdown-item"
                                            href="javascript:void(0);"
                                            @click="exportFun"
                                            >Export</a
                                        >
                                        <a
                                            class="dropdown-item"
                                            href="javascript:void(0);"
                                            data-toggle="modal"
                                            data-target="#importexcel"
                                            >Import</a
                                        >
                                    </div> -->
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
                            <UserSearch></UserSearch>
                        </div>

                        <div class="table-responsive table-hover table-striped">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email Address</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr
                                        v-for="(item, index) in users.data"
                                        :key="index"
                                    >
                                        <td>{{ index + 1 }}</td>
                                        <td>{{ item.name }}</td>
                                        <td>{{ item.email }}</td>
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
                                <pagination :data="users" :limit="1">
                                    <span slot="prev-nav"
                                        ><feather type="arrow-left"></feather
                                    ></span>
                                    <span slot="next-nav"
                                        ><feather type="arrow-right"></feather
                                    ></span>
                                </pagination>

                                <!-- <pagination class="mt-6" :links="users.links" /> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <UserCreate :roles="roles"></UserCreate>
        <UserEdit :roles="roles"></UserEdit>
        <!-- <UserImport></UserImport> -->
    </div>
</template>

<script>

import { reactive, computed } from "vue";
import { useStore } from "vuex";
import { router } from "@inertiajs/vue3";

import MainLayout from "../../Shared/Layouts/Vertical.vue";
import UserSearch from "../../components/Users/Search.vue";
import UserCreate from "../../components/Users/Create.vue";
import UserEdit from "../../components/Users/Edit.vue";
export default {
    layout: MainLayout,
    components: {
        UserSearch,
        UserCreate,
        UserEdit,
    },
    props: ["users","roles"],

    setup() {
   const store = useStore();
          const state = reactive({
            displaySearch: computed(() => store.state.displaysearch),
            searchState: computed(() => store.state.SuccesssearchState),
        })

         let getFun = () => {
            router.get("/admin/users");
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
                router.delete(route("users.destroy", id));
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