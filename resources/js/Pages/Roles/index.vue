<template>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">
                            Roles
                        </h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <!-- <NuxtLink to="/dashboard">Dashboard </NuxtLink> -->
                                </li>
                                <li class="breadcrumb-item active">Roles</li>
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
                            <h4 class="card-title">Roles</h4>

                            <div class="float-right">
                                <button
                                    type="button"
                                    class="btn btn-outline-primary float-right btn-sm"
                                    data-toggle="modal"
                                    data-target="#large"
                                >
                                    <feather type="plus"></feather>
                                </button>
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

                        <!-- <div v-show="displaySearch">
                            <RolesSearch></RolesSearch>
                        </div> -->

                        <div class="table-responsive table-hover table-striped">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr
                                        v-for="(item, index) in roles.data"
                                        :key="index"
                                    >
                                        <td>{{ index + 1 }}</td>
                                        <td>{{ item.name }}</td>
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
                                <pagination :data="roles" :limit="1">
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
        <RolesCreate :permissions="permissions"></RolesCreate>
        <!-- <RolesEdit :permissions="permissions"></RolesEdit> -->
    </div>
</template>

<script>
import MainLayout from "../../Shared/Layouts/Vertical.vue";
// import RolesSearch from "../../components/Roles/RolesSearch.vue";
import RolesCreate from "../../components/Roles/Create.vue";
// import RolesEdit from "../../components/Roles/RolesEditModal.vue";
import { useStore } from "vuex";
import { reactive, computed } from "vue";
import { router } from '@inertiajs/vue3'


export default {
    layout: MainLayout,
    components: {
        // RolesSearch,
        RolesCreate,
        // RolesEdit,
    },
    props: ["roles", "permissions"],
    // computed: {
    //     displaySearch() {
    //         return this.$store.state.displaysearch;
    //     },
    //     searchState() {
    //         return this.$store.state.search;
    //     },
    // },

    setup() {
        const store = useStore();
          const state = reactive({
            displaySearch: computed(() => store.state.displaySearch),
            searchState: computed(() => store.state.SuccesssearchState),
        })


        // displaySearch = computed(() => store.state.displaysearch);
        // searchState = computed(() => store.state.search);

        let getFun = () => {
            router.get("/roles");
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
                router.delete(route("roles.destroy", id));
            }
        };
        return {
            getFun,
            editFun,
            toggleSearchForm,
            deleteFun,
            // state
        };
    },
};
</script>
