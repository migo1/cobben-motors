<template>
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-3 column-sidebar">
                    <div class="banner2-wrapper">
                        <div class="banner2">
                            <div class="top-info clearfix">
                                <div class="info1">
                                    <div class="txt1">RANGE ROVER</div>
                                    <div class="txt2">
                                        <span class="txt"
                                            >FIRST DRIVE REVIEW</span
                                        >
                                        <span class="stars">
                                            <i
                                                class="fa fa-star"
                                                aria-hidden="true"
                                            ></i>
                                            <i
                                                class="fa fa-star"
                                                aria-hidden="true"
                                            ></i>
                                            <i
                                                class="fa fa-star"
                                                aria-hidden="true"
                                            ></i>
                                            <i
                                                class="fa fa-star"
                                                aria-hidden="true"
                                            ></i>
                                            <i
                                                class="fa fa-star-o"
                                                aria-hidden="true"
                                            ></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="txt3">$99,415</div>
                            <div class="txt4">George Freeman</div>
                            <div class="txt5">
                                Rugstrabe 49<br />
                                DE-41469 Neuss<br />
                                Phone: +49 (0) 2137 92290
                            </div>
                            <div class="form-wrapper">
                                <div id="note2"></div>
                                <!-- <div id="fields2">
                                    <form
                                        id="ajax-contact-form2"
                                        class="form-horizontal"
                                        action="javascript:;"
                                    >
                                        <div class="form-group">
                                            <label for="inputMessage"
                                                >Your Message</label
                                            >
                                            <textarea
                                                class="form-control"
                                                rows="9"
                                                id="inputMessage"
                                                name="content"
                                                onBlur="if(this.value=='') this.value='Message'"
                                                onFocus="if(this.value =='Message' ) this.value=''"
                                            >
Message</textarea
                                            >
                                        </div>

                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" /> Send
                                                me a copy of this message
                                            </label>
                                        </div>

                                        <div class="checkbox">
                                            <label>
                                                <input
                                                    type="checkbox"
                                                    checked
                                                />
                                                Subscribe to our Newsletter
                                            </label>
                                        </div>

                                        <button
                                            type="submit"
                                            class="btn-default btn-cf-submit2"
                                        >
                                            SEND E-MAIL
                                        </button>
                                    </form>
                                </div> -->
                            </div>
                        </div>
                    </div>

                    <!-- <div class="banner3-wrapper">
                        <div class="banner3">
                            <div class="top-info clearfix">
                                <div class="info1">
                                    <div class="txt1">Financing Offer</div>
                                </div>
                            </div>
                            <div class="txt2">vehicle</div>
                            <div class="txt3">RANGE ROVER</div>
                            <div class="form-wrapper">
                                <div id="note1"></div>
                                <div id="fields1">
                                    <form
                                        id="ajax-contact-form1"
                                        class="form-horizontal"
                                        action="javascript:;"
                                    >
                                        <div class="row">
                                            <div class="col-xs-6 col-sm-6">
                                                <div class="form-group">
                                                    <label for="inputName"
                                                        >Credit amount
                                                        ($)</label
                                                    >
                                                    <input
                                                        type="text"
                                                        class="form-control"
                                                        id="inputName"
                                                        name="name"
                                                        value="34990"
                                                    />
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6">
                                                <div class="form-group">
                                                    <label for="inputEmail"
                                                        >Running time</label
                                                    >
                                                    <select
                                                        class="form-control"
                                                    >
                                                        <option>
                                                            60 months
                                                        </option>
                                                        <option>
                                                            48 months
                                                        </option>
                                                        <option>
                                                            36 months
                                                        </option>
                                                        <option>
                                                            24 months
                                                        </option>
                                                        <option>
                                                            12 months
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="txt4">
                                            In corporation with CHECK24
                                        </div>

                                        <button
                                            type="submit"
                                            class="btn-default btn-cf-submit1"
                                        >
                                            CALCULATE NOW
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <!-- <div class="banner">
                        <figure>
                            <img
                                src="customer/images/banner.jpg"
                                alt=""
                                class="img-responsive"
                            />
                        </figure>
                        <div class="caption">
                            <div class="txt1">SELL YOUR CAR</div>
                            <div class="txt2">
                                Nam tellus enimds eleifend dignis lsim biben
                                edum tristique sed metus fusce Maecenas
                                lobortis.
                            </div>
                            <div class="txt3">
                                <a href="#" class="btn-default btn2"
                                    >REGISTER NOW</a
                                >
                            </div>
                        </div>
                    </div> -->
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
                            <li class="active">
                                <a href="#tabs3-1">VEHICLE OVERVIEW</a>
                            </li>
                            <li><a href="#tabs3-2">FEATURES & OPTIONS</a></li>
               
                        </ul>
                    </div>

                    <div id="second-tab-group" class="tabgroup">
                        <div id="tabs3-1">
                            <div class="title2">DESCRIPTION</div>

                            <p>
                                Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Ut tortor dui, scelerisque ac
                                nisi sed, rutrum euismod sem. Nunc eu tincidunt
                                nulla. In posuere lorem sit amet felis placerat,
                                quis hendrerit est rutrum. Phasellus non dui
                                aliquam, eleifend enim dictum, laoreet nisl. Nam
                                arcu nisi, venenatis nec semper sed, semper eget
                                diam. Vestibulum id lorem metus. Aliquam felis
                                elit, imperdiet non rutrum ac, euismod ut diam.
                                Donec iaculis at lorem et placerat. Aenean
                                dictum orci sed lectus vulputate, ut mattis
                                justo feugiat. Pellentesque sodales urna quis
                                nunc iaculis lobortis. Sed vel ligula egestas,
                                tristique urna sit amet, rutrum enim. Fusce non
                                dignissim tellus, sed commodo nulla. Nulla
                                posuere, nunc ac ultrices pretium, mi quam
                                dignissim magna, vel luctus magna sapien et
                                velit. Quisque in felis odio.
                            </p>

                            <p>
                                Proin euismod interdum nibh et posuere. Fusce
                                tempus ligula vitae elit commodo, nec semper
                                lorem aliquet. Morbi porttitor semper tortor, ac
                                bibendum urna cursus in. Nulla porttitor risus
                                mauris, ut rutrum dolor porta semper. Quisque eu
                                magna nec diam auctor ultricies. Ut sed purus
                                nec lectus porttitor pretium. Ut et scelerisque
                                metus.
                            </p>

                            <p>
                                Nullam sed efficitur sapien, sit amet
                                consectetur sem. Curabitur faucibus aliquet
                                finibus. Praesent ullamcorper, dui at sodales
                                dictum, libero augue egestas urna, a placerat
                                odio est at turpis. Ut dapibus ex eget
                                sollicitudin sagittis. In hac habitasse platea
                                dictumst. In in odio eget erat efficitur
                                pellentesque sit amet at nulla. Morbi mollis
                                mollis nibh consectetur pulvinar. Nullam sodales
                                quis purus sed dignissim. Pellentesque porta
                                finibus ante porta laoreet.
                            </p>

                            <p>
                                Integer semper, eros luctus convallis convallis,
                                nibh nulla volutpat libero, vitae dapibus mauris
                                eros ut elit. Donec eleifend dui ac arcu
                                condimentum, vel semper metus cursus. Integer a
                                mauris ac magna tincidunt euismod ac sit amet
                                ante. Quisque faucibus varius enim eget
                                malesuada. Ut et consequat dolor. Nam ornare
                                lectus in suscipit feugiat. In eu semper sapien.
                                Nulla varius consectetur dapibus. Phasellus
                                varius tellus velit, vitae mollis purus
                                efficitur sit amet. Etiam aliquam bibendum
                                risus, non convallis dolor pharetra non. Fusce
                            </p>
                        </div>
                        <div id="tabs3-2">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="title2">FEATURES</div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <ul class="ul3">
                                            
                                                <li>
                                                    <a href="#">Alloy Wheels</a>
                                                </li>
                                          
                                            </ul>
                                        </div>
                                        <!-- <div class="col-sm-6">
                                            <ul class="ul3">
                                                <li>
                                                    <a href="#">Alloy Wheels</a>
                                                </li>
                                                <li>
                                                    <a href="#"
                                                        >Anti-Lock Brakes
                                                        (ABS)</a
                                                    >
                                                </li>
                                                <li>
                                                    <a href="#">Anti-Theft</a>
                                                </li>
                                                <li>
                                                    <a href="#">Anti-Starter</a>
                                                </li>
                                                <li>
                                                    <a href="#"
                                                        >Security System</a
                                                    >
                                                </li>
                                                <li>
                                                    <a href="#"
                                                        >Air Conditioning</a
                                                    >
                                                </li>
                                                <li>
                                                    <a href="#">Alloy Wheels</a>
                                                </li>
                                                <li>
                                                    <a href="#"
                                                        >Anti-Lock Brakes
                                                        (ABS)</a
                                                    >
                                                </li>
                                                <li>
                                                    <a href="#">Anti-Theft</a>
                                                </li>
                                                <li>
                                                    <a href="#">Anti-Starter</a>
                                                </li>
                                                <li>
                                                    <a href="#"
                                                        >Security System</a
                                                    >
                                                </li>
                                                <li>
                                                    <a href="#"
                                                        >Air Conditioning</a
                                                    >
                                                </li>
                                                <li>
                                                    <a href="#">Alloy Wheels</a>
                                                </li>
                                            </ul>
                                        </div> -->
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
    props: ['cars', 'images'],
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
</style>
