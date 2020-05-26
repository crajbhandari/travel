<?php
$this->title = 'Slider';
//$this->registerJsFile(Yii::$app->request->baseUrl . '/assets/');


use common\components\HelperLanguage as hl;
?>
<div class="container-fluid">
   <!-- start page title -->
   <form enctype = "multipart/form-data" method = "post" action = "<?php echo Yii::$app->request->baseUrl; ?>/slider/update/">

      <input type = "hidden" name = "<?php echo Yii::$app->request->csrfParam; ?>" value = "<?php echo Yii::$app->request->csrfToken; ?>"/>
      <input type = "hidden" name = "post[id]" value = "<?php echo (isset($editable['id'])) ? $editable['id'] : '' ?>"/>
      <input type = "hidden" name = "post[bt_id]" value = "<?php echo (isset($editable['id'])) ? $editable['id'] : '' ?>"/>

      <div class="row">
         <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <?php echo (isset($editable['content'])) ? ' <h4 class="mb-0 font-size-18">Edit - </h4> ' : ' <h4 class="mb-0 font-size-18"> Add New Post</h4>' ?>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-12">
            <div class="card">
               <div class="card-body">
                   <?php $counter = 0; ?>
                  <div class="form-group">
                      <?php $counter++; ?>
                     <label for = "<?php echo $counter; ?>">Link Text</label>
                     <input required id = "<?php echo $counter; ?>" name = "post[link_text]" type = "text" class = "form-control required" value = "<?php echo (isset($editable['link_text'])) ? $editable['link_text'] : '' ?>">
                  </div>

                  <div class="form-group">
                      <?php $counter++; ?>
                     <label for = "<?php echo $counter; ?>">Category</label>
                     <input required id = "<?php echo $counter; ?>" name = "post[category]" type = "text" class = "form-control required" value = "<?php echo (isset($editable['category'])) ? $editable['category'] : '' ?>">
                  </div>
                  <div class="form-group">
                      <?php $counter++; ?>
                     <label for = "<?php echo $counter; ?>" >Content Align</label>
                     <select id = "<?php echo $counter; ?>" name = "post[content_align]" required>
                        <option value = "left" <?= (isset($editable['content_align']) && $editable['content_align'] == 'left') ? 'selected="selected"' : '' ?>>Left</option>
                        <option value = "right" <?= (isset($editable['content_align']) && $editable['content_align'] == 'right') ? 'selected="selected"' : '' ?>>Right</option>
                     </select>
                  </div>

                  <div class="form-group">
                      <?php $counter++; ?>
                     <label for = "<?php echo $counter; ?>">Content</label>
                     <textarea required id="elm1" name = "post[content]"><?php echo (isset($editable['content'])) ? $editable['content'] : '' ?></textarea>
                  </div>
                  <div class="form-group">
                      <?php $counter++; ?>
                     <label>Image</label>
                     <div class="custom-file">
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

                  <button class="btn btn-primary" type="submit">Save</button>
               </div>
            </div>

         </div>
      </div>
   </form>
</div>

