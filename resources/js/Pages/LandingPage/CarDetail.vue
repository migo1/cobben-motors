<template>
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-3 column-sidebar">
                    <div class="banner2-wrapper">
                        <div class="banner2">
                            <div class="top-info clearfix">
                                <div class="info1">
                                    <div class="txt1">{{ car.car_brand.name }}</div>
                                   
                                </div>
                            </div>
                            <div class="txt3">KES {{ car.price }}</div>
                            <div class="txt4">{{ car.car_model.name  }}</div>
                            <div class="txt5">
                                <!-- Rugstrabe 49<br />
                                DE-41469 Neuss<br />
                                Phone: +49 (0) 2137 92290 -->
                            </div>
                            <div class="form-wrapper">
                                <div id="note2"></div>
                 
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-sm-12 col-md-9 column-content">
                    <div class="gslider-wrapper">
                        <div id="gslider" class="flexslider">
                            <ul class="slides">
                
                                <li 
                                v-for="(image, index) in images"
                                        :key="index"
                                >
                                    <img
                                        :src="image"
                                        alt=""
                                        class="img-responsive"
                                        style="width:842px; height: 500px; object-fit:contain;"
                                    />
                                </li>                          
                            </ul>
                        </div>
                        <div id="carousel" class="flexslider">
                            <ul class="slides">
                                <li
                                v-for="(image, index) in images"
                                        :key="index"
                                >
                                    <img
                                        :src="image"
                                        alt=""
                                        class="img-responsive"
                                        style="width: 121px; height:90px;object-fit:contain;"
                                    />
                                </li>
                         
                            </ul>
                        </div>
                    </div>

                    <div class="tabs2-wrapper">
                        <ul
                            class="tabs clearfix"
                            data-tabgroup="second-tab-group"
                        >
                           
                            <li class="active"><a href="#tabs3-2">FEATURES</a></li>
               
                        </ul>
                    </div>

                    <div id="second-tab-group" class="tabgroup">
                   
                        <div id="tabs3-2" >
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="title2">FEATURES</div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <ul class="ul3" style="display: flex; flex-direction: column; height:200px ;flex-wrap:wrap;">
                                            
                                                <li v-for="(fature, index) in car.features" style="margin-right: 30px;">
                                                    <a href="#">{{ fature.feature }}</a>
                                                </li>
                                          
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                        
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>

            <!-- <div class="row">
                <div class="col-sm-3">
                    <div class="thumb2">
                        <div class="thumbnail clearfix">
                            <figure>
                                <a href="details.html">
                                    <img
                                        src="customer/images/best01.jpg"
                                        alt=""
                                        class="img-responsive"
                                    />
                                </a>
                            </figure>
                            <div class="caption">
                                <div class="txt1">REGISTERED 2015</div>
                                <div class="txt2">CAR M6 Sport Hybrid</div>
                                <div class="info clearfix">
                                    <span class="price">$24,380</span>
                                    <span class="speed">35,000 KM</span>
                                </div>
                                <div class="txt3">
                                    Used • 2015 • Automatic • White • Petrol
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="thumb2">
                        <div class="thumbnail clearfix">
                            <figure>
                                <a href="details.html">
                                    <img
                                        src="customer/images/best02.jpg"
                                        alt=""
                                        class="img-responsive"
                                    />
                                </a>
                            </figure>
                            <div class="caption">
                                <div class="txt1">REGISTERED 2016</div>
                                <div class="txt2">2016 Furrori Tartarosa</div>
                                <div class="info clearfix">
                                    <span class="price">$95,900</span>
                                    <span class="speed">99,000 KM</span>
                                </div>
                                <div class="txt3">
                                    Used • 2016 • Manual • Red • Petrol
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="thumb2">
                        <div class="thumbnail clearfix">
                            <figure>
                                <a href="details.html">
                                    <img
                                        src="customer/images/best03.jpg"
                                        alt=""
                                        class="img-responsive"
                                    />
                                </a>
                            </figure>
                            <div class="caption">
                                <div class="txt1">REGISTERED 2015</div>
                                <div class="txt2">2016 Baratto Viron</div>
                                <div class="info clearfix">
                                    <span class="price">$98,995</span>
                                    <span class="speed">95,000 KM</span>
                                </div>
                                <div class="txt3">
                                    Used • 2015 • Automatic • Blue • Petrol
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="thumb2">
                        <div class="thumbnail clearfix">
                            <figure>
                                <a href="details.html">
                                    <img
                                        src="customer/images/best04.jpg"
                                        alt=""
                                        class="img-responsive"
                                    />
                                </a>
                            </figure>
                            <div class="caption">
                                <div class="txt1">REGISTERED 2017</div>
                                <div class="txt2">2017 Luxses-AMD C63</div>
                                <div class="info clearfix">
                                    <span class="price">$31,900</span>
                                    <span class="speed">12,000 KM</span>
                                </div>
                                <div class="txt3">
                                    Used • 2017 • Automatic • Dark Red • Petrol
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</template>
<script>
import CustomerLayout from "../../Shared/Layouts/Customer.vue";
import { onMounted } from "vue";

export default {
    layout: CustomerLayout,
    props: ['car', 'images'],
    setup() {
        onMounted(() => {
            $(document).on("click", ".tabs a", function (e) {
                e.preventDefault();
                var $this = $(this),
                    tabgroup = "#" + $this.parents(".tabs").data("tabgroup"),
                    others = $this.closest("li").siblings(),
                    target = $this.attr("href");

                others.removeClass("active");
                $this.closest("li").addClass("active");
                $(tabgroup).children("div").hide();
                $(target).show();

                // Fix for G MAP.
                var o = $("#google_map");
                if (o.length > 0) {
                    googlemapinit();
                }
            });
            $(".tabs .active a").trigger("click");
            /////////////////////// load
            // $(window).load(function () {
            //     /*----------------------------------------------------*/
            //     // flexslider
            //     /*----------------------------------------------------*/

            //     /////// flexslider
            //     var o = $("#carousel");
            //     if (o.length > 0) {
            //         o.flexslider({
            //             animation: "slide",
            //             controlNav: false,
            //             animationLoop: false,
            //             slideshow: false,
            //             itemWidth: 121,
            //             itemMargin: 13,
            //             asNavFor: "#gslider",
            //         });
            //     }

            //     var o = $("#gslider");
            //     if (o.length > 0) {
            //         o.flexslider({
            //             animation: "slide",
            //             controlNav: false,
            //             animationLoop: false,
            //             slideshow: false,
            //             sync: "#carousel",
            //             start: function (slider) {
            //                 // $('body').removeClass('loading');
            //             },
            //         });
            //     }
            // });
        });
    },
};
</script>

<style scoped>
.banner2 {
    border-top: 8px solid #48ba7e;
}

.gslider-wrapper {
    border-top: 8px solid #48ba7e;
}

.list-features {
    border-top: 8px solid #48ba7e;
    display: flex;
}
</style>
