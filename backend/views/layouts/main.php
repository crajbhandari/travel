<?php
/* @var $this \yii\web\View */

/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
   <!DOCTYPE html>
   <html lang = "<?= Yii::$app->language ?>">
   <head>
      <meta charset = "<?= Yii::$app->charset ?>">
      <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
      <meta name = "viewport" content = "width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
       <?php $this->registerCsrfMetaTags() ?>

      <meta name = "csrf-param" content = "<?php echo Yii::$app->request->csrfParam; ?>">

      <title><?php echo Yii::$app->params['system_name'] ?> - <?= Html::encode($this->title) ?></title>

      <!--== FAV ICON ==-->
      <link rel = "shortcut icon" href = "<?php echo Yii::$app->request->baseUrl ?>/../common/assets/images/uploads/fav.png">

      <!-- CATEGORY -->
      <link href = "<?php echo Yii::$app->request->baseUrl; ?>/../common/assets/css/margins-paddings.css" rel = "stylesheet">

      <!-- App favicon -->
      <link rel = "shortcut icon" href = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/favicon.ico">

      <!-- Bootstrap Css -->
      <link href = "<?php echo Yii::$app->request->baseUrl; ?>/resources/css/bootstrap.min.css" id = "bootstrap-style" rel = "stylesheet" type = "text/css"/>
      <!-- Icons Css -->
      <link href = "<?php echo Yii::$app->request->baseUrl; ?>/resources/css/icons.min.css" rel = "stylesheet" type = "text/css"/>
      <!-- App Css-->
      <link href = "<?php echo Yii::$app->request->baseUrl; ?>/resources/css/app.min.css" id = "app-style" rel = "stylesheet" type = "text/css"/>

      <!-- This is where page wise CSS will show up  -->
       <?php $this->head() ?>

      <link href = "<?php echo Yii::$app->request->baseUrl; ?>/resources/css/overrides.css" rel = "stylesheet">

      <!--    <script src = "https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>-->
      <!--    <script src = "https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>-->
      <script>
         var baseUrl = "<?php echo Yii::$app->request->baseUrl; ?>";
         var pop = "";
      </script>
       <?php if (Yii::$app->session->hasFlash('pop')) { ?>
          <script>
             pop = <?php echo Yii::$app->session->getFlash('pop'); ?>;
          </script>
       <?php } ?>

   </head>
   <body data-sidebar = "dark">
   <?php $this->beginBody() ?>
   <!-- Begin page -->
   <div id = "layout-wrapper">

      <header id = "page-topbar">
         <div class = "navbar-header">
            <div class = "d-flex">
               <!-- LOGO -->
               <div class = "navbar-brand-box">
                  <a href = "index.html" class = "logo logo-dark">
                                <span class = "logo-sm">
                                    <img src = "<?= Yii::$app->request->baseUrl; ?>/resources/images/logo.svg" alt = "" height = "22">
                                </span>
                     <span class = "logo-lg">
                                    <img src = "<?= Yii::$app->request->baseUrl; ?>/resources/images/logo-dark.png" alt = "" height = "17">
                                </span>
                  </a>

                  <a href = "index.html" class = "logo logo-light">
                                <span class = "logo-sm">
                                    <img src = "<?= Yii::$app->request->baseUrl; ?>/resources/images/logo-light.svg" alt = "" height = "22">
                                </span>
                     <span class = "logo-lg">
                                    <img src = "<?= Yii::$app->request->baseUrl; ?>/resources/images/logo-light.png" alt = "" height = "19">
                                </span>
                  </a>
               </div>

               <button type = "button" class = "btn btn-sm px-3 font-size-16 header-item waves-effect" id = "vertical-menu-btn">
                  <i class = "fa fa-fw fa-bars"></i>
               </button>

               <!-- App Search-->
               <form class = "app-search d-none d-lg-block">
                  <div class = "position-relative">
                     <input type = "text" class = "form-control" placeholder = "Search...">
                     <span class = "bx bx-search-alt"></span>
                  </div>
               </form>

               <div class = "dropdown dropdown-mega d-none d-lg-block ml-2">
                  <button type = "button" class = "btn header-item waves-effect" data-toggle = "dropdown" aria-haspopup = "false" aria-expanded = "false">
                     Mega Menu
                     <i class = "mdi mdi-chevron-down"></i>
                  </button>
                  <div class = "dropdown-menu dropdown-megamenu">
                     <div class = "row">
                        <div class = "col-sm-8">

                           <div class = "row">
                              <div class = "col-md-4">
                                 <h5 class = "font-size-14 mt-0">UI Components</h5>
                                 <ul class = "list-unstyled megamenu-list">
                                    <li>
                                       <a href = "javascript:void(0);">Lightbox</a>
                                    </li>
                                    <li>
                                       <a href = "javascript:void(0);">Range Slider</a>
                                    </li>
                                    <li>
                                       <a href = "javascript:void(0);">Sweet Alert</a>
                                    </li>
                                    <li>
                                       <a href = "javascript:void(0);">Rating</a>
                                    </li>
                                    <li>
                                       <a href = "javascript:void(0);">Forms</a>
                                    </li>
                                    <li>
                                       <a href = "javascript:void(0);">Tables</a>
                                    </li>
                                    <li>
                                       <a href = "javascript:void(0);">Charts</a>
                                    </li>
                                 </ul>
                              </div>

                              <div class = "col-md-4">
                                 <h5 class = "font-size-14 mt-0">Applications</h5>
                                 <ul class = "list-unstyled megamenu-list">
                                    <li>
                                       <a href = "javascript:void(0);">Ecommerce</a>
                                    </li>
                                    <li>
                                       <a href = "javascript:void(0);">Calendar</a>
                                    </li>
                                    <li>
                                       <a href = "javascript:void(0);">Email</a>
                                    </li>
                                    <li>
                                       <a href = "javascript:void(0);">Projects</a>
                                    </li>
                                    <li>
                                       <a href = "javascript:void(0);">Tasks</a>
                                    </li>
                                    <li>
                                       <a href = "javascript:void(0);">Contacts</a>
                                    </li>
                                 </ul>
                              </div>

                              <div class = "col-md-4">
                                 <h5 class = "font-size-14 mt-0">Extra Pages</h5>
                                 <ul class = "list-unstyled megamenu-list">
                                    <li>
                                       <a href = "javascript:void(0);">Light Sidebar</a>
                                    </li>
                                    <li>
                                       <a href = "javascript:void(0);">Compact Sidebar</a>
                                    </li>
                                    <li>
                                       <a href = "javascript:void(0);">Horizontal layout</a>
                                    </li>
                                    <li>
                                       <a href = "javascript:void(0);">Maintenance</a>
                                    </li>
                                    <li>
                                       <a href = "javascript:void(0);">Coming Soon</a>
                                    </li>
                                    <li>
                                       <a href = "javascript:void(0);">Timeline</a>
                                    </li>
                                    <li>
                                       <a href = "javascript:void(0);">FAQs</a>
                                    </li>

                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class = "col-sm-4">
                           <div class = "row">
                              <div class = "col-sm-6">
                                 <h5 class = "font-size-14 mt-0">UI Components</h5>
                                 <ul class = "list-unstyled megamenu-list">
                                    <li>
                                       <a href = "javascript:void(0);">Lightbox</a>
                                    </li>
                                    <li>
                                       <a href = "javascript:void(0);">Range Slider</a>
                                    </li>
                                    <li>
                                       <a href = "javascript:void(0);">Sweet Alert</a>
                                    </li>
                                    <li>
                                       <a href = "javascript:void(0);">Rating</a>
                                    </li>
                                    <li>
                                       <a href = "javascript:void(0);">Forms</a>
                                    </li>
                                    <li>
                                       <a href = "javascript:void(0);">Tables</a>
                                    </li>
                                    <li>
                                       <a href = "javascript:void(0);">Charts</a>
                                    </li>
                                 </ul>
                              </div>

                              <div class = "col-sm-5">
                                 <div>
                                    <img src = "<?= Yii::$app->request->baseUrl; ?>/resources/images/megamenu-img.png" alt = "" class = "img-fluid mx-auto d-block">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

                  </div>
               </div>
            </div>

            <div class = "d-flex">

               <div class = "dropdown d-inline-block d-lg-none ml-2">
                  <button type = "button" class = "btn header-item noti-icon waves-effect" id = "page-header-search-dropdown"
                          data-toggle = "dropdown" aria-haspopup = "true" aria-expanded = "false">
                     <i class = "mdi mdi-magnify"></i>
                  </button>
                  <div class = "dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                       aria-labelledby = "page-header-search-dropdown">

                     <form class = "p-3">
                        <div class = "form-group m-0">
                           <div class = "input-group">
                              <input type = "text" class = "form-control" placeholder = "Search ..." aria-label = "Recipient's username">
                              <div class = "input-group-append">
                                 <button class = "btn btn-primary" type = "submit"><i class = "mdi mdi-magnify"></i></button>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>

               <div class = "dropdown d-inline-block">
                  <button type = "button" class = "btn header-item waves-effect"
                          data-toggle = "dropdown" aria-haspopup = "true" aria-expanded = "false">
                     <img class = "" src = "<?= Yii::$app->request->baseUrl; ?>/resources/images/flags/us.jpg" alt = "Header Language" height = "16">
                  </button>
                  <div class = "dropdown-menu dropdown-menu-right">

                     <!-- item-->
                     <a href = "javascript:void(0);" class = "dropdown-item notify-item">
                        <img src = "<?= Yii::$app->request->baseUrl; ?>/resources/images/flags/spain.jpg" alt = "user-image" class = "mr-1" height = "12"> <span class = "align-middle">Spanish</span>
                     </a>

                     <!-- item-->
                     <a href = "javascript:void(0);" class = "dropdown-item notify-item">
                        <img src = "<?= Yii::$app->request->baseUrl; ?>/resources/images/flags/germany.jpg" alt = "user-image" class = "mr-1" height = "12"> <span class = "align-middle">German</span>
                     </a>

                     <!-- item-->
                     <a href = "javascript:void(0);" class = "dropdown-item notify-item">
                        <img src = "<?= Yii::$app->request->baseUrl; ?>/resources/images/flags/italy.jpg" alt = "user-image" class = "mr-1" height = "12"> <span class = "align-middle">Italian</span>
                     </a>

                     <!-- item-->
                     <a href = "javascript:void(0);" class = "dropdown-item notify-item">
                        <img src = "<?= Yii::$app->request->baseUrl; ?>/resources/images/flags/russia.jpg" alt = "user-image" class = "mr-1" height = "12"> <span class = "align-middle">Russian</span>
                     </a>
                  </div>
               </div>

               <div class = "dropdown d-none d-lg-inline-block ml-1">
                  <button type = "button" class = "btn header-item noti-icon waves-effect"
                          data-toggle = "dropdown" aria-haspopup = "true" aria-expanded = "false">
                     <i class = "bx bx-customize"></i>
                  </button>
                  <div class = "dropdown-menu dropdown-menu-lg dropdown-menu-right">
                     <div class = "px-lg-2">
                        <div class = "row no-gutters">
                           <div class = "col">
                              <a class = "dropdown-icon-item" href = "#">
                                 <img src = "<?= Yii::$app->request->baseUrl; ?>/resources/images/brands/github.png" alt = "Github">
                                 <span>GitHub</span>
                              </a>
                           </div>
                           <div class = "col">
                              <a class = "dropdown-icon-item" href = "#">
                                 <img src = "<?= Yii::$app->request->baseUrl; ?>/resources/images/brands/bitbucket.png" alt = "bitbucket">
                                 <span>Bitbucket</span>
                              </a>
                           </div>
                           <div class = "col">
                              <a class = "dropdown-icon-item" href = "#">
                                 <img src = "<?= Yii::$app->request->baseUrl; ?>/resources/images/brands/dribbble.png" alt = "dribbble">
                                 <span>Dribbble</span>
                              </a>
                           </div>
                        </div>

                        <div class = "row no-gutters">
                           <div class = "col">
                              <a class = "dropdown-icon-item" href = "#">
                                 <img src = "<?= Yii::$app->request->baseUrl; ?>/resources/images/brands/dropbox.png" alt = "dropbox">
                                 <span>Dropbox</span>
                              </a>
                           </div>
                           <div class = "col">
                              <a class = "dropdown-icon-item" href = "#">
                                 <img src = "<?= Yii::$app->request->baseUrl; ?>/resources/images/brands/mail_chimp.png" alt = "mail_chimp">
                                 <span>Mail Chimp</span>
                              </a>
                           </div>
                           <div class = "col">
                              <a class = "dropdown-icon-item" href = "#">
                                 <img src = "<?= Yii::$app->request->baseUrl; ?>/resources/images/brands/slack.png" alt = "slack">
                                 <span>Slack</span>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class = "dropdown d-none d-lg-inline-block ml-1">
                  <button type = "button" class = "btn header-item noti-icon waves-effect" data-toggle = "fullscreen">
                     <i class = "bx bx-fullscreen"></i>
                  </button>
               </div>

               <div class = "dropdown d-inline-block">
                  <button type = "button" class = "btn header-item noti-icon waves-effect" id = "page-header-notifications-dropdown"
                          data-toggle = "dropdown" aria-haspopup = "true" aria-expanded = "false">
                     <i class = "bx bx-bell bx-tada"></i>
                     <span class = "badge badge-danger badge-pill">3</span>
                  </button>
                  <div class = "dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                       aria-labelledby = "page-header-notifications-dropdown">
                     <div class = "p-3">
                        <div class = "row align-items-center">
                           <div class = "col">
                              <h6 class = "m-0"> Notifications </h6>
                           </div>
                           <div class = "col-auto">
                              <a href = "#!" class = "small"> View All</a>
                           </div>
                        </div>
                     </div>
                     <div data-simplebar style = "max-height: 230px;">
                        <a href = "#" class = "text-reset notification-item">
                           <div class = "media">
                              <div class = "avatar-xs mr-3">
                                                <span class = "avatar-title bg-primary rounded-circle font-size-16">
                                                    <i class = "bx bx-cart"></i>
                                                </span>
                              </div>
                              <div class = "media-body">
                                 <h6 class = "mt-0 mb-1">Your order is placed</h6>
                                 <div class = "font-size-12 text-muted">
                                    <p class = "mb-1">If several languages coalesce the grammar</p>
                                    <p class = "mb-0"><i class = "mdi mdi-clock-outline"></i> 3 min ago</p>
                                 </div>
                              </div>
                           </div>
                        </a>
                        <a href = "#" class = "text-reset notification-item">
                           <div class = "media">
                              <img src = "<?= Yii::$app->request->baseUrl; ?>/resources/images/users/avatar-3.jpg"
                                   class = "mr-3 rounded-circle avatar-xs" alt = "user-pic">
                              <div class = "media-body">
                                 <h6 class = "mt-0 mb-1">James Lemire</h6>
                                 <div class = "font-size-12 text-muted">
                                    <p class = "mb-1">It will seem like simplified English.</p>
                                    <p class = "mb-0"><i class = "mdi mdi-clock-outline"></i> 1 hours ago</p>
                                 </div>
                              </div>
                           </div>
                        </a>
                        <a href = "#" class = "text-reset notification-item">
                           <div class = "media">
                              <div class = "avatar-xs mr-3">
                                                <span class = "avatar-title bg-success rounded-circle font-size-16">
                                                    <i class = "bx bx-badge-check"></i>
                                                </span>
                              </div>
                              <div class = "media-body">
                                 <h6 class = "mt-0 mb-1">Your item is shipped</h6>
                                 <div class = "font-size-12 text-muted">
                                    <p class = "mb-1">If several languages coalesce the grammar</p>
                                    <p class = "mb-0"><i class = "mdi mdi-clock-outline"></i> 3 min ago</p>
                                 </div>
                              </div>
                           </div>
                        </a>

                        <a href = "#" class = "text-reset notification-item">
                           <div class = "media">
                              <img src = "<?= Yii::$app->request->baseUrl; ?>/resources/images/users/avatar-4.jpg"
                                   class = "mr-3 rounded-circle avatar-xs" alt = "user-pic">
                              <div class = "media-body">
                                 <h6 class = "mt-0 mb-1">Salena Layfield</h6>
                                 <div class = "font-size-12 text-muted">
                                    <p class = "mb-1">As a skeptical Cambridge friend of mine occidental.</p>
                                    <p class = "mb-0"><i class = "mdi mdi-clock-outline"></i> 1 hours ago</p>
                                 </div>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class = "p-2 border-top">
                        <a class = "btn btn-sm btn-link font-size-14 btn-block text-center" href = "javascript:void(0)">
                           <i class = "mdi mdi-arrow-right-circle mr-1"></i> View More..
                        </a>
                     </div>
                  </div>
               </div>

               <div class = "dropdown d-inline-block">
                  <button type = "button" class = "btn header-item waves-effect" id = "page-header-user-dropdown"
                          data-toggle = "dropdown" aria-haspopup = "true" aria-expanded = "false">
                     <img class = "rounded-circle header-profile-user" src = "<?= Yii::$app->request->baseUrl; ?>/resources/images/users/avatar-1.jpg"
                          alt = "Header Avatar">
                     <span class = "d-none d-xl-inline-block ml-1">Henry</span>
                     <i class = "mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                  </button>
                  <div class = "dropdown-menu dropdown-menu-right">
                     <!-- item-->
                     <a class = "dropdown-item" href = "#"><i class = "bx bx-user font-size-16 align-middle mr-1"></i> Profile</a>
                     <a class = "dropdown-item" href = "#"><i class = "bx bx-wallet font-size-16 align-middle mr-1"></i> My Wallet</a>
                     <a class = "dropdown-item d-block" href = "#"><span class = "badge badge-success float-right">11</span><i class = "bx bx-wrench font-size-16 align-middle mr-1"></i> Settings</a>
                     <a class = "dropdown-item" href = "#"><i class = "bx bx-lock-open font-size-16 align-middle mr-1"></i> Lock screen</a>
                     <div class = "dropdown-divider"></div>
                     <a class = "dropdown-item text-danger" href = "#"><i class = "bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i> Logout</a>
                  </div>
               </div>

               <div class = "dropdown d-inline-block">
                  <button type = "button" class = "btn header-item noti-icon right-bar-toggle waves-effect">
                     <i class = "bx bx-cog bx-spin"></i>
                  </button>
               </div>

            </div>
         </div>
      </header> <!-- ========== Left Sidebar Start ========== -->
      <div class = "vertical-menu">

         <div data-simplebar class = "h-100">

            <!--- Sidemenu -->
            <div id = "sidebar-menu">
               <!-- Left Menu Start -->
               <ul class = "metismenu list-unstyled" id = "side-menu">
                  <li class = "menu-title">Menu</li>

                  <li>
                     <a href = "javascript: void(0);" class = "waves-effect">
                        <i class = "bx bx-home-circle"></i><span class = "badge badge-pill badge-info float-right">03</span>
                        <span>Dashboards</span>
                     </a>
                     <ul class = "sub-menu" aria-expanded = "false">
                        <li><a href = "index.html">Default</a></li>
                        <li><a href = "dashboard-saas.html">Saas</a></li>
                        <li><a href = "dashboard-crypto.html">Crypto</a></li>
                     </ul>
                  </li>

                  <li>
                     <a href = "javascript: void(0);" class = "has-arrow waves-effect">
                        <i class = "bx bx-layout"></i>
                        <span>Layouts</span>
                     </a>
                     <ul class = "sub-menu" aria-expanded = "false">
                        <li><a href = "layouts-horizontal.html">Horizontal</a></li>
                        <li><a href = "layouts-light-sidebar.html">Light Sidebar</a></li>
                        <li><a href = "layouts-compact-sidebar.html">Compact Sidebar</a></li>
                        <li><a href = "layouts-icon-sidebar.html">Icon Sidebar</a></li>
                        <li><a href = "layouts-boxed.html">Boxed Width</a></li>
                        <li><a href = "layouts-preloader.html">Preloader</a></li>
                        <li><a href = "layouts-colored-sidebar.html">Colored Sidebar</a></li>
                     </ul>
                  </li>

                  <li class = "menu-title">Apps</li>

                  <li>
                     <a href = "calendar.html" class = " waves-effect">
                        <i class = "bx bx-calendar"></i>
                        <span>Calendar</span>
                     </a>
                  </li>

                  <li>
                     <a href = "chat.html" class = " waves-effect">
                        <i class = "bx bx-chat"></i>
                        <span class = "badge badge-pill badge-success float-right">New</span>
                        <span>Chat</span>
                     </a>
                  </li>

                  <li>
                     <a href = "javascript: void(0);" class = "has-arrow waves-effect">
                        <i class = "bx bx-store"></i>
                        <span>Ecommerce</span>
                     </a>
                     <ul class = "sub-menu" aria-expanded = "false">
                        <li><a href = "ecommerce-products.html">Products</a></li>
                        <li><a href = "ecommerce-product-detail.html">Product Detail</a></li>
                        <li><a href = "ecommerce-orders.html">Orders</a></li>
                        <li><a href = "ecommerce-customers.html">Customers</a></li>
                        <li><a href = "ecommerce-cart.html">Cart</a></li>
                        <li><a href = "ecommerce-checkout.html">Checkout</a></li>
                        <li><a href = "ecommerce-shops.html">Shops</a></li>
                        <li><a href = "ecommerce-add-product.html">Add Product</a></li>
                     </ul>
                  </li>

                  <li>
                     <a href = "javascript: void(0);" class = "has-arrow waves-effect">
                        <i class = "bx bx-bitcoin"></i>
                        <span>Crypto</span>
                     </a>
                     <ul class = "sub-menu" aria-expanded = "false">
                        <li><a href = "crypto-wallet.html">Wallet</a></li>
                        <li><a href = "crypto-buy-sell.html">Buy/Sell</a></li>
                        <li><a href = "crypto-exchange.html">Exchange</a></li>
                        <li><a href = "crypto-lending.html">Lending</a></li>
                        <li><a href = "crypto-orders.html">Orders</a></li>
                        <li><a href = "crypto-kyc-application.html">KYC Application</a></li>
                        <li><a href = "crypto-ico-landing.html">ICO Landing</a></li>
                     </ul>
                  </li>

                  <li>
                     <a href = "javascript: void(0);" class = "has-arrow waves-effect">
                        <i class = "bx bx-envelope"></i>
                        <span>Email</span>
                     </a>
                     <ul class = "sub-menu" aria-expanded = "false">
                        <li><a href = "email-inbox.html">Inbox</a></li>
                        <li><a href = "email-read.html">Read Email</a></li>
                     </ul>
                  </li>

                  <li>
                     <a href = "javascript: void(0);" class = "has-arrow waves-effect">
                        <i class = "bx bx-receipt"></i>
                        <span>Invoices</span>
                     </a>
                     <ul class = "sub-menu" aria-expanded = "false">
                        <li><a href = "invoices-list.html">Invoice List</a></li>
                        <li><a href = "invoices-detail.html">Invoice Detail</a></li>
                     </ul>
                  </li>

                  <li>
                     <a href = "javascript: void(0);" class = "has-arrow waves-effect">
                        <i class = "bx bx-briefcase-alt-2"></i>
                        <span>Projects</span>
                     </a>
                     <ul class = "sub-menu" aria-expanded = "false">
                        <li><a href = "projects-grid.html">Projects Grid</a></li>
                        <li><a href = "projects-list.html">Projects List</a></li>
                        <li><a href = "projects-overview.html">Project Overview</a></li>
                        <li><a href = "projects-create.html">Create New</a></li>
                     </ul>
                  </li>

                  <li>
                     <a href = "javascript: void(0);" class = "has-arrow waves-effect">
                        <i class = "bx bx-task"></i>
                        <span>Tasks</span>
                     </a>
                     <ul class = "sub-menu" aria-expanded = "false">
                        <li><a href = "tasks-list.html">Task List</a></li>
                        <li><a href = "tasks-kanban.html">Kanban Board</a></li>
                        <li><a href = "tasks-create.html">Create Task</a></li>
                     </ul>
                  </li>

                  <li>
                     <a href = "javascript: void(0);" class = "has-arrow waves-effect">
                        <i class = "bx bxs-user-detail"></i>
                        <span>Contacts</span>
                     </a>
                     <ul class = "sub-menu" aria-expanded = "false">
                        <li><a href = "contacts-grid.html">User Grid</a></li>
                        <li><a href = "contacts-list.html">User List</a></li>
                        <li><a href = "contacts-profile.html">Profile</a></li>
                     </ul>
                  </li>

                  <li class = "menu-title">Pages</li>

                  <li>
                     <a href = "javascript: void(0);" class = "has-arrow waves-effect">
                        <i class = "bx bx-user-circle"></i>
                        <span>Authentication</span>
                     </a>
                     <ul class = "sub-menu" aria-expanded = "false">
                        <li><a href = "auth-login.html">Login</a></li>
                        <li><a href = "auth-register.html">Register</a></li>
                        <li><a href = "auth-recoverpw.html">Recover Password</a></li>
                        <li><a href = "auth-lock-screen.html">Lock Screen</a></li>
                     </ul>
                  </li>

                  <li>
                     <a href = "javascript: void(0);" class = "has-arrow waves-effect">
                        <i class = "bx bx-file"></i>
                        <span>Utility</span>
                     </a>
                     <ul class = "sub-menu" aria-expanded = "false">
                        <li><a href = "pages-starter.html">Starter Page</a></li>
                        <li><a href = "pages-maintenance.html">Maintenance</a></li>
                        <li><a href = "pages-comingsoon.html">Coming Soon</a></li>
                        <li><a href = "pages-timeline.html">Timeline</a></li>
                        <li><a href = "pages-faqs.html">FAQs</a></li>
                        <li><a href = "pages-pricing.html">Pricing</a></li>
                        <li><a href = "pages-404.html">Error 404</a></li>
                        <li><a href = "pages-500.html">Error 500</a></li>
                     </ul>
                  </li>

                  <li class = "menu-title">Components</li>

                  <li>
                     <a href = "javascript: void(0);" class = "has-arrow waves-effect">
                        <i class = "bx bx-tone"></i>
                        <span>UI Elements</span>
                     </a>
                     <ul class = "sub-menu" aria-expanded = "false">
                        <li><a href = "ui-alerts.html">Alerts</a></li>
                        <li><a href = "ui-buttons.html">Buttons</a></li>
                        <li><a href = "ui-cards.html">Cards</a></li>
                        <li><a href = "ui-carousel.html">Carousel</a></li>
                        <li><a href = "ui-dropdowns.html">Dropdowns</a></li>
                        <li><a href = "ui-grid.html">Grid</a></li>
                        <li><a href = "ui-images.html">Images</a></li>
                        <li><a href = "ui-lightbox.html">Lightbox</a></li>
                        <li><a href = "ui-modals.html">Modals</a></li>
                        <li><a href = "ui-rangeslider.html">Range Slider</a></li>
                        <li><a href = "ui-session-timeout.html">Session Timeout</a></li>
                        <li><a href = "ui-progressbars.html">Progress Bars</a></li>
                        <li><a href = "ui-sweet-alert.html">Sweet-Alert</a></li>
                        <li><a href = "ui-tabs-accordions.html">Tabs & Accordions</a></li>
                        <li><a href = "ui-typography.html">Typography</a></li>
                        <li><a href = "ui-video.html">Video</a></li>
                        <li><a href = "ui-general.html">General</a></li>
                        <li><a href = "ui-colors.html">Colors</a></li>
                        <li><a href = "ui-rating.html">Rating</a></li>
                        <li><a href = "ui-notifications.html">Notifications</a></li>
                        <li><a href = "ui-image-cropper.html">Image Cropper</a></li>
                     </ul>
                  </li>

                  <li>
                     <a href = "javascript: void(0);" class = "waves-effect">
                        <i class = "bx bxs-eraser"></i>
                        <span class = "badge badge-pill badge-danger float-right">6</span>
                        <span>Forms</span>
                     </a>
                     <ul class = "sub-menu" aria-expanded = "false">
                        <li><a href = "form-elements.html">Form Elements</a></li>
                        <li><a href = "form-validation.html">Form Validation</a></li>
                        <li><a href = "form-advanced.html">Form Advanced</a></li>
                        <li><a href = "form-editors.html">Form Editors</a></li>
                        <li><a href = "form-uploads.html">Form File Upload</a></li>
                        <li><a href = "form-xeditable.html">Form Xeditable</a></li>
                        <li><a href = "form-repeater.html">Form Repeater</a></li>
                        <li><a href = "form-wizard.html">Form Wizard</a></li>
                        <li><a href = "form-mask.html">Form Mask</a></li>
                     </ul>
                  </li>

                  <li>
                     <a href = "javascript: void(0);" class = "has-arrow waves-effect">
                        <i class = "bx bx-list-ul"></i>
                        <span>Tables</span>
                     </a>
                     <ul class = "sub-menu" aria-expanded = "false">
                        <li><a href = "tables-basic.html">Basic Tables</a></li>
                        <li><a href = "tables-datatable.html">Data Tables</a></li>
                        <li><a href = "tables-responsive.html">Responsive Table</a></li>
                        <li><a href = "tables-editable.html">Editable Table</a></li>
                     </ul>
                  </li>

                  <li>
                     <a href = "javascript: void(0);" class = "has-arrow waves-effect">
                        <i class = "bx bxs-bar-chart-alt-2"></i>
                        <span>Charts</span>
                     </a>
                     <ul class = "sub-menu" aria-expanded = "false">
                        <li><a href = "charts-apex.html">Apex Charts</a></li>
                        <li><a href = "charts-echart.html">E Charts</a></li>
                        <li><a href = "charts-chartjs.html">Chartjs Chart</a></li>
                        <li><a href = "charts-flot.html">Flot Chart</a></li>
                        <li><a href = "charts-tui.html">Toast UI Chart</a></li>
                        <li><a href = "charts-knob.html">Jquery Knob Chart</a></li>
                        <li><a href = "charts-sparkline.html">Sparkline Chart</a></li>
                     </ul>
                  </li>

                  <li>
                     <a href = "javascript: void(0);" class = "has-arrow waves-effect">
                        <i class = "bx bx-aperture"></i>
                        <span>Icons</span>
                     </a>
                     <ul class = "sub-menu" aria-expanded = "false">
                        <li><a href = "icons-boxicons.html">Boxicons</a></li>
                        <li><a href = "icons-materialdesign.html">Material Design</a></li>
                        <li><a href = "icons-dripicons.html">Dripicons</a></li>
                        <li><a href = "icons-fontawesome.html">Font awesome</a></li>
                     </ul>
                  </li>

                  <li>
                     <a href = "javascript: void(0);" class = "has-arrow waves-effect">
                        <i class = "bx bx-map"></i>
                        <span>Maps</span>
                     </a>
                     <ul class = "sub-menu" aria-expanded = "false">
                        <li><a href = "maps-google.html">Google Maps</a></li>
                        <li><a href = "maps-vector.html">Vector Maps</a></li>
                        <li><a href = "maps-leaflet.html">Leaflet Maps</a></li>
                     </ul>
                  </li>

                  <li>
                     <a href = "javascript: void(0);" class = "has-arrow waves-effect">
                        <i class = "bx bx-share-alt"></i>
                        <span>Multi Level</span>
                     </a>
                     <ul class = "sub-menu" aria-expanded = "true">
                        <li><a href = "javascript: void(0);">Level 1.1</a></li>
                        <li><a href = "javascript: void(0);" class = "has-arrow">Level 1.2</a>
                           <ul class = "sub-menu" aria-expanded = "true">
                              <li><a href = "javascript: void(0);">Level 2.1</a></li>
                              <li><a href = "javascript: void(0);">Level 2.2</a></li>
                           </ul>
                        </li>
                     </ul>
                  </li>

               </ul>
            </div>
            <!-- Sidebar -->
         </div>
      </div>
      <!-- Left Sidebar End -->

      <!-- ============================================================== -->
      <!-- Start right Content here -->
      <!-- ============================================================== -->
      <div class = "main-content">
         <div class = "page-content">
             <?= $content ?>
         </div>

         <footer class = "footer">
            <div class = "container-fluid">
               <div class = "row">
                  <div class = "col-sm-6">
                     <script>document.write(new Date().getFullYear())</script>
                     © Skote.
                  </div>
                  <div class = "col-sm-6">
                     <div class = "text-sm-right d-none d-sm-block">
                        Design & Develop by Themesbrand
                     </div>
                  </div>
               </div>
            </div>
         </footer>
      </div>
      <!-- end main content-->

   </div>
   <!-- END layout-wrapper -->

   <!-- Modal -->
   <div class = "modal fade exampleModal" tabindex = "-1" role = "dialog" aria-labelledby = "exampleModalLabel" aria-hidden = "true">
      <div class = "modal-dialog modal-dialog-centered" role = "document">
         <div class = "modal-content">
            <div class = "modal-header">
               <h5 class = "modal-title" id = "exampleModalLabel">Order Details</h5>
               <button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close">
                  <span aria-hidden = "true">&times;</span>
               </button>
            </div>
            <div class = "modal-body">
               <p class = "mb-2">Product id: <span class = "text-primary">#SK2540</span></p>
               <p class = "mb-4">Billing Name: <span class = "text-primary">Neal Matthews</span></p>

               <div class = "table-responsive">
                  <table class = "table table-centered table-nowrap">
                     <thead>
                     <tr>
                        <th scope = "col">Product</th>
                        <th scope = "col">Product Name</th>
                        <th scope = "col">Price</th>
                     </tr>
                     </thead>
                     <tbody>
                     <tr>
                        <th scope = "row">
                           <div>
                              <img src = "<?= Yii::$app->request->baseUrl; ?>/resources/images/product/img-7.png" alt = "" class = "avatar-sm">
                           </div>
                        </th>
                        <td>
                           <div>
                              <h5 class = "text-truncate font-size-14">Wireless Headphone (Black)</h5>
                              <p class = "text-muted mb-0">$ 225 x 1</p>
                           </div>
                        </td>
                        <td>$ 255</td>
                     </tr>
                     <tr>
                        <th scope = "row">
                           <div>
                              <img src = "<?= Yii::$app->request->baseUrl; ?>/resources/images/product/img-4.png" alt = "" class = "avatar-sm">
                           </div>
                        </th>
                        <td>
                           <div>
                              <h5 class = "text-truncate font-size-14">Phone patterned cases</h5>
                              <p class = "text-muted mb-0">$ 145 x 1</p>
                           </div>
                        </td>
                        <td>$ 145</td>
                     </tr>
                     <tr>
                        <td colspan = "2">
                           <h6 class = "m-0 text-right">Sub Total:</h6>
                        </td>
                        <td>
                           $ 400
                        </td>
                     </tr>
                     <tr>
                        <td colspan = "2">
                           <h6 class = "m-0 text-right">Shipping:</h6>
                        </td>
                        <td>
                           Free
                        </td>
                     </tr>
                     <tr>
                        <td colspan = "2">
                           <h6 class = "m-0 text-right">Total:</h6>
                        </td>
                        <td>
                           $ 400
                        </td>
                     </tr>
                     </tbody>
                  </table>
               </div>
            </div>
            <div class = "modal-footer">
               <button type = "button" class = "btn btn-secondary" data-dismiss = "modal">Close</button>
            </div>
         </div>
      </div>
   </div>
   <!-- end modal -->


   <?php if (Yii::$app->session->hasFlash('flash')): ?>
      <script>
         notifyFlash(<?= Yii::$app->session->getFlash('flash'); ?>);
      </script>
   <?php endif; ?>

   <!-- JAVASCRIPT -->
   <script src = "<?= Yii::$app->request->baseUrl; ?>/resources/libs/jquery/jquery.min.js"></script>
   <script src = "<?= Yii::$app->request->baseUrl; ?>/resources/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src = "<?= Yii::$app->request->baseUrl; ?>/resources/libs/metismenu/metisMenu.min.js"></script>
   <script src = "<?= Yii::$app->request->baseUrl; ?>/resources/libs/simplebar/simplebar.min.js"></script>
   <script src = "<?= Yii::$app->request->baseUrl; ?>/resources/libs/node-waves/waves.min.js"></script>

   <!-- App js -->
   <script src = "<?= Yii::$app->request->baseUrl; ?>/resources/js/app.js"></script>

   <!-- CSRF TOKEN -->
   <script>
      $.ajaxSetup({
         data: {
            '<?php echo Yii::$app->request->csrfParam; ?>': '<?php echo Yii::$app->request->csrfToken; ?>'
         }
      });
   </script>

   <!-- This is where page wise JS will show up  -->
   <?php $this->endBody() ?>

   <script src = "<?= Yii::$app->request->baseUrl; ?>/resources/js/custom.js"></script>

   </body>
   </html>

<?php $this->endPage() ?>