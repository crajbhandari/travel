<?php

use common\components\HelperPackage;
use common\components\HelperLanguage;


$this->title = 'Package';
$this->registerCssFile(Yii::$app->request->baseUrl . '/resources/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css');
$this->registerCssFile(Yii::$app->request->baseUrl . '/resources/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css');
$this->registerCssFile(Yii::$app->request->baseUrl . '/resources/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css');
?>

<div class = "container-fluid">

   <!-- start page title -->
   <div class = "row">
      <div class = "col-6">
         <div class = "page-title-box d-flex align-items-center justify-content-between">
            <h4 class = "mb-0 font-size-18">Categories</h4>
         </div>
      </div>
      <div class="col-6 text-right">
         <a href = "<?php echo Yii::$app->request->baseUrl; ?>/package/category-post" class="btn btn-primary">Add new Category</a>
      </div>
   </div>
   <div id = "basic-pills-wizard" class = "twitter-bs-wizard">
      <ul class = "twitter-bs-wizard-nav">
          <?php
          if (isset($language) && !empty($language)) {
              $span_count = 1;
              foreach ($language as $l) {
                  ?>
                 <li class = "nav-item">
                    <a href = "#<?php echo $l['code']; ?>" class = "nav-link" data-toggle = "tab">
                       <span class = "step-number mr-2"><?php echo '0' . $span_count; ?></span>
                        <?php echo $l['name']; ?>
                    </a>
                 </li>

                  <?php $span_count++;
              }
          } ?>
      </ul>
      <div class = "tb-res-01 tab-content twitter-bs-wizard-tab-content">
          <?php
          if (isset($language) && !empty($language)) {
              $table_count = 1;
              foreach ($language as $l) {
                  ?>
                 <div class = "tab-pane" id = "<?php echo $l['code'] ?>">

                    <table class = "datatable table table-striped table-bordered dt-responsive nowrap" style = "border-collapse: collapse; border-spacing: 0; width: 100%;">


                       <thead>
                       <?php if (!empty($categories) && count($categories) > 0): ?>
                       <tr>
                          <th>S.N</th>
                          <th>Name</th>
                          <th>Parent</th>
                          <th>Language</th>
                          <th>Actions</th>
                       </tr>
                       </thead>
                       <tbody>
                       <?php
                       $sn = 1;
                       $count = 0;
                       foreach ($categories as $post) :

                           if ($post['language_code'] == $l['code']) {
                               $count++; ?>
                              <tr>
                                 <td><?php echo $sn; ?></td>
                                 <td> <?php echo(isset($post['name']) && !empty($post['name']) ? trim($post['name']) : ''); ?></td>
                                 <td> <?php echo(isset($post['info']['parent']) && !empty($post['info']['parent']) ? trim(HelperPackage::getParentName($post['info']['parent'],$l['code'])) : 'No Parent'); ?></td>

                                 <td>
                                     <?php
                                     foreach ($language as $lan) {
                                         if ($lan['code'] != $post['language_code']) {
                                             ?>

                                            <a href = "<?= Yii::$app->request->baseUrl; ?>/package/category-post/<?= \common\components\Misc::encrypt($lan['code'] . '-' . $post['package_category_id']); ?>">

                                           <span class = "lan">
                                              <?php if (!empty(HelperPackage::getSingleCategoryTranslation($post['package_category_id'], $lan['code']))) { ?>
                                                 <i class = "fa fa-check"></i>&nbsp
                                              <?php } else { ?>
                                                 <i class = "mdi mdi-close-thick"></i>&nbsp
                                              <?php } ?>
                                               <?php echo HelperLanguage::getSingleLanguageName($lan['code']) . '&nbsp;'; ?>
                                    </span>
                                            </a>
                                             <?php
                                         }
                                     }
                                     ?>
                                 </td>
                                 <td>
                                    <a class="btn btn-primary btn-sm" href = "<?=  Yii::$app->request->baseUrl; ?>/package/category-post/<?= \common\components\Misc::encrypt($l['code'] . '-' . $post['package_category_id']); ?>" >Edit</a>
<!--                                    <a href = "javascript:void(0);" class = "delete-item btn btn-danger btn-sm" data-id = "--><?php //echo \common\components\Misc::encodeUrl($post['id']); ?><!--" data-tab = "PackageCategoryTranslation">Delete</a>-->
                                 </td>
                              </tr>
                               <?php $sn++;
                           } ?>
                       <?php endforeach; ?>
                       </tbody>
                        <?php else: ?>
                           <h3>Sorry, No Posts Found</h3>
                        <?php endif; ?>
                    </table>
                 </div>
                  <?php $table_count++; }
          } ?>
         <ul class = "pager wizard twitter-bs-wizard-pager-link">
            <li class = "previous"><a href = "#">Previous</a></li>
            <li class = "next"><a href = "#">Next</a></li>
         </ul>
      </div>
   </div>

</div>
