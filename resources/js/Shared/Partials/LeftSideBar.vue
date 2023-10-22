<template>
    <div
        class="main-menu menu-fixed menu-light menu-accordion menu-shadow"
        id="mainmenuside"
        data-scroll-to-active="true"
    >
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto">
                    <a
                        class="navbar-brand"
                        href="../../../html/rtl/vertical-menu-template/index.html"
                        ><span class="brand-logo">
                            <Logo />
                        </span>
                        <h2 class="brand-text">Vuexy</h2>
                    </a>
                </li>
                <li class="nav-item nav-toggle">
                    <a
                        class="nav-link modern-nav-toggle pr-0"
                        data-toggle="collapse"
                        ><feather
                            class="d-block d-xl-none text-primary toggle-icon font-medium-4"
                            type="x"
                        ></feather
                        ><feather
                            class="d-none d-xl-block collapse-toggle-icon font-medium-4 text-primary"
                            type="disc"
                            data-ticon="disc"
                        ></feather
                    ></a>
                </li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <!-- <ul
                class="navigation navigation-main"
                id="main-menu-navigation"
                data-menu="menu-navigation"
            >
                <li class="nav-item">
                    <Link
                        :href="route('pos.index')"
                        class="d-flex align-items-center childlist"
                        active-class="active"
                    >
                        <feather type="monitor"></feather>
                        <span class="menu-item text-truncate">POS</span>
                    </Link>
                </li>
                <li class="nav-item">
                    <Link
                        :href="route('orders.index')"
                        class="d-flex align-items-center childlist"
                        active-class="active"
                    >
                        <feather type="package"></feather>
                        <span class="menu-item text-truncate">Live Orders</span>
                        <div class="blob red"></div>
                    </Link>
                </li>
                <li class="nav-item">
                    <Link
                        :href="route('orders.retrieve')"
                        class="d-flex align-items-center childlist"
                        active-class="active"
                    >
                        <feather type="package"></feather>
                        <span class="menu-item text-truncate">Orders</span>
                    </Link>
                </li>

                <li class="nav-item">
                    <Link
                        :href="route('home')"
                        class="d-flex align-items-center childlist"
                        active-class="active"
                    >
                        <feather type="home"></feather>
                        <span class="menu-item text-truncate">Dashboard</span>
                    </Link>
                </li>

                <li class="has-sub nav-item">
                    <a
                        class="d-flex align-items-center"
                        href="javascript:void(0);"
                        target="_self"
                        ><feather type="box"></feather
                        ><span
                            class="menu-title text-truncate"
                            data-i18n="Menu Levels"
                            >Inventory Mgnt.</span
                        ></a
                    >
                    <ul class="menu-content">
                        <li class="level2">
                            <Link
                                class="d-flex align-items-center"
                                :href="route('categories.index')"
                                ><feather type="list"></feather
                                ><span
                                    class="menu-item text-truncate"
                                    data-i18n="Second Level"
                                    >Categories</span
                                ></Link
                            >
                        </li>

                        <li class="level2">
                            <Link
                                class="d-flex align-items-center"
                                :href="route('products.index')"
                                ><feather type="table"></feather
                                ><span
                                    class="menu-item text-truncate"
                                    data-i18n="Second Level"
                                    >Products</span
                                ></Link
                            >
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <Link
                        :href="route('menu_categories.index')"
                        class="d-flex align-items-center childlist"
                        active-class="active"
                    >
                        <feather type="clipboard"></feather>
                        <span class="menu-item text-truncate"
                            >Menu Categories</span
                        >
                    </Link>
                </li>
                <li class="nav-item">
                    <Link
                        :href="route('menues.index')"
                        class="d-flex align-items-center childlist"
                        active-class="active"
                    >
                        <feather type="message-square"></feather>
                        <span class="menu-item text-truncate">Menues</span>
                    </Link>
                </li>
                <li class="nav-item">
                    <Link
                        :href="route('suppliers.index')"
                        class="d-flex align-items-center childlist"
                        active-class="active"
                    >
                        <feather type="truck"></feather>
                        <span class="menu-item text-truncate">Suppliers</span>
                    </Link>
                </li>

                <li class="nav-item">
                    <Link
                        :href="route('purchases.index')"
                        class="d-flex align-items-center childlist"
                        active-class="active"
                    >
                        <feather type="book"></feather>
                        <span class="menu-item text-truncate">Purchases</span>
                    </Link>
                </li>
                <li class="has-sub nav-item">
                    <a
                        class="d-flex align-items-center"
                        href="javascript:void(0);"
                        target="_self"
                        ><feather type="dollar-sign"></feather
                        ><span
                            class="menu-title text-truncate"
                            data-i18n="Menu Levels"
                            >Expenses</span
                        ></a
                    >
                    <ul class="menu-content">
                        <li class="level2">
                            <Link
                                class="d-flex align-items-center"
                                :href="route('expense_categories.index')"
                                ><feather type="list"></feather
                                ><span
                                    class="menu-item text-truncate"
                                    data-i18n="Second Level"
                                    >Categories</span
                                ></Link
                            >
                        </li>

                        <li class="level2">
                            <Link
                                class="d-flex align-items-center"
                                :href="route('expenses.index')"
                                ><feather type="table"></feather
                                ><span
                                    class="menu-item text-truncate"
                                    data-i18n="Second Level"
                                    >Expenses</span
                                ></Link
                            >
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <Link
                        :href="route('production.index')"
                        class="d-flex align-items-center childlist"
                        active-class="active"
                    >
                        <feather type="file-text"></feather>
                        <span class="menu-item text-truncate">Production</span>
                    </Link>
                </li>

                <li class="has-sub nav-item">
                    <a
                        class="d-flex align-items-center"
                        href="javascript:void(0);"
                        target="_self"
                        ><feather type="activity"></feather
                        ><span
                            class="menu-title text-truncate"
                            data-i18n="Menu Levels"
                            >Reports</span
                        ></a
                    >
                    <ul class="menu-content">
                        <li class="level2">
                            <Link
                                class="d-flex align-items-center"
                                :href="route('reports.sales')"
                                ><feather type="shopping-bag"></feather
                                ><span
                                    class="menu-item text-truncate"
                                    data-i18n="Second Level"
                                    >Sales Reports</span
                                ></Link
                            >
                        </li>
                        <li class="level2">
                            <Link
                                class="d-flex align-items-center"
                                :href="route('reports.menus')"
                                ><feather type="menu"></feather
                                ><span
                                    class="menu-item text-truncate"
                                    data-i18n="Second Level"
                                    >Top Menus Reports</span
                                ></Link
                            >
                        </li>
                        <li class="level2">
                            <Link
                                class="d-flex align-items-center"
                                :href="route('reports.purchases')"
                                ><feather type="credit-card"></feather
                                ><span
                                    class="menu-item text-truncate"
                                    data-i18n="Second Level"
                                    >Purchase Reports</span
                                ></Link
                            >
                        </li>

                        <li class="level2">
                            <Link
                                class="d-flex align-items-center"
                                :href="route('reports.expenses')"
                                ><feather type="table"></feather
                                ><span
                                    class="menu-item text-truncate"
                                    data-i18n="Second Level"
                                    >Expenses Reports</span
                                ></Link
                            >
                        </li>
                    </ul>
                </li>

                <li class="has-sub nav-item">
                    <a
                        class="d-flex align-items-center"
                        href="javascript:void(0);"
                        target="_self"
                        ><feather type="settings"></feather
                        ><span
                            class="menu-title text-truncate"
                            data-i18n="Menu Levels"
                            >Settings</span
                        ></a
                    >
                    <ul class="menu-content">
                        <li class="level2">
                            <Link
                                class="d-flex align-items-center"
                                :href="route('users.index')"
                                ><feather type="users" :size="60"></feather
                                ><span
                                    class="menu-item text-truncate"
                                    data-i18n="Second Level"
                                    >Users</span
                                ></Link
                            >
                        </li>
                        <li class="level2">
                            <Link
                                class="d-flex align-items-center"
                                :href="route('roles.index')"
                                ><feather type="shield" :size="60"></feather
                                ><span
                                    class="menu-item text-truncate"
                                    data-i18n="Second Level"
                                    >Roles</span
                                ></Link
                            >
                        </li>
                    </ul>
                </li>
            </ul> -->
        </div>
    </div>
</template>
<style scoped>
.main-menu.menu-light .navigation > li .active {
    color: white !important;
}
.main-menu.menu-light .navigation > li .active {
    background: linear-gradient(118deg, #7367f0, rgba(115, 103, 240, 0.7));
    border-radius: 4px;
}
</style>
<script>
import { Link } from "@inertiajs/vue3";
import { onMounted } from "vue";

export default {
    components: { Link },

    setup() {
        onMounted(() => {
            $(".main-menu-content")
                .find("a.active")
                .parents("li.has-sub,li.level2")
                .addClass("sidebar-group-active open");
        });
    },
};
</script>
