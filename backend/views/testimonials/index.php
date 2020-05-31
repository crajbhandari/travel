<?php
$this->title = 'Testimonial';
$new = ($editable == false) ? 1 : 0;
$this->registerCssFile(Yii::$app->request->baseUrl . '/resources/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css');
$this->registerCssFile(Yii::$app->request->baseUrl . '/resources/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css');
$this->registerCssFile(Yii::$app->request->baseUrl . '/resources/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css');
?>
<div class = "container-fluid">

   <!-- start page title -->
   <!--   <div class="row">-->
   <!--      <div class="col-12">-->
   <!--         <div class="page-title-box d-flex align-items-center justify-content-between">-->
   <!--            <h4 class="mb-0 font-size-18">Testimonials</h4>-->
   <!--         </div>-->
   <!--      </div>-->
   <!--   </div>-->

   <div class = "row">
      <div class = "col-4">
         <div class = "page-title-box d-flex align-items-center justify-content-between">
             <?php echo (isset($editable['name'])) ? ' <h4 class="mb-0 font-size-18">Edit - ' . $editable['name'] . '</h4> ' : ' <h4 class="mb-0 font-size-18"> Add New Testimonial</h4>' ?>
         </div>
         <form enctype = "multipart/form-data" method = "post" action = "<?php echo Yii::$app->request->baseUrl; ?>/testimonials/update/">

            <input type = "hidden" name = "<?php echo Yii::$app->request->csrfParam; ?>" value = "<?php echo Yii::$app->request->csrfToken; ?>"/>
            <input type = "hidden" name = "testimonial[id]" value = "<?php echo (isset($editable['id'])) ? $editable['id'] : '' ?>"/>
            <div class = "card">
               <div class = "card-body">
                   <?php $counter = 0; ?>
                  <div class = "form-group">
                      <?php $counter++; ?>
                     <label for = "<?php echo $counter; ?>">Name</label>
                     <input id = "<?php echo $counter; ?>" name = "testimonial[name]" type = "text" class = "form-control required" value = "<?php echo (isset($editable['name'])) ? $editable['name'] : '' ?>">
                  </div>
                  <div class = "form-group">
                      <?php $counter++; ?>
                     <label for = "<?php echo $counter; ?>">Content</label>
                     <textarea class = "form-control required" id = "<?php echo $counter; ?>" name = "testimonial[content]"><?php echo (isset($editable['content'])) ? $editable['content'] : '' ?></textarea>
                  </div>
                  <div class = "form-group">
                      <?php $counter++; ?>
                     <label for = "<?php echo $counter; ?>">Position</label>
                     <input id = "<?php echo $counter; ?>" name = "testimonial[position]" type = "text" class = "form-control required" value = "<?php echo (isset($editable['position'])) ? $editable['position'] : '' ?>">
                  </div>
                  <div class = "form-group">
                      <?php $counter++; ?>
                     <label for = "<?php echo $counter; ?>">Info</label>
                     <input id = "<?php echo $counter; ?>" name = "testimonial[info]" type = "text" class = "form-control required" value = "<?php echo (isset($editable['info'])) ? $editable['info'] : '' ?>">
                  </div>
                  <div class = "form-group">
                      <?php $counter++; ?>
                     <label>Image</label>
                     <div class = "custom-file">
                        <div class = "image-wrapper" <?= (isset($editable['image']) && $editable['image'] != '') ? '' : 'style="display:none;"' ?>>
                           <img src = "<?php echo (isset($editable['image']) && $editable['image'] != '') ? Yii::$app->request->baseUrl . '/../common/assets/images/uploads/' . $editable['image'] : '' ?>" class = "custom-file-input-image" id = "file-<?php echo $counter; ?>-image" alt = ""/>
                        </div>
                         <?php if (isset($editable['image']) && $editable['image'] != ''): ?>
                            <div class = "image-actions text-right">
                               <a href = "javascript:void();" class = "remove-image" data-tab = "blog" data-id = "<?php echo \common\components\Misc::encodeUrl($editable['id']) ?>">
                                  <i class = "mdi mdi-close margin-right-5"></i>
                                  Remove Image
                               </a>
                            </div>
                         <?php endif; ?>
                        <label class = "custom-file-label" id = "file-<?php echo $counter; ?>-label" for = "file-<?php echo $counter; ?>">
                           <i class = "fa fa-file"></i>
                           <span>Upload Image</span>
                        </label>
                        <input accept = "image/x-png,image/jpeg" type = "file" name = "image" class = "custom-file-input" id = "file-<?php echo $counter; ?>" onchange = "readURL(this);" aria-describedby = "file-<?php echo $counter; ?>" src = "<?php echo (isset($editable['image']) && $editable['image'] != '') ? $editable['image'] : '' ?>">
                     </div>
                  </div>
                  <button class = "btn btn-primary" type = "submit">Save</button>
               </div>
            </div>
         </form>
      </div>
      <div class = "col-8">
         <div class = "page-title-box d-flex align-items-center justify-content-between">
            <h4 class = "mb-0 font-size-18">Testimonials List</h4>
            <div class="text-right">
               <a href="<?php echo Yii::$app->request->baseUrl; ?>/testimonials" class="btn btn-success" style="color: #ffffff">Add New Testimonial</a>
            </div>
         </div>
         <div class = "card">
            <div class = "card-body">


               <table class = "datatable table table-striped table-bordered dt-responsive nowrap" style = "border-collapse: collapse; border-spacing: 0; width: 100%;">
                  <thead>
                  <?php if (!empty($testimonials) && count($testimonials) > 0): ?>
                  <tr>
                     <th>S.N</th>
                     <th width = "30%">Image</th>
                     <th>Name</th>
                     <th>Position</th>
                     <th>Date</th>
                     <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  $sn = 1;
                  $count = 0;
                  foreach ($testimonials as $post) :
                      $count++; ?>
                     <tr>
                        <td><?php echo $sn; ?></td>
                        <td>
                                       <span class = "list-img">
                                          <?php if ($post['image'] != '') { ?>
                                             <img src = "<?php echo Yii::$app->request->baseUrl; ?>/../common/assets/images/uploads/<?= $post['image'] ?>" alt = "<?php echo (isset($post['title'])) ? trim($post['title']) : '' ?>">
                                          <?php } else {
                                              echo 'No Image';
                                          } ?>
                                       </span>
                        </td>
                        <td>
                            <?php echo (isset($post['name'])) ? trim($post['name']) : '' ?>
                        </td>
                        <td><?php echo (isset($post['position'])) ? ucwords(trim($post['position'])) : '' ?></td>
                        <td><?php echo (isset($post['created_on'])) ? ucwords(trim($post['created_on'])) : '' ?></td>
                        <td>
                           <!--                                <a href="javascript:void(0);" class="mr-3 text-primary" data-placement="top" title="" data-original-title="View" data-toggle="modal" data-target=".exampleModal"><i class="mdi mdi-eye font-size-18"></i></a>-->
                           <a href = "<?php echo Yii::$app->request->baseUrl; ?>/testimonials/edit/<?php echo \common\components\Misc::encodeUrl($post['id']); ?>" class = "mr-3 text-primary" data-toggle = "tooltip" data-placement = "top" title = "" data-original-title = "Edit"><i class = "mdi mdi-pencil font-size-18"></i></a>
                           <a href = "javascript:void(0);" class = "delete-item text-danger" data-id = "<?php echo \common\components\Misc::encodeUrl($post['id']); ?>" data-tab = "Testimonials"><i class = "mdi mdi-close font-size-18"></i></a>
                        </td>
                     </tr>
                      <?php $sn++; ?>
                  <?php endforeach; ?>
                  </tbody>
                   <?php else: ?>
                      <h3>Sorry, No Posts Found</h3>
                   <?php endif; ?>
               </table>
            </div>
         </div>
      </div> <!-- end col -->
   </div> <!-- end row -->

</div>
