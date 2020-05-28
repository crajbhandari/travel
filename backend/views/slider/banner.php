<?php
$this->title = 'Banner';
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
                <?php echo (isset($editable['name'])) ? ' <h4 class="mb-0 font-size-18">Edit - ' . $editable['name'] . '</h4> ' : ' <h4 class="mb-0 font-size-18"> Add New Banner</h4>' ?>
            </div>
            <form enctype = "multipart/form-data" method = "post" action = "<?php echo Yii::$app->request->baseUrl; ?>/slider/set-banner/">

                <input type = "hidden" name = "<?php echo Yii::$app->request->csrfParam; ?>" value = "<?php echo Yii::$app->request->csrfToken; ?>"/>
                <input type = "hidden" name = "post[id]" value = "<?php echo (isset($editable['id'])) ? $editable['id'] : '' ?>"/>
                <div class = "card">
                    <div class = "card-body">
                        <?php $counter = 0; ?>
                        <div class = "form-group">
                            <?php $counter++; ?>
                            <label for = "<?php echo $counter; ?>">Location</label>
                            <input id = "<?php echo $counter; ?>" name = "post[name]" type = "text" class = "form-control required" value = "<?php echo (isset($editable['alt_text'])) ? $editable['alt_text'] : '' ?>">
                        </div>
                       <div class = "form-group">
                           <?php $counter++; ?>
                          <label>Image</label>
                          <div class = "custom-file">
                             <div class = "image-wrapper" <?= (isset($editable['image']) && $editable['image'] != '') ? '' : 'style="display:none;"' ?>>
                                <img src = "<?php echo (isset($editable['image']) && $editable['image'] != '') ? Yii::$app->request->baseUrl . '/../common/assets/images/banners/' . $editable['image'] : '' ?>" class = "custom-file-input-image" id = "file-<?php echo $counter; ?>-image" alt = ""/>
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
                <h4 class = "mb-0 font-size-18">Banner List</h4>
                <div class="text-right">
                    <a href="<?php echo Yii::$app->request->baseUrl; ?>/amenities" class="btn btn-success" style="color: #ffffff">Add New Banner</a>
                </div>
            </div>
            <div class = "card">
                <div class = "card-body">


                    <table class = "datatable table table-striped table-bordered dt-responsive nowrap" style = "border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <?php if (!empty($banners) && count($banners) > 0): ?>
                        <tr>
                            <th>S.N</th>
                            <th>Image</th>
                            <th>Location</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $sn = 1;
                        $count = 0;
                        foreach ($banners as $post) :
                            $count++; ?>
                            <tr>
                                <td><?php echo $sn; ?></td>

                                <td>
                     <span class = "list-img">
                       <?php if ($post['image'] != ''): ?>
                           <img src = "<?php echo Yii::$app->request->baseUrl; ?>/../common/assets/images/banners/<?= $post['image'] ?>" alt = "<?php echo (isset($post['alt_text'])) ? trim($post['alt_text']) : '' ?>">
                       <?php endif; ?>
                     </span>
                                </td>
                                <td><?php echo (isset($post['alt_text'])) ? ucwords(trim($post['alt_text'])) : '' ?></td>


                                <td>
                                    <!--                                <a href="javascript:void(0);" class="mr-3 text-primary" data-placement="top" title="" data-original-title="View" data-toggle="modal" data-target=".exampleModal"><i class="mdi mdi-eye font-size-18"></i></a>-->
                                    <a href = "<?php echo Yii::$app->request->baseUrl; ?>/slider/banner/<?php echo \common\components\Misc::encrypt($post['id']); ?>" class = "mr-3 text-primary" data-toggle = "tooltip" data-placement = "top" title = "" data-original-title = "Edit"><i class = "mdi mdi-pencil font-size-18"></i></a>
                                    <a href = "javascript:void(0);" class = "delete-item text-danger" data-id = "<?php echo \common\components\Misc::encodeUrl($post['id']); ?>" data-tab = "banners"><i class = "mdi mdi-close font-size-18"></i></a>
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
