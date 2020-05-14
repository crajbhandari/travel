<?php
$this->title = 'Package';
$this->registerJsFile(Yii::$app->request->baseUrl . '/resources/js/plugins.min.js');
$this->registerJsFile(Yii::$app->request->baseUrl . '/resources/js/autocomplete.js');
$this->registerCssFile(Yii::$app->request->baseUrl . '/resources/css/slider-menu.jquery.css');
$this->registerCssFile(Yii::$app->request->baseUrl . '/resources/css/slider-menu.theme.jquery.css');

?>

<script>
   var city = <?php echo ($city); ?>;
</script>


<style>
   .modal{
      width: 70%;
   }
   .modal img{
      width:100%;
   }
</style>

<div class = "sb2-2">
   <div class = "sb2-2-2">
      <ul>
         <li><a href = "<?php echo Yii::$app->request->baseUrl; ?>/"><i class = "fa fa-home" aria-hidden = "true"></i> Home</a>
         </li>
         <li class = "active-bre">
            <a href = "#">
                <?php echo (isset($editable['title'])) ? ' <i class="mdi mdi-pencil"></i> ' . $editable['title'] . '' : ' <i class="mdi mdi-add"></i> Add New Package' ?>
            </a>
         </li>
      </ul>
   </div>
   <div class = "sb2-2-add-blog sb2-2-1">
      <div class = "box-inn-sp">
         <div class = "inn-title">
            <h4>
                <?php echo (isset($editable['title'])) ? ' <i class="mdi mdi-pencil"></i> Edit - ' . $editable['title'] . '' : ' <i class="mdi mdi-add"></i> Add New Package' ?>
            </h4>
         </div>

         <div class = "bor" " >
            <form enctype = "multipart/form-data"  method = "post" action = "<?php echo Yii::$app->request->baseUrl; ?>/package/update/">
<!--               <button type="button" name="add" id="added" class="btn btn-success">Add Title</button>-->

               <input type = "hidden" name = "<?php echo Yii::$app->request->csrfParam; ?>" value = "<?php echo Yii::$app->request->csrfToken; ?>"/>
               <input type = "hidden" name = "post[id]" value = "<?php echo (isset($editable['id'])) ? $editable['id'] : '' ?>"/>
                <?php $counter = 0; ?>
               <div class = "row" id="dynamic_field">
                  <div class = "input-field col s12">
                      <?php $counter++; ?>
                     <input id = "list-title <?php echo $counter; ?>" name = "post[title]" type = "text" class = "validate" required value = "<?php echo (isset($editable['title'])) ? $editable['title'] : '' ?>">
                     <label for = "list-title <?php echo $counter; ?>">Title</label>
                  </div>
               </div>
               <div class = "row">
                  <div class = "input-field col s12">
                      <?php $counter++; ?>
                     <input id = "list-title <?php echo $counter; ?>" name = "post[location]" type = "text" class = "validate" required value = "<?php echo (isset($editable['location'])) ? $editable['location'] : '' ?>">
                     <label for = "list-title <?php echo $counter; ?>">Location</label>
                  </div>
               </div>
               <div class = "row">
                  <div class = "input-field col s12">
                      <?php $counter++; ?>
                     <input id = "list-title <?php echo $counter; ?>" name = "post[duration]" type = "text" class = "validate" required value = "<?php echo (isset($editable['duration'])) ? $editable['duration'] : '' ?>">
                     <label for = "list-title <?php echo $counter; ?>">Duration</label>
                  </div>
               </div>
               <div class = "row">
                  <div class = "input-field col s12">
                      <?php $counter++; ?>
                     <input id = "list-title <?php echo $counter; ?>" name = "post[discount]" type = "text" class = "validate" required value = "<?php echo (isset($editable['discount'])) ? $editable['discount'] : '' ?>">
                     <label for = "list-title <?php echo $counter; ?>">Discount</label>
                  </div>
               </div>
               <div class = "row">
                  <div class = "input-field col s12">
                     <input id = "list-title <?php echo $counter; ?>" name = "post[budget]" type = "text" class = "validate" required value = "<?php echo (isset($editable['budget'])) ? $editable['budget'] : '' ?>">
                     <label for = "list-title <?php echo $counter; ?>">Budget</label>
                  </div>
               </div>
               <div class = "row">
                  <div class = "input-field col s12">
                     <input id = "city-autocomplete" name = "post[city]" type = "text" class = "autocomplete validate" required value = "<?php echo (isset($editable['city'])) ? $editable['city'] : '' ?>">
                     <label for = "city-autocomplete">City</label>
                  </div>
               </div>
               <div class = "row" style="margin-top: 40px;">
                  <div class = "input-field col s10">
                     <textarea name = "post[iframe]" class="materialize-textarea" id = "textarea1"><?php echo (isset($editable['iframe'])) ? $editable['iframe'] : '' ?></textarea>
<!--                     <input id = "list-title --><?php //echo $counter; ?><!--" name = "post[iframe]" type = "text" class = "validate" required value = "--><?php //echo (isset($editable['iframe'])) ? $editable['iframe'] : '' ?><!--">-->
                     <label for = "list-title <?php echo $counter; ?>">Map Location (Copy Paste iframe from google maps)</label>
                  </div>
                  <div class="input-field col s2">
                     <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Help</a>                  </div>
               </div>
               <div class = "row">
                  <div class = "input-field col s12">
                      <?php $counter++; ?>
                     <select id = "<?php echo $counter; ?>" name = "post[visibility]" required>
                        <option value = "1" <?= (isset($editable['visibility']) && $editable['visibility'] == 1) ? 'selected="selected"' : '' ?>>Visible</option>
                        <option value = "0" <?= (isset($editable['visibility']) && $editable['visibility'] == 0) ? 'selected="selected"' : '' ?>>Hidden</option>
                     </select>
                     <label for = "<?php echo $counter; ?>">Select Visibility</label>
                  </div>
               </div>
               <div class = "row">
                  <div class = "input-field col s12">
                      <?php $counter++; ?>
                     <label for = "textarea1 <?php echo $counter; ?>">About The Tour</label>
                     <textarea id = "textarea1 <?php echo $counter; ?>" class = "summernote" name = "post[about]"><?php echo (isset($editable['about_tour'])) ? $editable['about_tour'] : '' ?></textarea>
                  </div>
               </div>
               <div class = "row">
                  <div class = "input-field col s12">
                      <?php $counter++; ?>
                     <label for = "textarea1 <?php echo $counter; ?>">Itinerary</label>
                     <textarea id = "textarea1 <?php echo $counter; ?>" class = "summernote" name = "post[itinerary]"><?php echo (isset($editable['itinerary'])) ? $editable['itinerary'] : '' ?></textarea>
                  </div>
               </div>
               <div class = "row">
                  <div class = "input-field col s12">
                      <?php $counter++; ?>
                     <label for = "textarea1 <?php echo $counter; ?>">Description</label>
                     <textarea id = "textarea1 <?php echo $counter; ?>" class = "summernote" name = "post[info]"><?php echo (isset($editable['info'])) ? $editable['info'] : '' ?></textarea>
                  </div>
               </div>
               <div class = "row">
                  <div class = "input-field col s12">
<!--                     <input id = "list-title --><?php //echo $counter; ?><!--" name = "post[budget]" type = "text" class = "validate" required value = "--><?php //echo (isset($editable['budget'])) ? $editable['budget'] : '' ?><!--">-->
<!--                     <label for = "list-title --><?php //echo $counter; ?><!--">Category</label>-->
                     <div class = "row category-wrapper">
                        <div class = "category-select category-01 col-sm-4">
                           <div class = "category-select-scroll ">
                              <input type = "hidden" name = "business[category_id][]" value = "" class = "selected_cat">
                              <ul id="cat-03" >
                                 <li>
                                    <a  class = "has-child text-white" href = "javascript:void(0);">Select a Category</a>
                                     <?php echo \common\components\HelperPackage::buildCategoryList(0, $category) ?>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class = "row">
                  <div class = "row">
                     <div class = "input-field col s12">
                         <?php $counter++; ?>
                        <div class = "input-field col s12">
                        <span id="img-count">Choose Files</span>
                        </div>
                        <div class = "custom-file">
                           <label class = "custom-file-label" id = "" for = "file-<?php echo $counter; ?>">
                              <i class = "fa fa-file"></i>
                              <span id="hello"></span>
                           </label>
                           <input accept = "image/x-png,image/jpeg" multiple type = "file" name = "image[]" class = "custom-file-input pkg-imgs" id = "file-<?php echo $counter; ?>" onchange = "readURL(this);" aria-describedby = "file-<?php echo $counter; ?>" src = "<?php echo (isset($editable['image']) && $editable['image'] != '') ? $editable['image'] : '' ?>">
                        </div>
                        <div class="images">
                         <?php
                         $sn=0;
                         if (isset($editable['images']) && !empty($editable['images'])) {
                             $images = json_decode($editable['images']);
                             foreach ($images as $i => $image) {
                                 ?>
                                <div class = "card col s4">
                                   <img class = "card-img-top" src = "<?php echo (isset($image) && $image != '') ? Yii::$app->request->baseUrl . '/../common/assets/images/uploads/' . $image : '' ?>" alt = "Card image cap">
                                   <div class = "card-body">
                                      <a href = "javascript:void();" class = "btn btn-danger remove-image-package" data-tab = "Package" data-for="<?php echo $editable['id'] ?>" data-id = "<?php echo $sn; ?>">Delete</a>
                                   </div>
                                </div>
                             <?php $sn++;}
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
<!-- Modal Structure -->
<div id="modal1" class="modal">
   <div class="modal-content">
      <h4>How to Embed a Google Map In Your Web Page</h4>
   </div>
   <div class = "para-content">
      <p>You can embed a simple map, a set of driving directions, a local search, or maps created by other users. Here's how:</p>
      <p>1. Once you have your Google Map created, ensure that the map you'd like to embed appears in the current map display.</p>
      <p>2. Click "Share" at the right of the page. </p>
      <p>3. In the box that pops up, click "Embed"</p>
      <p>4. Copy the entire HTML 'iframe' code string and paste it into the HTML code of your web page.</p>
      <img src = "<?php echo Yii::$app->request->baseUrl; ?>/../common/assets/images/embed-google-map.jpg" alt = ""/>
   </div>
</div>

