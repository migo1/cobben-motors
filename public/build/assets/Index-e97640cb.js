import{C as x}from"./Customer-5b639835.js";import{_ as o,o as i,c,a,t as l,r as C,x as E,e as p,F as _,l as g,f as m,n as b}from"./app-8fe746da.js";const y={props:["item"]},R={class:"col-sm-4"},S={class:"thumb2"},w={class:"thumbnail clearfix"},A=["href"],q=["src"],B={class:"caption"},M=a("div",{class:"txt1"},"REGISTERED 2023",-1),N={class:"txt2"},O=a("div",{class:"info clearfix"},[a("span",{class:"price"},"KES 18,995"),a("span",{class:"speed"},"52,000 KM")],-1),D={class:"txt3"};function I(v,t,e,s,d,r){return i(),c("div",R,[a("div",S,[a("div",w,[a("figure",null,[a("a",{href:v.route("car_select",{car:e.item.slug})},[a("img",{src:e.item.thumbnail,alt:"",class:"img-responsive",style:{"max-width":"270px","max-height":"150px","object-fit":"contain"}},null,8,q)],8,A)]),a("div",B,[M,a("div",N,l(e.item.car_brand.name+" "+e.item.car_model.name),1),O,a("div",D," Used • "+l(e.item.year)+" • Automatic • "+l(e.item.color)+" • Diesel ",1)])])])])}const $=o(y,[["render",I]]),V={props:["car_brand","getCarsByBrand"]};function T(v,t,e,s,d,r){return i(),c("a",{style:{cursor:"pointer"},onClick:t[0]||(t[0]=n=>e.getCarsByBrand(e.car_brand.id))},l(e.car_brand.name),1)}const U=o(V,[["render",T]]),k={props:["cars","car_brands"],components:{SingleCategoryCar:$,BrandList:U},setup(v){const t=C({car_list:[],loading:!1});return E(()=>{t.car_list=v.cars.data}),{state:t,getCarsByBrand:async(s=null)=>{try{t.loading=!0;const d=await axios.get(route("landing_page",{brand:s}));console.log(d),t.car_list=d.data.cars.data}catch(d){console.error("Error fetching cars by brand:",d)}setTimeout(()=>{t.loading=!1},1e3)}}}},L={id:"best",style:{"padding-top":"0"}},F={class:"container"},G=a("div",{class:"title1"},[a("span",null,"BEST OFFERS FROM COBBEN MOTORS")],-1),P={class:"tabs1"},Y=a("div",{class:"tabs1_tabs"},[a("ul",null,[a("li",{class:"active"})])],-1),H={class:"tabs1_content"},j={id:"tabs1-1"},K={class:"row"},W={class:"col-sm-12 col-md-9"},J={class:"row"},Q={key:0},z={class:"col-sm-12 col-md-3"},X={class:"ul1"};function Z(v,t,e,s,d,r){const n=p("SingleCategoryCar"),h=p("BrandList");return i(),c("div",L,[a("div",F,[G,a("div",P,[Y,a("div",H,[a("div",j,[a("div",K,[a("div",W,[a("div",J,[s.state.loading?(i(),c("div",Q," loading... ")):(i(!0),c(_,{key:1},g(s.state.car_list,(f,u)=>(i(),c("div",{key:u},[m(n,{item:f},null,8,["item"])]))),128))])]),a("div",z,[a("ul",X,[a("li",null,[a("a",{style:{cursor:"pointer"},onClick:t[0]||(t[0]=f=>s.getCarsByBrand())},"All manufacturers")]),(i(!0),c(_,null,g(e.car_brands,(f,u)=>(i(),c("li",{key:u},[m(h,{car_brand:f,getCarsByBrand:s.getCarsByBrand},null,8,["car_brand","getCarsByBrand"])]))),128))])])])])])])])])}const aa=o(k,[["render",Z]]);const ea={layout:x,components:{CategoryCar:aa},props:["cars","car_brands"]},ta=b('<div id="home" class="" data-v-9c68f7fe><div id="slides_wrapper" class="" data-v-9c68f7fe><div id="slides" data-v-9c68f7fe><ul class="slides-container" data-v-9c68f7fe><li class="nav1" data-v-9c68f7fe><img src="/customer/images/slide03.jpg" alt="" class="img" data-v-9c68f7fe><div class="caption" data-v-9c68f7fe><div class="container" data-v-9c68f7fe><div class="txt1" data-v-9c68f7fe><span data-v-9c68f7fe>FIND YOUR DREAM CAR</span></div><div class="txt2" data-v-9c68f7fe>CAR M5 GRAN TURISMO</div></div></div></li><li class="nav2" data-v-9c68f7fe><img src="/customer/images/slide04.jpg" alt="" class="img" data-v-9c68f7fe><div class="caption" data-v-9c68f7fe><div class="container" data-v-9c68f7fe><div class="txt1" data-v-9c68f7fe><span data-v-9c68f7fe>FIND YOUR DREAM CAR</span></div><div class="txt2" data-v-9c68f7fe> AUTO 330e iPERFORMANCE </div></div></div></li></ul><nav class="slides-navigation" data-v-9c68f7fe><a href="#" class="next" data-v-9c68f7fe></a><a href="#" class="prev" data-v-9c68f7fe></a></nav></div></div></div><div id="intro" data-v-9c68f7fe><div class="container" data-v-9c68f7fe><div class="booking-wrapper" data-v-9c68f7fe><div class="booking" data-v-9c68f7fe><form action="javascript:;" class="form1" data-v-9c68f7fe><div class="row" data-v-9c68f7fe><div class="col1" data-v-9c68f7fe><div class="select1_wrapper" data-v-9c68f7fe><label data-v-9c68f7fe>Manufacture</label><div class="select1_inner" data-v-9c68f7fe><select class="select2 select" style="width:100%;" data-v-9c68f7fe><option value="1" data-v-9c68f7fe> Any Make </option><option value="2" data-v-9c68f7fe> Agfa Toreno </option><option value="3" data-v-9c68f7fe> Astin Barton </option><option value="4" data-v-9c68f7fe>Avdi</option><option value="5" data-v-9c68f7fe> Bunesley </option><option value="6" data-v-9c68f7fe>BNQ</option><option value="7" data-v-9c68f7fe> Baratti </option></select></div><a href="#" class="more" data-v-9c68f7fe>MISSING MANUFACTURER?</a></div></div><div class="col1" data-v-9c68f7fe><div class="select1_wrapper" data-v-9c68f7fe><label data-v-9c68f7fe>Model</label><div class="select1_inner" data-v-9c68f7fe><select class="select2 select" style="width:100%;" data-v-9c68f7fe><option value="1" data-v-9c68f7fe> Any Model </option><option value="2" data-v-9c68f7fe> Model 1 </option><option value="3" data-v-9c68f7fe> Model 2 </option><option value="4" data-v-9c68f7fe> Model 3 </option><option value="5" data-v-9c68f7fe> Model 4 </option><option value="6" data-v-9c68f7fe> Model 5 </option><option value="7" data-v-9c68f7fe> Model 6 </option></select></div><a href="#" class="more" data-v-9c68f7fe>MISSING MODEL?</a></div></div><div class="col1" data-v-9c68f7fe><div class="select1_wrapper" data-v-9c68f7fe><label data-v-9c68f7fe>Status</label><div class="select1_inner" data-v-9c68f7fe><select class="select2 select" style="width:100%;" data-v-9c68f7fe><option value="1" data-v-9c68f7fe> Vehicle Status </option><option value="2" data-v-9c68f7fe> Status 1 </option><option value="3" data-v-9c68f7fe> Status 2 </option><option value="4" data-v-9c68f7fe> Status 3 </option><option value="5" data-v-9c68f7fe> Status 4 </option><option value="6" data-v-9c68f7fe> Status 5 </option><option value="7" data-v-9c68f7fe> Status 6 </option></select></div><a href="#" class="more" data-v-9c68f7fe>E.G: NEW, USED, CERTIFIED</a></div></div><div class="col1" data-v-9c68f7fe><div class="select1_wrapper" data-v-9c68f7fe><label data-v-9c68f7fe>Min Year</label><div class="select1_inner" data-v-9c68f7fe><select class="select2 select" style="width:100%;" data-v-9c68f7fe><option value="1" data-v-9c68f7fe> Min Year </option><option value="2" data-v-9c68f7fe>2018</option><option value="3" data-v-9c68f7fe>2017</option><option value="4" data-v-9c68f7fe>2016</option><option value="5" data-v-9c68f7fe>2015</option><option value="6" data-v-9c68f7fe>2014</option><option value="7" data-v-9c68f7fe>2013</option></select></div></div></div><div class="col1" data-v-9c68f7fe><div class="select1_wrapper" data-v-9c68f7fe><label data-v-9c68f7fe>Max Year</label><div class="select1_inner" data-v-9c68f7fe><select class="select2 select" style="width:100%;" data-v-9c68f7fe><option value="1" data-v-9c68f7fe> Max Year </option><option value="2" data-v-9c68f7fe>2018</option><option value="3" data-v-9c68f7fe>2017</option><option value="4" data-v-9c68f7fe>2016</option><option value="5" data-v-9c68f7fe>2015</option><option value="6" data-v-9c68f7fe>2014</option><option value="7" data-v-9c68f7fe>2013</option></select></div></div></div></div><div class="row" data-v-9c68f7fe><div class="col2" data-v-9c68f7fe><div id="slider-range-wrapper" data-v-9c68f7fe><div class="txt" data-v-9c68f7fe>PRICE RANGE</div><div id="slider-range" data-v-9c68f7fe></div><div class="clearfix" data-v-9c68f7fe><input type="text" id="amount" readonly data-v-9c68f7fe><input type="text" id="amount2" readonly data-v-9c68f7fe></div></div></div><div class="col3" data-v-9c68f7fe><button type="submit" class="btn-default btn-form1-submit1" data-v-9c68f7fe><span data-v-9c68f7fe>SEARCH THE VEHICLE</span></button></div></div></form></div></div></div></div>',2),sa=b('<div id="car" data-v-9c68f7fe><div class="container" data-v-9c68f7fe><div class="row" data-v-9c68f7fe><div class="col-lg-5 col-lg-offset-7" data-v-9c68f7fe><div class="car-inner" data-v-9c68f7fe><div class="txt1" data-v-9c68f7fe><span data-v-9c68f7fe>WORLD’S LEADING CAR DEALER</span></div><div class="txt2" data-v-9c68f7fe>WELCOME TO COBBEN MOTORS</div><div class="txt3" data-v-9c68f7fe><p data-v-9c68f7fe> Curabitur libero. Donec facilisis velit eudsl est. Phasellus consequat. Aenean vita quam. Vivamus et nunc. Nunc consequat sem velde metus imperdiet lacinia. Dui estter neque molestie necd dignissim ac hendrerit quis purus. Etiam sit amet vec convallis massa scelerisque mattis. Sed placerat leo nec. </p><p data-v-9c68f7fe> Ipsum midne ultrices magn eu tempor quam dolor eustrl sem. Donec quis dolel Donec pede quam placerat alterl tristique faucibus posuere lobortis. </p></div><ul class="ul2" data-v-9c68f7fe><li data-v-9c68f7fe><a href="#" data-v-9c68f7fe>Donec facilisis velit eu est phasellus consequat </a></li><li data-v-9c68f7fe><a href="#" data-v-9c68f7fe>Aenean vitae quam. Vivamus et nunc nunc consequat</a></li><li data-v-9c68f7fe><a href="#" data-v-9c68f7fe>Sem vel metus imperdiet lacinia enean </a></li><li data-v-9c68f7fe><a href="#" data-v-9c68f7fe>Dapibus aliquam augue fusce eleifend quisque tels</a></li></ul></div></div></div></div></div><div id="info" data-v-9c68f7fe><div class="info-wrapper" data-v-9c68f7fe><div class="container" data-v-9c68f7fe><div class="info-inner" data-v-9c68f7fe><div class="info1" data-v-9c68f7fe><div class="info1-inner animated" data-v-9c68f7fe><img src="/customer/images/ic1.png" alt="" class="img1" data-v-9c68f7fe><div class="caption" data-v-9c68f7fe><div class="txt1" data-v-9c68f7fe><span class="animated-number" data-duration="2000" data-animation-delay="0" data-v-9c68f7fe>1250</span></div><div class="txt2" data-v-9c68f7fe>NEW CARS IN STOCK</div></div></div></div><div class="info1" data-v-9c68f7fe><div class="info1-inner animated" data-v-9c68f7fe><img src="/customer/images/ic2.png" alt="" class="img1" data-v-9c68f7fe><div class="caption" data-v-9c68f7fe><div class="txt1" data-v-9c68f7fe><span class="animated-number" data-duration="2000" data-animation-delay="0" data-v-9c68f7fe>2120</span>+ </div><div class="txt2" data-v-9c68f7fe>USED CARS IN STOCK</div></div></div></div><div class="info1" data-v-9c68f7fe><div class="info1-inner animated" data-v-9c68f7fe><img src="/customer/images/ic3.png" alt="" class="img1" data-v-9c68f7fe><div class="caption" data-v-9c68f7fe><div class="txt1" data-v-9c68f7fe><span class="animated-number" data-duration="2000" data-animation-delay="0" data-v-9c68f7fe>9753</span></div><div class="txt2" data-v-9c68f7fe>HAPPY CUSTOMERS</div></div></div></div><div class="info1" data-v-9c68f7fe><div class="info1-inner animated" data-v-9c68f7fe><img src="/customer/images/ic4.png" alt="" class="img1" data-v-9c68f7fe><div class="caption" data-v-9c68f7fe><div class="txt1" data-v-9c68f7fe><span class="animated-number" data-duration="2000" data-animation-delay="0" data-v-9c68f7fe>1022</span></div><div class="txt2" data-v-9c68f7fe>CAR SPARE PARTS</div></div></div></div></div></div></div></div><div id="testimonials" data-v-9c68f7fe><div class="container" data-v-9c68f7fe><div class="row" data-v-9c68f7fe><div class="col-sm-10 col-sm-offset-1" data-v-9c68f7fe><div id="review" data-v-9c68f7fe><div class="" data-v-9c68f7fe><div class="carousel-box" data-v-9c68f7fe><div class="inner" data-v-9c68f7fe><div class="carousel main" data-v-9c68f7fe><ul data-v-9c68f7fe><li data-v-9c68f7fe><div class="review" data-v-9c68f7fe><div class="review_inner" data-v-9c68f7fe><div class="testimonial-wrapper" data-v-9c68f7fe><div class="txt1" data-v-9c68f7fe><b data-v-9c68f7fe>JOHN DOE,</b> Customer, BANGE RUVER DISCOVERY Owner </div><div class="txt2" data-v-9c68f7fe><div class="img-wrapper" data-v-9c68f7fe><img src="/customer/images/testimonial-author1.png" alt="" class="img-responsive" data-v-9c68f7fe></div></div><div class="txt3" data-v-9c68f7fe> Donec facilisis velit eust. Phasellus cons quat. Aenean vitae quam. Vivamus et nunc. Nunc consequsem velde metus imperdiet lacinia. Nam rutrum congue diam. Vestibulum acda risus eros auctor egestas. Morbids sem magna, viverra quis sollicitudin quis consectetuer quis nec magna. </div></div></div></div></li><li data-v-9c68f7fe><div class="review" data-v-9c68f7fe><div class="review_inner" data-v-9c68f7fe><div class="testimonial-wrapper" data-v-9c68f7fe><div class="txt1" data-v-9c68f7fe><b data-v-9c68f7fe>JOHN DOE,</b> Customer, BANGE RUVER DISCOVERY Owner </div><div class="txt2" data-v-9c68f7fe><div class="img-wrapper" data-v-9c68f7fe><img src="/customer/images/testimonial-author1.png" alt="" class="img-responsive" data-v-9c68f7fe></div></div><div class="txt3" data-v-9c68f7fe> Donec facilisis velit eust. Phasellus cons quat. Aenean vitae quam. Vivamus et nunc. Nunc consequsem velde metus imperdiet lacinia. Nam rutrum congue diam. Vestibulum acda risus eros auctor egestas. Morbids sem magna, viverra quis sollicitudin quis consectetuer quis nec magna. </div></div></div></div></li><li data-v-9c68f7fe><div class="review" data-v-9c68f7fe><div class="review_inner" data-v-9c68f7fe><div class="testimonial-wrapper" data-v-9c68f7fe><div class="txt1" data-v-9c68f7fe><b data-v-9c68f7fe>JOHN DOE,</b> Customer, BANGE RUVER DISCOVERY Owner </div><div class="txt2" data-v-9c68f7fe><div class="img-wrapper" data-v-9c68f7fe><img src="/customer/images/testimonial-author1.png" alt="" class="img-responsive" data-v-9c68f7fe></div></div><div class="txt3" data-v-9c68f7fe> Donec facilisis velit eust. Phasellus cons quat. Aenean vitae quam. Vivamus et nunc. Nunc consequsem velde metus imperdiet lacinia. Nam rutrum congue diam. Vestibulum acda risus eros auctor egestas. Morbids sem magna, viverra quis sollicitudin quis consectetuer quis nec magna. </div></div></div></div></li></ul></div></div></div></div><div class="review_pagination" data-v-9c68f7fe></div></div></div></div></div></div>',3);function ia(v,t,e,s,d,r){const n=p("CategoryCar");return i(),c("div",null,[ta,m(n,{cars:e.cars,car_brands:e.car_brands},null,8,["cars","car_brands"]),sa])}const va=o(ea,[["render",ia],["__scopeId","data-v-9c68f7fe"]]);export{va as default};
