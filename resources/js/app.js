import axios from "axios";
window.axios = axios;

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

import { createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/vue3";
import { resolvePageComponent } from "laravel-vite-plugin/inertia-helpers";
import feather from "vue-feather";

// Vue.use(VueFeather);

import store from "./store.js";

import LeftsideBar from "./Shared/Partials/LeftSideBar.vue";
import Navbar from "./Shared/Partials/Navbar.vue";
import Footer from "./Shared/Partials/Footer.vue";
import Customizer from "./Shared/Partials/Customizer.vue";
// import Chatbox from "./Shared/Partials/Chatbox.vue";
import SuccessToast from "./Shared/Global/SuccessToast.vue";
import ErrorToast from "./Shared/Global/ErrorToast.vue";
// import Pagination from "./Shared/Global/pagination/Pagination.vue";

createInertiaApp({
    resolve: (name) =>
        resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob("./Pages/**/*.vue")
        ),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(store)
            .use(plugin)
            .mixin({
                methods: {
                    route,
                },
                components: {
                    LeftsideBar,
                    Navbar,
                    Footer,
                    Customizer,
                    // Chatbox,
                    SuccessToast,
                    ErrorToast,
                    feather,
                    // Pagination,
                },
            })
            .mount(el);
    },
});
