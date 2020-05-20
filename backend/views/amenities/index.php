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
                      <h5 class = "card-title">Add New Amenities</h5>
                   <?php else: ?>
                      <h5 class = "card-title">Edit <?php echo $editable['name']; ?> </h5>
                   <?php endif; ?>
               </div>
               <div class = "bor1">
                  <form enctype = "multipart/form-data" method = "post" action = "<?php echo Yii::$app->request->baseUrl; ?>/amenities/update/">
                     <input type = "hidden" name = "<?php echo Yii::$app->request->csrfParam; ?>" value = "<?php echo Yii::$app->request->csrfToken; ?>"/>
                     <input type = "hidden" name = "testimonial[id]" value = "<?php echo(isset($editable['id']) ? $editable['id'] : 0) ?>">
                      <?php $counter = 0; ?>
                     <div class = "row">
                        <div class = "input-field col s12">
                            <?php $counter++; ?>
                           <input id = "list-title <?php echo $counter; ?>" name = "amenities[name]" type = "text" class = "validate" required value = "<?php echo (isset($editable['name'])) ? $editable['name'] : '' ?>">
                           <label for = "list-title <?php echo $counter; ?>">Name</label>
                        </div>
                     </div>
                     <div class = "row">
                        <div class = "input-field col s12">
                            <?php $counter++; ?>
                           <label for = "textarea1 <?php echo $counter; ?>">Display Name</label>
                           <textarea class="materialize-textarea" id = "textarea1 <?php echo $counter; ?>" name = "amenities[display_name]"><?php echo (isset($editable['display_name'])) ? $editable['display_name'] : '' ?></textarea>
                        </div>
                     </div>
                     <div class = "row">
                        <div class = "input-field col s12">
                            <?php $counter++; ?>

                           <select id="<?php echo $counter; ?>" name="amenities[icon]"  data-plugin="select2-icon">
                               <?php foreach (Yii::$app->params['fa-icons'] as $k => $m) : ?>
                                  <option data-icon="fa <?= str_replace("_", "-", $m) ?>" <?php echo (isset($editable['description']) && $editable['description'] == $m) ? 'selected = "selected"' : '' ?> value="<?= $m ?>"> <?= ucwords(str_replace("_", " ", $m)); ?></option>
                               <?php endforeach; ?>
                           </select>
                           <label for="<?php echo $counter; ?>" class="control-label required">Icon</label>
                        </div>
                     </div>
                     <div class = "row">
                        <div class = "input-field col s12">
                            <?php $counter++; ?>
                           <input id = "post-auth <?php echo $counter; ?>" name = "amenities[info]" type = "text" class = "validate" value = "<?php echo (isset($editable['info'])) ? $editable['info'] : '' ?>">
                           <label for = "post-auth <?php echo $counter; ?>">Info</label>
                        </div>
                     </div>
                     <div class = "row">
                        <div class = "input-field col s12">
                            <?php $counter++; ?>
                           <label for = "<?php echo $counter; ?>">Select Status</label><br><br>
                           <select id = "<?php echo $counter; ?>" name = "amenities[is_active]" required>
                              <option value = "0" <?= (isset($editable['is_active']) && $editable['is_active'] == 0) ? 'selected="selected"' : '' ?>>Inactive</option>
                              <option value = "1" <?= (isset($editable['is_active']) && $editable['is_active'] == 1) ? 'selected="selected"' : '' ?>>Active</option>

                           </select>

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
                  <h4>Amenities List</h4>
               </div>
               <div class="tab-inn">
                  <div class="table-responsive table-desi">
                     <table class="table table-hover">
                        <thead>
                        <?php if (!empty($all) && count($all) > 0): ?>
                        <tr>
                           <th>S.N</th>
                           <th>Name</th>
                           <th>Display Name</th>
                           <th>Icon</th>
                           <th>Status</th>
                           <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $sn =1;
                        $count = 0;
                        foreach ($all as $post) :
                            $count++; ?>
                           <tr>
                              <td><?php echo $sn; ?></td>

                              <td>
                                  <?= ucwords($post['name']); ?>
                              </td>
                              <td>
                                  <?= ucwords($post['display_name']); ?>
                              </td>
                              <td><?= ($post['icon'] != '') ? '<i class="ic fa ' . $post['icon'] . '"></i> <span class="ic-text">fa ' . $post['icon'] . '</span>' : '-' ?></td>
                              <td>
                                  <?php if ($post['is_active']> 0) : ?>
                                     <span class="label label-success">Active</span>
                                     <!--                                      <a href="javascript:void(0);" class="label --><?//= ($a['is_active'] === 1) ? 'label-success' : 'label-danger' ?><!-- label-success --><?//= ($is_authorized) ? 'toggle-status' : 'disabled' ?><!-- " --><?//= ($is_authorized) ? 'data-a="' . Misc::encrypt($a['id']) . '" data-b="' . Misc::encrypt(Misc::getClass($a)) . '"' : '' ?><!--><?//= ($a['is_active'] === 1) ? 'Active' : 'Inactive' ?><!--</a>-->
                                  <?php else: ?>
                                     <span class="label label-light-danger">InActive</span>
                                  <?php endif; ?>
                              </td>

                              <td>
                                 <a href="<?php echo Yii::$app->request->baseUrl; ?>/amenities/edit/<?php echo \common\components\Misc::encodeUrl($post['id']); ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                 <a class="delete-item" href="javascript:void(0);" data-id = "<?php echo \common\components\Misc::encodeUrl($post['id']); ?>" data-tab = "Amenities"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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