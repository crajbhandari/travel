<?php
$this->title = 'Edit Homepage';
$this->registerJsFile(Yii::$app->request->baseUrl . '/resources/libs/listjs/list.min.js');
$this->registerJsFile(Yii::$app->request->baseUrl . '/resources/js/content.js');
?>
<div class = "container-fluid">
   <!-- start page title -->
   <div class = "row">
      <div class = "col-12">
         <div class = "page-title-box d-flex align-items-center justify-content-between">
            <h4 class = "mb-0 font-size-18">Edit Homepage</h4>
            <div class = "page-title-right">
               <ol class = "breadcrumb m-0">
                  <li class = "breadcrumb-item"><a href = "<?php echo Yii::$app->request->baseUrl; ?>/"><i class = "fa fa-home" aria-hidden = "true"></i> Home</a></li>
                  <li class = "breadcrumb-item active">Content</li>
                  <li class = "breadcrumb-item active">Edit Homepage</li>
               </ol>
            </div>
         </div>
      </div>
   </div>
   <!-- end page title -->

   <div class = "card content-editor" data-page = "<?= $page ?>">
      <div class = "card-body">
          <?php $counter = 0; ?>
         <div class = "content-section-wrapper">
            <div class = "content-section" data-type = "package">
               <div class = "row">
                  <div class = "col-12 col-sm-6 col-md-8">
                     <div class = "form-group">
                         <?php $counter++; ?>
                        <label for = "<?php echo $counter; ?>" class = "control-label">Title</label>
                        <input type = "text" id = "<?php echo $counter; ?>" value = "" name = "" class = "form-control required">
                     </div>
                     <div class = "form-group">
                         <?php $counter++; ?>
                        <label for = "<?php echo $counter; ?>" class = "control-label">Subtitle</label>
                        <input type = "text" id = "<?php echo $counter; ?>" value = "" name = "" class = "form-control required">
                     </div>

                  </div>
                  <div class = "col-12 col-sm-6 col-md-4">
                     <a class = "btn btn-primary add-categories" href = "javascript:void(0);"><i class = "fa fa-plus m-r-5"></i>Add Categories</a>

                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class = "card-body new-section-wrapper">
         <div class = "new-section">
            <div class = "icon"><i class = "fa fa-plus"></i></div>
            <div class = "buttons">
               <button class = "btn btn-primary margin-right-10 add-section" data-type = "package">Package</button>
               <button class = "btn btn-primary margin-right-10 add-section" data-type = "destination">Destination</button>
               <button class = "btn btn-primary add-section" data-type = "blog">Blog</button>
            </div>
         </div>
      </div>
   </div>
   <!-- end row -->
</div>
<!-- Modal -->
<div class = "modal fade" id = "modal-section-categories" tabindex = "-1" role = "dialog" aria-labelledby = "modal-section-categories-Label" aria-hidden = "true">
   <div class = "modal-dialog" role = "document">
      <div class = "modal-content">
         <div class = "modal-header">
            <h5 class = "modal-title" id = "modal-section-categories-Label">Select Categories</h5>
            <button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close">
               <span aria-hidden = "true">&times;</span>
            </button>
         </div>
         <div class = "modal-body">
            <div class = "search-form">
               <div class = "form-group">
                  <input type = "text" id = "search-list" value = "" name = "" class = "form-control search-categories required">
               </div>
            </div>
            <div class = "category-list">
                <?php $c = 1 ?>
               <ul class = "searchable-list">
                  <li>
                     <div class = "c-title">
                        <input type = "checkbox" class = "filled-in" id = "c-<?= $c ?>" checked = "checked"/>
                        <label class = "keyword" for = "c-<?= $c++ ?>"> Parent 0 </label>
                     </div>
                     <div class = "c-children">
                        <ul>
                           <li>
                              <input type = "checkbox" class = "filled-in" id = "c-<?= $c ?>" checked = "checked"/>
                              <label class = "keyword" for = "c-<?= $c++ ?>"> <span>Child 1</span>
                              </label>
                           </li>
                           <li>
                              <input type = "checkbox" class = "filled-in" id = "c-<?= $c ?>" checked = "checked"/>
                              <label class = "keyword" for = "c-<?= $c++ ?>"> <span>child 2</span>
                              </label>
                           </li>
                        </ul>
                     </div>
                  </li>
                  <li>
                     <div class = "c-title">
                        <input type = "checkbox" class = "filled-in" id = "c-<?= $c ?>" checked = "checked"/>
                        <label class = "keyword" for = "c-<?= $c++ ?>"> Filled in </label>
                     </div>
                     <div class = "c-children">
                        <ul>
                           <li>
                              <input type = "checkbox" class = "filled-in" id = "c-<?= $c ?>" checked = "checked"/>
                              <label class = "keyword" for = "c-<?= $c++ ?>"> <span>Filled in</span>
                              </label>
                           </li>
                           <li>
                              <input type = "checkbox" class = "filled-in" id = "c-<?= $c ?>" checked = "checked"/>
                              <label class = "keyword" for = "c-<?= $c++ ?>"> <span>Filled in</span>
                              </label>
                           </li>
                        </ul>
                     </div>


                  </li>
               </ul>
            </div>
         </div>
         <div class = "modal-footer">
            <button type = "button" class = "btn btn-secondary" data-dismiss = "modal">Close</button>
            <button type = "button" class = "btn btn-primary">Ok</button>
         </div>
      </div>
   </div>
</div>
