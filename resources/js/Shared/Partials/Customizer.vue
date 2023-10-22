<template>
    <div class="customizer d-none d-md-block">
        <a
            class="customizer-toggle d-flex align-items-center justify-content-center"
            href="#"
            ><feather class="spinner" type="settings"></feather
        ></a>
        <div class="customizer-content">
            <!-- Customizer header -->
            <div class="customizer-header px-2 pt-1 pb-0 position-relative">
                <h4 class="mb-0">Theme Customizer</h4>
                <p class="m-0">Customize & Preview in Real Time</p>

                <a class="customizer-close" href="javascript:void(0);"
                    ><feather type="x"></feather
                ></a>
            </div>

            <hr />

            <!-- Styling & Text Direction -->
            <div class="customizer-styling-direction px-2">
                <p class="font-weight-bold">Skin</p>
                <div class="d-flex">
                    <div class="custom-control custom-radio mr-1">
                        <input
                            type="radio"
                            id="skinlight"
                            name="skinradio"
                            class="custom-control-input layout-name"
                            checked
                            data-layout=""
                        />
                        <label class="custom-control-label" for="skinlight"
                            >Light</label
                        >
                    </div>
                    <div class="custom-control custom-radio mr-1">
                        <input
                            type="radio"
                            id="skinbordered"
                            name="skinradio"
                            class="custom-control-input layout-name"
                            data-layout="bordered-layout"
                        />
                        <label class="custom-control-label" for="skinbordered"
                            >Bordered</label
                        >
                    </div>
                    <div class="custom-control custom-radio mr-1">
                        <input
                            type="radio"
                            id="skindark"
                            name="skinradio"
                            class="custom-control-input layout-name"
                            data-layout="dark-layout"
                        />
                        <label class="custom-control-label" for="skindark"
                            >Dark</label
                        >
                    </div>
                    <div class="custom-control custom-radio">
                        <input
                            type="radio"
                            id="skinsemidark"
                            name="skinradio"
                            class="custom-control-input layout-name"
                            data-layout="semi-dark-layout"
                        />
                        <label class="custom-control-label" for="skinsemidark"
                            >Semi Dark</label
                        >
                    </div>
                </div>
            </div>

            <hr />

            <!-- Menu -->
            <div class="customizer-menu px-2">
                <div id="customizer-menu-collapsible" class="d-flex">
                    <p class="font-weight-bold mr-auto m-0">Menu Collapsed</p>
                    <div
                        class="custom-control custom-control-primary custom-switch"
                    >
                        <input
                            type="checkbox"
                            class="custom-control-input"
                            id="collapse-sidebar-switch"
                        />
                        <label
                            class="custom-control-label"
                            for="collapse-sidebar-switch"
                        ></label>
                    </div>
                </div>
            </div>
            <hr />

            <!-- Layout Width -->
            <div class="customizer-footer px-2">
                <p class="font-weight-bold">Layout Width</p>
                <div class="d-flex">
                    <div class="custom-control custom-radio mr-1">
                        <input
                            type="radio"
                            id="layout-width-full"
                            name="layoutWidth"
                            class="custom-control-input"
                            checked
                        />
                        <label
                            class="custom-control-label"
                            for="layout-width-full"
                            >Full Width</label
                        >
                    </div>
                    <div class="custom-control custom-radio mr-1">
                        <input
                            type="radio"
                            id="layout-width-boxed"
                            name="layoutWidth"
                            class="custom-control-input"
                        />
                        <label
                            class="custom-control-label"
                            for="layout-width-boxed"
                            >Boxed</label
                        >
                    </div>
                </div>
            </div>
            <hr />

            <!-- Navbar -->
            <div class="customizer-navbar px-2">
                <div id="customizer-navbar-colors">
                    <p class="font-weight-bold">Navbar Color</p>
                    <ul class="list-inline unstyled-list">
                        <li
                            class="color-box bg-white border selected"
                            data-navbar-default=""
                        ></li>
                        <li
                            class="color-box bg-primary"
                            data-navbar-color="bg-primary"
                        ></li>
                        <li
                            class="color-box bg-secondary"
                            data-navbar-color="bg-secondary"
                        ></li>
                        <li
                            class="color-box bg-success"
                            data-navbar-color="bg-success"
                        ></li>
                        <li
                            class="color-box bg-danger"
                            data-navbar-color="bg-danger"
                        ></li>
                        <li
                            class="color-box bg-info"
                            data-navbar-color="bg-info"
                        ></li>
                        <li
                            class="color-box bg-warning"
                            data-navbar-color="bg-warning"
                        ></li>
                        <li
                            class="color-box bg-dark"
                            data-navbar-color="bg-dark"
                        ></li>
                    </ul>
                </div>

                <p class="navbar-type-text font-weight-bold">Navbar Type</p>
                <div class="d-flex">
                    <div class="custom-control custom-radio mr-1">
                        <input
                            type="radio"
                            id="nav-type-floating"
                            name="navType"
                            class="custom-control-input"
                            checked
                        />
                        <label
                            class="custom-control-label"
                            for="nav-type-floating"
                            >Floating</label
                        >
                    </div>
                    <div class="custom-control custom-radio mr-1">
                        <input
                            type="radio"
                            id="nav-type-sticky"
                            name="navType"
                            class="custom-control-input"
                        />
                        <label
                            class="custom-control-label"
                            for="nav-type-sticky"
                            >Sticky</label
                        >
                    </div>
                    <div class="custom-control custom-radio mr-1">
                        <input
                            type="radio"
                            id="nav-type-static"
                            name="navType"
                            class="custom-control-input"
                        />
                        <label
                            class="custom-control-label"
                            for="nav-type-static"
                            >Static</label
                        >
                    </div>
                    <div class="custom-control custom-radio">
                        <input
                            type="radio"
                            id="nav-type-hidden"
                            name="navType"
                            class="custom-control-input"
                        />
                        <label
                            class="custom-control-label"
                            for="nav-type-hidden"
                            >Hidden</label
                        >
                    </div>
                </div>
            </div>
            <hr />

            <!-- Footer -->
            <div class="customizer-footer px-2">
                <p class="font-weight-bold">Footer Type</p>
                <div class="d-flex">
                    <div class="custom-control custom-radio mr-1">
                        <input
                            type="radio"
                            id="footer-type-sticky"
                            name="footerType"
                            class="custom-control-input"
                        />
                        <label
                            class="custom-control-label"
                            for="footer-type-sticky"
                            >Sticky</label
                        >
                    </div>
                    <div class="custom-control custom-radio mr-1">
                        <input
                            type="radio"
                            id="footer-type-static"
                            name="footerType"
                            class="custom-control-input"
                            checked
                        />
                        <label
                            class="custom-control-label"
                            for="footer-type-static"
                            >Static</label
                        >
                    </div>
                    <div class="custom-control custom-radio mr-1">
                        <input
                            type="radio"
                            id="footer-type-hidden"
                            name="footerType"
                            class="custom-control-input"
                        />
                        <label
                            class="custom-control-label"
                            for="footer-type-hidden"
                            >Hidden</label
                        >
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import { onMounted } from "vue";

export default {
    setup() {
        onMounted(() => {
            var that = this;
            (function (window, document, $) {
                "use strict";

                var html = $("html"),
                    body = $("body"),
                    // appContent = $('.app-content'),
                    mainMenu = $(".main-menu"),
                    menuType = body.attr("data-menu"),
                    footer = $(".footer"),
                    navbar = $(".header-navbar"),
                    horizontalNavbar = $(
                        ".horizontal-menu-wrapper .header-navbar"
                    ),
                    navBarShadow = $(".header-navbar-shadow"),
                    collapseSidebar = $("#collapse-sidebar-switch"),
                    contentWrapper = $(".content-wrapper"),
                    contentAreaWrapper = $(".content-area-wrapper"),
                    customizer = $(".customizer"),
                    flag = 0;

                // Customizer toggle & close button click events  [Remove customizer code from production]
                $(".customizer-toggle").on("click", function (e) {
                    e.preventDefault();
                    $(customizer).toggleClass("open");
                });
                $(".customizer-close").on("click", function () {
                    $(customizer).removeClass("open");
                });

                // perfect scrollbar for customizer
                // if ($(".customizer-content").length > 0) {
                //   var customizer_content = new PerfectScrollbar(".customizer-content");
                // }

                /***** Skin Options *****/
                $(".layout-name").on("click", function () {
                    var $this = $(this);
                    that.$store.commit(
                        "changeLayoutColor",
                        $this.data("layout")
                    );
                    var currentLayout = that.$store.state.currentLayout;
                    html.removeClass(
                        "dark-layout bordered-layout semi-dark-layout"
                    ).addClass(currentLayout);
                    if (currentLayout === "") {
                        mainMenu
                            .removeClass("menu-dark")
                            .addClass("menu-light");
                        navbar
                            .removeClass("navbar-dark")
                            .addClass("navbar-light");
                    } else if (currentLayout === "dark-layout") {
                        mainMenu
                            .removeClass("menu-light")
                            .addClass("menu-dark");
                        navbar
                            .removeClass("navbar-light")
                            .addClass("navbar-dark");
                    } else if (currentLayout === "semi-dark-layout") {
                        mainMenu
                            .removeClass("menu-light")
                            .addClass("menu-dark");
                        navbar
                            .removeClass("navbar-dark")
                            .addClass("navbar-light");
                    } else {
                        mainMenu
                            .removeClass("menu-dark")
                            .addClass("menu-light");
                        navbar
                            .removeClass("navbar-dark")
                            .addClass("navbar-light");
                    }

                    $(".horizontal-menu .header-navbar.navbar-fixed").css({
                        background: "inherit",
                        "box-shadow": "inherit",
                    });
                    $(
                        ".horizontal-menu .horizontal-menu-wrapper.header-navbar"
                    ).css("background", "inherit");
                });

                // Default Skin Selected Based on Current Layout
                var layout = that.$store.state.currentLayout;
                html.addClass(layout);

                $(".layout-name[data-layout='" + layout + "']").prop(
                    "checked",
                    true
                );

                collapseSidebar.on("click", function () {
                    $(".modern-nav-toggle").trigger("click");
                    $(".main-menu").trigger("mouseleave");
                });

                // checks if main menu is collapsed by default
                if (body.hasClass("menu-collapsed")) {
                    collapseSidebar.prop("checked", true);
                } else {
                    collapseSidebar.prop("checked", false);
                }

                /***** Navbar Color Options *****/
                $("#customizer-navbar-colors .color-box").on(
                    "click",
                    function () {
                        var $this = $(this);
                        $this.siblings().removeClass("selected");
                        $this.addClass("selected");
                        var navbarColor = $this.data("navbar-color");
                        // changes navbar colors
                        if (navbarColor) {
                            body.find(navbar)
                                .removeClass(
                                    "bg-primary bg-secondary bg-success bg-danger bg-info bg-warning bg-dark"
                                )
                                .addClass(navbarColor + " navbar-dark");
                        } else {
                            body.find(navbar).removeClass(
                                "bg-primary bg-secondary bg-success bg-danger bg-info bg-warning bg-dark navbar-dark"
                            );
                        }
                        if (html.hasClass("dark-layout")) {
                            navbar.addClass("navbar-dark");
                        }
                    }
                );

                /***** Navbar Type *****/
                if (body.hasClass("horizontal-menu")) {
                    $(".collapse_menu").removeClass("d-none");
                    $(".collapse_sidebar").addClass("d-none");

                    $(".menu_type").removeClass("d-none");
                    $(".navbar_type").addClass("d-none");
                    // Hides hidden option in Horizontal layout
                    $("#nav-type-hidden").closest("div").css("display", "none");

                    $("#customizer-navbar-colors").hide();
                    $(".customizer-menu")
                        .attr("style", "display: none !important")
                        .next("hr")
                        .hide();
                    $(".navbar-type-text").text("Nav Menu Types");
                }
                // Hides Navbar
                $("#nav-type-hidden").on("click", function () {
                    navbar.addClass("d-none");
                    navBarShadow.addClass("d-none");
                    body.removeClass(
                        "navbar-static navbar-floating navbar-sticky"
                    ).addClass("navbar-hidden");
                });
                // changes to Static navbar
                $("#nav-type-static").on("click", function () {
                    if (body.hasClass("horizontal-layout")) {
                        horizontalNavbar.removeClass(
                            "d-none floating-nav fixed-top navbar-fixed"
                        );
                        body.removeClass(
                            "navbar-hidden navbar-floating navbar-sticky"
                        ).addClass("navbar-static");
                    } else {
                        navBarShadow.addClass("d-none");
                        if (menuType === "horizontal-menu") {
                            horizontalNavbar
                                .removeClass("d-none floating-nav fixed-top")
                                .addClass("navbar-static-top");
                        } else {
                            navbar
                                .removeClass("d-none floating-nav fixed-top")
                                .addClass("navbar-static-top");
                        }
                        body.removeClass(
                            "navbar-hidden navbar-floating navbar-sticky"
                        ).addClass("navbar-static");
                    }
                });
                // change to floating navbar
                $("#nav-type-floating").on("click", function () {
                    if (body.hasClass("horizontal-layout")) {
                        horizontalNavbar
                            .removeClass("d-none fixed-top navbar-static-top")
                            .addClass("floating-nav");
                        body.removeClass(
                            "navbar-static navbar-hidden navbar-sticky"
                        ).addClass("navbar-floating");
                    } else {
                        navBarShadow.removeClass("d-none");
                        if (menuType === "horizontal-menu") {
                            horizontalNavbar
                                .removeClass(
                                    "d-none navbar-static-top fixed-top"
                                )
                                .addClass("floating-nav");
                        } else {
                            navbar
                                .removeClass(
                                    "d-none navbar-static-top fixed-top"
                                )
                                .addClass("floating-nav");
                        }
                        body.removeClass(
                            "navbar-static navbar-hidden navbar-sticky"
                        ).addClass("navbar-floating");
                    }
                });
                // changes to Static navbar
                $("#nav-type-sticky").on("click", function () {
                    if (body.hasClass("horizontal-layout")) {
                        horizontalNavbar
                            .removeClass(
                                "d-none floating-nav navbar-static-top navbar-fixed"
                            )
                            .addClass("fixed-top");
                        body.removeClass(
                            "navbar-static navbar-floating navbar-hidden"
                        ).addClass("navbar-sticky");
                    } else {
                        navBarShadow.addClass("d-none");
                        if (menuType === "horizontal-menu") {
                            horizontalNavbar
                                .removeClass(
                                    "d-none floating-nav navbar-static-top"
                                )
                                .addClass("fixed-top");
                        } else {
                            navbar
                                .removeClass(
                                    "d-none floating-nav navbar-static-top"
                                )
                                .addClass("fixed-top");
                        }

                        body.removeClass(
                            "navbar-static navbar-floating navbar-hidden"
                        ).addClass("navbar-sticky");
                    }
                });

                /***** Layout Width Options *****/
                // Check current Layout width and show selected layout width accordingly
                if (
                    contentWrapper.hasClass("container") ||
                    contentAreaWrapper.hasClass("container")
                ) {
                    $("#layout-width-boxed").prop("checked", true);
                } else {
                    $("#layout-width-full").prop("checked", true);
                }

                // Full Width Layout
                $("#layout-width-full").on("click", function () {
                    contentWrapper.removeClass("container p-0");
                    contentAreaWrapper.removeClass("container p-0");
                });
                // Boxed Layout
                $("#layout-width-boxed").on("click", function () {
                    contentWrapper.addClass("container p-0");
                    contentAreaWrapper.addClass("container p-0");
                });

                /***** Footer Type *****/
                // Hides footer
                $("#footer-type-hidden").on("click", function () {
                    footer.addClass("d-none");
                    body.removeClass("footer-static footer-fixed").addClass(
                        "footer-hidden"
                    );
                });
                // changes to Static footer
                $("#footer-type-static").on("click", function () {
                    body.removeClass("footer-fixed");
                    footer.removeClass("d-none").addClass("footer-static");
                    body.removeClass("footer-hidden footer-fixed").addClass(
                        "footer-static"
                    );
                });
                // changes to Sticky footer
                $("#footer-type-sticky").on("click", function () {
                    body.removeClass("footer-static footer-hidden").addClass(
                        "footer-fixed"
                    );
                    footer.removeClass("d-none footer-static");
                });

                // Unison.on('change', function (bp) {
                //   if (menuType === 'horizontal-menu' && flag > 0) {
                //     if (bp.name === 'xl') {
                //       $('#nav-type-floating').trigger('click');
                //     }
                //   }
                //   flag++;
                // });
            })(window, document, jQuery);
        });
    },
};
</script>
