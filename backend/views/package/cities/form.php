<?php
$this->title = Yii::$app->params['system_name'] . ' | Cities';

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
                <?php echo (isset($editable2['name'])) ? ' <h4 class="mb-0 font-size-18">Edit - ' . $editable2['name'] . '</h4> ' : ' <h4 class="mb-0 font-size-18"> Add New Post</h4>' ?>
            </div>
         </div>
      </div>
      <div class = "row">
         <div class = "col-lg-12">
            <div class = "card">
               <div class = "card-body">
                   <?php $counter = 0; ?>
                   <?php if (!empty($editable) && !empty($editable2) && !empty($language)) { ?>
                      <div class = "form-group">
                          <?php $counter++; ?>
                         <label for = "<?php echo $counter; ?>">City Name</label>
                         <input required id = "<?php echo $counter; ?>" name = "post[name]" type = "text" class = "form-control required" value = "<?php echo (isset($editable2['name'])) ? $editable2['name'] : '' ?>">
                      </div>
                   <?php } else { foreach ($all as $lang) { ?>
                      <div class = "form-group">
                              <?php $counter++; ?>
                             <label for = "<?php echo $counter; ?>">City Name in <b><?php echo $lang['name']; ?></b></label>
                             <input required id = "<?php echo $counter; ?>" name = "post[name][<?php echo $lang['code']; ?>]" type = "text" class = "form-control required" value = "">
                          </div>
                   <?php } } ?>

                  <div class = "form-group">
                      <?php $counter++; ?>
                     <label for = "<?php echo $counter; ?>">Parent</label>
                     <select id = "<?php echo $counter; ?>" name = "post[parent]" class = "form-control required">
                         <?php if (!empty($editable) && !empty($editable2) && !empty($language)) {
                        echo '<option selected> Select Parent</option>';
                        foreach ($cities as $city) {
                           if($editable2['city_id']!=$city['id']) {
                        ?>
                        <option value = "<?php echo $city['id']; ?>" <?php if($editable2['info']['parent'] == $city['id'])echo 'selected'; ?> ><?php echo $city['name']; ?></option>
                         <?php }} }
                         else {
                             echo '<option selected> Select Parent</option>';
                             foreach ($cities as $city) {
                                 ?>
                                <option value = "<?php echo $city['id']; ?>"><?php echo $city['name']; ?></option>
                             <?php }
                         } ?>
                     </select>
                  </div>
                  <div class = "form-group">
                      <?php $counter++; ?>
                     <label for = "<?php echo $counter; ?>">Map Location (Copy Paste iframe from google maps)</label>
                     <button style = "padding: 0px 10px 0 10px;" type = "button" class = "btn btn-primary waves-effect waves-light" data-toggle = "modal" data-target = ".bs-example-modal-xl">Help</button>
                     <textarea class = "form-control" cols = "10" id = "<?php echo $counter; ?>" name = "post[location]" rows = "7"><?php echo (isset($editable2['location'])) ? $editable2['location'] : '' ?></textarea>
                  </div>
                   <?php if (isset($editable2['language_code']) && $editable2['language_code'] != ''): ?>
                      <div class = "form-group">
                          <?php $counter++; ?>
                         <label for = "<?php echo $counter; ?>">Language</label>
                         <input type = "hidden" name = "post[language]" value = "<?= $editable2['language_code'] ?>">
                         <select id = "<?php echo $counter; ?>" class = "js-example-basic-multiple form-control required" name = "post[language]" multiple = "multiple">
                             <?php foreach ($all as $l): ?>
                                <option value = "<?= $l['code'] ?>" <?= (isset($editable2['language_code']) && $editable2['language_code'] == $l['code']) ? 'selected="selected"' : '' ?>><?= $l['name']; ?></option>
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
                   <?php if (isset($editable2['language_code']) && $editable2['language_code'] != ''): ?>
                      <div class = "form-group">
                          <?php $counter++; ?>
                         <label for = "<?php echo $counter; ?>">Description</label>

                         <textarea class = "description" id = "elm1" name = "post[description]"><?php echo (isset($editable2['description'])) ? $editable2['description'] : '' ?></textarea>

                      </div>
                   <?php endif; ?>
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
<div class = "modal fade bs-example-modal-xl" tabindex = "-1" role = "dialog" aria-labelledby = "myExtraLargeModalLabel" aria-hidden = "true">
   <div class = "modal-dialog modal-lg">
      <div class = "modal-content">
         <div class = "modal-header">
            <h5 class = "modal-title mt-0" id = "myModalLabel">How to Embed a Google Map In Your Web Page</h5>
            <button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close">
               <span aria-hidden = "true">&times;</span>
            </button>
         </div>
         <div class = "modal-body">
            <p>You can embed a simple map, a set of driving directions, a local search, or maps created by other users. Here's how:</p>
            <p>1. Once you have your Google Map created, ensure that the map you'd like to embed appears in the current map display.</p>
            <p>2. Click "Share" at the right of the page.</p>
            <p>3. In the box that pops up, click "Embed"</p>
            <p>4. Copy the entire HTML 'iframe' code string and paste it into the HTML code of your web page.</p>
            <img src = "<?php echo Yii::$app->request->baseUrl; ?>/../common/assets/images/embed-google-map.jpg" alt = ""/>
         </div>
         <div class = "modal-footer">
            <button type = "button" class = "btn btn-secondary waves-effect" data-dismiss = "modal">Close</button>
         </div>
      </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
</div>
