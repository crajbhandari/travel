<?php
$this->title = 'Settings';
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
                <?php echo (isset($editable['name'])) ? ' <h4 class="mb-0 font-size-18">Edit - ' . $editable['name'] . '</h4> ' : ' <h4 class="mb-0 font-size-18"> Add New Settings</h4>' ?>
            </div>
            <form enctype = "multipart/form-data" method = "post" action = "<?php echo Yii::$app->request->baseUrl; ?>/settings/update/">

                <input type = "hidden" name = "<?php echo Yii::$app->request->csrfParam; ?>" value = "<?php echo Yii::$app->request->csrfToken; ?>"/>
                <input type = "hidden" name = "setting[id]" value = "<?php echo (isset($editable['id'])) ? $editable['id'] : '' ?>"/>
                <div class = "card">
                    <div class = "card-body">
                        <?php $counter = 0; ?>
                        <div class = "form-group">
                            <?php $counter++; ?>
                            <label for = "<?php echo $counter; ?>">Slug</label>
                            <input id = "<?php echo $counter; ?>" name = "setting[slug]" type = "text" class = "form-control required" value = "<?php echo (isset($editable['slug'])) ? $editable['slug'] : '' ?>">
                        </div>
                        <div class = "form-group">
                            <?php $counter++; ?>
                            <label for = "<?php echo $counter; ?>">Caption</label>
                            <textarea class = "form-control required" id = "<?php echo $counter; ?>" name = "setting[caption]"><?php echo (isset($editable['caption'])) ? $editable['caption'] : '' ?></textarea>
                        </div>
                        <div class="form-group">
                            <?php $counter++; ?>
                            <label for = "<?php echo $counter; ?>" >Data Type</label>
                            <select id = "<?php echo $counter; ?>" name = "setting[type]" class = "form-control required">
                                <option <?php echo (isset($editable['type']) && $editable['type'] == 'text') ? 'selected = "selected"' : '' ?> value="text">Text</option>
                                <option <?php echo (isset($editable['type']) && $editable['type'] == 'textarea') ? 'selected = "selected"' : '' ?> value="textarea">Textarea</option>
                                <option <?php echo (isset($editable['type']) && $editable['type'] == 'boolean') ? 'selected = "selected"' : '' ?> value="boolean">Boolean</option>
                                <option <?php echo (isset($editable['type']) && $editable['type'] == 'json') ? 'selected = "selected"' : '' ?> value="json">JSON</option>
                                <option <?php echo (isset($editable['type']) && $editable['type'] == 'file') ? 'selected = "selected"' : '' ?> value="file" class="file">File</option>
                            </select>
                        </div>
                       <div class = "form-group">
                           <?php $counter++; ?>
                          <label for = "<?php echo $counter; ?>">Content</label>
                           <?php if (isset($editable['type']) && $editable['type'] === 'textarea'): ?>
                              <textarea style="height: 100px;" <?= ($editable['is_editable'] == 0) ? ' disabled="disabled" ' : '' ?> class="textarea" required id="<?php echo $counter; ?>" name="setting[content]"><?php echo(isset($editable['content']) ? $editable['content'] : '') ?></textarea>
                           <?php elseif (isset($editable['type']) && $editable['type'] == 'json'): ?>
                              <textarea style="height: 100px;" <?= ($editable['is_editable'] == 0) ? ' disabled="disabled" ' : '' ?> class="textarea" required id="<?php echo $counter; ?>" name="setting[content]" ><?php echo(isset($editable['content']) ? $editable['content'] : '') ?></textarea>
                           <?php elseif (isset($editable['type']) && $editable['type'] == 'boolean'): ?>
                              <select <?= ($editable['is_editable'] == 0) ? ' disabled="disabled" ' : '' ?> id="list-title <?php echo $counter; ?>" name="setting[content]">
                                 <option <?php echo (isset($editable['content']) && $editable['content'] == '0') ? 'selected = "selected"' : '' ?> value="0">False</option>
                                 <option <?php echo (isset($editable['content']) && $editable['content'] == '1') ? 'selected = "selected"' : '' ?> value="1">True</option>
                              </select>
                           <?php elseif (isset($editable['type']) && $editable['type'] == 'image'): ?>
                              <div class = "input-field col s12">
                                  <?php $counter++; ?>
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
                           <?php else: ?>
                              <input <?= (isset($editable['is_editable']) && $editable['is_editable'] == 0) ? ' disabled="disabled" ' : '' ?> required="required" id="<?php echo $counter; ?>" name="setting[content]" value="<?php echo(isset($editable['content']) ? $editable['content'] : '') ?>" type="text" class="required">
                           <?php endif; ?>
                       </div>


                        <button class = "btn btn-primary" type = "submit">Save</button>
                    </div>
                </div>
            </form>
        </div>
        <div class = "col-8">
            <div class = "page-title-box d-flex align-items-center justify-content-between">
                <h4 class = "mb-0 font-size-18">Settings List</h4>
                <div class="text-right">
                    <a href="<?php echo Yii::$app->request->baseUrl; ?>/settings" class="btn btn-success" style="color: #ffffff">Add New Settings</a>
                </div>
            </div>
            <div class = "card">
                <div class = "card-body">


                    <table class = "datatable table table-striped table-bordered dt-responsive nowrap" style = "border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <?php if (!empty($settings) && count($settings) > 0): ?>
                        <tr>
                           <th>S.N</th>
                           <th>Slug</th>
                           <th>Type</th>
                           <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $sn = 1;
                        $count = 0;
                        foreach ($settings as $post) :
                            $count++; ?>
                            <tr>
                                <td><?php echo $sn; ?></td>


                               <td><?php echo ucwords($post['slug']); ?></td>
                               <td>
                                   <?php echo ucwords($post['type']); ?>
                               </td>

                                <td>
                                    <!--                                <a href="javascript:void(0);" class="mr-3 text-primary" data-placement="top" title="" data-original-title="View" data-toggle="modal" data-target=".exampleModal"><i class="mdi mdi-eye font-size-18"></i></a>-->
                                    <a class="btn btn-primary btn-sm" href = "<?php echo Yii::$app->request->baseUrl; ?>/settings/edit/<?php echo \common\components\Misc::encodeUrl($post['id']); ?>" data-toggle = "tooltip" data-placement = "top" title = "" data-original-title = "Edit">Edit</a>
                                    <a href = "javascript:void(0);" class = "delete-item btn btn-danger btn-sm" data-id = "<?php echo \common\components\Misc::encodeUrl($post['id']); ?>" data-tab = "Settings">Delete</a>
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
