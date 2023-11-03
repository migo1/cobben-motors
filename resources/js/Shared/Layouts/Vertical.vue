<template>
    <div>
        <SuccessToast></SuccessToast>
        <ErrorToast></ErrorToast>
        <Navbar />
        <LeftsideBar />
        <div class="app-content content">
            <div class="content-overlay"></div>
            <div class="header-navbar-shadow"></div>
            <slot />
        </div>
        <!-- <Customizer /> -->
        <Footer />
    </div>
</template>

<script>
import { reactive, watch, onMounted, computed } from "vue";
import { useStore } from "vuex";

export default {
    props: {
        errors: {
            type: Object,
            default: () => ({}),
        },
        success: {
            type: String,
            default: "",
        },
    },
    setup(props) {
        let store = useStore();
        let state = reactive({
            displaystatus: computed(() => store.state.displaystatus),
            message: computed(() => store.state.SuccessMessage),
        });

        let updateparent = (variable) => {
            this.success = variable;
        };

        onMounted(() => {
            var that = this;

            $(".modern-nav-toggle")
                .find(".collapse-toggle-icon")
                .replaceWith(
                    feather.icons["disc"].toSvg({
                        class: "d-none d-xl-block collapse-toggle-icon primary font-medium-4",
                    })
                );
            $(".modern-nav-toggle").on("click", function (event) {
                if (store.state.ifcollapses) {
                    $("body")
                        .removeClass("menu-collapsed")
                        .addClass("menu-expanded");
                    store.commit("toggleCollapse");
                } else {
                    $("body")
                        .removeClass("menu-expanded")
                        .addClass("menu-collapsed");
                    store.commit("toggleCollapse");
                }
            });

            $("ul.dropdown-menu [data-toggle=dropdown]").on(
                "click",
                function (event) {
                    event.preventDefault();
                    event.stopPropagation();
                    $(this).parent().siblings().removeClass("open");
                    $(this).parent().toggleClass("open");
                }
            );

            $(".navigation-main li.has-sub > a").on("click", function (e) {
                $(this).parent().toggleClass("open");
            });

            $(".main-menu-content")
                .find("li.active")
                .parents("li")
                .addClass("sidebar-group-active");

            $(".main-menu-content")
                .find("li.active")
                .closest("li.nav-item")
                .addClass("open");

            $(".main-menu") // Use selector $('body[data-open="hover"] .header-navbar .dropdown') for menu and navbar DD open on hover
                .on("mouseenter", function () {
                    if (
                        !$(this).hasClass("menu-expanded") &&
                        store.state.ifcollapses == true
                    ) {
                        $(".navigation-main li.has-sub > a")
                            .parent()
                            .toggleClass("open");

                        $("body")
                            .removeClass("menu-collapsed")
                            .addClass("menu-expanded");
                    }
                })
                .on("mouseleave", function (event) {
                    if (
                        !$(this).hasClass("menu-expanded") &&
                        store.state.ifcollapses == true
                    ) {
                        $(".navigation-main li.has-sub > a")
                            .parent()
                            .removeClass("open");
                        $("body")
                            .removeClass("menu-expanded")
                            .addClass("menu-collapsed");
                    }
                });
        });

        watch(
            () => props.errors,
            (newval) => {
                if (newval && Object.keys(newval).length > 0) {
                    store.commit("toggleErrorToast", newval);
                }
            }
        );

        watch(
            () => props.success,
            (newval) => {
                if (newval && Object.keys(newval).length > 0) {
                    store.commit("toggleSuccessToast", newval);
                }
            }
        );

        return {
            updateparent,
            state,
        };
    },
};
</script>
