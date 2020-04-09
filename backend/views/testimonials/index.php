<?php
$this->title = 'Blog';
$new = ($editable == FALSE) ? 1 : 0;
?>

<div class="sb2-2">
    <div class="sb2-2-2">
        <ul>
            <li><a href="<?php echo Yii::$app->request->baseUrl; ?>/"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="#"> Testimonials</a>
            </li>
        </ul>
    </div>
    <div class="sb2-2-3">
        <div class="row">
           <div class="col-md-4">
              <div class="box-inn-sp">
                 <div class="inn-title">
                     <?php if ($new): ?>
                        <h5 class = "card-title">Add New Testimonial</h5>
                     <?php else: ?>
                        <h5 class = "card-title">Edit <?php echo $editable['name']; ?> </h5>
                     <?php endif; ?>
                 </div>
                 <div class = "bor1">
                    <form enctype = "multipart/form-data" method = "post" action = "<?php echo Yii::$app->request->baseUrl; ?>/testimonials/update/">
                       <input type = "hidden" name = "<?php echo Yii::$app->request->csrfParam; ?>" value = "<?php echo Yii::$app->request->csrfToken; ?>"/>
                       <input type = "hidden" name = "testimonial[id]" value = "<?php echo(isset($editable['id']) ? $editable['id'] : 0) ?>">
                        <?php $counter = 0; ?>
                       <div class = "row">
                          <div class = "input-field col s12">
                              <?php $counter++; ?>
                             <input id = "list-title <?php echo $counter; ?>" name = "testimonial[name]" type = "text" class = "validate" required value = "<?php echo (isset($editable['name'])) ? $editable['name'] : '' ?>">
                             <label for = "list-title <?php echo $counter; ?>">Name</label>
                          </div>
                       </div>
                       <div class = "row">
                          <div class = "input-field col s12">
                              <?php $counter++; ?>
                             <label for = "textarea1 <?php echo $counter; ?>">Content</label>
                             <textarea class="materialize-textarea" id = "textarea1 <?php echo $counter; ?>" name = "testimonial[content]"><?php echo (isset($editable['content'])) ? $editable['content'] : '' ?></textarea>
                          </div>
                       </div>
                       <div class = "row">
                          <div class = "input-field col s12">
                             <input id = "list-title <?php echo $counter; ?>" name = "testimonial[position]" type = "text" class = "validate" required value = "<?php echo (isset($editable['position'])) ? $editable['position'] : '' ?>">
                             <label for = "list-title <?php echo $counter; ?>">Position</label>
                          </div>
                       </div>
                       <div class = "row">
                          <div class = "input-field col s12">
                              <?php $counter++; ?>
                             <input id = "post-auth <?php echo $counter; ?>" name = "post[info]" type = "text" class = "validate" value = "<?php echo (isset($editable['info'])) ? $editable['info'] : '' ?>">
                             <label for = "post-auth <?php echo $counter; ?>">Info</label>
                          </div>

                          <div class = "row">
                             <div class = "input-field col s12">
                                 <?php $counter++; ?>
                                <div class = "custom-file">

                                   <div class = "image-wrapper" <?= (isset($editable['image']) && $editable['image'] != '') ? '' : 'style="display:none;"' ?>>
                                      <img src = "<?php echo (isset($editable['image']) && $editable['image'] != '') ? Yii::$app->request->baseUrl . '/../common/assets/images/uploads/' . $editable['image'] : '' ?>" class = "custom-file-input-image" id = "file-<?php echo $counter; ?>-image" alt = ""/>
                                   </div>
                                    <?php if (isset($editable['image']) && $editable['image'] != ''): ?>
                                       <div class = "image-actions text-right">
                                          <a href = "javascript:void();" class = "remove-image" data-tab = "testimonials" data-id = "<?php echo \common\components\Misc::encodeUrl($editable['id']) ?>">
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
            <div class="col-md-8">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Testimonials List</h4>
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                <?php if (!empty($testimonials) && count($testimonials) > 0): ?>
                                <tr>
                                    <th>S.N</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $sn =1;
                                $count = 0;
                                foreach ($testimonials as $post) :
                                    $count++; ?>
                                    <tr>
                                        <td><?php echo $sn; ?></td>
                                        <td>
                                       <span class="list-img">
                                          <?php if ($post['image'] != ''): ?>
                                              <img src = "<?php echo Yii::$app->request->baseUrl; ?>/../common/assets/images/uploads/<?= $post['image'] ?>" alt = "<?php echo (isset($post['title'])) ? trim($post['title']) : '' ?>">
                                          <?php endif; ?>
                                       </span>
                                        </td>
                                        <td>
                                            <?php echo (isset($post['name'])) ? trim($post['name']) : '' ?>
                                        </td>
                                        <td><?php echo (isset($post['position'])) ? ucwords(trim($post['position'])) : '' ?></td>
                                        <td><?php echo (isset($post['created_on'])) ? ucwords(trim($post['created_on'])) : '' ?></td>

                                        <td>
                                            <a href="<?php echo Yii::$app->request->baseUrl; ?>/testimonials/edit/<?php echo \common\components\Misc::encodeUrl($post['id']); ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                            <a class="delete-item" href="javascript:void(0);" data-id = "<?php echo \common\components\Misc::encodeUrl($post['id']); ?>" data-tab = "Testimonials"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                                    <?php $sn++; ?>
                                <?php  endforeach; ?>
                                </tbody>
                                <?php else: ?>
                                    <h3>Sorry, No Posts Found</h3>
                                <?php endif; ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>