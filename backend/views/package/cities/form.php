<?php
$this->title = 'Blog';
//$this->registerJsFile(Yii::$app->request->baseUrl . '/assets/');
?>
<div class = "sb2-2">
   <div class = "sb2-2-2">
      <ul>
         <li><a href = "<?php echo Yii::$app->request->baseUrl; ?>/"><i class = "fa fa-home" aria-hidden = "true"></i> Home</a>
         </li>
         <li class = "active-bre">
            <a href = "#">
                <?php echo (isset($editable['title'])) ? ' <i class="mdi mdi-pencil"></i> ' . $editable['title'] . '' : ' <i class="mdi mdi-add"></i> Add New Post' ?>
            </a>
         </li>
      </ul>
   </div>
   <div class = "sb2-2-add-blog sb2-2-1">
      <div class = "box-inn-sp">
         <div class = "inn-title">
            <h4>
                <?php echo (isset($editable['title'])) ? ' <i class="mdi mdi-pencil"></i> Edit - ' . $editable['title'] . '' : ' <i class="mdi mdi-add"></i> Add New Post' ?>
            </h4>
         </div>
         <div class = "bor"   >
            <form enctype = "multipart/form-data"   method = "post" action = "<?php echo Yii::$app->request->baseUrl; ?>/package/store/">

               <input type = "hidden" name = "<?php echo Yii::$app->request->csrfParam; ?>" value = "<?php echo Yii::$app->request->csrfToken; ?>"/>
               <input type = "hidden" name = "post[id]" value = "<?php echo (isset($editable['id'])) ? $editable['id'] : '' ?>"/>
                <?php $counter = 0; ?>
               <div class = "row"  >
                  <div class = "input-field col s12">
                      <?php $counter++; ?>
                     <input id = "list-title <?php echo $counter; ?>" name = "post[name]" type = "text" class = "validate" required value = "<?php echo (isset($editable['name'])) ? $editable['name'] : '' ?>">
                     <label for = "list-title <?php echo $counter; ?>">Name</label>
                  </div>
               </div>
               <div class = "row">
                  <div class = "input-field col s12">
                      <?php $counter++; ?>
                     <label for = "textarea1 <?php echo $counter; ?>">Description</label>
                     <textarea id = "textarea1 <?php echo $counter; ?>" class = "summernote" name = "post[description]"><?php echo (isset($editable['description'])) ? $editable['description'] : '' ?></textarea>
                  </div>
               </div>
               <div class = "row">
                  <div class = "input-field col s12">
                     <input id = "list-title <?php echo $counter; ?>" name = "post[location]" type = "text" class = "validate" required value = "<?php echo (isset($editable['location'])) ? $editable['location'] : '' ?>">
                     <label for = "list-title <?php echo $counter; ?>">Location</label>
                  </div>
               </div>

               <div class = "row">
                  <div class = "row">
                     <div class = "input-field col s12">
                         <?php $counter++; ?>
                        <div class = "input-field col s12">
                           <span id = "img-count">Choose Files</span>
                        </div>
                        <div class = "custom-file">
                           <label class = "custom-file-label" id = "" for = "file-<?php echo $counter; ?>">
                              <i class = "fa fa-file"></i>
                              <span id = "hello"></span>
                           </label>
                           <input accept = "image/x-png,image/jpeg" multiple type = "file" name = "image[]" class = "custom-file-input pkg-imgs" id = "file-<?php echo $counter; ?>" onchange = "readURL(this);" aria-describedby = "file-<?php echo $counter; ?>" src = "<?php echo (isset($editable['image']) && $editable['image'] != '') ? $editable['image'] : '' ?>">
                        </div>
                        <div class = "images">
                            <?php
                            $sn = 0;
                            if (isset($editable['images']) && !empty($editable['images'])) {
                                $images = json_decode($editable['images']);
                                foreach ($images as $i => $image) {
                                    ?>
                                   <div class = "card col s4">
                                      <img class = "card-img-top" src = "<?php echo (isset($image) && $image != '') ? Yii::$app->request->baseUrl . '/../common/assets/images/uploads/' . $image : '' ?>" alt = "Card image cap">
                                      <div class = "card-body">
                                         <a href = "javascript:void();" class = "btn btn-danger remove-image-package" data-tab = "Package" data-for = "<?php echo $editable['id'] ?>" data-id = "<?php echo $sn; ?>">Delete</a>
                                      </div>
                                   </div>
                                    <?php $sn++;
                                }
                            } ?>
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
