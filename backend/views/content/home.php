<?php
$this->title = 'Edit Homepage';
$this->registerJsFile(Yii::$app->request->baseUrl . '/resources/js/jquery.slimscroll.min.js');
$this->registerJsFile(Yii::$app->request->baseUrl . '/resources/js/content.js');
?>
<div class = "sb2-2 content-editor" data-page = "<?= $page ?>">
   <div class = "sb2-2-2">
      <ul>
         <li><a href = "<?php echo Yii::$app->request->baseUrl; ?>/"><i class = "fa fa-home" aria-hidden = "true"></i> Content</a>
         </li>
         <li class = "active-bre"><a href = "#"> Edit Homepage</a>
         </li>
      </ul>
   </div>
    <?php $counter = 0; ?>

   <div class = "sb2-2-3">
      <div class = "row">
         <div class = "col-md-12">
            <div class = "box-inn-sp content-section-wrapper">
               <div class = "tab-inn content-section">
                  <div class = "row">
                     <div class = "input-field col s12 m6 l4">
                         <?php $counter++; ?>
                        <input id = "<?php echo $counter; ?>" name = "" type = "text" class = "validate" value = "">
                        <label for = "<?php echo $counter; ?>">Title</label>
                     </div>
                     <div class = "input-field col s12 m6 l4">
                         <?php $counter++; ?>
                        <input id = "<?php echo $counter; ?>" name = "" type = "text" class = "validate" value = "">
                        <label for = "<?php echo $counter; ?>">Subtitle</label>
                     </div>
                     <div class = "col s12 m6 l4">
                        <a class = "add-categories" href = "javascript:void(0);">Add Categories</a>
                     </div>
                  </div>
               </div>
            </div>
            <div class = "box-inn-sp  new-section-wrapper">
               <div class = "tab-inn new-section">
                  <div class = "icon"><i class = "fa fa-plus"></i></div>
                  <div class = "buttons">
                     <button class = "btn btn-primary margin-right-10 add-section" data-type = "package">Package</button>
                     <button class = "btn btn-primary margin-right-10 add-section" data-type = "destination">Destination</button>
                     <button class = "btn btn-primary add-section" data-type = "blog">Blog</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<!-- Select Packages -->
<div id = "modal-section-categories" class = "modal">
   <div class = "category-selector wrapper modal-content">
      <div class = "category-selector">
         <div class = "category-search margin-bottom-30">
            <div class = "input-field">
                <?php $counter++; ?>
               <input id = "<?php echo $counter; ?>" name = "" type = "text" class = "validate" value = "">
               <label for = "<?php echo $counter; ?>">Search</label>
            </div>
         </div>
         <div class = "category-list">
             <?php $c = 1 ?>
            <ul>
               <li>
                  <div class = "c-title">
                     <input type = "checkbox" class = "filled-in" id = "c-<?= $c ?>" checked = "checked"/>
                     <label for = "c-<?= $c++ ?>"> Filled in </label>
                  </div>
                  <div class = "c-children">
                     <ul>
                        <li>
                           <input type = "checkbox" class = "filled-in" id = "c-<?= $c ?>" checked = "checked"/>
                           <label for = "c-<?= $c++ ?>"> <span>Filled in</span>
                           </label>
                        </li>
                        <li>
                           <input type = "checkbox" class = "filled-in" id = "c-<?= $c ?>" checked = "checked"/>
                           <label for = "c-<?= $c++ ?>"> <span>Filled in</span>
                           </label>
                        </li>
                     </ul>
                  </div>


               </li>
               <li>
                  <div class = "c-title">
                     <input type = "checkbox" class = "filled-in" id = "c-<?= $c ?>" checked = "checked"/>
                     <label for = "c-<?= $c++ ?>"> Filled in </label>
                  </div>
                  <div class = "c-children">
                     <ul>
                        <li>
                           <input type = "checkbox" class = "filled-in" id = "c-<?= $c ?>" checked = "checked"/>
                           <label for = "c-<?= $c++ ?>"> <span>Filled in</span>
                           </label>
                        </li>
                        <li>
                           <input type = "checkbox" class = "filled-in" id = "c-<?= $c ?>" checked = "checked"/>
                           <label for = "c-<?= $c++ ?>"> <span>Filled in</span>
                           </label>
                        </li>
                     </ul>
                  </div>


               </li>
            </ul>
         </div>
      </div>
      <div class="text-right">
         <button class = "waves-effect waves-light btn update-category">Update</button>
      </div>
   </div>

</div>