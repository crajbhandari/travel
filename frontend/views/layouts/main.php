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
<html lang="<?= Yii::$app->language ?>">
<head>
   <meta charset="<?= Yii::$app->charset ?>">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1.0,user-scalable=no">
    <?php $this->registerCsrfMetaTags() ?>
   <title><?php echo Yii::$app->params['system_name'] ?> - <?= Html::encode($this->title) ?></title>
   <link rel="apple-touch-icon" href="<?=  Yii::$app->request->baseUrl; ?>/common/assets/images/uploads/fav.png">
   <link rel="shortcut icon" href="<?=  Yii::$app->request->baseUrl; ?>/common/assets/images/uploads/fav.png">   <link href="<?= 'https://fonts.googleapis.com/css?family=' . $fonts['main']['name'] . ':' . $fonts['main']['weight'].',500'; ?>" rel="stylesheet">

   <link rel="stylesheet" href="<?=  Yii::$app->request->baseUrl; ?>/assets/css/site.css">
   <link rel="stylesheet" href="<?=  Yii::$app->request->baseUrl; ?>/assets/plugins/revolution/css/r-all.css">
   <link rel="stylesheet" href="<?=  Yii::$app->request->baseUrl; ?>/assets/plugins/jquery-ui-1.11.4/jquery-ui.css">
   <link rel="stylesheet" href="<?=  Yii::$app->request->baseUrl; ?>/assets/plugins/bootstrap-sl-1.12.1/bootstrap-select.css">
   <link rel="stylesheet" href="<?=  Yii::$app->request->baseUrl; ?>/assets/css/overrides.css">

   <?php $this->head() ?>
    <?php if (Yii::$app->controller->id = 'site' && Yii::$app->controller->action->id = 'index'): ?>
       <link rel="shortcut icon" href="<?php echo Yii::$app->request->baseUrl; ?>/assets/slider/css/settings.css"/>
       <style type="text/css">
          .tp-caption.maincaption, .maincaption {
             font-size: 33px;
             line-height: 43px;
             font-weight: 500;
             font-family: roboto;
             color: rgb(33, 42, 64);
             text-decoration: none;
             background-color: transparent;
             border-width: 0px;
             border-color: rgb(0, 0, 0);
             border-style: none;
             text-shadow: none
          }

          .tp-caption.gsc_button, .gsc_button {
             color: #ffcc00;
             font-size: 16px;
             line-height: 30px;
             font-weight: 400;
             font-style: normal;
             font-family: Poppins;
             text-decoration: none;
             background-color: rgba(0, 0, 0, 0);
             border-color: #fccd20;
             border-style: solid;
             border-width: 1px 1px 1px 1px;
             border-radius: 6px 6px 6px 6px
          }

          .tp-caption.gsc_button:hover, .gsc_button:hover {
             color: #ffffff;
             text-decoration: none;
             background-color: #fccd20;
             border-color: #fccd20;
             border-style: solid;
             border-width: 1px 1px 1px 1px;
             border-radius: 3px 3px 3px 3px;
             cursor: pointer
          }

          .tp-caption.gsc_title, .gsc_title {
             color: #ffcc00;
             font-size: 33px;
             line-height: 43px;
             font-weight: 500;
             font-style: normal;
             font-family: Poppins;
             text-decoration: none;
             background-color: transparent;
             border-color: rgba(0, 0, 0, 1);
             border-style: none;
             border-width: 0px 0px 0px 0px;
             border-radius: 0px 0px 0px 0px;
             text-shadow: none
          }

          #rev_slider_38_1 .uranus .tp-bullet {
             border-radius: 50%;
             box-shadow: 0 0 0 2px rgba(255, 255, 255, 0);
             -webkit-transition: box-shadow 0.3s ease;
             transition: box-shadow 0.3s ease;
             background: transparent;
             width: 15px;
             height: 15px
          }

          #rev_slider_38_1 .uranus .tp-bullet.selected, #rev_slider_38_1 .uranus .tp-bullet:hover {
             box-shadow: 0 0 0 2px rgba(255, 255, 255, 1);
             border: none;
             border-radius: 50%;
             background: transparent
          }

          #rev_slider_38_1 .uranus .tp-bullet-inner {
             -webkit-transition: background-color 0.3s ease, -webkit-transform 0.3s ease;
             transition: background-color 0.3s ease, transform 0.3s ease;
             top: 0;
             left: 0;
             width: 100%;
             height: 100%;
             outline: none;
             border-radius: 50%;
             background-color: rgb(255, 255, 255);
             background-color: rgba(255, 255, 255, 0.3);
             text-indent: -999em;
             cursor: pointer;
             position: absolute
          }

          #rev_slider_38_1 .uranus .tp-bullet.selected .tp-bullet-inner, #rev_slider_38_1 .uranus .tp-bullet:hover .tp-bullet-inner {
             transform: scale(0.4);
             -webkit-transform: scale(0.4);
             background-color: rgb(255, 255, 255)
          }</style>
    <?php endif; ?>
   <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// --><!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
   <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
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
             font-family: <?= $fonts['main']['name'] ?>,<?= $fonts['main']['name'] ?>;
             font-size: <?= $fonts['main']['size'] ?>px;
             font-weight: <?= $fonts['main']['weight'] ?>;
          }


       </style>
    <?php endif; ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="boxed_wrapper">
   <!-- Start Preloader -->
   <div class="loader-container">
      <div class="progress-circle float loader-shadow">
         <div class="progress-item">
            <img src="<?php echo Yii::$app->request->baseUrl; ?>/common/assets/images/uploads/logo-only.png" alt="Loading Gateway Scandinavia">
         </div>
      </div>
   </div>
   <!-- End Preloader -->

   <!--Start header area-->
   <header class="mainmenu-area stick">
      <div class="container">
         <nav class="nav">
            <div class="navbar-header">
               <div class="logo">
                  <a href="<?php echo Yii::$app->request->baseUrl; ?>/">
                     <img id="site-logo" src="<?php echo Yii::$app->request->baseUrl; ?>/common/assets/images/uploads/logo.png" alt="Gateway Scandinavia">
                  </a>
               </div>
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
               </button>
            </div>
            <ul class="navigation nav navbar-nav navbar-right navbar-collapse collapse clearfix">
               <li>
                  <a href="<?php echo Yii::$app->request->baseUrl; ?>/">
                     <i class="fa fa-home margin-right-5"></i>
                     Home
                     <i class="fa fa-chevron-right pull-right"></i>
                  </a>
               </li>

               <li>
                  <a href="<?php echo Yii::$app->request->baseUrl; ?>/site/about/">
                     <i class="fa fa-info-circle margin-right-5"></i>
                     About
                     <i class="fa fa-chevron-right pull-right"></i>

                  </a>
               </li>
               <li>
                  <a href="<?php echo Yii::$app->request->baseUrl; ?>/site/services/">
                     <i class="fa fa-cogs margin-right-5"></i>
                     Services
                     <i class="fa fa-chevron-right pull-right"></i>
                  </a>
               </li>

               <li>
                  <a href="<?php echo Yii::$app->request->baseUrl; ?>/site/team/">
                     <i class="fa fa-users margin-right-5"></i>
                     Team
                     <i class="fa fa-chevron-right pull-right"></i>
                  </a>
               </li>
                <?php if (Yii::$app->params['site-settings']['show_blog']['content'] == 1): ?>
                   <li>
                      <a href="<?php echo Yii::$app->request->baseUrl; ?>/blog/">
                         <i class="fa fa-list margin-right-5"></i>
                         Blog
                         <i class="fa fa-chevron-right pull-right"></i>
                      </a>
                   </li>
                <?php endif; ?>

               <li>
                  <a href="<?php echo Yii::$app->request->baseUrl; ?>/site/contact/">
                     <i class="fa fa-phone margin-right-5"></i>
                     Contact
                     <i class="fa fa-chevron-right pull-right"></i>
                  </a>
               </li>
            </ul>
         </nav>
      </div>
   </header>
   <!--End header area-->
   <div class="page-content">
       <?= $content ?>
   </div>

   <footer class="slim-footer">
       <?php $social = (Yii::$app->params['site-settings']['social_media']['content'] != '') ? json_decode(Yii::$app->params['site-settings']['social_media']['content']) : [] ?>
       <?php if (is_array($social) && count($social) > 0): ?>
          <div class="footer-top">
             <div class="container text-center">
                <div class="footer-social-media">
                    <?php foreach ($social as $s) : ?>
                       <div class="media-item">
                          <a href="<?= $s->link ?>">
                             <i class="fa <?= Yii::$app->params['social-icons'][$s->media]['icon'] ?>"></i>
                          </a>
                       </div>
                    <?php endforeach; ?>
                </div>
             </div>
          </div>
       <?php endif; ?>
      <div class="footer-bottom">
         <div class="container text-center">
            <div class="footer-content">
               <div class="fc-item">
                            <span class="strong">
                                <i class="fa fa-map-marker"></i>
                                Address:</span> <span> Ravnsborg Tværgade 2, 1, DK-2200 Copenhagen N.</span>
               </div>
               <div class="fc-item">
                            <span class="strong">
                                <i class="fa fa-envelope-o"></i>
                                Email: </span><span> info@gateway-scandinavia.com</span>
               </div>
               <div class="fc-item">
                            <span class="strong">
                                <i class="fa fa-phone"></i>
                                Call :</span><span>+45 61 80 01 14</span>
               </div>
            </div>
         </div>
      </div>
   </footer>

   <!--Scroll to top-->
   <div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-striped-arrow-up"></span></div>
</div>

<?php $this->endBody() ?>
<script type="text/javascript" src="<?php echo Yii::$app->request->baseUrl; ?>/assets/js/plugins.js"></script>

<script src="<?php echo Yii::$app->request->baseUrl; ?>/assets/plugins/bootstrap-sl-1.12.1/bootstrap-select.js"></script>

<!-- jQuery ui js -->
<script src="<?php echo Yii::$app->request->baseUrl; ?>/assets/plugins/jquery-ui-1.11.4/jquery-ui.js"></script>

<?php // \common\components\Misc::setFlash('danger', 'sadfasdfas');
if (Yii::$app->session->hasFlash('flash')): ?>
   <script>
      var flash = <?php echo Yii::$app->session->getFlash('flash'); ?>;
   </script>
<?php endif; ?>
<!--Revolution Slider-->

<?php if ((Yii::$app->params['site-settings']['show_slider']['content'] == 1) && Yii::$app->controller->id == 'site' && Yii::$app->controller->action->id == 'index'): ?>
   <!--Revolution Slider-->
   <script type="text/javascript" src="<?php echo Yii::$app->request->baseUrl; ?>/assets/slider/js/jquery.themepunch.tools.min.js"></script>
   <script type="text/javascript" src="<?php echo Yii::$app->request->baseUrl; ?>/assets/slider/js/jquery.themepunch.revolution.min.js"></script>
   <script type="text/javascript" src="<?php echo Yii::$app->request->baseUrl; ?>/assets/js/slider_init.js"></script>

<?php endif; ?>

<!-- custom script -->

<script src="<?php echo Yii::$app->request->baseUrl; ?>/assets/js/custom.js"></script>
<script src="<?php echo Yii::$app->request->baseUrl; ?>/assets/js/message.js"></script>

<script>
   /* ==== CSRF TOKEN ==== */

   $.ajaxSetup({
      data: {
         '_csrf-frontend': $('meta[name="csrf-token"]').prop('content')
      }
   });
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-136941732-1"></script>

<script>
   window.dataLayer = window.dataLayer || [];

   function gtag() {
      dataLayer.push(arguments);
   }

   gtag('js', new Date());

   gtag('config', 'UA-136941732-1');
</script>

</body>
</html>
<?php $this->endPage() ?>












































