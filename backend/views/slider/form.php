<?php
$this->title = 'Slider';
//$this->registerJsFile(Yii::$app->request->baseUrl . '/assets/');
?>
<div class = "sb2-2">
   <div class = "sb2-2-2">
      <ul>
         <li><a href = "<?php echo Yii::$app->request->baseUrl; ?>/"><i class = "fa fa-home" aria-hidden = "true"></i> Home</a>
         </li>
         <li class = "active-bre">
            <a href = "#">
                <?php echo (isset($editable['id'])) ? ' <i class="mdi mdi-pencil"></i> Edit' : ' <i class="mdi mdi-add"></i> Add New Slider' ?>
            </a>
         </li>
      </ul>
   </div>
   <div class = "sb2-2-add-blog sb2-2-1">
      <div class = "box-inn-sp">
         <div class = "inn-title">
            <h4>
                <?php echo (isset($editable['id'])) ? ' <i class="mdi mdi-pencil"></i> Edit' : ' <i class="mdi mdi-add"></i> Add New Post' ?>
            </h4>
         </div>
         <div class = "bor">
            <form enctype = "multipart/form-data" method = "post" action = "<?php echo Yii::$app->request->baseUrl; ?>/slider/update/">
               <input type = "hidden" name = "<?php echo Yii::$app->request->csrfParam; ?>" value = "<?php echo Yii::$app->request->csrfToken; ?>"/>
               <input type = "hidden" name = "post[id]" value = "<?php echo (isset($editable['id'])) ? $editable['id'] : '' ?>"/>
                <?php $counter = 0; ?>
               <div class = "row">
                  <div class = "input-field col s12">
                      <?php $counter++; ?>
                     <input id = "list-title <?php echo $counter; ?>" name = "post[link_text]" type = "text" class = "validate" required value = "<?php echo (isset($editable['link_text'])) ? $editable['link_text'] : '' ?>">
                     <label for = "list-title <?php echo $counter; ?>">Link Text</label>
                  </div>
               </div>
               <div class = "row">
                  <div class = "input-field col s12">
                      <?php $counter++; ?>
                     <label for = "textarea1 <?php echo $counter; ?>">Content</label>
                     <textarea id = "textarea1 <?php echo $counter; ?>" class = "summernote" name = "post[content]"><?php echo (isset($editable['content'])) ? $editable['content'] : '' ?></textarea>
                  </div>
               </div>
               <div class = "row">
                  <div class = "input-field col s12">
                     <input id = "list-title <?php echo $counter; ?>" name = "post[link]" type = "text" class = "validate" required value = "<?php echo (isset($editable['link'])) ? $editable['link'] : '' ?>">
                     <label for = "list-title <?php echo $counter; ?>">Link</label>
                  </div>
               </div>
               <div class = "row">
                  <div class = "input-field col s12">
                      <?php $counter++; ?>
                     <select id = "<?php echo $counter; ?>" name = "post[content_align]" required>
                        <option value = "left" <?= (isset($editable['content_align']) && $editable['content_align'] == 'left') ? 'selected="selected"' : '' ?>>Left</option>
                        <option value = "right" <?= (isset($editable['content_align']) && $editable['content_align'] == 'right') ? 'selected="selected"' : '' ?>>Right</option>
                     </select>
                     <label for = "<?php echo $counter; ?>">Content Align</label>
                  </div>
               </div>
               <div class = "row">


                  <div class = "row">
                     <div class = "input-field col s12">
                         <?php $counter++; ?>
                        <div class = "custom-file">

                           <div class = "image-wrapper" <?= (isset($editable['image']) && $editable['image'] != '') ? '' : 'style="display:none;"' ?>>
                              <img src = "<?php echo (isset($editable['image']) && $editable['image'] != '') ? Yii::$app->request->baseUrl . '/../common/assets/images/uploads/' . $editable['image'] : '' ?>" class = "custom-file-input-image" id = "file-<?php echo $counter; ?>-image" alt = ""/>
                           </div>
                            <?php if (isset($editable['image']) && $editable['image'] != ''): ?>
                               <div class = "image-actions text-right">
                                  <a href = "javascript:void();" class = "remove-image" data-tab = "slider" data-id = "<?php echo \common\components\Misc::encodeUrl($editable['id']) ?>">
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
                  </div>
               </div>

               <div class = "row">
                  <div class = "input-field col s12">
                     <button type = "submit" class = "waves-effect waves-light btn-large">Save</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
<script src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/js/plugins.min.js"></script>
