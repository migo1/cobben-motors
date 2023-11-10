import axios from "axios";
window.axios = axios;

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

import { createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/vue3";
import { resolvePageComponent } from "laravel-vite-plugin/inertia-helpers";
import feather from "vue-feather";

// filepond configs

import vueFilePond from "vue-filepond";
import "filepond/dist/filepond.min.css";

// Import FilePond plugins
// Please note that you need to install these plugins separately

// Import image preview plugin styles
import "filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.css";

// Import the plugin code
import FilePondPluginFilePoster from "filepond-plugin-file-poster";

// Import the plugin styles
import "filepond-plugin-file-poster/dist/filepond-plugin-file-poster.css";

// Import image preview and file type validation plugins
import FilePondPluginFileValidateType from "filepond-plugin-file-validate-type";
import FilePondPluginImagePreview from "filepond-plugin-image-preview";

// end filepond configs

 const FilePond = vueFilePond(
     FilePondPluginFileValidateType,
     FilePondPluginImagePreview,
     FilePondPluginFilePoster
 );

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
                    FilePond,
                    // Pagination,
                },
            })
            .mount(el);
    },
});
