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
                    <?php echo (isset($editable['id'])) ? ' <i class="mdi mdi-pencil"></i> Edit' : ' <i class="mdi mdi-add"></i> Add New Banner' ?>
                </h4>
            </div>
            <div class = "bor">
                <form enctype = "multipart/form-data" method = "post" action = "<?php echo Yii::$app->request->baseUrl; ?>/slider/set-banner/">
                    <input type = "hidden" name = "<?php echo Yii::$app->request->csrfParam; ?>" value = "<?php echo Yii::$app->request->csrfToken; ?>"/>
                    <input type = "hidden" name = "post[id]" value = "<?php echo (isset($editable['id'])) ? $editable['id'] : '' ?>"/>
                    <?php $counter = 0; ?>

                    <div class = "row">
                        <div class = "input-field col s12">
                            <?php $counter++; ?>
                            <div class = "custom-file" style="margin-bottom: 40px;">
                                <div class = "image-wrapper" <?= (isset($editable['image']) && $editable['image'] != '') ? '' : 'style="display:none;"' ?>>
                                    <img src = "<?php echo (isset($editable['image']) && $editable['image'] != '') ? Yii::$app->request->baseUrl . '/../common/assets/images/banners/' . $editable['image'] : '' ?>" class = "custom-file-input-image" id = "file-<?php echo $counter; ?>-image" alt = ""/>
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

                    <div class = "row">
                        <div class = "input-field col s12">
                            <?php $counter++; ?>
                            <input id = "list-title <?php echo $counter; ?>" name = "post[alt_text]" type = "text" class = "validate" required value = "<?php echo (isset($editable['alt_text'])) ? $editable['alt_text'] : '' ?>">
                            <label for = "list-title <?php echo $counter; ?>">Alt Text</label>
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
   <div class="sb2-2-3">
      <div class="row">
         <div class="col-md-12">
            <div class="box-inn-sp">
               <div class="inn-title">
                  <h4>Slider List</h4>
               </div>
               <div class="tab-inn">
                  <div class="table-responsive table-desi">
                     <table class="table table-hover">
                        <thead>
                        <?php if (!empty($banners) && count($banners) > 0): ?>
                        <tr>
                           <th>S.N</th>
                           <th>Image</th>
                           <th>alt_txt</th>
                           <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $sn =1;
                        $count = 0;
                        foreach ($banners as $post) :
                            $count++; ?>
                           <tr>
                              <td><?php echo $sn; ?></td>
                              <td>
                                       <span class="list-img">
                                          <?php if ($post['image'] != ''): ?>
                                             <img src = "<?php echo Yii::$app->request->baseUrl; ?>/../common/assets/images/banners/<?= $post['image'] ?>" alt = "<?php echo (isset($post['title'])) ? trim($post['title']) : '' ?>">
                                          <?php endif; ?>
                                       </span>
                              </td>
                              <td>   <?php echo (isset($post['alt_text'])) ? trim($post['alt_text']) : '' ?></td>
                              <td>
                                 <a href="<?php echo Yii::$app->request->baseUrl; ?>/slider/banner/<?php echo \common\components\Misc::encrypt($post['id']); ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                 <a class="delete-item" href="javascript:void(0);" data-id = "<?php echo \common\components\Misc::encodeUrl($post['id']); ?>" data-tab = "banners"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                              </td>
                           </tr>
                            <?php
                            $sn++;
                        endforeach;
                        ?>
                        </tbody>
                         <?php else: ?>
                            <h3>Sorry, No Sliders Found</h3>
                         <?php endif; ?>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<script src = "<?php echo Yii::$app->request->baseUrl; ?>/resources/js/plugins.min.js"></script>
