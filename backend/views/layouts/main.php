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
      <meta name = "csrf-token" content = "<?php echo Yii::$app->request->csrfToken; ?>">

      <title><?php echo Yii::$app->params['system_name'] ?> - <?= Html::encode($this->title) ?></title>
      <!--== FAV ICON ==-->
      <link rel = "shortcut icon" href = "<?php echo Yii::$app->request->baseUrl ?>/../common/assets/images/uploads/fav.png">

      <!-- GOOGLE FONTS -->
      <link href = "https://fonts.googleapis.com/css?family=Open+Sans:300,400,600|Quicksand:300,400,500" rel = "stylesheet">
      <link href = "https://fonts.googleapis.com/icon?family=Material+Icons" rel = "stylesheet">
      <!-- FONT-AWESOME ICON CSS -->
      <link href = "http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel = "stylesheet">
      <link href = "<?php echo Yii::$app->request->baseUrl; ?>/resources/css/bootstrap.css" rel = "stylesheet">
      <link href = "<?php echo Yii::$app->request->baseUrl; ?>/resources/css/materialize.css" rel = "stylesheet">
      <link rel = "stylesheet" href = "<?php echo Yii::$app->request->baseUrl; ?>/resources/plugins/sweetalert/sweetalert.css">
      <link href = "<?php echo Yii::$app->request->baseUrl; ?>/resources/plugins/summernote/dist/summernote.css" rel = "stylesheet"/>
      <link rel = "stylesheet" href = "<?php echo Yii::$app->request->baseUrl; ?>/resources/plugins/select2/dist/css/select2.min.css">

      <link href = "<?php echo Yii::$app->request->baseUrl; ?>/resources/css/style.css" rel = "stylesheet">
      <link href = "<?php echo Yii::$app->request->baseUrl; ?>/resources/css/custom.css" rel = "stylesheet">


      <!--   <link href = "--><?php //echo Yii::$app->request->baseUrl; ?><!--/resources/css/overrides.css" rel = "stylesheet">-->
      <style>
         .notify_container {
            margin-top: 50px !important;
         }
      </style>
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
      <script src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/plugins/jquery/jquery.min.js"></script>
       <?php $this->head() ?>
   </head>

   <body>
   <?php $this->beginBody() ?>
   <!--== MAIN CONTRAINER ==-->
   <div class = "container-fluid sb1">
      <div class = "row">
         <!--== LOGO ==-->
         <div class = "col-md-2 col-sm-3 col-xs-6 sb1-1">
            <a href = "#" class = "btn-close-menu"><i class = "fa fa-times" aria-hidden = "true"></i></a>
            <a href = "#" class = "atab-menu"><i class = "fa fa-bars tab-menu" aria-hidden = "true"></i></a>
            <a href = "<?php echo Yii::$app->request->baseUrl; ?>" class = "logo"><img src = "<?php echo Yii::$app->request->baseUrl; ?>/../common/assets/images/logo.png" alt = "">

            </a>
         </div>
         <!--== SEARCH ==-->
         <div class = "col-md-6 col-sm-6 mob-hide">
            <!--            <form class="app-search">-->
            <!--                <input type="text" placeholder="Search..." class="form-control">-->
            <!--                <a href="#"><i class="fa fa-search"></i></a>-->
            <!--            </form>-->
         </div>
         <!--== NOTIFICATION ==-->
         <div class = "col-md-2 tab-hide">
            <div class = "top-not-cen">
               <a class = 'waves-effect btn-noti' href = '<?php echo Yii::$app->request->baseUrl; ?>/messages'>
                  <i class = "fa fa-envelope-o" aria-hidden = "true"></i>
                   <?php
                   if (Yii::$app->params['count_messages']['count_unseen'] > 0) { ?>
                      <span class = "message-noti">
                  <?php echo Yii::$app->params['count_messages']['count_unseen']; ?>
                   </span>
                   <?php }
                   ?>
               </a>
               <a class = 'waves-effect btn-noti' href = '#'>
                  <i class = "fa fa-tag" aria-hidden = "true"></i>
                  <span>5</span>
               </a>
            </div>
         </div>
         <!--== MY ACCCOUNT ==-->
         <div class = "col-md-2 col-sm-3 col-xs-6">
            <!-- Dropdown Trigger -->
            <a class = 'waves-effect dropdown-button top-user-pro' href = '#' data-activates = 'top-menu'>
               <img src = "<?php echo Yii::$app->request->baseUrl; ?>/../common/assets/images/uploads/1552110608s.jpg" alt = ""/>
               My Account
               <i class = "fa fa-angle-down" aria-hidden = "true"></i>
            </a>
            <!-- Dropdown Structure -->
            <ul id = 'top-menu' class = 'dropdown-content top-menu-sty'>
               <li><a href = "<?php echo Yii::$app->request->baseUrl; ?>/site/dashboard" class = "waves-effect"><i class = "fa fa-cogs" aria-hidden = "true"></i>Account Setting</a>
               </li>
               <li class = "divider"></li>
               <li><a href = "<?php echo Yii::$app->request->baseUrl; ?>/site/logout" class = "ho-dr-con-last waves-effect"><i class = "fa fa-sign-in" aria-hidden = "true"></i> Logout</a>
               </li>
            </ul>
         </div>
      </div>
   </div>

   <!--== BODY CONTNAINER ==-->
   <div class = "container-fluid sb2">
      <div class = "row">
         <div class = "sb2-1">
            <!--== USER INFO ==-->
            <div class = "sb2-12">
               <ul>
                  <li>
                     <a href = "<?php echo Yii::$app->request->baseUrl; ?>/site/dashboard"><img src = "<?php echo Yii::$app->request->baseUrl; ?>/../common/assets/images/uploads/1552110608s.jpg" alt = ""></a>
                  </li>
                  <li>
                     <h5><?php echo ucwords(Yii::$app->user->identity->name) ?> <span><?php echo ucwords(Yii::$app->user->identity->role) ?></span></h5>
                  </li>
                  <li></li>
               </ul>
            </div>
            <!--== LEFT MENU ==-->
            <div class = "sb2-13">
               <ul class = "collapsible" data-collapsible = "accordion">
                  <li><a href = "<?php echo Yii::$app->request->baseUrl; ?>/" class = "<?php echo (Yii::$app->controller->id == 'site' && Yii::$app->controller->action->id == 'index') ? 'menu-active' : '' ?>"><i class = "fa fa-bar-chart" aria-hidden = "true"></i> Dashboard</a>
                  </li>
                  <li><a href = "javascript:void(0)" class = "collapsible-header <?php echo ($this->title == 'Blog') ? 'menu-active' : '' ?>"><i class = "fa fa-picture-o" aria-hidden = "true"></i> Blog</a>
                     <div class = "collapsible-body left-sub-menu">
                        <ul>
                           <li><a href = "<?php echo Yii::$app->request->baseUrl; ?>/blog/post">Add New</a>
                           </li>
                           <li><a href = "<?php echo Yii::$app->request->baseUrl; ?>/blog/">List</a>
                           </li>
                           <li><a href = "<?php echo Yii::$app->request->baseUrl; ?>/blog/comment/">Review Comments</a>
                           </li>
                        </ul>
                     </div>
                  </li>
                  <li><a href = "javascript:void(0)" class = "collapsible-header <?php echo (Yii::$app->controller->id == 'slider' && Yii::$app->controller->action->id == 'index') ? 'menu-active' : '' ?>"><i class = "fa fa-sliders" aria-hidden = "true"></i> Slider</a>
                     <div class = "collapsible-body left-sub-menu">
                        <ul>
                           <li><a href = "<?php echo Yii::$app->request->baseUrl; ?>/slider/post">Add New</a>
                           </li>
                           <li><a href = "<?php echo Yii::$app->request->baseUrl; ?>/slider/">List</a>
                           </li>
                        </ul>
                     </div>
                  </li>
                  <li>
                     <a href = "<?php echo Yii::$app->request->baseUrl; ?>/testimonials/" class = "collapsible-header <?php echo (Yii::$app->controller->id == 'testimonial' && Yii::$app->controller->action->id == 'index') ? 'menu-active' : '' ?>"><i class = "fa fa-commenting-o" aria-hidden = "true"></i> Testimonial</a>
                  </li>
                  <li><a href = "<?php echo Yii::$app->request->baseUrl; ?>/faq/" class = "collapsible-header <?php echo (Yii::$app->controller->id == 'faq' && Yii::$app->controller->action->id == 'index') ? 'menu-active' : '' ?>"><i class = "fa fa-window-restore" aria-hidden = "true"></i> FAQ</a>
                  </li>
                  <li><a href = "<?php echo Yii::$app->request->baseUrl; ?>/messages/" class = "collapsible-header <?php echo (Yii::$app->controller->id == 'messages' && Yii::$app->controller->action->id == 'index') ? 'menu-active' : '' ?>"><i class = "fa fa-envelope-o" aria-hidden = "true"></i> Messages</a>
                  </li>

                   <?php if ((\Yii::$app->user->identity->role == 'admin')) { ?>
                      <li><a href = "javascript:void(0)" class = "collapsible-header <?php echo ($this->title == 'User') ? 'menu-active' : '' ?>"><i class = "fa fa-user" aria-hidden = "true"></i> Users</a>
                         <div class = "collapsible-body left-sub-menu">
                            <ul>
                               <li><a href = "<?php echo Yii::$app->request->baseUrl; ?>/users">All Users</a>
                               </li>
                               <li><a href = "<?php echo Yii::$app->request->baseUrl; ?>/users/edit">Add New user</a>
                               </li>
                            </ul>
                         </div>
                      </li>
                   <?php } ?>

                  <li><a href = "javascript:void(0) <?php if ($this->title == 'Package') {
                          echo 'active';
                      } ?>" class = "collapsible-header <?php echo ($this->title == 'Package') ? 'menu-active' : '' ?>"><i class = "fa fa-umbrella" aria-hidden = "true"></i> Tour Packages</a>
                     <div class = "collapsible-body left-sub-menu">
                        <ul>
                           <li><a href = "<?php echo Yii::$app->request->baseUrl; ?>/package/">All Packages</a>
                           </li>
                           <li><a href = "<?php echo Yii::$app->request->baseUrl; ?>/package/post">Add New Package</a>
                           </li>
                           <li><a href = "<?php echo Yii::$app->request->baseUrl; ?>/package/review">Package Review</a>
                           </li>
                           <li><a href = "<?php echo Yii::$app->request->baseUrl; ?>/package/rating">Package Rating</a>
                           </li>
                           <li><a href = "<?php echo Yii::$app->request->baseUrl; ?>/package/category">Package Category</a>
                           </li>
                           <li><a href = "<?php echo Yii::$app->request->baseUrl; ?>/package/request">Package Request</a>
                           </li>
                           <li><a href = "<?php echo Yii::$app->request->baseUrl; ?>/package/cities">Cities</a>
                           </li>
                        </ul>
                     </div>
                  </li>
                  <li><a class = "<?php echo (Yii::$app->controller->id == 'settings' && Yii::$app->controller->action->id == 'index') ? 'menu-active' : '' ?>" href = "<?php echo Yii::$app->request->baseUrl; ?>/settings"><i class = "fa fa-gear" aria-hidden = "true"></i> Settings</a>
                  </li>
               </ul>
            </div>
         </div>
         <!--== BODY INNER CONTAINER ==-->
          <?= $content ?>
      </div>
   </div>

   <!--== BOTTOM FLOAT ICON ==-->
   <!--<section>-->
   <!--   <div class = "fixed-action-btn vertical">-->
   <!--      <a class = "btn-floating btn-large red pulse">-->
   <!--         <i class = "large material-icons">mode_edit</i>-->
   <!--      </a>-->
   <!--      <ul>-->
   <!--         <li><a class = "btn-floating red"><i class = "material-icons">insert_chart</i></a>-->
   <!--         </li>-->
   <!--         <li><a class = "btn-floating yellow darken-1"><i class = "material-icons">format_quote</i></a>-->
   <!--         </li>-->
   <!--         <li><a class = "btn-floating green"><i class = "material-icons">publish</i></a>-->
   <!--         </li>-->
   <!--         <li><a class = "btn-floating blue"><i class = "material-icons">attach_file</i></a>-->
   <!--         </li>-->
   <!--      </ul>-->
   <!--   </div>-->
   <!--</section>-->

   <script src = "https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js"></script>

   <script src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/js/materialize.min.js"></script>

   <!--======== SCRIPT FILES =========-->
   <script src = "<?php echo Yii::$app->request->baseUrl; ?>/../common/assets/vendor/notify/bootstrap-notify.min.js"></script>
   <script src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/plugins/sweetalert/sweetalert.min.js" type = "text/javascript"></script>
   <!--<script src = "--><?php //echo Yii::$app->request->baseUrl; ?><!--/resources/js/bootstrap.min.js"></script>-->

   <?php $this->endBody() ?>

   <script src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/js/custom.js"></script>
   <script src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/plugins/select2/dist/js/select2.full.min.js"></script>
   <script src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/js/slider-menu.jquery.js"></script>
   <?php if (Yii::$app->session->hasFlash('flash')): ?>
      <script>
         notifyFlash(<?= Yii::$app->session->getFlash('flash'); ?>);
      </script>
   <?php endif; ?>
   <!-- CSRF TOKEN -->
   <script>
      $(document).ready(function () {
         $('.modal').modal();
      });
      $.ajaxSetup({
         data: {
            '<?php echo Yii::$app->request->csrfParam; ?>': '<?php echo Yii::$app->request->csrfToken; ?>'
         }
      });
   </script>
   </body>

   </html>

<?php $this->endPage() ?>