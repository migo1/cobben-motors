<template>
    <div id="" class="">
        

        <div id="tabs2-2">
            <div class="row">
                <div v-for="(item, index) in cars.data" :key="index">
                    <div class="col-sm-4">
                        <div class="car-view2-wrapper">
                            <div class="car-view2 clearfix">
                                <figure>
                                    <img
                                        style="
                                            width: 260px;
                                            height: 230px;
                                            object-fit: contain;
                                        "
                                        :src="item.thumbnail"
                                        alt=""
                                        class="img-responsive"
                                    />
                                </figure>
                                <div class="caption">
                                    <div class="top-info clearfix">
                                        <div class="info1">
                                            <div class="txt1">
                                                {{
                                                    item.car_brand.name +
                                                    " " +
                                                    item.car_model.name
                                                }}
                                            </div>
                                 
                                        </div>
                                    </div>
                                    <div class="txt3">
                                        In a pickup market gone fancy, the
                                        Silverado sticks to its basic-truck
                                        recipe. The steering is accurate ...
                                    </div>
                                    <div class="txt4">
                                        <ul>
                                            <li>Registered 2015</li>
                                            <li>Used</li>
                                            <li>8-Speed Automatic</li>
                                            <li>Petrol</li>
                                        </ul>
                                    </div>
                                    <div class="txt5">31,730 KM</div>
                                    <div class="bot-info clearfix">
                                        <div class="info2">
                                            <div class="txt6">$68,213</div>
                                        </div>
                                        <div class="info3">
                                            <div class="txt7">
                                                <a
                                                    :href="
                                                        route('car_select', {
                                                            car: item.slug,
                                                        })
                                                    "
                                                    class="btn-default btn3"
                                                    >VIEW DETAILS</a
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="pager_wrapper">
                <ul class="pager clearfix">
                    <li class="prev"><a href="#"></a></li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li class="li"><a href="#">2</a></li>
                    <li class="li"><a href="#">3</a></li>
                    <li class="li"><a href="#">4</a></li>
                    <li class="dots">....</li>
                    <li class="next"><a href="#"></a></li>
                </ul>
            </div> -->
        </div>
    </div>
</template>
<script>
export default {
    props: ["cars"],
    // data() {
    //     return {};
    // },
    // methods: {}
};
</script>
