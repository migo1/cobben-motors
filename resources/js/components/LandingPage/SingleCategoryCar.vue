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
                                width: 270px;
                                height: 150px;
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
                        <span class="price">KES {{ formatPrice(item.price) }}</span>
                        <span class="speed">{{ formatPrice(item.mileage) }} KM</span>
                    </div>
                    <div class="txt3">
                        {{ item.operation_mode.mode_type }} •
                        {{ item.condition.status }} • {{ item.fuel.type}} 
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props: ["item"],
      methods: {
        formatPrice(price) {
            return price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }
    }
 
};
</script>
