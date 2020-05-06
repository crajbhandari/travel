<?php
$this->title = 'Faq';
$new = ($editable == FALSE) ? 1 : 0;
?>

<div class="sb2-2">
    <div class="sb2-2-2">
        <ul>
            <li><a href="<?php echo Yii::$app->request->baseUrl; ?>/"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="#"> Faq</a>
            </li>
        </ul>
    </div>
    <div class="sb2-2-3">
        <div class="row">
           <div class="col-md-4">
              <div class="box-inn-sp">
                 <div class="inn-title">
                     <?php if ($new): ?>
                        <h5 class = "card-title">Add New Faq</h5>
                     <?php else: ?>
                        <h5 class = "card-title">Edit <?php echo $editable['title']; ?> </h5>
                     <?php endif; ?>
                 </div>
                 <div class = "bor1">
                    <form enctype = "multipart/form-data" method = "post" action = "<?php echo Yii::$app->request->baseUrl; ?>/faq/update/">
                       <input type = "hidden" name = "<?php echo Yii::$app->request->csrfParam; ?>" value = "<?php echo Yii::$app->request->csrfToken; ?>"/>
                       <input type = "hidden" name = "faq[id]" value = "<?php echo(isset($editable['id']) ? $editable['id'] : 0) ?>">
                        <?php $counter = 0; ?>
                       <div class = "row">
                          <div class = "input-field col s12">
                              <?php $counter++; ?>
                             <input id = "list-title <?php echo $counter; ?>" name = "faq[title]" type = "text" class = "validate" required value = "<?php echo (isset($editable['title'])) ? $editable['title'] : '' ?>">
                             <label for = "list-title <?php echo $counter; ?>">Title</label>
                          </div>
                       </div>
                       <div class = "row">
                          <div class = "input-field col s12">
                              <?php $counter++; ?>
                             <label for = "textarea1 <?php echo $counter; ?>">Content</label>
                             <textarea class="materialize-textarea" id = "textarea1 <?php echo $counter; ?>" name = "faq[content]"><?php echo (isset($editable['content'])) ? $editable['content'] : '' ?></textarea>
                          </div>
                       </div>
                       <div class = "row">
                          <div class = "input-field col s12">
                              <?php $counter++; ?>
                             <select id = "<?php echo $counter; ?>" name = "faq[is_active]" required>
                                <option value = "1" <?= (isset($editable['is_active']) && $editable['is_active'] == 1) ? 'selected="selected"' : '' ?>>Active</option>
                                <option value = "0" <?= (isset($editable['is_active']) && $editable['is_active'] == 0) ? 'selected="selected"' : '' ?>>Inactive</option>
                             </select>
                             <label for = "<?php echo $counter; ?>">Active</label>
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
                        <h4>faq List</h4>
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                <?php if (!empty($faq) && count($faq) > 0): ?>
                                <tr>
                                    <th>S.N</th>
                                    <th>Title</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $sn =1;
                                $count = 0;
                                foreach ($faq as $post) :
                                    $count++; ?>
                                    <tr>
                                        <td><?php echo $sn; ?></td>
                                        <td>
                                            <?php echo (isset($post['title'])) ? trim($post['title']) : '' ?>
                                        </td>
                                        <td><?php echo (isset($post['created_at'])) ? ucwords(trim($post['created_at'])) : '' ?></td>
                                        <td>
                                            <a href="<?php echo Yii::$app->request->baseUrl; ?>/faq/edit/<?php echo \common\components\Misc::encodeUrl($post['id']); ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                            <a class="delete-item" href="javascript:void(0);" data-id = "<?php echo \common\components\Misc::encodeUrl($post['id']); ?>" data-tab = "Faq"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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