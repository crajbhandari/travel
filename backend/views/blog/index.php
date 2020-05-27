<?php

use common\components\HelperBlog;

$this->title = 'Blog';
$this->registerCssFile(Yii::$app->request->baseUrl . '/resources/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css');
$this->registerCssFile(Yii::$app->request->baseUrl . '/resources/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css');
$this->registerCssFile(Yii::$app->request->baseUrl . '/resources/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css');
?>
<script>
   var langugae = <?php echo count($language); ?>;
</script>
<div class = "container-fluid">

   <!-- start page title -->
   <div class = "row">
      <div class = "col-12">
         <div class = "page-title-box d-flex align-items-center justify-content-between">
            <h4 class = "mb-0 font-size-18">Blog</h4>
         </div>
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
      <div class = "tab-content twitter-bs-wizard-tab-content">
          <?php
          if (isset($language) && !empty($language)) {
             $table_count = 1;
              foreach ($language as $l) {
                  ?>
                 <div class = "tab-pane" id = "<?php echo $l['code'] ?>">
                    <table class = "datatable table table-striped table-bordered dt-responsive nowrap" style = "border-collapse: collapse; border-spacing: 0; width: 100%;">
                       <thead>
                       <?php if (!empty($blog) && count($blog) > 0): ?>
                       <tr>
                          <th>S.N</th>
                          <th width = "30%">Image</th>
                          <th>Title</th>
                          <th>Category</th>
                          <th>Visibility</th>
                          <th>Author</th>
                          <th>Language</th>
                          <th>Actions</th>
                       </tr>
                       </thead>
                       <tbody>
                       <?php
                       $sn = 1;
                       $count = 0;
                       foreach ($blog as $post) :
                           if ($post['language_code'] == $l['code']) {
                               $count++; ?>
                              <tr>
                                 <td><?php echo $sn; ?></td>
                                 <td>
                                       <span class = "list-img">
                                          <?php if ($post['info']['image'] != '') { ?>
                                             <img src = "<?php echo Yii::$app->request->baseUrl; ?>/../common/assets/images/uploads/<?= $post['info']['image'] ?>" alt = "<?php echo (isset($post['title'])) ? trim($post['title']) : '' ?>">
                                          <?php }
                                          else {
                                              echo 'No Image';
                                          } ?>
                                       </span>
                                 </td>
                                 <td> <?php echo(isset($post['title']) && !empty($post['title']) ? trim($post['title']) : ''); ?></td>
                                 <td> <?php echo(isset($post['category']) && !empty($post['category']) ? trim($post['category']) : ''); ?></td>
                                 <td> <?php echo(isset($post['info']['visibility']) && ($post['info']['visibility'] == 1) ? 'Visible' : 'Hidden'); ?></td>
                                 <td> <?php echo(isset($post['author']) && !empty($post['author']) ? ucwords(trim($post['author'])) : ''); ?></td>

                                 <td>
                                     <?php
                                     foreach ($language as $lan) {
                                         if ($lan['code'] != $post['language_code']) {
                                             ?>

                                            <a href = "<?= Yii::$app->request->baseUrl; ?>/blog/post/<?= \common\components\Misc::encrypt($lan['code'] . '-' . $post['blog_id']); ?>">

                                           <span class = "lan">
                                              <?php if (!empty(HelperBlog::getSingleBlogTranslation($post['blog_id'], $lan['code']))) { ?>
                                                 <i class = "fa fa-check"></i>&nbsp
                                              <?php } else { ?>
                                                 <i class = "mdi mdi-close-thick"></i>&nbsp
                                              <?php } ?>
                                               <?php echo \common\components\HelperLanguage::getSingleLanguageName($lan['code']) . '&nbsp;'; ?>
                                    </span>
                                            </a>
                                             <?php
                                         }
                                     }
                                     ?>
                                 </td>
                                 <td>
                                    <a href = "<?=  Yii::$app->request->baseUrl; ?>/blog/post/<?= \common\components\Misc::encrypt($l['code'] . '-' . $post['blog_id']); ?>" ><i class="mdi mdi-pencil font-size-18"></i></a>
                                    <a href = "javascript:void(0);" class = "delete-blog text-danger" data-id = "<?php echo \common\components\Misc::encodeUrl($post['id']); ?>" data-tab = "BlogTranslation"><i class = "mdi mdi-close font-size-18"></i></a>
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
