<template>
    <div id="main">
        <CustomerNav />
        <slot />
        <CustomerFooter />
    </div>
</template>

<script>
import { onMounted } from "vue";
import { Link } from "@inertiajs/vue3";

export default {
    components: { Link },

    setup() {
        onMounted(() => {
            var height = $(window).height() - 150; // 55px + 95px its height of top block.
            $("#home").height(height);

            $("#slides").superslides({
                play: 7000,
                animation: "fade", // slide
                pagination: false,
                inherit_height_from: "#home",
            });

            $(".select2").select2({
                // containerCss: ".eeeeeee",
                minimumResultsForSearch: Infinity,
            });

            $("#slider-range").slider({
                range: true,
                min: 0,
                max: 120000,
                values: [4500, 100200],
                slide: function (event, ui) {
                    $("#amount").val("$" + ui.values[0]);
                    $("#amount2").val("$" + ui.values[1]);
                },
            });

            var o = $("#review .carousel.main ul");
            if (o.length > 0) {
                o.carouFredSel({
                    auto: {
                        timeoutDuration: 8000,
                    },
                    responsive: true,
                    pagination: ".review_pagination",
                    width: "100%",
                    scroll: {
                        // fx : "crossfade",
                        items: 1,
                        duration: 1000,
                        easing: "easeOutExpo",
                    },
                    items: {
                        width: "600",
                        height: "variable", //  optionally resize item-height
                        visible: {
                            min: 1,
                            max: 1,
                        },
                    },
                    mousewheel: false,
                    swipe: {
                        onMouse: true,
                        onTouch: true,
                    },
                });
            }
            var index = $(".tabs1 .tabs1_tabs ul").find(".active").index();
            $(".tabs1").tabs({
                active: index,
            });
            $(".animated").appear(function () {
                // console.log("111111111111");
                var elem = $(this);
                var animation = elem.data("animation");
                if (!elem.hasClass("visible")) {
                    var animationDelay = elem.data("animation-delay");
                    if (animationDelay) {
                        setTimeout(function () {
                            elem.addClass(animation + " visible");
                        }, animationDelay);
                    } else {
                        elem.addClass(animation + " visible");
                    }
                }
            });
            // Animate number
            $(".animated-number").appear(function () {
                var elem = $(this);
                var b = elem.text();
                var d = elem.data("duration");
                var animationDelay = elem.data("animation-delay");
                if (!animationDelay) {
                    animationDelay = 0;
                }
                elem.text("0");

                setTimeout(function () {
                    elem.animate(
                        { num: b },
                        {
                            duration: d,
                            step: function (num) {
                                this.innerHTML = num.toFixed(0);
                            },
                        }
                    );
                }, animationDelay);
            });

          
        });

        return {};
    },
};
</script>
