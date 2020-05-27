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

      <!-- DataTables -->
      <link href = "<?php echo Yii::$app->request->baseUrl; ?>/resources/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
      <link href = "<?php echo Yii::$app->request->baseUrl; ?>/resources/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">

      <link href = "<?php echo Yii::$app->request->baseUrl; ?>/resources/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">
      <!-- Sweet Alert-->
      <link href = "<?php echo Yii::$app->request->baseUrl; ?>/resources/libs/sweetalert/sweetalert.css" rel = "stylesheet" type = "text/css"/>

      <!-- CATEGORY -->
      <link href = "<?php echo Yii::$app->request->baseUrl; ?>/../common/assets/css/margins-paddings.css" rel = "stylesheet">

      <!-- App favicon -->
      <link rel = "shortcut icon" href = "<?php echo Yii::$app->request->baseUrl; ?>/resources/images/favicon.ico">

      <!-- Bootstrap Css -->
      <link href = "<?php echo Yii::$app->request->baseUrl; ?>/resources/css/bootstrap.min.css" id = "bootstrap-style" rel = "stylesheet" type = "text/css"/>
      <link href = "<?php echo Yii::$app->request->baseUrl; ?>/resources/css/style.css" id = "bootstrap-style" rel = "stylesheet" type = "text/css"/>
      <!-- Icons Css -->
      <link href = "<?php echo Yii::$app->request->baseUrl; ?>/resources/css/icons.min.css" rel = "stylesheet" type = "text/css"/>
      <!-- App Css-->
      <link href = "<?php echo Yii::$app->request->baseUrl; ?>/resources/css/app.min.css" id = "app-style" rel = "stylesheet" type = "text/css"/>

      <!-- This is where page wise CSS will show up  -->
       <?php $this->head() ?>

      <link href = "<?php echo Yii::$app->request->baseUrl; ?>/resources/css/overrides.css" rel = "stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
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
                  <button type = "button" class = "btn header-item waves-effect" id = "page-header-user-dropdown"
                          data-toggle = "dropdown" aria-haspopup = "true" aria-expanded = "false">
                     <img class = "rounded-circle header-profile-user" src = "<?php if (Yii::$app->user->identity->image != '') {
                         echo Yii::$app->request->baseUrl; ?>/../common/assets/images/uploads/<?php echo ucwords(Yii::$app->user->identity->image);
                     }
                     else {
                         echo Yii::$app->request->baseUrl; ?>/../common/assets/images/user.png<?php ;
                     } ?>"
                          alt = "Header Avatar">
                     <span class = "d-none d-xl-inline-block ml-1"><?php echo ucwords(Yii::$app->user->identity->name) ?></span>
                     <i class = "mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                  </button>
                  <div class = "dropdown-menu dropdown-menu-right">
                     <!-- item-->
                     <a class = "dropdown-item" href = "#"><i class = "bx bx-user font-size-16 align-middle mr-1"></i> Profile</a>
                     <a class = "dropdown-item d-block" href = "#"><i class = "bx bx-wrench font-size-16 align-middle mr-1"></i> Settings</a>
                     <div class = "dropdown-divider"></div>
                     <a class = "dropdown-item text-danger" href = "<?php echo Yii::$app->request->baseUrl; ?>/site/logout"><i class = "bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i> Logout</a>
                  </div>
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
                  <!--                  <li class = "menu-title">Menu</li>-->

                  <li>
                     <a href = "<?php echo Yii::$app->request->baseUrl; ?>/" class = "waves-effect">
                        <i class = "bx bx-home-circle"></i>
                        <span>Dashboards</span>
                     </a>
                  </li>

                  <li>
                     <a href = "javascript: void(0);" class = "has-arrow waves-effect">
                        <i class = "bx bx-layout"></i>
                        <span>Blog</span>
                     </a>
                     <ul class = "sub-menu" aria-expanded = "false">
                        <li><a href = "<?php echo Yii::$app->request->baseUrl; ?>/blog/post">Add New</a></li>
                        <li><a href = "<?php echo Yii::$app->request->baseUrl; ?>/blog/">List</a></li>
                        <li><a href = "layouts-compact-sidebar.html">Review Comments</a></li>
                     </ul>
                  </li>

                  <li>
                     <a href = "<?php echo Yii::$app->request->baseUrl; ?>/slider/banner" class = "waves-effect">
                        <i class = "bx bx-layout"></i>
                        <span>Banner</span>
                     </a>
                  </li>

                  <li>
                     <a href = "<?php echo Yii::$app->request->baseUrl; ?>/testimonials" class = " waves-effect">
                        <i class = "bx bx-calendar"></i>
                        <span>Testimonial</span>
                     </a>
                  </li>

                  <li>
                     <a href = "javascript: void(0);" class = "has-arrow waves-effect">
                        <i class = "bx bx-question-mark"></i>
                        <span>FAQ</span>
                     </a>
                     <ul class = "sub-menu" aria-expanded = "false">
                        <li><a href = "<?php echo Yii::$app->request->baseUrl; ?>/faq/post">Add New</a></li>
                        <li><a href = "<?php echo Yii::$app->request->baseUrl; ?>/faq/">List</a></li>
                     </ul>
                  </li>
                  <li>
                     <a href = "<?php echo Yii::$app->request->baseUrl; ?>/messages" class = " waves-effect">
                        <i class = "bx bx-message"></i>
                        <span>Messages</span>
                     </a>
                  </li>
                  <li>
                     <a href = "<?php echo Yii::$app->request->baseUrl; ?>/amenities" class = " waves-effect">
                        <i class = "bx bx-calendar"></i>
                        <span>Amenities</span>
                     </a>
                  </li>

                  <li>
                     <a href = "javascript: void(0);" class = "has-arrow waves-effect">
                        <i class = "bx bx-user"></i>
                        <span>Users</span>
                     </a>
                     <ul class = "sub-menu" aria-expanded = "false">
                        <li><a href = "<?php echo Yii::$app->request->baseUrl; ?>/users">All Users</a></li>
                        <li><a href = "<?php echo Yii::$app->request->baseUrl; ?>/users/edit">Add New user</a></li>
                     </ul>
                  </li>
                  <li>
                     <a href = "javascript: void(0);" class = "has-arrow waves-effect">
                        <i class = "bx bx-layout"></i>
                        <span>Tour Packages</span>
                     </a>
                     <ul class = "sub-menu" aria-expanded = "false">
                        <li><a href = "layouts-horizontal.html">All Packages</a></li>
                        <li><a href = "layouts-light-sidebar.html">Add New Package</a></li>
                        <li><a href = "layouts-compact-sidebar.html">Add Destination</a></li>
                        <li><a href = "layouts-compact-sidebar.html">Package Review</a></li>
                        <li><a href = "layouts-compact-sidebar.html">Package Rating</a></li>
                        <li><a href = "layouts-compact-sidebar.html">Package Category</a></li>
                        <li><a href = "layouts-compact-sidebar.html">Package Request</a></li>
                        <li><a href = "layouts-compact-sidebar.html">Destination</a></li>
                     </ul>
                  </li>

                  <li>
                     <a href = "<?php echo Yii::$app->request->baseUrl; ?>/users" class = " waves-effect">
                        <i class = "bx bx-cog"></i>
                        <span>Settings</span>
                     </a>
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
                     © Travel.
                  </div>
                  <div class = "col-sm-6">
                     <div class = "text-sm-right d-none d-sm-block">
                        Design & Develop by CodeCater
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


   <script src="<?php echo Yii::$app->request->baseUrl; ?>/resources/libs/tinymce/tinymce.min.js"></script>

   <!-- App js -->

  
   <script src = "<?= Yii::$app->request->baseUrl; ?>/resources/js/app.js"></script>


   <!-- <script src = "<?= Yii::$app->request->baseUrl; ?>/resources/js/pages/form-advanced.init.js"></script>  -->
   <script src = "<?= Yii::$app->request->baseUrl; ?>/resources/js/pages/form-editor.init.js"></script>

   <script src="<?= Yii::$app->request->baseUrl; ?>/resources/libs/summernote/summernote-bs4.min.js"></script>
   <!-- CSRF TOKEN -->
   <script>
      $.ajaxSetup({
         data: {
            '<?php echo Yii::$app->request->csrfParam; ?>': '<?php echo Yii::$app->request->csrfToken; ?>'
         }
      });
   </script>
   <script>
      $(document).ready(function() {

         $('.js-example-basic-multiple').select2();
      });
   </script>


     <!-- Buttons examples -->
      <script src = "<?= Yii::$app->request->baseUrl; ?>/resources/libs/datatables.net/js/jquery.dataTables.min.js"></script>
      <script src = "<?= Yii::$app->request->baseUrl; ?>/resources/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

      <script src = "<?= Yii::$app->request->baseUrl; ?>/resources/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
      
      <script src = "<?= Yii::$app->request->baseUrl; ?>/resources/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>


      <script src = "<?= Yii::$app->request->baseUrl; ?>/resources/libs/jszip/jszip.min.js"></script>
      <script src = "<?= Yii::$app->request->baseUrl; ?>/resources/libs/pdfmake/build/pdfmake.min.js"></script>
      <script src = "<?= Yii::$app->request->baseUrl; ?>/resources/libs/pdfmake/build/vfs_fonts.js"></script>
       
      
     
     
      <script src = "<?= Yii::$app->request->baseUrl; ?>/resources/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
      <script src = "<?= Yii::$app->request->baseUrl; ?>/resources/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
      <script src = "<?= Yii::$app->request->baseUrl; ?>/resources/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script> 
         
        
      <script src = "<?= Yii::$app->request->baseUrl; ?>/resources/js/pages/datatables.init.js"></script>
        
        <!-- Responsive examples -->
      <script src = "<?= Yii::$app->request->baseUrl; ?>/resources/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
      <script src = "<?= Yii::$app->request->baseUrl; ?>/resources/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
       <!-- Sweet Alerts js -->
   <script src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/libs/sweetalert/sweetalert.min.js"></script>

   <!-- Sweet alert init js-->
   <script src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/js/pages/sweet-alerts.init.js"></script>

   <script src = "<?php echo Yii::$app->request->baseUrl; ?>/../common/assets/vendor/notify/bootstrap-notify.min.js"></script>

   <script src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>

   <script src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/js/pages/form-wizard.init.js"></script>
  
   <?php if (Yii::$app->session->hasFlash('flash')): ?>
      <script>
         notifyFlash(<?= Yii::$app->session->getFlash('flash'); ?>);
      </script>
   <?php endif; ?>
   <!-- This is where page wise JS will show up  -->
   <?php $this->endBody() ?>

   <script src = "<?= Yii::$app->request->baseUrl; ?>/resources/js/custom.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
   </body>
   </html>

<?php $this->endPage() ?>