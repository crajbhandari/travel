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
   <link href = "<?= 'https://fonts.googleapis.com/css?family=' . $fonts['main']['name'] . ':' . $fonts['main']['weight'] . ',500'; ?>" rel = "stylesheet">

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
    <?php if (!empty($fonts)) : ?>
       <style>
          body, div, section, p {
           /*  font-family: <?= $fonts['main']['name'] ?>,<?= $fonts['main']['name'] ?>;*/
           /*  font-size: <?= $fonts['main']['size'] ?>px;
             font-weight: <?= $fonts['main']['weight'] ?>;*/
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

  
      <!-- MOBILE MENU -->
    <section>
        <div class="ed-mob-menu">
            <div class="ed-mob-menu-con">
               <div class = "ed-mm-left">
                  <div class = "wed-logo">
                     <a href = "index.html"><img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/logo.png" alt = ""/>
                     </a>
                  </div>
               </div>
                <div class="ed-mm-right">
                    <div class="ed-mm-menu">
                        <a href="#!" class="ed-micon"><i class="fa fa-bars"></i></a>
                        <div class="ed-mm-inn">
                            <a href="#!" class="ed-mi-close"><i class="fa fa-times"></i></a>
                            <h4>Home</h4>
                            <ul>
                                <li><a href="booking-all.html">Home</a></li>
                                 <li class="about-menu">
                                    <a href="" class="mm-arr">Packages</a>
                                    <!-- MEGA MENU 1 -->
                                    <div class="mm-pos">
                                        <div class="about-mm ">
                                          <div class="m-menu-inn">
                                                <div class="mm1-com mm1-s3">
                                                    <ul>
                                                        <li><a href="all-package.html">All Package</a></li>
                                                        <li><a href="family-package.html">Family Package</a></li>
                                                        <li><a href="honeymoon-package.html">Honeymoon Package</a></li>
                                                        <li><a href="groop-package.html">Group Package </a></li>
                                                        <li><a href="regular-package.html">Regular Package</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="booking-tour-package.html">Destination</a></li>
                                <li><a href="booking-hotel.html">Blog</a></li>
                                
                                <li><a href="booking-flight.html">Activites</a></li>
                                <li><a href="faq.html.html">Faq</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                          
                            
                          
                          
                            <h4 class="ed-dr-men-mar-top">User login pages</h4>
                            <ul>
                                <li><a href="register.html">Register</a></li>
                                <li><a href="login.html">Login and Sign in</a></li>
                                
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
        <div class="ed-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ed-com-t1-left">
                            <ul>
                                <li><a href="#">Contact: Lake Road, Suite 180 Farmington Hills, U.S.A.</a>
                                </li>
                                <li><a href="#">Phone: +101-1231-1231</a>
                                </li>
                            </ul>
                        </div>
                        <div class="ed-com-t1-right">
                          

                            <ul>


                               <!--  <li><a href="login.html">Sign In</a>
                                </li>
                                <li><a href="register.html">Sign Up</a>
                                </li> -->

                            </ul>
                        </div>

                        <div class="ed-com-t1-social">
                            <ul>
                                <li style="float: right;" ><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li style="float: right;"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                </li>
                                <li style="float: right;"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </li>
                                <li style="float: right;" > 
                                    <div class="ht-right">
                    
                    <div class="lan-selector">
                        <select class="language_drop" name="countries" id="countries" style="width:200px;">
                            <option value='yt'  
                                data-title="English">English</option>
                            <option value='yu' 
                                data-title="Bangladesh">German </option>
                        </select>
                    </div>
                   
                </div></li>

                                

                            </ul>

                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <!-- LOGO AND MENU SECTION -->
        <div class="top-logo" data-spy="affix" data-offset-top="250">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                         <div class = "wed-logo">
                     <a href = "index.html"><img src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/logo.png" alt = ""/>
                     </a>
                  </div>
                        <div class="main-menu">
                            <ul>
                                <li><a href="index1.html">Home</a>
                                </li>
                                <li class="about-menu">
                                    <a href="" class="mm-arr">Packages</a>
                                    <!-- MEGA MENU 1 -->
                                    <div class="mm-pos">
                                        <div class="about-mm ">
                                            <div class="m-menu-inn">
                                               
                                              
                                                <div class="mm1-com mm1-s3">
                                                    <ul>
                                                        <li><a href="all-package.html">All Package</a></li>
                                                        <li><a href="family-package.html">Family Package</a></li>
                                                        <li><a href="honeymoon-package.html">Honeymoon Package</a></li>
                                                        <li><a href="group-package.html">Group Package </a></li>
                                                        <li><a href="regular-package.html">Regular Package</a></li>
                                                        
                                                    </ul>
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                 <li><a href="destination.html">Destination</a></li>
                              <!-- <li class="about-menu">
                                    <a href="" class="destination.html">Destination</a>
                                 
                                    <div class="mm-pos">
                                        <div class="admi-mm ">
                                            <div class="m-menu-inn">
                                               
                                              
                                                <div class="mm1-com mm1-s3">
                                                    <ul>
                                                        <li><a href="booking-all.html">All Booking</a></li>
                                                        <li><a href="booking-tour-package.html">Activities 1</a></li>
                                                        <li><a href="booking-hotel.html">Activities 2</a></li>
                                                        <li><a href="booking-car-rentals.html">Activities 3</a></li>
                                                        <li><a href="booking-flight.html">Activities 4</a></li>
                                                        <li><a href="booking-slider.html">Activities 5</a></li>
                                                    </ul>
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </li> -->
                                <li><a href="blog1.html">Blog</a></li>
                                <!--<li><a class='dropdown-button ed-sub-menu' href='#' data-activates='dropdown1'>Courses</a></li>-->
                              
                                <li><a href="activities.html">Activities</a>
                                </li>
                                 <li><a href="faq.html">Faq</a>
                                </li>
                               
                                <li><a href="contact.html">Contact us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
    </section>

   <!--END HEADER SECTION-->
   <div class = "page-body">
       <?= $content ?>
   </div>
  <section>
        <div class="rows">
            <div class="footer">
                <div class="container">
                    <div class="foot-sec2">
                        <div style=" padding-bottom: 15px;">
                            <div class="row">
                                <div class="col-md-5 foot-spec foot-com footer_places">
                        <h4><span>Most Popular</span> Vacations</h4>
                        <ul>
                            <li><a href="#">Angkor Wat</a> </li>
                            <li><a href="#">Buckingham Palace</a> </li>
                            <li><a href="#">High Line</a> </li>
                            <li><a href="#">Sagrada Família</a> </li>
                            <li><a href="#">Statue of Liberty </a> </li>
                            <li><a href="#">Notre Dame de Paris</a> </li>
                            <li><a href="#">Taj Mahal</a> </li>
                            <li><a href="#">The Louvre</a> </li>
                            <li><a href="#">Tate Modern, London</a> </li>
                            <li><a href="#">Gothic Quarter</a> </li>
                            <li><a href="#">Table Mountain</a> </li>
                            <li><a href="#">Bayon</a> </li>
                            <li><a href="#">Great Wall of China</a> </li>
                            <li><a href="#">Hermitage Museum</a> </li>
                            <li><a href="#">Yellowstone</a> </li>
                            <li><a href="#">Musée d'Orsay</a> </li>
                        </ul>
                    </div>
                               <!--  <div class="col-sm-3 foot-spec foot-com">
                                    <h4><span>Holiday</span> Tour & Travels</h4>
                                    <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide.</p>
                                </div> -->
                                <div class="col-md-4 foot-spec foot-com">
                                    <h4><span>Address</span> & Contact Info</h4>
                                    <p>28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A. Landmark : Next To Airport</p>
                                    <p> <span class="strong">Phone: </span> <span class="highlighted">+101-1231-1231</span> </p>
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
                                <div class="col-md-3 foot-social foot-spec foot-com">
                                    <h4><span>Follow</span> with us</h4>
                                    <p>Join the thousands of other There are many variations of passages of Lorem Ipsum available</p>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
                                        <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="foote_bottom_ul_amrc">
<li><a href="">Home</a></li>
<li><a href="">About</a></li>
<li><a href="">Services</a></li>
<li><a href="">Pricing</a></li>
<li><a href="">Blog</a></li>
<li><a href="">Contact</a></li>
</ul>
                </div>
            </div>
        </div>
    </section>
    <!--====== FOOTER - COPYRIGHT ==========-->
    <section>
        <div class="rows copy">
            <div class="container">
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
 <script type="text/javascript">
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
    <script type="text/javascript">
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












































