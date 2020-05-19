<?php

/* @var $this \yii\web\View */

/* @var $content string */

use frontend\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
$fonts = (Yii::$app->params['site-settings']['fonts']['content'] != '') ? json_decode(Yii::$app->params['site-settings']['fonts']['content'], true) : [];

?>
<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang = "<?= Yii::$app->language ?>">
<head>
   <meta charset = "<?= Yii::$app->charset ?>">
   <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
   <meta name = "viewport" content = "width=device-width, initial-scale=1,maximum-scale=1.0,user-scalable=no">
    <?php $this->registerCsrfMetaTags() ?>
   <title><?php echo Yii::$app->params['system_name'] ?> - <?= Html::encode($this->title) ?></title>
   <link rel = "shortcut icon" href = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/fav.png">
    <?php if (true == false && isset($fonts) && !empty($fonts)) : ?>
       <link href = "<?= 'https://fonts.googleapis.com/css?family=' . $fonts['main']['name'] . ':' . $fonts['main']['weight']; ?>" rel = "stylesheet">
    <?php endif; ?>
   <link href = "https://fonts.googleapis.com/css?family='Open Sans:400,600' " rel = "stylesheet">


   <!-- FONT-AWESOME ICON CSS -->
   <link rel = "stylesheet" href = "<?php echo Yii::$app->request->baseUrl; ?>/resources/css/font-awesome.min.css">
   <!--== ALL CSS FILES ==-->
   <link rel = "stylesheet" href = "<?php echo Yii::$app->request->baseUrl; ?>/resources/css/style.css">
   <link rel = "stylesheet" href = "<?php echo Yii::$app->request->baseUrl; ?>/resources/css/materialize.css">
   <link rel = "stylesheet" href = "<?php echo Yii::$app->request->baseUrl; ?>/resources/css/bootstrap.css">
   <link rel = "stylesheet" href = "<?php echo Yii::$app->request->baseUrl; ?>/resources/css/mob.css">
   <link rel = "stylesheet" href = "<?php echo Yii::$app->request->baseUrl; ?>/resources/css/animate.css">
   <link rel = "stylesheet" href = "<?php echo Yii::$app->request->baseUrl; ?>/resources/css/owl.carousel.min.css">

   <link rel = "stylesheet" href = "<?php echo Yii::$app->request->baseUrl; ?>/resources/css/overrides.css">

    <?php $this->head() ?>

   <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// --><!--[if lt IE 9]>
   <script src = "https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
   <script src = "https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   <script>
      var baseUrl = '<?php echo Yii::$app->request->baseUrl; ?>';
      var flash = '';

   </script>
    <?php
    //    print_r($fonts);
    ?>
    <?php if (true == false && !empty($fonts)) : ?>
       <style>
          body, div, section, p {
             font-family: <?php echo $fonts['main']['name'] ?>;
             font-size: <?php echo $fonts['main']['size'] ?>px;
             font-weight: <?php echo $fonts['main']['weight'] ?>;
          }


       </style>
    <?php endif; ?>
</head>
<body>
<?php $this->beginBody() ?>
<!-- Preloader -->
<div id = "preloader">
   <div id = "status">&nbsp;</div>
</div>
<!-- <a href = "index.html"><img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/logo.png" alt = ""/>
                     </a> -->


<!-- MOBILE MENU -->
<section>
   <div class = "ed-mob-menu">
      <div class = "ed-mob-menu-con">
         <div class = "ed-mm-left">
            <div class = "wed-logo">
               <a href = "<?php echo Yii::$app->request->baseUrl .'/site/index/'?>"><img src = "<?php echo Yii::$app->request->baseUrl;?>/resources/images/logo.png" alt = ""/>
               </a>
            </div>
         </div>
         <div class = "ed-mm-right">
            <div class = "ed-mm-menu">
               <a href = "#!" class = "ed-micon"><i class = "fa fa-bars"></i></a>
               <div class = "ed-mm-inn">
                  <a href = "#" class = "ed-mi-close"><i class = "fa fa-times"></i></a>
                  <h4>Home pages</h4>
                  <ul>
                     <li><a href = "booking-all.html">Home page 1</a></li>
                     <li><a href = "booking-all.html">Home page 2</a></li>
                     <li><a href = "booking-tour-package.html">Home page 3</a></li>
                     <li><a href = "booking-hotel.html">Home page 4</a></li>
                     <li><a href = "booking-car-rentals.html">Home page 5</a></li>
                     <li><a href = "booking-flight.html">Home page 6</a></li>
                     <li><a href = "booking-slider.html">Home page 7</a></li>
                  </ul>
                  <h4>Tour Packages</h4>
                  <ul>
                     <li><a href = "all-package.html">All Package</a></li>
                     <li><a href = "family-package.html">Family Package</a></li>
                     <li><a href = "honeymoon-package.html">Honeymoon Package</a></li>
                     <li><a href = "group-package.html">Group Package</a></li>
                     <li><a href = "weekend-package.html">WeekEnd Package</a></li>
                     <li><a href = "regular-package.html">Regular Package</a></li>
                     <li><a href = "custom-package.html">Custom Package</a></li>
                  </ul>
                  <h4>Sighe Seeings Pages</h4>
                  <ul>
                     <li><a href = "places.html">Sightseeing 1</a></li>
                     <li><a href = "places-1.html">Sightseeing 2</a></li>
                     <li><a href = "places-2.html">Sightseeing 3</a></li>
                  </ul>
                  <h4>User Dashboard</h4>
                  <ul>
                     <li><a href = "dashboard.html">My Bookings</a></li>
                     <li><a href = "db-my-profile.html">My Profile</a></li>
                     <li><a href = "db-my-profile-edit.html">My Profile edit</a></li>
                     <li><a href = "db-travel-booking.html">Tour Packages</a></li>
                     <li><a href = "db-hotel-booking.html">Hotel Bookings</a></li>
                     <li><a href = "db-event-booking.html">Event bookings</a></li>
                     <li><a href = "db-payment.html">Make Payment</a></li>
                     <li><a href = "db-refund.html">Cancel Bookings</a></li>
                     <li><a href = "db-all-payment.html">Prient E-Tickets</a></li>
                     <li><a href = "db-event-details.html">Event booking details</a></li>
                     <li><a href = "db-hotel-details.html">Hotel booking details</a></li>
                     <li><a href = "db-travel-details.html">Travel booking details</a></li>
                  </ul>
                  <h4>Other pages:1</h4>
                  <ul>
                     <li><a href = "tour-details.html">Travel details</a></li>
                     <li><a href = "hotel-details.html">Hotel details</a></li>
                     <li><a href = "all-package.html">All package</a></li>
                     <li><a href = "hotels-list.html">All hotels</a></li>
                     <li><a href = "booking.html">Booking page</a></li>
                  </ul>
                  <h4 class = "ed-dr-men-mar-top">User login pages</h4>
                  <ul>
                     <li><a href = "register.html">Register</a></li>
                     <li><a href = "login.html">Login and Sign in</a></li>
                     <li><a href = "forgot-pass-2.html">Forgot pass</a></li>
                  </ul>
                  <h4>Other pages:2</h4>
                  <ul>
                     <li><a href = "about.html">About Us</a></li>
                     <li><a href = "testimonials.html">Testimonials</a></li>
                     <li><a href = "events.html">Events</a></li>
                     <li><a href = "blog.html">Blog</a></li>
                     <li><a href = "tips.html">Tips Before Travel</a></li>
                     <li><a href = "price-list.html">Price List</a></li>
                     <li><a href = "discount.html">Discount</a></li>
                     <li><a href = "faq.html">FAQ</a></li>
                     <li><a href = "sitemap.html">Site map</a></li>
                     <li><a href = "404.html">404 Page</a></li>
                     <li><a href = "contact.html">Contact Us</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--HEADER SECTION-->
<section>
   <!-- TOP BAR -->
   <div class = "ed-top">
      <div class = "container">
         <div class = "row">
            <div class = "col-md-12">
               <div class = "ed-com-t1-left">
                  <ul>
                     <li><a href = "#">Contact: <?php if(isset(Yii::$app->params['site-settings']['address'])){ echo Yii::$app->params['site-settings']['address']['content'];}else{echo '';} ?></a>
                     </li>
                     <li><a href = "#">Phone: +<?php if(isset(Yii::$app->params['site-settings']['contact'])){ echo Yii::$app->params['site-settings']['contact']['content'];}else{echo '';} ?></a>
                     </li>
                  </ul>
               </div>
               <div class = "ed-com-t1-right">
                  <ul>
                     <li><a href = "login.html">Sign In</a>
                     </li>
                     <li><a href = "register.html">Sign Up</a>
                     </li>
                  </ul>
               </div>
               <div class = "ed-com-t1-social">
                   <?php
                   $socials= json_decode(Yii::$app->params['site-settings']['social']['content']);

                   ?>
                  <ul>
                     <li><a href = "<?php if(isset($socials[0]->{'facebook'})){ echo $socials[0]->{'facebook'} ;}else{echo '#';} ?>"><i class = "fa fa-facebook" aria-hidden = "true"></i></a>
                     </li>
                     <li><a href = "<?php if(isset($socials[0]->{'google'})){ echo $socials[0]->{'google'} ;}else{echo '#';} ?>"><i class = "fa fa-google-plus" aria-hidden = "true"></i></a>
                     </li>
                     <li><a href = "<?php if(isset($socials[0]->{'twitter'})){ echo $socials[0]->{'twitter'} ;}else{echo '#';} ?>"><i class = "fa fa-twitter" aria-hidden = "true"></i></a>
                     </li>
                     <!-- <li><a href = "#"><i class = "fa fa-twitter" aria-hidden = "true"></i></a>
                     </li> -->
                     <li>
                        <div class="language-select-01" >
                           <a href="">EN</a> / <a href="">FR</a>
                           
                        </div>
                     </li>

                      <!--  <li style="float:left;" ><div class="ht-right">
                   
                        <div class="lan-selector">
                            <select class="language_drop" name="countries" id="countries" style="width:300px;">
                                <option value='yt' data-image="resources/images/icon/flag-1.jpg" data-imagecss="flag yt"
                                    data-title="English"><img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/icon/flag-1.jpg" alt = ""/> English</option>
                                <option value='yu' data-image="./resources/images/icon/flag-2.jpg" data-imagecss="flag yu"
                                    data-title="Bangladesh"><img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/icon/flag-1.jpg" alt = ""/>German </option>
                            </select>
                        </div>
                   
                </div>
                     </li> -->
                     

                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- LOGO AND MENU SECTION -->
   <div class = "top-logo" data-spy = "affix" data-offset-top = "250">
      <div class = "container">
         <div class = "row">
            <div class = "col-md-12">
               <div class = "wed-logo">
                  <a href = "<?php echo Yii::$app->request->baseUrl; ?>/site/index"><img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/logo.png" alt = ""/>
                  </a>
               </div>
               <div class = "main-menu">
                  <ul>
                     <li><a href = "<?=  Yii::$app->request->baseUrl; ?>/site/index">Home</a>
                     </li>
                     <li class = "about-menu">
                        <a href = "<?=  Yii::$app->request->baseUrl; ?>/package/" class = "mm-arr">Packages</a>
                        <!-- MEGA MENU 1 -->
                        <div class = "mm-pos">
                           <div class = "about-mm m-menu">
                              <div class = "m-menu-inn">
                                 <div class = "mm1-com mm1-s1">
                                    <div class = "ed-course-in">
                                       <a class = "course-overlay menu-about" href = "<?=  Yii::$app->request->baseUrl; ?>/package">
                                          <a href = "<?=  Yii::$app->request->baseUrl; ?>/package"><img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/sight/5.jpg" alt = ""/>
                                          </a>
                                          <span>Popular Package</span>
                                       </a>
                                    </div>
                                 </div>
                                 <div class = "mm1-com mm1-s2">
                                    <p>Want to change the world? At Berkeley we’re doing just that. When you join the Golden Bear community, you’re part of an institution that shifts the global conversation every single day.</p>
                                    <a href = "all-package.html" class = "mm-r-m-btn">Read more</a>
                                 </div>
                                 <div class = "mm1-com mm1-s3">
                                    <ul>
                                       <li><a href = "family-package.html">Family Package</a></li>
                                       <li><a href = "honeymoon-package.html">Honeymoon Package</a></li>
                                       <li><a href = "group-package.html">Group Package</a></li>
                                       <li><a href = "weekend-package.html">WeekEnd Package</a></li>
                                       <li><a href = "regular-package.html">Regular Package</a></li>
                                       <li><a href = "custom-package.html">Custom Package</a></li>
                                    </ul>
                                 </div>
                                 <div class = "mm1-com mm1-s4">
                                    <ul>
                                       <li><a href = "family-package.html">Family Package</a></li>
                                       <li><a href = "honeymoon-package.html">Honeymoon Package</a></li>
                                       <li><a href = "group-package.html">Group Package</a></li>
                                       <li><a href = "weekend-package.html">WeekEnd Package</a></li>
                                       <li><a href = "regular-package.html">Regular Package</a></li>
                                       <li><a href = "custom-package.html">Custom Package</a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li class = "admi-menu">
                        <a href = "#" class = "mm-arr">Sightseeing</a>
                        <!-- MEGA MENU 1 -->
                        <div class = "mm-pos">
                           <div class = "admi-mm m-menu">
                              <div class = "m-menu-inn">
                                 <div class = "mm2-com mm1-com mm1-s1">
                                    <div class = "ed-course-in">
                                       <a class = "course-overlay" href = "places.html">
                                          <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/sight/1.jpg" alt = ""/>

                                          <span>Sightseeing - 1</span>
                                       </a>
                                    </div>
                                    <p>Donec lacus libero, rutrum ac sollicitudin sed, mattis non eros. Vestibulum congue nec eros quis lacinia. Mauris non tincidunt lectus. Nulla mollis, orci vitae accumsan rhoncus.</p>
                                    <a href = "places.html" class = "mm-r-m-btn">Read more</a>
                                 </div>
                                 <div class = "mm2-com mm1-com mm1-s1">
                                    <div class = "ed-course-in">
                                       <a class = "course-overlay" href = "places-1.html">
                                          <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/sight/2.jpg" alt = ""/>
                                          <span>Sightseeing - 2</span>
                                       </a>
                                    </div>
                                    <p>Donec lacus libero, rutrum ac sollicitudin sed, mattis non eros. Vestibulum congue nec eros quis lacinia. Mauris non tincidunt lectus. Nulla mollis, orci vitae accumsan rhoncus.</p>
                                    <a href = "places-1.html" class = "mm-r-m-btn">Read more</a>
                                 </div>
                                 <div class = "mm2-com mm1-com mm1-s1">
                                    <div class = "ed-course-in">
                                       <a class = "course-overlay" href = "places-2.html">
                                          <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/sight/3.jpg" alt = ""/>
                                          <span>Sightseeing - 3</span>
                                       </a>
                                    </div>
                                    <p>Donec lacus libero, rutrum ac sollicitudin sed, mattis non eros. Vestibulum congue nec eros quis lacinia. Mauris non tincidunt lectus. Nulla mollis, orci vitae accumsan rhoncus.</p>
                                    <a href = "places-2.html" class = "mm-r-m-btn">Read more</a>
                                 </div>
                                 <div class = "mm2-com mm1-com mm1-s4">
                                    <div class = "ed-course-in">
                                       <a class = "course-overlay" href = "places-3.html">
                                          <img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/sight/4.jpg" alt = ""/>
                                          <span>Sightseeing - 4</span>
                                       </a>
                                    </div>
                                    <p>Donec lacus libero, rutrum ac sollicitudin sed, mattis non eros. Vestibulum congue nec eros quis lacinia. Mauris non tincidunt lectus. Nulla mollis, orci vitae accumsan rhoncus.</p>
                                    <a href = "places-3.html" class = "mm-r-m-btn">Read more</a>
                                 </div>

                              </div>
                           </div>
                        </div>
                     </li>
                     <li><a href = "<?=  Yii::$app->request->baseUrl; ?>/blog/">Blog</a></li>
                     <li class = "cour-menu">
                        <a href = "#!" class = "mm-arr">Events</a>
                        <!-- MEGA MENU 1 -->
                        <div class = "mm-pos">
                           <div class = "cour-mm m-menu">
                              <div class = "m-menu-inn">
                                 <div class = "mm1-com mm1-cour-com mm1-s3">
                                    <h4>Home pages</h4>
                                    <ul>
                                       <li><a href = "booking-all.html">Home page 1</a></li>
                                       <li><a href = "booking-all.html">Home page 2</a></li>
                                       <li><a href = "booking-tour-package.html">Home page 3</a></li>
                                       <li><a href = "booking-hotel.html">Home page 4</a></li>
                                       <li><a href = "booking-car-rentals.html">Home page 5</a></li>
                                       <li><a href = "booking-flight.html">Home page 6</a></li>
                                       <li><a href = "booking-slider.html">Home page 7</a></li>
                                    </ul>
                                 </div>
                                 <div class = "mm1-com mm1-cour-com mm1-s3">
                                    <h4>Tour Packages</h4>
                                    <ul>
                                       <li><a href = "all-package.html">All Package</a></li>
                                       <li><a href = "family-package.html">Family Package</a></li>
                                       <li><a href = "honeymoon-package.html">Honeymoon Package</a></li>
                                       <li><a href = "group-package.html">Group Package</a></li>
                                       <li><a href = "weekend-package.html">WeekEnd Package</a></li>
                                       <li><a href = "regular-package.html">Regular Package</a></li>
                                       <li><a href = "custom-package.html">Custom Package</a></li>
                                    </ul>
                                    <h4 class = "ed-dr-men-mar-top">Sighe Seeings Pages</h4>
                                    <ul>
                                       <li><a href = "places.html">Sightseeing 1</a></li>
                                       <li><a href = "places-1.html">Sightseeing 2</a></li>
                                       <li><a href = "places-2.html">Sightseeing 3</a></li>
                                    </ul>
                                 </div>
                                 <div class = "mm1-com mm1-cour-com mm1-s3">
                                    <h4>User Dashboard</h4>
                                    <ul>
                                       <li><a href = "dashboard.html">My Bookings</a></li>
                                       <li><a href = "db-my-profile.html">My Profile</a></li>
                                       <li><a href = "db-my-profile-edit.html">My Profile edit</a></li>
                                       <li><a href = "db-travel-booking.html">Tour Packages</a></li>
                                       <li><a href = "db-hotel-booking.html">Hotel Bookings</a></li>
                                       <li><a href = "db-event-booking.html">Event bookings</a></li>
                                       <li><a href = "db-payment.html">Make Payment</a></li>
                                       <li><a href = "db-refund.html">Cancel Bookings</a></li>
                                       <li><a href = "db-all-payment.html">Prient E-Tickets</a></li>
                                       <li><a href = "db-event-details.html">Event booking details</a></li>
                                       <li><a href = "db-hotel-details.html">Hotel booking details</a></li>
                                       <li><a href = "db-travel-details.html">Travel booking details</a></li>
                                    </ul>
                                 </div>
                                 <div class = "mm1-com mm1-cour-com mm1-s3">
                                    <h4>Other pages:1</h4>
                                    <ul>
                                       <li><a href = "tour-details.html">Travel details</a></li>
                                       <li><a href = "hotel-details.html">Hotel details</a></li>
                                       <li><a href = "all-package.html">All package</a></li>
                                       <li><a href = "hotels-list.html">All hotels</a></li>
                                       <li><a href = "booking.html">Booking page</a></li>
                                    </ul>
                                    <h4 class = "ed-dr-men-mar-top">User login pages</h4>
                                    <ul>
                                       <li><a href = "register.html">Register</a></li>
                                       <li><a href = "login.html">Login and Sign in</a></li>
                                       <li><a href = "forgot-pass-2.html">Forgot pass</a></li>
                                    </ul>
                                 </div>
                                 <div class = "mm1-com mm1-cour-com mm1-s4">
                                    <h4>Other pages:2</h4>
                                    <ul>
                                       <li><a href = "about.html">About Us</a></li>
                                       <li><a href = "testimonials.html">Testimonials</a></li>
                                       <li><a href = "events.html">Events</a></li>
                                       <li><a href = "blog.html">Blog</a></li>
                                       <li><a href = "tips.html">Tips Before Travel</a></li>
                                       <li><a href = "price-list.html">Price List</a></li>
                                       <li><a href = "discount.html">Discount</a></li>
                                       <li><a href = "faq.html">FAQ</a></li>
                                       <li><a href = "sitemap.html">Site map</a></li>
                                       <li><a href = "404.html">404 Page</a></li>
                                       <li><a href = "contact.html">Contact Us</a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li><a href = "<?=  Yii::$app->request->baseUrl; ?>/site/contact">Contact us</a></li>

                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--<div class="search-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="search-form">
                            <form>
                                <div class="sf-type">
                                    <div class="sf-input">
                                        <input type="text" id="sf-box" placeholder="Search course and discount courses">
                                    </div>
                                    <div class="sf-list">
                                        <ul>
                                            <li><a href="course-details.html">Accounting/Finance</a></li>
                                            <li><a href="course-details.html">civil engineering</a></li>
                                            <li><a href="course-details.html">Art/Design</a></li>
                                            <li><a href="course-details.html">Marine Engineering</a></li>
                                            <li><a href="course-details.html">Business Management</a></li>
                                            <li><a href="course-details.html">Journalism/Writing</a></li>
                                            <li><a href="course-details.html">Physical Education</a></li>
                                            <li><a href="course-details.html">Political Science</a></li>
                                            <li><a href="course-details.html">Sciences</a></li>
                                            <li><a href="course-details.html">Statistics</a></li>
                                            <li><a href="course-details.html">Web Design/Development</a></li>
                                            <li><a href="course-details.html">SEO</a></li>
                                            <li><a href="course-details.html">Google Business</a></li>
                                            <li><a href="course-details.html">Graphics Design</a></li>
                                            <li><a href="course-details.html">Networking Courses</a></li>
                                            <li><a href="course-details.html">Information technology</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sf-submit">
                                    <input type="submit" value="Search Course">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
</section>
<!--END HEADER SECTION-->

<!--END HEADER SECTION-->
<div class = "page-body">
    <?= $content ?>
</div>
<section>
   <div class = "rows">
      <div class = "footer">
         <div class = "container">
            <div class = "foot-sec2">
               <div style = " padding-bottom: 15px;">
                  <div class = "row">
                     <div class = "col-md-5 foot-spec foot-com footer_places">
                        <h4><span>Most Popular</span> Vacations</h4>
                        <ul>
                           <li><a href = "#">Angkor Wat</a></li>
                           <li><a href = "#">Buckingham Palace</a></li>
                           <li><a href = "#">High Line</a></li>
                           <li><a href = "#">Sagrada Família</a></li>
                           <li><a href = "#">Statue of Liberty </a></li>
                           <li><a href = "#">Notre Dame de Paris</a></li>
                           <li><a href = "#">Taj Mahal</a></li>
                           <li><a href = "#">The Louvre</a></li>
                           <li><a href = "#">Tate Modern, London</a></li>
                           <li><a href = "#">Gothic Quarter</a></li>
                           <li><a href = "#">Table Mountain</a></li>
                           <li><a href = "#">Bayon</a></li>
                           <li><a href = "#">Great Wall of China</a></li>
                           <li><a href = "#">Hermitage Museum</a></li>
                           <li><a href = "#">Yellowstone</a></li>
                           <li><a href = "#">Musée d'Orsay</a></li>
                        </ul>
                     </div>
                     <!--  <div class="col-sm-3 foot-spec foot-com">
                          <h4><span>Holiday</span> Tour & Travels</h4>
                          <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide.</p>
                      </div> -->
                     <div class = "col-md-4 foot-spec foot-com">
                        <h4><span>Address</span> & Contact Info</h4>
                        <p><?php if(isset(Yii::$app->params['site-settings']['address'])){ echo Yii::$app->params['site-settings']['address']['content'];}else{echo '';} ?></p>
                        <p><span class = "strong">Phone: </span> <span class = "highlighted"><?php if(isset(Yii::$app->params['site-settings']['contact'])){ echo Yii::$app->params['site-settings']['contact']['content'];}else{echo '';} ?></span></p>
                     </div>

                     <!--    <div class="col-sm-3 col-md-3 foot-spec foot-com">
                            <h4><span>SUPPORT</span> & HELP</h4>
                            <ul class="two-columns">
                                <li> <a href="#">About Us</a> </li>
                                <li> <a href="#">FAQ</a> </li>
                                <li> <a href="#">Feedbacks</a> </li>
                                <li> <a href="#">Blog </a> </li>
                                <li> <a href="#">Use Cases</a> </li>
                                <li> <a href="#">Advertise us</a> </li>
                                <li> <a href="#">Discount</a> </li>
                                <li> <a href="#">Vacations</a> </li>
                                <li> <a href="#">Branding Offers </a> </li>
                                <li> <a href="#">Contact Us</a> </li>
                            </ul>
                        </div> -->
                     <div class = "col-md-3 foot-social foot-spec foot-com">
                        <h4><span>Follow</span> with us</h4>
                        <p>Join the thousands of other There are many variations of passages of Lorem Ipsum available</p>
                        <ul>
                           <?php
                          $socials= json_decode(Yii::$app->params['site-settings']['social']['content']);

                           ?>
                           <li><a href = "<?php if(isset($socials[0]->{'facebook'})){ echo $socials[0]->{'facebook'} ;}else{echo '#';} ?>"><i class = "fa fa-facebook" aria-hidden = "true"></i></a></li>
                           <li><a href = "<?php if(isset($socials[0]->{'google'})){ echo $socials[0]->{'google'} ;}else{echo '#';} ?>"><i class = "fa fa-google-plus" aria-hidden = "true"></i></a></li>
                           <li><a href = "<?php if(isset($socials[0]->{'twitter'})){ echo $socials[0]->{'twitter'} ;}else{echo '#';} ?>"><i class = "fa fa-twitter" aria-hidden = "true"></i></a></li>
                           <li><a href = "<?php if(isset($socials[0]->{'linkedin'})){ echo $socials[0]->{'linkedin'} ;}else{echo '#';} ?>"><i class = "fa fa-linkedin" aria-hidden = "true"></i></a></li>
                           <li><a href = "<?php if(isset($socials[0]->{'youtube'})){ echo $socials[0]->{'youtube'} ;}else{echo '#';} ?>"><i class = "fa fa-youtube" aria-hidden = "true"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <ul class = "foote_bottom_ul_amrc">
               <li><a href = "">Home</a></li>
               <li><a href = "">About</a></li>
               <li><a href = "">Services</a></li>
               <li><a href = "">Pricing</a></li>
               <li><a href = "">Blog</a></li>
               <li><a href = "">Contact</a></li>
            </ul>
         </div>
      </div>
   </div>
</section>
<!--====== FOOTER - COPYRIGHT ==========-->
<section>
   <div class = "rows copy">
      <div class = "container">
         <p>Copyrights © 2018 Company Name. All Rights Reserved</p>
      </div>
   </div>
</section>
<!--  <section>
    <div class = "icon-float">
       <ul>
          <li><a href = "#" class = "sh">1k <br> Share</a></li>
          <li><a href = "#" class = "fb1"><i class = "fa fa-facebook" aria-hidden = "true"></i></a></li>
          <li><a href = "#" class = "gp1"><i class = "fa fa-google-plus" aria-hidden = "true"></i></a></li>
          <li><a href = "#" class = "tw1"><i class = "fa fa-twitter" aria-hidden = "true"></i></a></li>
          <li><a href = "#" class = "li1"><i class = "fa fa-linkedin" aria-hidden = "true"></i></a></li>
          <li><a href = "#" class = "wa1"><i class = "fa fa-whatsapp" aria-hidden = "true"></i></a></li>
          <li><a href = "#" class = "sh1"><i class = "fa fa-envelope-o" aria-hidden = "true"></i></a></li>
       </ul>
    </div>
 </section> -->


<script src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/js/jquery-latest.min.js"></script>
<script src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/js/bootstrap.js"></script>
<script src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/js/wow.min.js"></script>
<script src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/js/materialize.min.js"></script>

<?php $this->endBody() ?>

<script src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/js/custom.js"></script>
<script src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/js/owl.carousel.min.js"></script>


<?php
// \common\components\Misc::setFlash('danger', 'sadfasdfas');
if (Yii::$app->session->hasFlash('flash')): ?>
   <script>
      var flash = <?php echo Yii::$app->session->getFlash('flash'); ?>;
   </script>
<?php endif; ?>
<!--Revolution Slider-->
<script>
   $.ajaxSetup({
      data: {
         '<?php echo Yii::$app->request->csrfParam; ?>': '<?php echo Yii::$app->request->csrfToken; ?>'
      }
   });
</script>

<!-- <script type="text/javascript">
      /*----------------------------------------------------
     Language Flag js 
    ----------------------------------------------------*/
    $(document).ready(function(e) {
   
    try {
        var pages = $("#pages").msDropdown({on:{change:function(data, ui) {
            var val = data.value;
            if(val!="")
                window.location = val;
        }}}).data("dd");

        var pagename = document.location.pathname.toString();
        pagename = pagename.split("/");
        pages.setIndexByValue(pagename[pagename.length-1]);
        $("#ver").html(msBeautify.version.msDropdown);
    } catch(e) {
       
    }
    $("#ver").html(msBeautify.version.msDropdown);

    $(".language_drop").msDropdown({roundedBorder:false});
        $("#tech").data("dd");
    });
</script> -->

<script type = "text/javascript">
   $('.slider_active').owlCarousel({
      loop: true,
      margin: 0,
      items: 1,
      autoplay: true,
      navText: ['<i class="ti-angle-left"></i>', '<i class="ti-angle-right"></i>'],
      nav: true,
      dots: false,
      autoplayHoverPause: true,
      autoplaySpeed: 800,
      animateOut: 'fadeOut',
      animateIn: 'fadeIn',
      responsive: {
         0: {
            items: 1,
            nav: false,
         },
         767: {
            items: 1
         },
         992: {
            items: 1
         },
         1200: {
            items: 1
         },
         1600: {
            items: 1
         }
      }
   });
</script>
<script type = "text/javascript">
   // review-active
   $('.testmonial_active').owlCarousel({
      loop: true,
      margin: 0,
      items: 1,
      autoplay: true,
      navText: ['<i class="ti-angle-left"></i>', '<i class="ti-angle-right"></i>'],
      nav: false,
      dots: true,
      autoplayHoverPause: true,
      autoplaySpeed: 800,
      responsive: {
         0: {
            items: 1,
         },
         767: {
            items: 1,
         },
         992: {
            items: 1,
         },
         1200: {
            items: 1,
         },
         1500: {
            items: 1
         }
      }
   });
</script>

</body>
</html>
<?php $this->endPage() ?>












































