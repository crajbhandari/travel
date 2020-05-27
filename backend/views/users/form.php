<?php
$this->title = 'Users';
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
        <div class = "col-12">
            <div class = "page-title-box d-flex align-items-center justify-content-between">
<!--                --><?php //echo (isset($editable['name'])) ?  $editable['name']  : ' ><h4 class="mb-0 font-size-18"></h4> <h4 class="mb-0 font-size-18">Add New User</h4>' ?>
                <?php echo (isset($editable['name'])) ? ' <h4 class="mb-0 font-size-18">Edit - ' . $editable['name'] . '</h4> ' : ' <h4 class="mb-0 font-size-18"> Add New Users</h4>' ?>
            </div>
            <form enctype = "multipart/form-data" method = "post" action = "<?php echo Yii::$app->request->baseUrl; ?>/users/update/">

                <input type = "hidden" name = "<?php echo Yii::$app->request->csrfParam; ?>" value = "<?php echo Yii::$app->request->csrfToken; ?>"/>
                <input type = "hidden" name = "post[id]" value = "<?php echo (isset($editable['id'])) ? $editable['id'] : '' ?>"/>
                <div class = "card">
                    <div class = "card-body">
                        <?php $counter = 0; ?>
                        <div class = "form-group">
                            <?php $counter++; ?>
                            <label for = "<?php echo $counter; ?>">Name</label>
                            <input id = "<?php echo $counter; ?>" name = "post[name]" type = "text" class = "form-control required" value = "<?php echo (isset($editable['name'])) ? $editable['name'] : '' ?>">
                        </div>
                        <div class = "form-group">
                            <?php $counter++; ?>
                            <label for = "<?php echo $counter; ?>">User Name</label>
                            <input class = "form-control required" id = "<?php echo $counter; ?>" name = "post[username]" value="<?php echo (isset($editable['username'])) ? $editable['username'] : '' ?>">
                        </div>
                       <div class = "form-group">
                          <label for = "<?php echo $counter; ?>">Select Role</label>
                              <?php $counter++; ?>
                             <select id = "<?php echo $counter; ?>" name = "post[role]" required class="form-control">
                                <option value = "admin" <?= (isset($editable['role']) && $editable['role'] == 'admin') ? 'selected="selected"' : '' ?>>Admin</option>
                                <option value = "operator" <?= (isset($editable['role']) && $editable['role'] == 'operator') ? 'selected="selected"' : '' ?>>Operator</option>
                                <option value = "customer" <?= (isset($editable['role']) && $editable['role'] == 'customer') ? 'selected="selected"' : '' ?>>Customer</option>
                             </select>
                       </div>
                       <div class = "form-group">
                           <?php $counter++; ?>
                          <label for = "<?php echo $counter; ?>">Email</label>
                          <input class = "form-control required" id = "<?php echo $counter; ?>" name = "post[email]" value = "<?php echo (isset($editable['email'])) ? $editable['email'] : '' ?>">
                       </div>
                        <div class="form-group">
                            <?php $counter++; ?>
                            <label for = "<?php echo $counter; ?>" >Status</label>
                            <select id = "<?php echo $counter; ?>" name = "post[status]" class = "form-control required">
                                <option value = "10" <?= (isset($editable['status']) && $editable['status'] == 10) ? 'selected="selected"' : '' ?>>Visible</option>
                                <option value = "0" <?= (isset($editable['status']) && $editable['status'] == 0) ? 'selected="selected"' : '' ?>>InVisible</option>
                            </select>
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

    </div> <!-- end row -->

</div>
