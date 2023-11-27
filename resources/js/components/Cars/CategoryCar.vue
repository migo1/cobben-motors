<template>
    <div id="best">
        <div class="container">
            <div class="title1">
                <span>BEST OFFERS FROM COBBEN MOTORS</span>
            </div>

            <div class="tabs1">
                <div class="tabs1_tabs">
                    <ul>
                        <li class="active">
                            <!-- <a href="#tabs1-1"
                                    >OUR LATEST CARS</a
                                > -->
                        </li>
                    </ul>
                </div>
                <div class="tabs1_content">
                    <div id="tabs1-1">
                        <div class="row">
                            <div class="col-sm-12 col-md-9">
                                <div class="row">
                                    <div
                                        v-for="(item, index) in cars.data"
                                        :key="index"
                                    >
                                        <div class="col-sm-4">
                                            <div class="thumb2">
                                                <div class="thumbnail clearfix">
                                                    <figure>
                                                        <a :href="route('car_select', {car: item.slug})">
                                                            <img
                                                                :src="
                                                                    item.thumbnail
                                                                "
                                                                alt=""
                                                                class="img-responsive"
                                                                style="
                                                                    max-width: 270px;
                                                                    max-height: 150px;
                                                                    object-fit: contain;
                                                                "
                                                            />
                                                        </a>
                                                    </figure>
                                                    <div class="caption">
                                                        <div class="txt1">
                                                            REGISTERED 2023
                                                        </div>
                                                        <div class="txt2">
                                                            {{ item.car_brand.name + ' ' + item.car_model.name }}
                                                        </div>
                                                        <div
                                                            class="info clearfix"
                                                        >
                                                            <span class="price"
                                                                >$18,995</span
                                                            >
                                                            <span class="speed"
                                                                >52,000 KM</span
                                                            >
                                                        </div>
                                                        <div class="txt3">
                                                            Used • {{ item.year }} •
                                                            Automatic • {{ item.color }} •
                                                            Diesel
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-3">
                                <ul class="ul1">
                                    <li>
                                        <a href="#">All manufacturers</a>
                                    </li>
                                    <li><a href="#">BENZO</a></li>
                                    <li><a href="#">TOYOTA</a></li>
                                    <li><a href="#">RANGE ROVER</a></li>
                                    <li><a href="#">MITSUBISHI</a></li>
                                    <li><a href="#">LAND ROVER</a></li>
                                    <li><a href="#">FORD</a></li>
                                    <li><a href="#">JEEP</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ["cars"],
};
</script>
