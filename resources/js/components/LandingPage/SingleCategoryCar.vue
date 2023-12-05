<template>
    <div class="col-sm-4">
        <div class="thumb2">
            <div class="thumbnail clearfix">
                <figure>
                    <a
                        :href="
                            route('car_select', {
                                car: item.slug,
                            })
                        "
                    >
                        <img
                            :src="item.thumbnail"
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
                    <div class="txt1">REGISTERED 2023</div>
                    <div class="txt2">
                        {{ item.car_brand.name + " " + item.car_model.name }}
                    </div>
                    <div class="info clearfix">
                        <span class="price">KES 18,995</span>
                        <span class="speed">52,000 KM</span>
                    </div>
                    <div class="txt3">
                        Used •
                        {{ item.year }} • Automatic • {{ item.color }} • Diesel
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props: ["item"],
 
};
</script>
