<?php
$this->title = 'Amenities';
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
             <?php echo (isset($editable['name'])) ? ' <h4 class="mb-0 font-size-18">Edit - ' . $editable['name'] . '</h4> ' : ' <h4 class="mb-0 font-size-18"> Add New Amenities</h4>' ?>
         </div>
         <form enctype = "multipart/form-data" method = "post" action = "<?php echo Yii::$app->request->baseUrl; ?>/amenities/update/">

            <input type = "hidden" name = "<?php echo Yii::$app->request->csrfParam; ?>" value = "<?php echo Yii::$app->request->csrfToken; ?>"/>
            <input type = "hidden" name = "amenities[id]" value = "<?php echo (isset($editable['id'])) ? $editable['id'] : '' ?>"/>
            <div class = "card">
               <div class = "card-body">
                   <?php $counter = 0; ?>
                  <div class = "form-group">
                      <?php $counter++; ?>
                     <label for = "<?php echo $counter; ?>">Name</label>
                     <input id = "<?php echo $counter; ?>" name = "amenities[name]" type = "text" class = "form-control required" value = "<?php echo (isset($editable['name'])) ? $editable['name'] : '' ?>">
                  </div>
                  <div class = "form-group">
                      <?php $counter++; ?>
                     <label for = "<?php echo $counter; ?>">Display Name</label>
                     <textarea class = "form-control required" id = "<?php echo $counter; ?>" name = "amenities[display_name]"><?php echo (isset($editable['display_name'])) ? $editable['display_name'] : '' ?></textarea>
                  </div>
                  <div class="form-group">
                      <?php $counter++; ?>
                     <label for = "<?php echo $counter; ?>" >Is Active</label>
                     <select id = "<?php echo $counter; ?>" name = "amenities[is_active]" class = "form-control required">
                        <option value = "1" <?= (isset($editable['is_active']) && $editable['is_active'] == 1) ? 'selected="selected"' : '' ?>>Active</option>
                        <option value = "0" <?= (isset($editable['is_active']) && $editable['is_active'] == 0) ? 'selected="selected"' : '' ?>>InActive</option>
                     </select>
                  </div>
                  <div class="form-group">
                      <?php $counter++; ?>
                     <label for="<?php echo $counter; ?>" class="control-label required">Icon</label>
                     <select id="<?php echo $counter; ?>" name="amenities[icon]" class="form-control required" data-plugin="select2-icon">
                         <?php foreach (Yii::$app->params['fa-icons'] as $k => $m) : ?>
                            <option data-icon="fa <?= str_replace("_", "-", $m) ?>" <?php echo (isset($editable['icon']) && $editable['icon'] == $m) ? 'selected = "selected"' : '' ?> value="<?= $m ?>"> <?= ucwords(str_replace("_", " ", $m)); ?></option>
                         <?php endforeach; ?>
                     </select>
                  </div>
                  <div class = "form-group">
                      <?php $counter++; ?>
                     <label for = "<?php echo $counter; ?>">Description</label>
                     <input id = "<?php echo $counter; ?>" name = "amenities[description]" type = "text" class = "form-control required" value = "<?php echo (isset($editable['description'])) ? $editable['description'] : '' ?>">
                  </div>

                  <button class = "btn btn-primary" type = "submit">Save</button>
               </div>
            </div>
         </form>
      </div>
      <div class = "col-8">
         <div class = "page-title-box d-flex align-items-center justify-content-between">
            <h4 class = "mb-0 font-size-18">Amenities List</h4>
            <div class="text-right">
               <a href="<?php echo Yii::$app->request->baseUrl; ?>/amenities" class="btn btn-success" style="color: #ffffff">Add New Amenities</a>
            </div>
         </div>
         <div class = "card">
            <div class = "card-body">


               <table id = "datatable-buttons" class = "table table-striped table-bordered dt-responsive nowrap" style = "border-collapse: collapse; border-spacing: 0; width: 100%;">
                  <thead>
                  <?php if (!empty($all) && count($all) > 0): ?>
                  <tr>
                     <th>S.N</th>
                     <th>Display Name</th>
                     <th>Icon</th>
                     <th>Status</th>
                     <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  $sn = 1;
                  $count = 0;
                  foreach ($all as $post) :
                      $count++; ?>
                     <tr>
                        <td><?php echo $sn; ?></td>


                        <td><?php echo (isset($post['display_name'])) ? ucwords(trim($post['display_name'])) : '' ?></td>
                        <td><?= ($post['icon'] != '') ? '<i class="ic fa ' . $post['icon'] . '"></i> <span class="ic-text">fa ' . $post['icon'] . '</span>' : '-' ?></td>
                        <td>
                            <?php if ($post['is_active']> 0) : ?>
                               <span class="label label-success">Active</span>
                               <!--                                      <a href="javascript:void(0);" class="label --><?//= ($a['is_active'] === 1) ? 'label-success' : 'label-danger' ?><!-- label-success --><?//= ($is_authorized) ? 'toggle-status' : 'disabled' ?><!-- " --><?//= ($is_authorized) ? 'data-a="' . Misc::encrypt($a['id']) . '" data-b="' . Misc::encrypt(Misc::getClass($a)) . '"' : '' ?><!--><?//= ($a['is_active'] === 1) ? 'Active' : 'Inactive' ?><!--</a>-->
                            <?php else: ?>
                               <span class="label label-light-danger">InActive</span>
                            <?php endif; ?>
                        </td>

                        <td>
                           <!--                                <a href="javascript:void(0);" class="mr-3 text-primary" data-placement="top" title="" data-original-title="View" data-toggle="modal" data-target=".exampleModal"><i class="mdi mdi-eye font-size-18"></i></a>-->
                           <a href = "<?php echo Yii::$app->request->baseUrl; ?>/amenities/edit/<?php echo \common\components\Misc::encodeUrl($post['id']); ?>" class = "mr-3 text-primary" data-toggle = "tooltip" data-placement = "top" title = "" data-original-title = "Edit"><i class = "mdi mdi-pencil font-size-18"></i></a>
                           <a href = "javascript:void(0);" class = "delete-item text-danger" data-id = "<?php echo \common\components\Misc::encodeUrl($post['id']); ?>" data-tab = "Amenities"><i class = "mdi mdi-close font-size-18"></i></a>
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
