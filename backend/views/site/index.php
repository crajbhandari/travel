<?php
$this->title = Yii::$app->params['system_name'] . " | Welcome " . ucwords(Yii::$app->user->identity->name);
$this->registerJsFile(Yii::$app->request->baseUrl . '/resources/libs/apexcharts/apexcharts.min.js');
$this->registerJsFile(Yii::$app->request->baseUrl . '/resources/js/pages/dashboard.init.js');
?>
<div class = "container-fluid">

   <!-- start page title -->
   <div class = "row">
      <div class = "col-12">
         <div class = "page-title-box d-flex align-items-center justify-content-between">
            <h4 class = "mb-0 font-size-18">Dashboard</h4>

            <div class = "page-title-right">
               <ol class = "breadcrumb m-0">
                  <li class = "breadcrumb-item"><a href = "javascript: void(0);">Dashboards</a></li>
                  <li class = "breadcrumb-item active">Dashboard</li>
               </ol>
            </div>

         </div>
      </div>
   </div>
   <!-- end page title -->

   <div class = "row">
      <div class = "col-xl-4">
         <div class = "card overflow-hidden">
            <div class = "bg-soft-primary">
               <div class = "row">
                  <div class = "col-7">
                     <div class = "text-primary p-3">
                        <h5 class = "text-primary">Welcome Back !</h5>
                        <p>Dashboard</p>
                     </div>
                  </div>
                  <div class = "col-5 align-self-end">
                     <img src = "<?= Yii::$app->request->baseUrl; ?>/resources/images/profile-img.png" alt = "" class = "img-fluid">
                  </div>
               </div>
            </div>
            <div class = "card-body pt-0">
               <div class = "row">
                  <div class = "col-sm-6">
                     <div class = "avatar-md profile-user-wid mb-4">
                        <img src = "<?php if(Yii::$app->user->identity->image!=''){ echo Yii::$app->request->baseUrl; ?>/../common/assets/images/uploads/<?php echo ucwords(Yii::$app->user->identity->image); } else{ echo Yii::$app->request->baseUrl; ?>/../common/assets/images/user.png<?php ; } ?>" alt = "" class = "img-thumbnail rounded-circle">
                     </div>
                     <h5 class = "font-size-15 text-truncate"><?php echo ucwords(Yii::$app->user->identity->name) ?></h5>
                     <p class = "text-muted mb-0 text-truncate"><?php echo ucwords(Yii::$app->user->identity->role) ?></p>
                  </div>

                  <div class = "col-sm-6">

                        <div class = "mt-4">
                           <a href = "#" class = "btn btn-primary waves-effect waves-light btn-sm">View Profile <i class = "mdi mdi-arrow-right ml-1"></i></a>
                        </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class = "col-xl-8">
         <div class = "row">
            <div class = "col-md-4">
               <div class = "card mini-stats-wid">
                  <div class = "card-body">
                     <div class = "media">
                        <div class = "media-body">
                           <p class = "text-muted font-weight-medium">Total Blog</p>
                           <h4 class = "mb-0"><?php echo Yii::$app->params['count_blog']; ?></h4>
                        </div>

                        <div class = "mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                                        <span class = "avatar-title">
                                                            <i class = "bx bx-copy-alt font-size-24"></i>
                                                        </span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class = "col-md-4">
               <div class = "card mini-stats-wid">
                  <div class = "card-body">
                     <div class = "media">
                        <div class = "media-body">
                           <p class = "text-muted font-weight-medium">Clients</p>
                           <h4 class = "mb-0">5 (To do)</h4>
                        </div>

                        <div class = "avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                                        <span class = "avatar-title rounded-circle bg-primary">
                                                            <i class = "bx bx-user font-size-24"></i>
                                                        </span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class = "col-md-4">
               <div class = "card mini-stats-wid">
                  <div class = "card-body">
                     <div class = "media">
                        <div class = "media-body">
                           <p class = "text-muted font-weight-medium">Package</p>
                           <h4 class = "mb-0"><?php echo $package ?></h4>
                        </div>

                        <div class = "avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                                        <span class = "avatar-title rounded-circle bg-primary">
                                                            <i class = "bx bx-purchase-tag-alt font-size-24"></i>
                                                        </span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class = "col-md-4">
               <div class = "card mini-stats-wid">
                  <div class = "card-body">
                     <div class = "media">
                        <div class = "media-body">
                           <p class = "text-muted font-weight-medium">Destination</p>
                           <h4 class = "mb-0">5 (To do)</h4>
                        </div>

                        <div class = "mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                                        <span class = "avatar-title">
                                                            <i class = "bx bx-copy-alt font-size-24"></i>
                                                        </span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class = "col-md-4">
               <div class = "card mini-stats-wid">
                  <div class = "card-body">
                     <div class = "media">
                        <div class = "media-body">
                           <p class = "text-muted font-weight-medium">Package Reviews</p>
                           <h4 class = "mb-0">5 (To do)</h4>
                        </div>

                        <div class = "avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                                        <span class = "avatar-title rounded-circle bg-primary">
                                                            <i class = "bx bx-user font-size-24"></i>
                                                        </span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class = "col-md-4">
               <div class = "card mini-stats-wid">
                  <div class = "card-body">
                     <div class = "media">
                        <div class = "media-body">
                           <p class = "text-muted font-weight-medium">Amenities</p>
                           <h4 class = "mb-0">5 (To do)</h4>
                        </div>

                        <div class = "avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                                        <span class = "avatar-title rounded-circle bg-primary">
                                                            <i class = "bx bx-purchase-tag-alt font-size-24"></i>
                                                        </span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

