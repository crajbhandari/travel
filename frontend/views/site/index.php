<?php $this->title = 'Welcome'; ?>
 <!--HEADER SECTION-->
<section>
   <div class = "tourz-search">
      <div class = "container">
         <div class = "row">
            <div class = "tourz-search-1">
               <h1>Plan Your Travel Now!</h1>
               <p>Experience the various exciting tour and travel packages and Make hotel reservations, find vacation packages, search cheap hotels and events</p>
               <form class = "tourz-search-form">
                  <div class = "input-field">
                     <input type = "text" id = "select-city" class = "autocomplete">
                     <label for = "select-city">Enter city</label>
                  </div>
                  <div class = "input-field">
                     <input type = "text" id = "select-search" class = "autocomplete">
                     <label for = "select-search" class = "search-hotel-type">Search over a million tour and travels, Sightseeings, hotels and more</label>
                  </div>
                  <div class = "input-field">
                     <input type = "submit" value = "search" class = "waves-effect waves-light tourz-sear-btn"></div>
               </form>
              <!--  <div class = "tourz-hom-ser d-none">
                  <ul>
                     <li>
                        <a href = "booking-tour-package.html" class = "waves-effect waves-light btn-large tourz-pop-ser-btn wow fadeInUp" data-wow-duration = "0.5s">  <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/icon/2.png" alt = ""/> Tour</a>
                     </li>
                     <li>
                        <a href = "booking-flight.html" class = "waves-effect waves-light btn-large tourz-pop-ser-btn wow fadeInUp" data-wow-duration = "1s"><img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/icon/31.png" alt = ""/>  Flight</a>
                     </li>
                     <li>
                        <a href = "booking-car-rentals.html" class = "waves-effect waves-light btn-large tourz-pop-ser-btn wow fadeInUp" data-wow-duration = "1.5s"><img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/icon/30.png" alt = ""/>  Car Rentals</a>
                     </li>
                     <li>
                        <a href = "booking-hotel.html" class = "waves-effect waves-light btn-large tourz-pop-ser-btn wow fadeInUp" data-wow-duration = "2s"><img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/icon/1.png" alt = ""/> 
                     </li>
                  </ul>
               </div> -->
            </div>
         </div>
      </div>
   </div>
</section>
<!--END HEADER SECTION-->


<section>
   <div class = "rows pad-bot-redu tb-space">
      <div class = "container">
         <!-- TITLE & DESCRIPTION -->
         <div class = "spe-title">
            <h2>Top <span>Tour Packages</span></h2>
            <div class = "title-line">
               <div class = "tl-1"></div>
               <div class = "tl-2"></div>
               <div class = "tl-3"></div>
            </div>
            <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide.</p>
         </div>
         <div>
           <!-- TOUR PLACE 1 -->
                    <div class="col-md-4 col-sm-6 col-xs-12 b_packages wow slideInUp" data-wow-duration="0.5s">
                        <!-- OFFER BRAND -->
                        <div class="band"> 
                             <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/band.png" alt = ""/>
                      
                         </div>
                        <!-- IMAGE -->
                        <div class="v_place_img"> 
                            <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/t5.png" alt="Tour Booking" title="Tour Booking"/>
                        
                            </div>
                        <!-- TOUR TITLE & ICONS -->
                        <div class="b_pack rows">
                            <!-- TOUR TITLE -->
                            <div class="col-md-8 col-sm-8">
                                <h4><a href="tour-details1.html">Rio de Janeiro<span class="v_pl_name">(Brazil)</span></a></h4>
                            </div>
                            <!-- TOUR ICONS -->
                            <div class="col-md-4 col-sm-4 pack_icon">
                                <ul>
                                    <li>
                                        <a href="#">
                                           <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/clock.png" alt="Date" title="Tour Timing"/>
                                         
                                           </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/info.png" alt="Details" title="View more details"/>
                                          
                                       </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                          <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/price.png" alt="Price" title="Price"/>
                                        
                                       </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                           <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/map.png" alt="Location" title="Location"/>
                                       </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
             <!-- TOUR PLACE 2 -->
                    <div class="col-md-4 col-sm-6 col-xs-12 b_packages wow fadeInUp" data-wow-duration="0.7s">
                        <!-- OFFER BRAND -->
                        <div class="band">  <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/band1.png" alt=""/> </div>
                        <!-- IMAGE -->
                        <div class="v_place_img"> <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/t1.png" alt="Tour Booking" title="Tour Booking"/> </div>
                        <!-- TOUR TITLE & ICONS -->
                        <div class="b_pack rows">
                            <!-- TOUR TITLE -->
                            <div class="col-md-8 col-sm-8">
                                <h4><a href="tour-details1.html">Paris<span class="v_pl_name">(England)</span></a></h4>
                            </div>
                            <!-- TOUR ICONS -->
                            <div class="col-md-4 col-sm-4 pack_icon">
                                    <ul>
                                    <li>
                                        <a href="#">
                                           <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/clock.png" alt="Date" title="Tour Timing"/>
                                         
                                           </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/info.png" alt="Details" title="View more details"/>
                                          
                                       </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                          <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/price.png" alt="Price" title="Price"/>
                                        
                                       </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                           <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/map.png" alt="Location" title="Location"/>
                                       </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- TOUR PLACE 3 -->
                    <div class="col-md-4 col-sm-6 col-xs-12 b_packages wow fadeInUp" data-wow-duration="0.9s">
                        <div class="v_place_img">  <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/t2.png" alt="Tour Booking" title="Tour Booking"/> </div>
                        <div class="b_pack rows">
                            <div class="col-md-8 col-sm-8">
                                <h4><a href="tour-details1.html">South India<span class="v_pl_name">(India)</span></a></h4>
                            </div>
                            <div class="col-md-4 col-sm-4 pack_icon">
                                <ul>
                                    <li>
                                        <a href="#">
                                           <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/clock.png" alt="Date" title="Tour Timing"/>
                                         
                                           </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/info.png" alt="Details" title="View more details"/>
                                          
                                       </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                          <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/price.png" alt="Price" title="Price"/>
                                        
                                       </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                           <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/map.png" alt="Location" title="Location"/>
                                       </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- TOUR PLACE 4 -->
                    <div class="col-md-4 col-sm-6 col-xs-12 b_packages wow fadeInUp" data-wow-duration="1.1s">
                        <div class="v_place_img">
                            <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/t3.png" alt="Tour Booking" title="Tour Booking"/> </div>
                        <div class="b_pack rows">
                            <div class="col-md-8 col-sm-8">
                                <h4><a href="tour-details1.html">The Great Wall<span class="v_pl_name">(China)</span></a></h4>
                            </div>
                            <div class="col-md-4 col-sm-4 pack_icon">
                                <ul>
                                    <li>
                                        <a href="#">
                                           <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/clock.png" alt="Date" title="Tour Timing"/>
                                         
                                           </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/info.png" alt="Details" title="View more details"/>
                                          
                                       </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                          <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/price.png" alt="Price" title="Price"/>
                                        
                                       </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                           <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/map.png" alt="Location" title="Location"/>
                                       </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- TOUR PLACE 5 -->
                    <div class="col-md-4 col-sm-6 col-xs-12 b_packages wow fadeInUp" data-wow-duration="1.3s">
                        <div class="v_place_img"> <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/t4.png" alt="Tour Booking" title="Tour Booking"/> </div>
                        <div class="b_pack rows">
                            <div class="col-md-8 col-sm-8">
                                <h4><a href="tour-details1.html">Nail Island<span class="v_pl_name">(Andaman)</span></a></h4>
                            </div>
                            <div class="col-md-4 col-sm-4 pack_icon">
                                <ul>
                                    <li>
                                        <a href="#">
                                           <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/clock.png" alt="Date" title="Tour Timing"/>
                                         
                                           </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/info.png" alt="Details" title="View more details"/>
                                          
                                       </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                          <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/price.png" alt="Price" title="Price"/>
                                        
                                       </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                           <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/map.png" alt="Location" title="Location"/>
                                       </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- TOUR PLACE 6 -->
                    <div class="col-md-4 col-sm-6 col-xs-12 b_packages wow fadeInUp" data-wow-duration="1.5s">
                        <div class="v_place_img"><img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/t6.png" alt="Tour Booking" title="Tour Booking"/> </div>
                        <div class="b_pack rows">
                            <div class="col-md-8 col-sm-8">
                                <h4><a href="tour-details1.html">Mauritius<span class="v_pl_name">(Indiana)</span></a></h4>
                            </div>
                            <div class="col-md-4 col-sm-4 pack_icon">
                                <ul>
                                    <li>
                                        <a href="#">
                                           <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/clock.png" alt="Date" title="Tour Timing"/>
                                         
                                           </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/info.png" alt="Details" title="View more details"/>
                                          
                                       </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                          <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/price.png" alt="Price" title="Price"/>
                                        
                                       </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                           <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/map.png" alt="Location" title="Location"/>
                                       </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
         </div>
      </div>
   </div>
</section>



<!--====== HOME HOTELS ==========-->
<section>
   <div class = "popular_destination_area tb-space pad-top-o pad-bot-redu">
      <div class = "container">
         <!-- TITLE & DESCRIPTION -->
         <div class = "spe-title">
            <h2>Popular <span>Cities</span></h2>
            <div class = "title-line">
               <div class = "tl-1"></div>
               <div class = "tl-2"></div>
               <div class = "tl-3"></div>
            </div>
            <p>World's leading Hotel Booking website,Over 30,000 Hotel rooms worldwide. Book Hotel rooms and enjoy your holidays with distinctive experience</p>
         </div>
         <!-- CITY -->
        <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4 ">
                        <div class="single_destination">
                            <div class="thumb">
                               <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/listing/home3.jpg" alt=""/>
                                
                            </div>
                            <div class="content">
                                <p class="d-flex align-items-center">Italy <a href="tour-details1.html"> 07 Places</a> </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="single_destination">
                            <div class="thumb">
                                <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/listing/home2.jpg" alt=""/>
                            </div>
                            <div class="content">
                                <p class="d-flex align-items-center">Brazil <a href="travel_destination.html"> 03 Places</a> </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="single_destination">
                            <div class="thumb">
                                <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/listing/home1.jpg" alt=""/>
                            </div>
                            <div class="content">
                                <p class="d-flex align-items-center">America <a href="tour-details1.html"> 10 Places</a> </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="single_destination">
                            <div class="thumb">
                                <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/listing/home4.jpg" alt=""/>
                            </div>
                            <div class="content">
                                <p class="d-flex align-items-center">Nepal <a href="tour-details1.html"> 02 Places</a> </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="single_destination">
                            <div class="thumb">
                                <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/listing/home2.jpg" alt=""/>
                            </div>
                            <div class="content">
                                <p class="d-flex align-items-center">Maldives <a href="tour-details1.html"> 02 Places</a> </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="single_destination">
                            <div class="thumb">
                                <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/listing/home4.jpg" alt=""/>
                            </div>
                            <div class="content">
                                <p class="d-flex align-items-center">Indonesia <a href="tour-details1.html"> 05 Places</a> </p>
                            </div>
                        </div>
                    </div>
                </div>
      </div>
   </div>
</section>
<!--====== HOME HOTELS ==========-->



  
 
   
    <!-- testimonial_area  -->
    <section>
        <div class="testimonial_area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="testmonial_active owl-carousel">
                            <div class="single_carousel">
                                <div class="row justify-content-center">
                                    <div class="">
                                        <div class="single_testmonial text-center">
                                            <div class="author_thumb">
                                              <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/testi_img.png" alt=""/>
                                                
                                            </div>
                                            <p>"Working in conjunction with humanitarian aid agencies, we have<br> supported programmes to help alleviate human suffering.</p>
                                            <div class="testmonial_author">
                                                <h3>- Micky Mouse</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single_carousel">
                                <div class="row justify-content-center">
                                    <div class="">
                                        <div class="single_testmonial text-center">
                                            <div class="author_thumb">
                                                <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/testi_img.png" alt=""/>
                                            </div>
                                            <p>"Working in conjunction with humanitarian aid agencies, we have <br> supported programmes to help alleviate human suffering.</p>
                                            <div class="testmonial_author">
                                                <h3>- Tom Mouse</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single_carousel">
                                <div class="row justify-content-center">
                                    <div class="">
                                        <div class="single_testmonial text-center">
                                            <div class="author_thumb">
                                                <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/testi_img.png" alt=""/>
                                            </div>
                                            <p>"Working in conjunction with humanitarian aid agencies, we have
                                                <br> supported programmes to help alleviate human suffering.</p>
                                            <div class="testmonial_author">
                                                <h3>- Jerry Mouse</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /testimonial_area  -->
    <section>
        <div class="container tb-space">
            <div class="spe-title">
                <h2>Our <span>Blog </span> </h2>
                <div class="title-line">
                    <div class="tl-1"></div>
                    <div class="tl-2"></div>
                    <div class="tl-3"></div>
                </div>
                <p>World's leading Hotel Booking website,Over 30,000 Hotel rooms worldwide. Book Hotel rooms and enjoy your holidays with distinctive experience</p>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="blog_item">
                        <div class="blog_item_img">
                            <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/t1.png" alt="Tour Booking" title="Tour Booking" class="img-fluid"/>
                            
                            <a href="#" class="blog_item_date">
                                <h3>15</h3>
                                <p>Jan</p>
                            </a>
                        </div>
                        <div class="blog_details">
                            <a class="d-inline-block" href="blog1.html">
                                <h3>Google inks pact for new 35-storey office</h3>
                            </a>
                            <p>That dominion stars lights dominion divide years for fourth have don't ...</p>
                            <ul class="blog-info-link">
                                <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                                <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="blog_item">
                        <div class="blog_item_img">
                             <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/t1.png" alt="Tour Booking" title="Tour Booking" class="img-fluid"/>
                            <a href="#" class="blog_item_date">
                                <h3>15</h3>
                                <p>Jan</p>
                            </a>
                        </div>
                        <div class="blog_details">
                            <a class="d-inline-block" href="blog1.html">
                                <h3>Google inks pact for new 35-storey office</h3>
                            </a>
                            <p>That dominion stars lights dominion divide years for fourth have don't ...</p>
                            <ul class="blog-info-link">
                                <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                                <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="blog_item">
                        <div class="blog_item_img">
                             <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/t1.png" alt="Tour Booking" title="Tour Booking" class="img-fluid"/>
                            <a href="#" class="blog_item_date">
                                <h3>15</h3>
                                <p>Jan</p>
                            </a>
                        </div>
                        <div class="blog_details">
                            <a class="d-inline-block" href="blog1.html">
                                <h3>Google inks pact for new 35-storey office</h3>
                            </a>
                            <p>That dominion stars lights dominion divide years for fourth have don't ...</p>
                            <ul class="blog-info-link">
                                <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                                <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== HOME HOTELS ==========-->

<!--====== SECTION: FREE CONSULTANT ==========-->
<section>
   <div class = "offer">
      <div class = "container">
         <div class = "row">
            <div class = "col-md-6">
               <div class = "offer-l"><span class = "ol-1"></span> <span class = "ol-2"><i class = "fa fa-star"></i><i class = "fa fa-star"></i><i class = "fa fa-star"></i><i class = "fa fa-star"></i><i class = "fa fa-star"></i></span> <span class = "ol-4">Standardized Budget Tour</span> <span class = "ol-3"></span> <span class = "ol-5">$900/-</span>
                  <ul>
                     <li class = "wow fadeInUp" data-wow-duration = "0.5s">
                        <a href = "#!" class = "waves-effect waves-light btn-large offer-btn"><img src = "images/icon/dis1.png" alt = "">
                        </a><span>Free Car Fair</span>
                     </li>
                     <li class = "wow fadeInUp" data-wow-duration = "0.7s">
                        <a href = "#!" class = "waves-effect waves-light btn-large offer-btn"><img src = "images/icon/dis2.png" alt = ""> </a><span>Breakfast</span>
                     </li>
                     <li class = "wow fadeInUp" data-wow-duration = "0.9s">
                        <a href = "#!" class = "waves-effect waves-light btn-large offer-btn"><img src = "images/icon/dis3.png" alt = ""> </a><span>Lunch</span>
                     </li>
                     <li class = "wow fadeInUp" data-wow-duration = "1.1s">
                        <a href = "#!" class = "waves-effect waves-light btn-large offer-btn"><img src = "images/icon/dis4.png" alt = ""> </a><span>Night Out</span>
                     </li>
                     <li class = "wow fadeInUp" data-wow-duration = "1.3s">
                        <a href = "#!" class = "waves-effect waves-light btn-large offer-btn"><img src = "images/icon/dis5.png" alt = ""> </a><span>Hotel</span>
                     </li>
                  </ul>
               </div>
            </div>
            <div class = "col-md-6">
               <div class = "offer-r">
                  <div class = "or-1"><span class = "or-11">go</span> <span class = "or-12">Stays</span></div>
                  <div class = "or-2"><span class = "or-21">Get</span> <span class = "or-22">70%</span> <span class = "or-23">Off</span> <span class = "or-24">use code: RG5481WERQ</span> <span class = "or-25"></span></div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>


    <section>
        <div class="rows tb-space  pad-bot-redu">
            <div class="container">
                <!-- TITLE & DESCRIPTION -->
                <div class="spe-title">
                    <h2>Luxury <span>Stay </span> </h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p>World's leading Hotel Booking website,Over 30,000 Hotel rooms worldwide. Book Hotel rooms and enjoy your holidays with distinctive experience</p>
                </div>
                <!-- HOTEL GRID -->
                <div class="to-ho-hotel">
                    <!-- HOTEL GRID -->
                    <div class="col-md-4">
                        <div class="to-ho-hotel-con">
                            <div class="to-ho-hotel-con-1">
                                <div class="hot-page2-hli-3"> <img src="images/hci1.png" alt=""> </div>
                              <!--   <div class="hom-hot-av-tic"> Available Tickets: 42 </div> -->  <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/hotels/1.jpg" alt=""/> 
                            </div>
                            <div class="to-ho-hotel-con-23">
                                <div class="to-ho-hotel-con-2">
                                    <a href="tour-details1.html">
                                        <h4>GTC Grand Chola</h4>
                                    </a>
                                </div>
                                <div class="to-ho-hotel-con-3">
                                    <ul>
                                        <li>City: illunois,united states
                                            <div class="dir-rat-star ho-hot-rat-star"> Rating: <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> </div>
                                        </li>
                                         <li><!-- <span class="ho-hot-pri-dis">$720</span><span class="ho-hot-pri">$420</span> --> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- HOTEL GRID -->
                    <div class="col-md-4">
                        <div class="to-ho-hotel-con">
                            <div class="to-ho-hotel-con-1">
                                <div class="hot-page2-hli-3"> <img src="images/hci1.png" alt=""> </div>
                               <!--  <div class="hom-hot-av-tic"> Available Tickets: 520 </div> --> <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/hotels/2.jpg" alt=""/> 
                            </div>
                            <div class="to-ho-hotel-con-23">
                                <div class="to-ho-hotel-con-2">
                                    <a href="tour-details1.html">
                                        <h4>Taaj Grand Resorts</h4>
                                    </a>
                                </div>
                                <div class="to-ho-hotel-con-3">
                                    <ul>
                                        <li>City: illunois,united states
                                            <div class="dir-rat-star ho-hot-rat-star"> Rating: <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> </div>
                                        </li>
                                          <li><!-- <span class="ho-hot-pri-dis">$840</span><span class="ho-hot-pri">$540</span>  --></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- HOTEL GRID -->
                    <div class="col-md-4">
                        <div class="to-ho-hotel-con">
                            <div class="to-ho-hotel-con-1">
                                <div class="hot-page2-hli-3"> <img src="images/hci1.png" alt=""> </div>
                                <!-- <div class="hom-hot-av-tic"> Available Tickets: 92 </div> --> <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/hotels/3.jpg" alt=""/> 
                            </div>
                            <div class="to-ho-hotel-con-23">
                                <div class="to-ho-hotel-con-2">
                                    <a href="tour-details1.html">
                                        <h4>Keep Grand Hotels</h4>
                                    </a>
                                </div>
                                <div class="to-ho-hotel-con-3">
                                    <ul>
                                        <li>City: illunois,united states
                                            <div class="dir-rat-star ho-hot-rat-star"> Rating: <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> </div>
                                        </li>
                                         <li><!-- <span class="ho-hot-pri-dis">$680</span><span class="ho-hot-pri">$380</span> --> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
   