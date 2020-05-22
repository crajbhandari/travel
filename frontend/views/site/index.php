<?php $this->title = 'Welcome'; 
$this->registerJsFile(Yii::$app->request->baseUrl . '/resources/js/message.js');
$this->registerJsFile(Yii::$app->request->baseUrl . '/common/assets/js/jquery.validate.min.js');

?>

<!--HEADER SECTION-->
<section>
   <?php foreach ($banners as $banner): if($banner['alt_text']!= '' && $banner['alt_text'] == 'home'):
   ?>
   <div class = "tourz-search" style="background: url('<?= Yii::$app->request->baseUrl.'/common/assets/images/banners/'.$banner['image']; ?>'); background-size: cover;" >
       <?php
   endif;
       endforeach;?>
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
            <div class = "col-md-4 col-sm-6 col-xs-12 b_packages wow slideInUp" data-wow-duration = "0.5s">
               <!-- OFFER BRAND -->
               <div class = "band">
                  <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/band.png" alt = ""/>
               </div>

               <!-- IMAGE -->
               <div class = "v_place_img">
                  <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/t5.png" alt = "Tour Booking" title = "Tour Booking"/>

               </div>
               <!-- TOUR TITLE & ICONS -->
               <div class = "b_pack rows">
                  <!-- TOUR TITLE -->
                  <div class = "col-md-8 col-sm-8">
                  <h4><a href = "<?= Yii::$app->request->baseUrl ?>/package">Rio de Janeiro<span class = "v_pl_name">(Brazil)</span></a></h4>
                  </div>
                  <!-- TOUR ICONS -->
                  <div class = "col-md-4 col-sm-4 pack_icon">
                     <ul>
                        <li>
                           <a href = "#">
                              <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/clock.png" alt = "Date" title = "Tour Timing"/>

                           </a>
                        </li>
                        <li>
                           <a href = "#">
                              <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/info.png" alt = "Details" title = "View more details"/>

                           </a>
                        </li>
                        <li>
                           <a href = "#">
                              <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/price.png" alt = "Price" title = "Price"/>

                           </a>
                        </li>
                        <li>
                           <a href = "#">
                              <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/map.png" alt = "Location" title = "Location"/>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>

            </div>
            <!-- TOUR PLACE 2 -->
            <div class = "col-md-4 col-sm-6 col-xs-12 b_packages wow fadeInUp" data-wow-duration = "0.7s">
               <!-- OFFER BRAND -->
               <div class = "band"><img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/band1.png" alt = ""/></div>
               <!-- IMAGE -->
               <div class = "v_place_img"><img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/t1.png" alt = "Tour Booking" title = "Tour Booking"/></div>
               <!-- TOUR TITLE & ICONS -->
               <div class = "b_pack rows">
                  <!-- TOUR TITLE -->
                  <div class = "col-md-8 col-sm-8">
                     <h4><a href = "<?= Yii::$app->request->baseUrl ?>/package">Paris<span class = "v_pl_name">(England)</span></a></h4>
                  </div>
                  <!-- TOUR ICONS -->
                  <div class = "col-md-4 col-sm-4 pack_icon">
                     <ul>
                        <li>
                           <a href = "#">
                              <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/clock.png" alt = "Date" title = "Tour Timing"/>

                           </a>
                        </li>
                        <li>
                           <a href = "#">
                              <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/info.png" alt = "Details" title = "View more details"/>

                           </a>
                        </li>
                        <li>
                           <a href = "#">
                              <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/price.png" alt = "Price" title = "Price"/>

                           </a>
                        </li>
                        <li>
                           <a href = "#">
                              <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/map.png" alt = "Location" title = "Location"/>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <!-- TOUR PLACE 3 -->
            <div class = "col-md-4 col-sm-6 col-xs-12 b_packages wow fadeInUp" data-wow-duration = "0.9s">
               <div class = "v_place_img"><img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/t2.png" alt = "Tour Booking" title = "Tour Booking"/></div>
               <div class = "b_pack rows">
                  <div class = "col-md-8 col-sm-8">
                     <h4><a href = "<?= Yii::$app->request->baseUrl ?>/package">South India<span class = "v_pl_name">(India)</span></a></h4>
                  </div>
                  <div class = "col-md-4 col-sm-4 pack_icon">
                     <ul>
                        <li>
                           <a href = "#">
                              <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/clock.png" alt = "Date" title = "Tour Timing"/>

                           </a>
                        </li>
                        <li>
                           <a href = "#">
                              <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/info.png" alt = "Details" title = "View more details"/>

                           </a>
                        </li>
                        <li>
                           <a href = "#">
                              <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/price.png" alt = "Price" title = "Price"/>

                           </a>
                        </li>
                        <li>
                           <a href = "#">
                              <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/map.png" alt = "Location" title = "Location"/>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <!-- TOUR PLACE 4 -->
            <div class = "col-md-4 col-sm-6 col-xs-12 b_packages wow fadeInUp" data-wow-duration = "1.1s">
               <div class = "v_place_img">
                  <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/t3.png" alt = "Tour Booking" title = "Tour Booking"/></div>
               <div class = "b_pack rows">
                  <div class = "col-md-8 col-sm-8">
                     <h4><a href = "<?= Yii::$app->request->baseUrl ?>/package">The Great Wall<span class = "v_pl_name">(China)</span></a></h4>
                  </div>
                  <div class = "col-md-4 col-sm-4 pack_icon">
                     <ul>
                        <li>
                           <a href = "#">
                              <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/clock.png" alt = "Date" title = "Tour Timing"/>

                           </a>
                        </li>
                        <li>
                           <a href = "#">
                              <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/info.png" alt = "Details" title = "View more details"/>

                           </a>
                        </li>
                        <li>
                           <a href = "#">
                              <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/price.png" alt = "Price" title = "Price"/>

                           </a>
                        </li>
                        <li>
                           <a href = "#">
                              <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/map.png" alt = "Location" title = "Location"/>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <!-- TOUR PLACE 5 -->
            <div class = "col-md-4 col-sm-6 col-xs-12 b_packages wow fadeInUp" data-wow-duration = "1.3s">
               <div class = "v_place_img"><img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/t4.png" alt = "Tour Booking" title = "Tour Booking"/></div>
               <div class = "b_pack rows">
                  <div class = "col-md-8 col-sm-8">
                     <h4><a href = "<?= Yii::$app->request->baseUrl ?>/package">Nail Island<span class = "v_pl_name">(Andaman)</span></a></h4>
                  </div>
                  <div class = "col-md-4 col-sm-4 pack_icon">
                     <ul>
                        <li>
                           <a href = "#">
                              <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/clock.png" alt = "Date" title = "Tour Timing"/>

                           </a>
                        </li>
                        <li>
                           <a href = "#">
                              <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/info.png" alt = "Details" title = "View more details"/>

                           </a>
                        </li>
                        <li>
                           <a href = "#">
                              <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/price.png" alt = "Price" title = "Price"/>

                           </a>
                        </li>
                        <li>
                           <a href = "#">
                              <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/map.png" alt = "Location" title = "Location"/>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <!-- TOUR PLACE 6 -->
            <div class = "col-md-4 col-sm-6 col-xs-12 b_packages wow fadeInUp" data-wow-duration = "1.5s">
               <div class = "v_place_img"><img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/t6.png" alt = "Tour Booking" title = "Tour Booking"/></div>
               <div class = "b_pack rows">
                  <div class = "col-md-8 col-sm-8">
                     <h4><a href = "<?= Yii::$app->request->baseUrl ?>/package">Mauritius<span class = "v_pl_name">(Indiana)</span></a></h4>
                  </div>
                  <div class = "col-md-4 col-sm-4 pack_icon">
                     <ul>
                        <li>
                           <a href = "#">
                              <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/clock.png" alt = "Date" title = "Tour Timing"/>

                           </a>
                        </li>
                        <li>
                           <a href = "#">
                              <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/info.png" alt = "Details" title = "View more details"/>

                           </a>
                        </li>
                        <li>
                           <a href = "#">
                              <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/price.png" alt = "Price" title = "Price"/>

                           </a>
                        </li>
                        <li>
                           <a href = "#">
                              <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/map.png" alt = "Location" title = "Location"/>
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


<section >
   <div class = "rows tb-space pad-top-o pad-bot-redu">
      <div class = "container">
         <!-- TITLE & DESCRIPTION -->
         <div class = "spe-title">
            <h2>Popular <span>Destination</span></h2>
            <div class = "title-line">
               <div class = "tl-1"></div>
               <div class = "tl-2"></div>
               <div class = "tl-3"></div>
            </div>
            <p>World's leading Hotel Booking website,Over 30,000 Hotel rooms worldwide. Book Hotel rooms and enjoy your holidays with distinctive experience</p>
         </div>
         <!-- CITY -->
         <div class = "col-md-6">
            <a href = "#">
               <div class = "tour-mig-like-com">
                  <div class = "tour-mig-lc-img">
                     <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/listing/home.jpg" alt = ""/></div>
                  <div class = "tour-mig-lc-con">
                     <h5>Europe</h5>
                     <p><span>12 Packages</span> Starting from $2400</p>
                  </div>
               </div>
            </a>
         </div>
         <div class = "col-md-3">
            <a href = "#">
               <div class = "tour-mig-like-com">
                  <div class = "tour-mig-lc-img"><img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/listing/home3.jpg" alt = ""/></div>
                  <div class = "tour-mig-lc-con tour-mig-lc-con2">
                     <h5>Dubai</h5>
                     <p>Starting from $2400</p>
                  </div>
               </div>
            </a>
         </div>
         <div class = "col-md-3">
            <a href = "#">
               <div class = "tour-mig-like-com">
                  <div class = "tour-mig-lc-img"><img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/listing/home2.jpg" alt = ""/></div>
                  <div class = "tour-mig-lc-con tour-mig-lc-con2">
                     <h5>India</h5>
                     <p>Starting from $2400</p>
                  </div>
               </div>
            </a>
         </div>
         <div class = "col-md-3">
            <a href = "#">
               <div class = "tour-mig-like-com">
                  <div class = "tour-mig-lc-img"><img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/listing/home1.jpg" alt = ""/></div>
                  <div class = "tour-mig-lc-con tour-mig-lc-con2">
                     <h5>Usa</h5>
                     <p>Starting from $2400</p>
                  </div>
               </div>
            </a>
         </div>
         <div class = "col-md-3">
            <a href = "#">
               <div class = "tour-mig-like-com">
                  <div class = "tour-mig-lc-img"><img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/listing/home4.jpg" alt = ""/></div>
                  <div class = "tour-mig-lc-con tour-mig-lc-con2">
                     <h5>London</h5>
                     <p>Starting from $2400</p>
                  </div>
               </div>
            </a>
         </div>
      </div>
   </div>
</section>


<!--====== HOME HOTELS ==========-->
<!-- <section>
   <div class = "popular_destination_area tb-space pad-top-o pad-bot-redu">
      <div class = "container">
      
         <div class = "spe-title">
            <h2>Popular <span>Cities</span></h2>
            <div class = "title-line">
               <div class = "tl-1"></div>
               <div class = "tl-2"></div>
               <div class = "tl-3"></div>
            </div>
            <p>World's leading Hotel Booking website,Over 30,000 Hotel rooms worldwide. Book Hotel rooms and enjoy your holidays with distinctive experience</p>
         </div>
       
        <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4 ">
                        <div class="single_destination">
                            <div class="thumb">
                               <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/listing/home3.jpg" alt=""/>
                                
                            </div>
                            <div class="content">
                                <p class="d-flex align-items-center">Italy <a href="<?= Yii::$app->request->baseUrl ?>/package"> 07 Places</a> </p>
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
                                <p class="d-flex align-items-center">America <a href="<?= Yii::$app->request->baseUrl ?>/package"> 10 Places</a> </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="single_destination">
                            <div class="thumb">
                                <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/listing/home4.jpg" alt=""/>
                            </div>
                            <div class="content">
                                <p class="d-flex align-items-center">Nepal <a href="<?= Yii::$app->request->baseUrl ?>/package"> 02 Places</a> </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="single_destination">
                            <div class="thumb">
                                <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/listing/home2.jpg" alt=""/>
                            </div>
                            <div class="content">
                                <p class="d-flex align-items-center">Maldives <a href="<?= Yii::$app->request->baseUrl ?>/package"> 02 Places</a> </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="single_destination">
                            <div class="thumb">
                                <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/listing/home4.jpg" alt=""/>
                            </div>
                            <div class="content">
                                <p class="d-flex align-items-center">Indonesia <a href="<?= Yii::$app->request->baseUrl ?>/package"> 05 Places</a> </p>
                            </div>
                        </div>
                    </div>
                </div>
      </div>
   </div>
</section> -->
<!--====== HOME HOTELS ==========-->

<section class="stay-luxury" >
   <div class = "rows tb-space pad-top-o  pad-bot-redu">
      <div class = "container">
         <!-- TITLE & DESCRIPTION -->
         <div class = "spe-title">
            <h2>Luxury <span>Stay </span></h2>
            <div class = "title-line">
               <div class = "tl-1"></div>
               <div class = "tl-2"></div>
               <div class = "tl-3"></div>
            </div>
            <p>World's leading Hotel Booking website,Over 30,000 Hotel rooms worldwide. Book Hotel rooms and enjoy your holidays with distinctive experience</p>
         </div>
         <!-- HOTEL GRID -->
         <div class = "to-ho-hotel">
            <!-- HOTEL GRID -->
            <div class = "col-md-4">
               <div class = "to-ho-hotel-con">
                  <div class = "to-ho-hotel-con-1">
                     <div class = "hot-page2-hli-3"><img src = "images/hci1.png" alt = ""></div>
                     <!--   <div class="hom-hot-av-tic"> Available Tickets: 42 </div> --> <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/hotels/1.jpg" alt = ""/>
                  </div>
                  <div class = "to-ho-hotel-con-23">
                     <div class = "to-ho-hotel-con-2">
                        <a href = "<?= Yii::$app->request->baseUrl ?>/package">
                           <h4>GTC Grand Chola</h4>
                        </a>
                     </div>
                     <div class = "to-ho-hotel-con-3">
                        <ul>
                           <li>City: illunois,united states
                              <div class = "dir-rat-star ho-hot-rat-star"> Rating:
                                 <i class = "fa fa-star" aria-hidden = "true"></i><i class = "fa fa-star" aria-hidden = "true"></i><i class = "fa fa-star" aria-hidden = "true"></i><i class = "fa fa-star" aria-hidden = "true"></i><i class = "fa fa-star-o" aria-hidden = "true"></i></div>
                           </li>
                           <li><!-- <span class="ho-hot-pri-dis">$720</span><span class="ho-hot-pri">$420</span> --> </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <!-- HOTEL GRID -->
            <div class = "col-md-4">
               <div class = "to-ho-hotel-con">
                  <div class = "to-ho-hotel-con-1">
                     <div class = "hot-page2-hli-3"><img src = "images/hci1.png" alt = ""></div>
                     <!--  <div class="hom-hot-av-tic"> Available Tickets: 520 </div> --> <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/hotels/2.jpg" alt = ""/>
                  </div>
                  <div class = "to-ho-hotel-con-23">
                     <div class = "to-ho-hotel-con-2">
                        <a href = "<?= Yii::$app->request->baseUrl ?>/package">
                           <h4>Taaj Grand Resorts</h4>
                        </a>
                     </div>
                     <div class = "to-ho-hotel-con-3">
                        <ul>
                           <li>City: illunois,united states
                              <div class = "dir-rat-star ho-hot-rat-star"> Rating:
                                 <i class = "fa fa-star" aria-hidden = "true"></i><i class = "fa fa-star" aria-hidden = "true"></i><i class = "fa fa-star" aria-hidden = "true"></i><i class = "fa fa-star" aria-hidden = "true"></i><i class = "fa fa-star-o" aria-hidden = "true"></i></div>
                           </li>
                           <li><!-- <span class="ho-hot-pri-dis">$840</span><span class="ho-hot-pri">$540</span>  --></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <!-- HOTEL GRID -->
            <div class = "col-md-4">
               <div class = "to-ho-hotel-con">
                  <div class = "to-ho-hotel-con-1">
                     <div class = "hot-page2-hli-3"><img src = "images/hci1.png" alt = ""></div>
                     <!-- <div class="hom-hot-av-tic"> Available Tickets: 92 </div> --> <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/hotels/3.jpg" alt = ""/>
                  </div>
                  <div class = "to-ho-hotel-con-23">
                     <div class = "to-ho-hotel-con-2">
                        <a href = "<?= Yii::$app->request->baseUrl ?>/package">
                           <h4>Keep Grand Hotels</h4>
                        </a>
                     </div>
                     <div class = "to-ho-hotel-con-3">
                        <ul>
                           <li>City: illunois,united states
                              <div class = "dir-rat-star ho-hot-rat-star"> Rating:
                                 <i class = "fa fa-star" aria-hidden = "true"></i><i class = "fa fa-star" aria-hidden = "true"></i><i class = "fa fa-star" aria-hidden = "true"></i><i class = "fa fa-star" aria-hidden = "true"></i><i class = "fa fa-star-o" aria-hidden = "true"></i></div>
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


<!-- testimonial_area  -->
<section>
   <div class = "testimonial_area">
      <div class = "container">
         <div class = "row">
            <div class = "col-xl-12">
                <?php if (!empty($testimonials) && count($testimonials) > 0):?>
               <div class = "testmonial_active owl-carousel">

                    <?php  foreach ($testimonials as $post) :?>
                  <div class = "single_carousel">
                     <div class = "row justify-content-center">
                        <div class = "">
                           <div class = "single_testmonial text-center">
                              <div class = "author_thumb">
                                 <img src = "<?php echo Yii::$app->request->baseUrl; ?>/common/assets/images/uploads/<?= $post['image'] ?>" alt = "<?php echo (isset($post['title'])) ? trim($post['title']) : '' ?>"/>
                              </div>
                              <p><?php echo (isset($post['content'])) ? ucwords(trim($post['content'])) : '' ?>
                              </p>
                              <div class = "testmonial_author">
                                 <h3><?php echo (isset($post['position'])) ? ucwords(trim($post['position'])) : '' ?></h3>
                                <!--  <a href="">View All</a> -->
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

                   <?php endforeach; ?>

               </div>
               <div class="testimonial-all" >
                   <a href="<?php echo Yii::$app->request->baseUrl .'/site/testimonials/'?>">View All</a>
               </div>
                <?php endif; ?>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- /testimonial_area  -->

<!--====== POPULAR TOUR PLACES ==========-->
<section>
   <div class = "rows pad-bot-redu tb-space">
      <div class = "pla1 p-home container">
         <!-- TITLE & DESCRIPTION -->
         <div class = "spe-title spe-title-1">
            <h2>Top <span>Sightseeing</span> this month</h2>
            <div class = "title-line">
               <div class = "tl-1"></div>
               <div class = "tl-2"></div>
               <div class = "tl-3"></div>
            </div>
            <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide. Book travel packages and enjoy your holidays with distinctive experience</p>
         </div>
         <div class = "popu-places-home">
            <!-- POPULAR PLACES 1 -->
            <div class = "col-md-6 col-sm-6 col-xs-12 place">
               <div class = "col-md-6 col-sm-12 col-xs-12"><img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/place2.jpg" alt = ""/></div>
               <div class = "col-md-6 col-sm-12 col-xs-12">
                  <h3>Honeymoon Package<span>7 Days / 6 Nights</span></h3>
                  <p>lorem ipsum simplelorem ipsum simplelorem ipsum simplelorem ipsum simple</p>
                  <a href = "#" class = "link-btn">more info</a></div>
            </div>
            <!-- POPULAR PLACES 2 -->
            <div class = "col-md-6 col-sm-6 col-xs-12 place">
               <div class = "col-md-6 col-sm-12 col-xs-12"><img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/place1.jpg" alt = ""/></div>
               <div class = "col-md-6 col-sm-12 col-xs-12">
                  <h3>Family package <span>14 Days / 13 Nights</span></h3>
                  <p>lorem ipsum simplelorem ipsum simplelorem ipsum simplelorem ipsum simple</p>
                  <a href = "#" class = "link-btn">more info</a></div>
            </div>
         </div>
         <div class = "popu-places-home">
            <!-- POPULAR PLACES 3 -->
            <div class = "col-md-6 col-sm-6 col-xs-12 place">
               <div class = "col-md-6 col-sm-12 col-xs-12"><img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/place3.jpg" alt = ""/></div>
               <div class = "col-md-6 col-sm-12 col-xs-12">
                  <h3>Weekend Package 3 <span>Days / 2 Nights</span></h3>
                  <p>lorem ipsum simplelorem ipsum simplelorem ipsum simplelorem ipsum simple</p>
                  <a href = "#" class = "link-btn">more info</a></div>
            </div>
            <!-- POPULAR PLACES 4 -->
            <div class = "col-md-6 col-sm-6 col-xs-12 place">
               <div class = "col-md-6 col-sm-12 col-xs-12"><img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/place4.jpg" alt = ""/></div>
               <div class = "col-md-6 col-sm-12 col-xs-12">
                  <h3>Group Package <span>10 Days / 9 Nights</span></h3>
                  <p>lorem ipsum simplelorem ipsum simplelorem ipsum simplelorem ipsum simple</p>
                  <a href = "#" class = "link-btn">more info</a></div>
            </div>
         </div>
      </div>
   </div>
</section>


<section>
   <div class = "ho-popu  tb-space  pad-top-o pad-bot-redu">
      <div class = "rows container">
         <!-- TITLE & DESCRIPTION -->
         <div class = "spe-title">
            <h2><span>Events & Activities</span> for this month</h2>
            <div class = "title-line">
               <div class = "tl-1"></div>
               <div class = "tl-2"></div>
               <div class = "tl-3"></div>
            </div>
            <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide. Book travel packages and enjoy your holidays with distinctive experience</p>
         </div>
         <div class = "ho-popu-bod">
            <div class = "col-md-4">
               <div class = "hot-page2-hom-pre-head">
                  <h4>Cultural<span> Tourism</span></h4>
               </div>
               <div class = "hot-page2-hom-pre">
                  <ul>
                     <!--LISTINGS-->
                     <li>
                        <a href = "#">
                           <div class = "hot-page2-hom-pre-1"><img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/hotels/1.jpg" alt = ""/></div>
                           <div class = "hot-page2-hom-pre-2">
                              <h5>Taaj Club House</h5> <span>City: illunois, United States</span></div>
                           <div class = "hot-page2-hom-pre-3"><span>4.5</span></div>
                        </a>
                     </li>
                     <!--LISTINGS-->
                     <li>
                        <a href = "#">
                           <div class = "hot-page2-hom-pre-1"><img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/hotels/2.jpg" alt = ""/></div>
                           <div class = "hot-page2-hom-pre-2">
                              <h5>Universal luxury Grand Hotel</h5> <span>City: Rio,Brazil</span></div>
                           <div class = "hot-page2-hom-pre-3"><span>4.2</span></div>
                        </a>
                     </li>
                     <!--LISTINGS-->
                     <li>
                        <a href = "#">
                           <div class = "hot-page2-hom-pre-1"><img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/hotels/3.jpg" alt = ""/></div>
                           <div class = "hot-page2-hom-pre-2">
                              <h5>Barcelona Grand Pales</h5> <span>City: Chennai,India</span></div>
                           <div class = "hot-page2-hom-pre-3"><span>5.0</span></div>
                        </a>
                     </li>
                     <!--LISTINGS-->
                     <li>
                        <a href = "#">
                           <div class = "hot-page2-hom-pre-1"><img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/hotels/4.jpg" alt = ""/></div>
                           <div class = "hot-page2-hom-pre-2">
                              <h5>Lake Palace view Hotel</h5> <span>City: Beijing,China</span></div>
                           <div class = "hot-page2-hom-pre-3"><span>2.5</span></div>
                        </a>
                     </li>
                     <!--LISTINGS-->
                     <li>
                        <a href = "#">
                           <div class = "hot-page2-hom-pre-1"><img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/hotels/8.jpg" alt = ""/></div>
                           <div class = "hot-page2-hom-pre-2">
                              <h5>First Class Grandd Hotel</h5> <span>City: Berlin,Germany</span></div>
                           <div class = "hot-page2-hom-pre-3"><span>4.0</span></div>
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
            <div class = "col-md-4">
               <div class = "hot-page2-hom-pre-head">
                  <h4>Top Branding <span>Packages</span></h4>
               </div>
               <div class = "hot-page2-hom-pre">
                  <ul>
                     <!--LISTINGS-->
                     <li>
                        <a href = "#">
                           <div class = "hot-page2-hom-pre-1"><img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/trends/1.jpg" alt = ""/></div>
                           <div class = "hot-page2-hom-pre-2">
                              <h5>Family Package Luxury</h5> <span>Duration: 7 Days and 6 Nights</span></div>
                           <div class = "hot-page2-hom-pre-3"><span>4.1</span></div>
                        </a>
                     </li>
                     <!--LISTINGS-->
                     <li>
                        <a href = "#">
                           <div class = "hot-page2-hom-pre-1"><img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/trends/2.jpg" alt = ""/></div>
                           <div class = "hot-page2-hom-pre-2">
                              <h5>Honeymoon Package Luxury</h5> <span>Duration: 14 Days and 13 Nights</span></div>
                           <div class = "hot-page2-hom-pre-3"><span>4.4</span></div>
                        </a>
                     </li>
                     <!--LISTINGS-->
                     <li>
                        <a href = "#">
                           <div class = "hot-page2-hom-pre-1"><img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/trends/2.jpg" alt = ""/></div>
                           <div class = "hot-page2-hom-pre-2">
                              <h5>Group Package Luxury</h5> <span>Duration: 28 Days and 29 Nights</span></div>
                           <div class = "hot-page2-hom-pre-3"><span>3.0</span></div>
                        </a>
                     </li>
                     <!--LISTINGS-->
                     <li>
                        <a href = "#">
                           <div class = "hot-page2-hom-pre-1"><img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/trends/4.jpg" alt = ""/></div>
                           <div class = "hot-page2-hom-pre-2">
                              <h5>Regular Package Luxury</h5> <span>Duration: 12 Days and 11 Nights</span></div>
                           <div class = "hot-page2-hom-pre-3"><span>3.5</span></div>
                        </a>
                     </li>
                     <!--LISTINGS-->
                     <li>
                        <a href = "#">
                           <div class = "hot-page2-hom-pre-1"><img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/trends/1.jpg" alt = ""/></div>
                           <div class = "hot-page2-hom-pre-2">
                              <h5>Custom Package Luxury</h5> <span>Duration: 10 Days and 10 Nights</span></div>
                           <div class = "hot-page2-hom-pre-3"><span>5.0</span></div>
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
            <div class = "col-md-4">
               <div class = "hot-page2-hom-pre-head">
                  <h4>Top Branding <span>Reviewers</span></h4>
               </div>
               <div class = "hot-page2-hom-pre">
                  <ul>
                     <!--LISTINGS-->
                     <li>
                        <a href = "#">
                           <div class = "hot-page2-hom-pre-1"><img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/reviewer/1.jpg" alt = ""/></div>
                           <div class = "hot-page2-hom-pre-2">
                              <h5>Christopher</h5> <span>No of Reviews: 620, City: illunois</span></div>
                           <div class = "hot-page2-hom-pre-3"><i class = "fa fa-hand-o-right" aria-hidden = "true"></i></div>
                        </a>
                     </li>
                     <!--LISTINGS-->
                     <li>
                        <a href = "#">
                           <div class = "hot-page2-hom-pre-1"><img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/reviewer/2.png" alt = ""/></div>
                           <div class = "hot-page2-hom-pre-2">
                              <h5>Matthew</h5> <span>No of Reviews: 48, City: Rio</span></div>
                           <div class = "hot-page2-hom-pre-3"><i class = "fa fa-hand-o-right" aria-hidden = "true"></i></div>
                        </a>
                     </li>
                     <!--LISTINGS-->
                     <li>
                        <a href = "#">
                           <div class = "hot-page2-hom-pre-1"><img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/reviewer/3.jpg" alt = ""/></div>
                           <div class = "hot-page2-hom-pre-2">
                              <h5>Stephanie</h5> <span>No of Reviews: 560, City: Chennai</span></div>
                           <div class = "hot-page2-hom-pre-3"><i class = "fa fa-hand-o-right" aria-hidden = "true"></i></div>
                        </a>
                     </li>
                     <!--LISTINGS-->
                     <li>
                        <a href = "#">
                           <div class = "hot-page2-hom-pre-1"><img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/reviewer/4.jpg" alt = ""/></div>
                           <div class = "hot-page2-hom-pre-2">
                              <h5>Robert</h5> <span>No of Reviews: 920, City: Beijing</span></div>
                           <div class = "hot-page2-hom-pre-3"><i class = "fa fa-hand-o-right" aria-hidden = "true"></i></div>
                        </a>
                     </li>
                     <!--LISTINGS-->
                     <li>
                        <a href = "#">
                           <div class = "hot-page2-hom-pre-1"><img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/reviewer/5.jpg" alt = ""/></div>
                           <div class = "hot-page2-hom-pre-2">
                              <h5>Danielle</h5> <span>No of Reviews: 768, City: Berlin</span></div>
                           <div class = "hot-page2-hom-pre-3"><i class = "fa fa-hand-o-right" aria-hidden = "true"></i></div>
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>


<section>
   <div class = "ho-popu  tb-space  pad-top-o pad-bot-redu">


      <div class = "container">
         <div class = "spe-title">
            <h2>Our <span>Blog </span></h2>
            <div class = "title-line">
               <div class = "tl-1"></div>
               <div class = "tl-2"></div>
               <div class = "tl-3"></div>
            </div>
            <p>World's leading Hotel Booking website,Over 30,000 Hotel rooms worldwide. Book Hotel rooms and enjoy your holidays with distinctive experience</p>
         </div>
         <div class = "row">
             <?php foreach ($blogs as $blog): ?>
            <div class = "col-sm-12 col-md-4 col-lg-4 blog-001">
               <div class = "blog_item">
                  <div class = "blog_item_img">
                     <img src = "<?php echo Yii::$app->request->baseUrl; ?>/common/assets/images/uploads/<?= (isset($blog['image']) & $blog['image']!= '' ? $blog['image'] : 'no-image.png' )?>" alt = "Tour Booking" title = "Tour Booking" class = "img-fluid"/>

                     <a href = "#" class = "blog_item_date">

                        <?php 
                      $timestamp=\common\components\Misc::dm($blog['date']);
                        ?>
                        <h3><?= $timestamp[0];?></h3>
                        <p><?= $timestamp[1]; ?></p>

            </a>
                  </div>
                  <div class = "blog_details">
                     <a href = "<?=  Yii::$app->request->baseUrl; ?>/blog/post/<?php echo \common\components\Misc::encrypt($blog['id']); ?> ">
                        <h3><?= strtoupper($blog['title']);?></h3>
                     </a>
                     <p><?=
              substr($blog['content'],0,95).'...';
                      ?><p>
                     <ul class = "blog-info-link">
                        <li><i class = "fa fa-list"></i> <?= $blog['category'] ?></li>
                        <li><i class = "fa fa-user"></i> <?= $blog['author'] ?></li>
                </ul>
                  </div>
               </div>
            </div>
             <?php endforeach; ?>
         </div>

      </div>
   </div>
</section>

<section>
   <div class = "form tb-space  pad-top-o pad-bot-o">
      <div class = "rows container">
         <div class = "spe-title">
            <h2>Lets Say <span>Hello</span> Now!</h2>
            <div class = "title-line">
               <div class = "tl-1"></div>
               <div class = "tl-2"></div>
               <div class = "tl-3"></div>
            </div>
            <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide. Book travel packages and enjoy your holidays with distinctive experience</p>
         </div>
         <div class = "col-md-6 col-sm-6 col-xs-12 form_1">
            <div class = "succ_mess">Thank you for contacting us we will get back to you soon.</div>
            <form id = "home_form" name = "home_form" method="post">
               <ul >
                  <li>
                     <input type = "text" name = "ename" value = "" id = "ename" placeholder = "Name" required>
                  </li>
                  <li>
                     <input type = "tel" name = "ephone" value = "" id = "emobile" placeholder = "Mobile" required>
                  </li>
                  <li>
                     <input type = "email" name = "eemail" value = "" id = "eemail" placeholder = "Email id" required>
                  </li>
                  <li>
                     <input type = "text" name = "esubject" value = "" id = "esubject" placeholder = "Subject" required>
                  </li>
                  <li>
                     <input type = "text" name = "ecity" value = "" id = "ecity" placeholder = "City" required>
                  </li>
                  <li>
                     <input type = "text" name = "ecountry" value = "" id = "ecountry" placeholder = "Country" required>
                  </li>
                  <li class="text-01" >
                     <textarea name = "emessage" cols = "40" rows = "3" id = "text-comment" placeholder = "Enter your message" style="height: 120px; width: 100%;" required></textarea>
                  </li>
                  <li>
                     <a class = "btn btn-default btn-block send">Submit</a>
                  </li>
               </ul>
            </form>
         </div>
         <div class = "col-md-6 col-sm-6 col-xs-12 family">
            <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/family.png" alt = ""/>

         </div>
      </div>
   </div>
</section>
<!--====== SECTION: FREE CONSULTANT ==========-->



   
   
   