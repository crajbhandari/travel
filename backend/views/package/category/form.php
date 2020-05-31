<?php
$this->title = Yii::$app->params['system_name'] . ' | Package';

//$this->registerJsFile(Yii::$app->request->baseUrl . '/assets/');
use common\components\HelperLanguage as hl;

?>
<div class = "container-fluid">
   <!-- start page title -->
   <form enctype = "multipart/form-data" method = "post" action = "<?php echo Yii::$app->request->baseUrl; ?>/package/category-update/">

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
                         <label for = "<?php echo $counter; ?>">Name</label>
                         <input required id = "<?php echo $counter; ?>" name = "post[name]" type = "text" class = "form-control required" value = "<?php echo (isset($editable2['name'])) ? $editable2['name'] : '' ?>">
                      </div>
                   <?php } else { foreach ($all as $lang) { ?>
                      <div class = "form-group">
                              <?php $counter++; ?>
                             <label for = "<?php echo $counter; ?>">Name in <b><?php echo $lang['name']; ?></b></label>
                             <input required id = "<?php echo $counter; ?>" name = "post[name][<?php echo $lang['code']; ?>]" type = "text" class = "form-control required" value = "">
                          </div>
                   <?php } } ?>

                  <div class = "form-group">
                      <?php $counter++; ?>
                     <label for = "<?php echo $counter; ?>">Parent</label>
                     <select id = "<?php echo $counter; ?>" name = "post[parent]" class = "form-control required">
                         <?php if (!empty($editable) && !empty($editable2) && !empty($language)) {
                        echo '<option value="0" selected> Select Parent</option>';
                        foreach ($categories as $category) {
                           if($editable2['package_category_id']!=$category['id']) {
                        ?>
                        <option value = "<?php echo $category['id']; ?>" <?php if($editable2['info']['parent'] == $category['id'])echo 'selected'; ?> ><?php echo $category['name']; ?></option>
                         <?php }} }
                         else {
                             echo '<option selected> Select Parent</option>';
                             foreach ($categories as $category) {
                                 ?>
                                <option value = "<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
                             <?php }
                         } ?>
                     </select>
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


                  <button class = "btn btn-primary" id = "save" type = "submit">Save</button>

               </div>
            </div>

         </div>
      </div>
   </form>
</div>
