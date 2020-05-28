<?php


$this->title = Yii::$app->params['system_name'] . ' | Sections';

//$this->registerJsFile(Yii::$app->request->baseUrl . '/assets/');
use common\components\HelperLanguage as hl;

?>
<div class = "container-fluid">
   <!-- start page title -->
   <form enctype = "multipart/form-data" method = "post" action = "<?php echo Yii::$app->request->baseUrl; ?>/package/store/">

      <input type = "hidden" name = "<?php echo Yii::$app->request->csrfParam; ?>" value = "<?php echo Yii::$app->request->csrfToken; ?>"/>
      <input type = "hidden" name = "post[id]" value = "<?php echo (isset($editable['id'])) ? $editable['id'] : '' ?>"/>
      <input type = "hidden" name = "post[bt_id]" value = "<?php echo (isset($editable2['id'])) ? $editable2['id'] : '' ?>"/>

      <div class = "row">
         <div class = "col-12">
            <div class = "page-title-box d-flex align-items-center justify-content-between">
                <?php echo (isset($editable2['title'])) ? ' <h4 class="mb-0 font-size-18">Edit - ' . $editable2['title'] . '</h4> ' : ' <h4 class="mb-0 font-size-18"> Add New Post</h4>' ?>
            </div>
         </div>
      </div>
      <div class = "row">
         <div class = "col-lg-12">
            <div class = "card">
               <div class = "card-body">
                   <?php $counter = 0; ?>
<!--                  --><?php //For multiple city name
                   //if(empty($editable2)):
//                      foreach ($all as $a):
//                      ?>
<!--                     <div class = "form-group ">-->
<!--                         --><?php //$counter++; ?>
<!--                        <label for = "--><?php //echo $counter; ?><!--">City Name in --><?//= $a['name'] ?><!--</label>-->
<!--                        <input required id = "--><?php //echo $counter; ?><!--" name = "post[name]" type = "text" class = "form-control required" value = "--><?php //echo (isset($editable2['name'])) ? $editable2['name'] : '' ?><!--">-->
<!--                     </div>-->
<!--                  --><?php //endforeach; else: ?>
                  <div class = "form-group">
                      <?php $counter++; ?>
                     <label for = "<?php echo $counter; ?>">City Name</label>
                     <input required id = "<?php echo $counter; ?>" name = "post[name]" type = "text" class = "form-control required" value = "<?php echo (isset($editable2['name'])) ? $editable2['name'] : '' ?>">
                  </div>
<!--                  --><?php //endif; ?>
                  <div class = "form-group">
                      <?php $counter++; ?>
                     <label for = "<?php echo $counter; ?>">Location</label>
                     <input required id = "<?php echo $counter; ?>" name = "post[location]" type = "text" class = "form-control required" value = "<?php echo (isset($editable2['location'])) ? $editable2['location'] : '' ?>">
                  </div>

                  <div class = "form-group">
                      <?php $counter++; ?>
                     <label for = "<?php echo $counter; ?>">Parent</label>
                     <select id = "<?php echo $counter; ?>" name = "post[parent]" class = "form-control required">
                         <?php if (isset($editable2) && !empty($editable2)): ?>
                            <option value = "0" <?php if (empty($editable2['info']['parent'] == '')) {
                                echo 'selected';
                            } ?>>No parent
                            </option>
                             <?php foreach ($parents as $parent): ?>
                               <option value = "<?= $parent['city_id']; ?>"
                                       <?= (isset($editable2['info']['parent']) && $editable2['info']['parent'] == $parent['city_id']) ? 'selected="selected"' : '' ?>
                                       <?= (isset($editable2['language_code']) && $editable2['language_code'] == $parent['language_code'] ? '' : 'disabled ') ?>
                                       <?= (isset($editable2['id']) && $editable2['id'] == $parent['id'] ? 'disabled' : '') ?>>
                                   <?= (isset($parent['name']) && $parent['name'] != '' ? $parent['name'] : '') ?>
                               </option>
                             <?php endforeach;
                         else:?>
                            <option value = "0"> Select Parent</option>
                             <?php foreach ($parents as $parent): ?>
                               <option value = "<?= $parent['city_id']; ?>"
                                       <? if (!empty($language) && $language == $parent['language_code']):
                                           echo '';
                                       elseif (empty($language)):{
                                           echo '';
                                       }
                                       else:
                                           echo 'disabled';
                                       endif; ?>>
                                   <?= $parent['name']; ?></option>
                             <?php endforeach;
                         endif; ?>
                     </select>
                  </div>
                   <?php if (isset($editable2['language_code']) && $editable2['language_code'] != ''): ?>
                      <div class = "form-group">
                          <?php $counter++; ?>
                         <label for = "<?php echo $counter; ?>">Language</label>
                         <input type = "hidden" name = "post[language]" value = "<?= $editable2['language_code'] ?>">
                         <select disabled id = "<?php echo $counter; ?>" class = "js-example-basic-multiple form-control required" name = "post[language]" multiple = "multiple">
                             <?php foreach ($all as $l): ?>
                                <option value = "<?= $l['name'] ?>" <?= (isset($editable2['language_code']) && $editable2['language_code'] == $l['code']) ? 'selected="selected"' : '' ?>><?= $l['name']; ?></option>
                             <?php endforeach; ?>
                         </select>
                      </div>
                   <?php elseif (!empty($language)): $counter++; ?>
                      <label for = "<?php echo $counter; ?>">Language</label>
                      <input type = "hidden" name = "post[language]" value = "<?= $language ?>">
                      <select disabled id = "<?php echo $counter; ?>" class = "js-example-basic-multiple form-control required" name = "post[language]" multiple = "multiple">

                         <option value = "<?= $language; ?>" selected><?php echo hl::getSingleLanguageName($language); ?></option>

                      </select>
                   <?php endif; ?>
                  <div class = "form-group">
                      <?php $counter++; ?>
                     <label for = "<?php echo $counter; ?>">Description</label>

                     <textarea class = "description" id = "elm1" name = "post[description]"><?php echo (isset($editable2['description'])) ? $editable2['description'] : '' ?></textarea>

                  </div>
                  <div class = "form-group">
                      <?php $counter++; ?>
                     <label>Image</label>
                     <div class = "custom-file">
                        <div class = "image-wrapper" <?= (isset($editable['images']) && $editable['images'] != '') ? '' : 'style="display:none;"' ?>>
                           <img src = "<?php echo (isset($editable['images']) && $editable['images'] != '') ? Yii::$app->request->baseUrl . '/../common/assets/images/uploads/' . $editable['images'] : '' ?>" class = "custom-file-input-image" id = "file-<?php echo $counter; ?>-image" alt = ""/>
                        </div>
                         <?php if (isset($editable['images']) && $editable['images'] != ''): ?>
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
                        <input accept = "image/x-png,image/jpeg" type = "file" name = "image" class = "custom-file-input" id = "file-<?php echo $counter; ?>" onchange = "readURL(this);" aria-describedby = "file-<?php echo $counter; ?>" src = "<?php echo (isset($editable['images']) && $editable['images'] != '') ? $editable['images'] : '' ?>">
                     </div>
                  </div>


                  <button class = "btn btn-primary" id = "save" type = "submit">Save</button>

               </div>
            </div>

         </div>
      </div>
   </form>
</div>
