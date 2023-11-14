<template>
  <div id="main">
    <div class="top0">
      <div class="container">
        <div class="block-left">
          <div class="address1">
            <span aria-hidden="true" class="ei icon_pin"></span>WESTLANDS NAIROBI KENYA
          </div>
          <div class="phone1">
            <span aria-hidden="true" class="ei icon_phone"></span>0700.....
          </div>
          <div class="social_wrapper">
            <ul class="social clearfix">
              <li>
                <a href="#"><i class="fa fa-facebook"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-twitter"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-google-plus"></i></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="block-right">
          <div class="signin1">
            <a :href="route('adminLogin')">SIGN IN</a>
          </div>
          <!-- <div class="register1"><a href="#">REGISTER</a></div> -->
        </div>
      </div>
    </div>

    <div id="top1">
      <div class="top2_wrapper" id="top2">
        <div class="container">
          <div class="top2 clearfix">
            <header>
              <div class="logo_wrapper">
                COBBEN MOTORS
                <!-- <a href="index.html" class="logo scroll-to">
                                    <img
                                        src="/customer/images/logo.png"
                                        alt=""
                                        class="img-responsive"
                                    />
                                </a> -->
              </div>
            </header>

            <div class="navbar navbar_ navbar-default">
              <button
                type="button"
                class="navbar-toggle collapsed"
                data-toggle="collapse"
                data-target=".navbar-collapse"
              >
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <div class="navbar-collapse navbar-collapse_ collapse">
                <ul class="nav navbar-nav sf-menu clearfix">
                  <li><a :href="route('landing_page')">HOME</a></li>
                  <li><a :href="route('our_cars')">OUR CARS</a></li>
                  <li><a href="#welcome">About</a></li>
                  <li><a href="#best">Best offers</a></li>
                  <li>
                    <a href="#testimonials">Testimonial</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="top3-wrapper">
      <div class="container">
        <div class="top3 clearfix">
          <div class="tabs-wrapper">
            <div class="txt">SELECT VIEW</div>
            <div class="tabs1-wrapper">
              <ul class="tabs clearfix" data-tabgroup="first-tab-group">
                <li class="active">
                  <a href="#tabs2-1"><i class="fa fa-list"></i></a>
                </li>
                <li>
                  <a href="#tabs2-2"><i class="fa fa-th"></i></a>
                </li>
              </ul>
            </div>
          </div>

          <div class="sort-wrapper">
            <div class="txt">sort by</div>
            <div class="select1_wrapper">
              <label>Sort</label>
              <div class="select1_inner">
                <select class="select2 select" style="width: 100%">
                  <option value="1">Last Added</option>
                  <option value="2">Popular</option>
                  <option value="3">Price</option>
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="breadcrumbs1_wrapper">
      <div class="container">
        <div class="breadcrumbs1">
          <a href="index.html">Home</a><span></span>Search Results
        </div>
      </div>
    </div>

    <div id="content">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-3 col-md-pull-3-l column-sidebar">
            <div class="sidebar-form-wrapper">
              <div class="sidebar-form">
                <form action="javascript:;" class="form2">
                  <div class="select1_wrapper">
                    <label>SELECT A MANUFACTURER</label>
                    <div class="select1_inner">
                      <select class="select2 select" style="width: 100%">
                        <option value="1">Any Make</option>
                        <option value="2">Car Brand 1</option>
                        <option value="3">Car Brand 2</option>
                        <option value="4">Car Brand 3</option>
                        <option value="5">Car Brand 4</option>
                        <option value="6">Car Brand 5</option>
                        <option value="7">Car Brand 6</option>
                      </select>
                    </div>
                  </div>

                  <div class="select1_wrapper">
                    <label>SELECT A MODEL</label>
                    <div class="select1_inner">
                      <select class="select2 select" style="width: 100%">
                        <option value="1">Any Model</option>
                        <option value="2">Car Model 1</option>
                        <option value="3">Car Model 2</option>
                        <option value="4">Car Model 3</option>
                        <option value="5">Car Model 4</option>
                        <option value="6">Car Model 5</option>
                        <option value="7">Car Model 6</option>
                      </select>
                    </div>
                  </div>

                  <div class="select1_wrapper">
                    <label>SELECT A TYPE</label>
                    <div class="select1_inner">
                      <select class="select2 select" style="width: 100%">
                        <option value="1">Any Type</option>
                        <option value="2">Type 1</option>
                        <option value="3">Type 2</option>
                        <option value="4">Type 3</option>
                        <option value="5">Type 4</option>
                        <option value="6">Type 5</option>
                        <option value="7">Type 6</option>
                      </select>
                    </div>
                  </div>

                  <div class="select1_wrapper">
                    <label>SELECT A STATUS</label>
                    <div class="select1_inner">
                      <select class="select2 select" style="width: 100%">
                        <option value="1">Any Status</option>
                        <option value="2">Status 1</option>
                        <option value="3">Status 2</option>
                        <option value="4">Status 3</option>
                        <option value="5">Status 4</option>
                        <option value="6">Status 5</option>
                        <option value="7">Status 6</option>
                      </select>
                    </div>
                  </div>

                  <div class="select1_wrapper">
                    <label>SELECT A MIN YEAR</label>
                    <div class="select1_inner">
                      <select class="select2 select" style="width: 100%">
                        <option value="1">Min Year</option>
                        <option value="2">2018</option>
                        <option value="3">2017</option>
                        <option value="4">2016</option>
                        <option value="5">2015</option>
                        <option value="6">2014</option>
                        <option value="7">2013</option>
                      </select>
                    </div>
                  </div>

                  <div class="select1_wrapper">
                    <label>SELECT A MAX YEAR</label>
                    <div class="select1_inner">
                      <select class="select2 select" style="width: 100%">
                        <option value="1">Max Year</option>
                        <option value="2">2018</option>
                        <option value="3">2017</option>
                        <option value="4">2016</option>
                        <option value="5">2015</option>
                        <option value="6">2014</option>
                        <option value="7">2013</option>
                      </select>
                    </div>
                  </div>

                  <div id="slider-range-wrapper">
                    <div class="txt">PRICE RANGE</div>

                    <div id="slider-range"></div>

                    <div class="clearfix">
                      <input type="text" id="amount" readonly />
                      <input type="text" id="amount2" readonly />
                    </div>
                  </div>

                  <button type="submit" class="btn-default btn-form2-submit">
                    SUBMIT FILTERS
                  </button>

                  <div class="reset-filters">
                    <a href="#">RESET ALL FILTERS</a>
                  </div>
                </form>
              </div>
            </div>

            <!-- <div class="banner">
                            <figure>
                                <img
                                    src="/customer/images/banner.jpg"
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
          <div class="col-sm-12 col-md-9 col-md-push-9-l column-content">
            <div id="first-tab-group" class="tabgroup">
              <div id="tabs2-1">
                <div class="car-view1-wrapper">
                  <div class="car-view1 clearfix">
                    <figure>
                      <img
                        src="/customer/images/car1-view1.jpg"
                        alt=""
                        class="img-responsive"
                      />
                    </figure>
                    <div class="caption">
                      <div class="top-info clearfix">
                        <div class="info1">
                          <div class="txt1">Vehicle Name S Coupe</div>
                          <div class="txt2">
                            <span class="txt">FIRST DRIVE REVIEW</span>
                            <span class="stars">
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star-o" aria-hidden="true"></i>
                            </span>
                          </div>
                        </div>
                        <div class="info2">
                          <div class="txt3">$99,415</div>
                        </div>
                      </div>
                      <div class="txt4">
                        In a pickup market gone fancy, the Silverado sticks to its
                        basic-truck recipe. The nuico steering is accurate, and the
                        Silverado handles more like a big car than a big truck, la and the
                        Silverado handles more like a big car than a big truck and the
                        Silverado duoe handles more like a big car than a big truck.
                      </div>
                      <div class="bot-info clearfix">
                        <div class="info3">
                          <div class="txt5">0 kM</div>
                          <div class="txt6">
                            Registered 2017&nbsp; /&nbsp; New&nbsp; /&nbsp; 8-Speed
                            Automatic&nbsp; /&nbsp; Petrol
                          </div>
                        </div>
                        <div class="info4">
                          <div class="txt7">
                            <a href="details.html" class="btn-default btn3"
                              >VIEW DETAILS</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="car-view1-wrapper">
                  <div class="car-view1 clearfix">
                    <figure>
                      <img
                        src="/customer/images/car2-view1.jpg"
                        alt=""
                        class="img-responsive"
                      />
                    </figure>
                    <div class="caption">
                      <div class="top-info clearfix">
                        <div class="info1">
                          <div class="txt1">Vehicle Name Discovery</div>
                          <div class="txt2">
                            <span class="txt">FIRST DRIVE REVIEW</span>
                            <span class="stars">
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star-half-o" aria-hidden="true"></i>
                              <i class="fa fa-star-o" aria-hidden="true"></i>
                            </span>
                          </div>
                        </div>
                        <div class="info2">
                          <div class="txt3">$209,415</div>
                        </div>
                      </div>
                      <div class="txt4">
                        In a pickup market gone fancy, the Silverado sticks to its
                        basic-truck recipe. The nuico steering is accurate, and the
                        Silverado handles more like a big car than a big truck, la and the
                        Silverado handles more like a big car than a big truck and the
                        Silverado duoe handles more like a big car than a big truck.
                      </div>
                      <div class="bot-info clearfix">
                        <div class="info3">
                          <div class="txt5">60,560 kM</div>
                          <div class="txt6">
                            Registered 2017&nbsp; /&nbsp; Used&nbsp; /&nbsp; 8-Speed
                            Automatic&nbsp; /&nbsp; Petrol
                          </div>
                        </div>
                        <div class="info4">
                          <div class="txt7">
                            <a href="details.html" class="btn-default btn3"
                              >VIEW DETAILS</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="car-view1-wrapper">
                  <div class="car-view1 clearfix">
                    <figure>
                      <img
                        src="/customer/images/car3-view1.jpg"
                        alt=""
                        class="img-responsive"
                      />
                    </figure>
                    <div class="caption">
                      <div class="top-info clearfix">
                        <div class="info1">
                          <div class="txt1">Vehicle Name C220</div>
                          <div class="txt2">
                            <span class="txt">FIRST DRIVE REVIEW</span>
                            <span class="stars">
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star-o" aria-hidden="true"></i>
                            </span>
                          </div>
                        </div>
                        <div class="info2">
                          <div class="txt3">$99,415</div>
                        </div>
                      </div>
                      <div class="txt4">
                        In a pickup market gone fancy, the Silverado sticks to its
                        basic-truck recipe. The nuico steering is accurate, and the
                        Silverado handles more like a big car than a big truck, la and the
                        Silverado handles more like a big car than a big truck and the
                        Silverado duoe handles more like a big car than a big truck.
                      </div>
                      <div class="bot-info clearfix">
                        <div class="info3">
                          <div class="txt5">0 kM</div>
                          <div class="txt6">
                            Registered 2017&nbsp; /&nbsp; New&nbsp; /&nbsp; 8-Speed
                            Automatic&nbsp; /&nbsp; Petrol
                          </div>
                        </div>
                        <div class="info4">
                          <div class="txt7">
                            <a href="details.html" class="btn-default btn3"
                              >VIEW DETAILS</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="car-view1-wrapper">
                  <div class="car-view1 clearfix">
                    <figure>
                      <img
                        src="/customer/images/car4-view1.jpg"
                        alt=""
                        class="img-responsive"
                      />
                    </figure>
                    <div class="caption">
                      <div class="top-info clearfix">
                        <div class="info1">
                          <div class="txt1">Vehicle Name GLC</div>
                          <div class="txt2">
                            <span class="txt">FIRST DRIVE REVIEW</span>
                            <span class="stars">
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star-o" aria-hidden="true"></i>
                            </span>
                          </div>
                        </div>
                        <div class="info2">
                          <div class="txt3">$99,415</div>
                        </div>
                      </div>
                      <div class="txt4">
                        In a pickup market gone fancy, the Silverado sticks to its
                        basic-truck recipe. The nuico steering is accurate, and the
                        Silverado handles more like a big car than a big truck, la and the
                        Silverado handles more like a big car than a big truck and the
                        Silverado duoe handles more like a big car than a big truck.
                      </div>
                      <div class="bot-info clearfix">
                        <div class="info3">
                          <div class="txt5">0 kM</div>
                          <div class="txt6">
                            Registered 2017&nbsp; /&nbsp; New&nbsp; /&nbsp; 8-Speed
                            Automatic&nbsp; /&nbsp; Petrol
                          </div>
                        </div>
                        <div class="info4">
                          <div class="txt7">
                            <a href="details.html" class="btn-default btn3"
                              >VIEW DETAILS</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="car-view1-wrapper">
                  <div class="car-view1 clearfix">
                    <figure>
                      <img
                        src="/customer/images/car5-view1.jpg"
                        alt=""
                        class="img-responsive"
                      />
                    </figure>
                    <div class="caption">
                      <div class="top-info clearfix">
                        <div class="info1">
                          <div class="txt1">Vehicle Name TT</div>
                          <div class="txt2">
                            <span class="txt">FIRST DRIVE REVIEW</span>
                            <span class="stars">
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star-o" aria-hidden="true"></i>
                            </span>
                          </div>
                        </div>
                        <div class="info2">
                          <div class="txt3">$99,415</div>
                        </div>
                      </div>
                      <div class="txt4">
                        In a pickup market gone fancy, the Silverado sticks to its
                        basic-truck recipe. The nuico steering is accurate, and the
                        Silverado handles more like a big car than a big truck, la and the
                        Silverado handles more like a big car than a big truck and the
                        Silverado duoe handles more like a big car than a big truck.
                      </div>
                      <div class="bot-info clearfix">
                        <div class="info3">
                          <div class="txt5">0 kM</div>
                          <div class="txt6">
                            Registered 2017&nbsp; /&nbsp; New&nbsp; /&nbsp; 8-Speed
                            Automatic&nbsp; /&nbsp; Petrol
                          </div>
                        </div>
                        <div class="info4">
                          <div class="txt7">
                            <a href="details.html" class="btn-default btn3"
                              >VIEW DETAILS</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="car-view1-wrapper">
                  <div class="car-view1 clearfix">
                    <figure>
                      <img
                        src="/customer/images/car6-view1.jpg"
                        alt=""
                        class="img-responsive"
                      />
                    </figure>
                    <div class="caption">
                      <div class="top-info clearfix">
                        <div class="info1">
                          <div class="txt1">Vehicle (Model - 2013)</div>
                          <div class="txt2">
                            <span class="txt">FIRST DRIVE REVIEW</span>
                            <span class="stars">
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star-o" aria-hidden="true"></i>
                            </span>
                          </div>
                        </div>
                        <div class="info2">
                          <div class="txt3">$99,415</div>
                        </div>
                      </div>
                      <div class="txt4">
                        In a pickup market gone fancy, the Silverado sticks to its
                        basic-truck recipe. The nuico steering is accurate, and the
                        Silverado handles more like a big car than a big truck, la and the
                        Silverado handles more like a big car than a big truck and the
                        Silverado duoe handles more like a big car than a big truck.
                      </div>
                      <div class="bot-info clearfix">
                        <div class="info3">
                          <div class="txt5">0 kM</div>
                          <div class="txt6">
                            Registered 2017&nbsp; /&nbsp; New&nbsp; /&nbsp; 8-Speed
                            Automatic&nbsp; /&nbsp; Petrol
                          </div>
                        </div>
                        <div class="info4">
                          <div class="txt7">
                            <a href="details.html" class="btn-default btn3"
                              >VIEW DETAILS</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="pager_wrapper">
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
                </div>
              </div>
              <div id="tabs2-2">
                <div class="row">
                  <div class="col-sm-4">
                    <div class="car-view2-wrapper">
                      <div class="car-view2 clearfix">
                        <figure>
                          <img
                            src="/customer/images/car1-view2.jpg"
                            alt=""
                            class="img-responsive"
                          />
                        </figure>
                        <div class="caption">
                          <div class="top-info clearfix">
                            <div class="info1">
                              <div class="txt1">Vehicle Name S Coupe</div>
                              <div class="txt2">
                                <span class="txt">FIRST DRIVE REVIEW</span>
                                <span class="stars">
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star-o" aria-hidden="true"></i>
                                </span>
                              </div>
                            </div>
                          </div>
                          <div class="txt3">
                            In a pickup market gone fancy, the Silverado sticks to its
                            basic-truck recipe. The steering is accurate ...
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
                                <a href="details.html" class="btn-default btn3"
                                  >VIEW DETAILS</a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-4">
                    <div class="car-view2-wrapper">
                      <div class="car-view2 clearfix">
                        <figure>
                          <img
                            src="/customer/images/car2-view2.jpg"
                            alt=""
                            class="img-responsive"
                          />
                        </figure>
                        <div class="caption">
                          <div class="top-info clearfix">
                            <div class="info1">
                              <div class="txt1">Vehicle Name Discovery</div>
                              <div class="txt2">
                                <span class="txt">FIRST DRIVE REVIEW</span>
                                <span class="stars">
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star-o" aria-hidden="true"></i>
                                </span>
                              </div>
                            </div>
                          </div>
                          <div class="txt3">
                            In a pickup market gone fancy, the Silverado sticks to its
                            basic-truck recipe. The steering is accurate ...
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
                                <a href="details.html" class="btn-default btn3"
                                  >VIEW DETAILS</a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-4">
                    <div class="car-view2-wrapper">
                      <div class="car-view2 clearfix">
                        <figure>
                          <img
                            src="/customer/images/car3-view2.jpg"
                            alt=""
                            class="img-responsive"
                          />
                        </figure>
                        <div class="caption">
                          <div class="top-info clearfix">
                            <div class="info1">
                              <div class="txt1">Vehicle Name C220</div>
                              <div class="txt2">
                                <span class="txt">FIRST DRIVE REVIEW</span>
                                <span class="stars">
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star-o" aria-hidden="true"></i>
                                </span>
                              </div>
                            </div>
                          </div>
                          <div class="txt3">
                            In a pickup market gone fancy, the Silverado sticks to its
                            basic-truck recipe. The steering is accurate ...
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
                                <a href="details.html" class="btn-default btn3"
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
                <div class="row">
                  <div class="col-sm-4">
                    <div class="car-view2-wrapper">
                      <div class="car-view2 clearfix">
                        <figure>
                          <img
                            src="/customer/images/car4-view2.jpg"
                            alt=""
                            class="img-responsive"
                          />
                        </figure>
                        <div class="caption">
                          <div class="top-info clearfix">
                            <div class="info1">
                              <div class="txt1">Vehicle Name GLC</div>
                              <div class="txt2">
                                <span class="txt">FIRST DRIVE REVIEW</span>
                                <span class="stars">
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star-o" aria-hidden="true"></i>
                                </span>
                              </div>
                            </div>
                          </div>
                          <div class="txt3">
                            In a pickup market gone fancy, the Silverado sticks to its
                            basic-truck recipe. The steering is accurate ...
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
                                <a href="details.html" class="btn-default btn3"
                                  >VIEW DETAILS</a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-4">
                    <div class="car-view2-wrapper">
                      <div class="car-view2 clearfix">
                        <figure>
                          <img
                            src="/customer/images/car5-view2.jpg"
                            alt=""
                            class="img-responsive"
                          />
                        </figure>
                        <div class="caption">
                          <div class="top-info clearfix">
                            <div class="info1">
                              <div class="txt1">Vehicle Name TT</div>
                              <div class="txt2">
                                <span class="txt">FIRST DRIVE REVIEW</span>
                                <span class="stars">
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star-o" aria-hidden="true"></i>
                                </span>
                              </div>
                            </div>
                          </div>
                          <div class="txt3">
                            In a pickup market gone fancy, the Silverado sticks to its
                            basic-truck recipe. The steering is accurate ...
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
                                <a href="details.html" class="btn-default btn3"
                                  >VIEW DETAILS</a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-4">
                    <div class="car-view2-wrapper">
                      <div class="car-view2 clearfix">
                        <figure>
                          <img
                            src="/customer/images/car6-view2.jpg"
                            alt=""
                            class="img-responsive"
                          />
                        </figure>
                        <div class="caption">
                          <div class="top-info clearfix">
                            <div class="info1">
                              <div class="txt1">Vehicle (Model 2013)</div>
                              <div class="txt2">
                                <span class="txt">FIRST DRIVE REVIEW</span>
                                <span class="stars">
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star-o" aria-hidden="true"></i>
                                </span>
                              </div>
                            </div>
                          </div>
                          <div class="txt3">
                            In a pickup market gone fancy, the Silverado sticks to its
                            basic-truck recipe. The steering is accurate ...
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
                                <a href="details.html" class="btn-default btn3"
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
                <div class="row">
                  <div class="col-sm-4">
                    <div class="car-view2-wrapper">
                      <div class="car-view2 clearfix">
                        <figure>
                          <img
                            src="/customer/images/car7-view2.jpg"
                            alt=""
                            class="img-responsive"
                          />
                        </figure>
                        <div class="caption">
                          <div class="top-info clearfix">
                            <div class="info1">
                              <div class="txt1">Vehicle Name Golf</div>
                              <div class="txt2">
                                <span class="txt">FIRST DRIVE REVIEW</span>
                                <span class="stars">
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star-o" aria-hidden="true"></i>
                                </span>
                              </div>
                            </div>
                          </div>
                          <div class="txt3">
                            In a pickup market gone fancy, the Silverado sticks to its
                            basic-truck recipe. The steering is accurate ...
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
                                <a href="details.html" class="btn-default btn3"
                                  >VIEW DETAILS</a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-4">
                    <div class="car-view2-wrapper">
                      <div class="car-view2 clearfix">
                        <figure>
                          <img
                            src="/customer/images/car8-view2.jpg"
                            alt=""
                            class="img-responsive"
                          />
                        </figure>
                        <div class="caption">
                          <div class="top-info clearfix">
                            <div class="info1">
                              <div class="txt1">Vehicle Name Vectra</div>
                              <div class="txt2">
                                <span class="txt">FIRST DRIVE REVIEW</span>
                                <span class="stars">
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star-o" aria-hidden="true"></i>
                                </span>
                              </div>
                            </div>
                          </div>
                          <div class="txt3">
                            In a pickup market gone fancy, the Silverado sticks to its
                            basic-truck recipe. The steering is accurate ...
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
                                <a href="details.html" class="btn-default btn3"
                                  >VIEW DETAILS</a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-4">
                    <div class="car-view2-wrapper">
                      <div class="car-view2 clearfix">
                        <figure>
                          <img
                            src="/customer/images/car9-view2.jpg"
                            alt=""
                            class="img-responsive"
                          />
                        </figure>
                        <div class="caption">
                          <div class="top-info clearfix">
                            <div class="info1">
                              <div class="txt1">Vehicle Name Avouqe</div>
                              <div class="txt2">
                                <span class="txt">FIRST DRIVE REVIEW</span>
                                <span class="stars">
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                  <i class="fa fa-star-o" aria-hidden="true"></i>
                                </span>
                              </div>
                            </div>
                          </div>
                          <div class="txt3">
                            In a pickup market gone fancy, the Silverado sticks to its
                            basic-truck recipe. The steering is accurate ...
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
                                <a href="details.html" class="btn-default btn3"
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

                <div class="pager_wrapper">
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
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="bot2-wrapper">
      <div class="container">
        <div class="bot2 clearfix">
          <div class="right-block">
            <div class="social2_wrapper">
              <ul class="social2 clearfix">
                <li>
                  <a href="#"
                    ><span aria-hidden="true" class="ei social_facebook_square"></span
                  ></a>
                </li>
                <li>
                  <a href="#"
                    ><span aria-hidden="true" class="ei social_twitter_square"></span
                  ></a>
                </li>
                <li>
                  <a href="#"
                    ><span aria-hidden="true" class="ei social_pinterest_square"></span
                  ></a>
                </li>
                <li>
                  <a href="#"
                    ><span aria-hidden="true" class="ei social_googleplus_square"></span
                  ></a>
                </li>
                <li>
                  <a href="#"
                    ><span aria-hidden="true" class="ei social_youtube_square"></span
                  ></a>
                </li>
                <li>
                  <a href="#"
                    ><span aria-hidden="true" class="ei social_skype_square"></span
                  ></a>
                </li>
              </ul>
            </div>
            <div class="menu2_wrapper">
              <ul class="menu2 clearfix">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
          </div>
          <!-- <div class="left-block">
                        <div class="logo2_wrapper">
                            <a href="index.html" class="logo2">
                                <img
                                    src="/customer/images/logo2.png"
                                    alt=""
                                    class="img-responsive"
                                />
                            </a>
                        </div>
                        <div class="copyrights">
                            &copy; 2017 Designed &amp; Powered by Mecovache
                        </div>
                    </div> -->
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import { reactive, onMounted } from "vue";
import { useForm, Link } from "@inertiajs/vue3";

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

<style scoped>
.logo_wrapper {
    font-size: x-large;
    font-weight: 700;
    color: #48ba7e;
    padding-top: 8px;
}
</style>
