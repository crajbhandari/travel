<?php
$this->title = 'Settingss';
if (isset($editable['type']) && $editable['type'] == 'json') {
    $this->registerJsFile(Yii::$app->request->baseUrl . '/assets/plugins/ace-editor/src/ace.js');
    $this->registerJsFile(Yii::$app->request->baseUrl . '/assets/plugins/ace-editor/src/mode-json.js');
}
$new = ($editable == false) ? 1 : 0;
?>
<style>
   textarea{
      resize: vertical;
   }
</style>
<div class="sb2-2">
    <div class="sb2-2-2">
        <ul>
            <li><a href="<?php echo Yii::$app->request->baseUrl; ?>/"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="#"> Settings</a>
            </li>
        </ul>
    </div>
    <div class="sb2-2-3">
        <div class="row">
           <div class="col-md-4">
              <div class="box-inn-sp">
                 <div class="inn-title">
                     <?php if ($new): ?>
                        <h5 class = "card-title">Add New Settings</h5>
                     <?php else: ?>
                        <h5 class = "card-title">Edit Setting </h5>
                     <?php endif; ?>
                 </div>
                  <?php if (!$new): ?>
                     <div class="card-caution">
                         <?= Yii::$app->params['site-settings-caution-note']; ?>
                     </div>
                  <?php endif; ?>
                 <div class = "bor1">
                    <form enctype = "multipart/form-data" method = "post" action = "<?php echo Yii::$app->request->baseUrl; ?>/settings/update/">
                       <input type = "hidden" name = "<?php echo Yii::$app->request->csrfParam; ?>" value = "<?php echo Yii::$app->request->csrfToken; ?>"/>
                       <input type = "hidden" name = "setting[id]" value = "<?php echo(isset($editable['id']) ? $editable['id'] : 0) ?>">
                        <?php $counter = 0; ?>
                       <div class = "row">
                          <div class = "input-field col s12">
                              <?php $counter++; ?>
                             <input id = "list-title <?php echo $counter; ?>" name = "setting[slug]" type = "text" class = "validate" required value = "<?php echo(isset($editable['slug']) ? $editable['slug'] : '') ?>">
                             <label for = "list-title <?php echo $counter; ?>">Slug</label>
                          </div>
                       </div>
                       <div class = "row">
                          <div class = "input-field col s12">
                              <?php $counter++; ?>
                             <select id = "list-title <?php echo $counter; ?>" name = "setting[type]" required>
                                <option <?php echo (isset($editable['type']) && $editable['type'] == 'text') ? 'selected = "selected"' : '' ?> value="text">Text</option>
                                <option <?php echo (isset($editable['type']) && $editable['type'] == 'textarea') ? 'selected = "selected"' : '' ?> value="textarea">Textarea</option>
                                <option <?php echo (isset($editable['type']) && $editable['type'] == 'boolean') ? 'selected = "selected"' : '' ?> value="boolean">Boolean</option>
                                <option <?php echo (isset($editable['type']) && $editable['type'] == 'json') ? 'selected = "selected"' : '' ?> value="json">JSON</option>
                             </select>
                             <label for = "list-title <?php echo $counter; ?>">Data Type</label>
                          </div>
                       </div>
                       <div class = "row">
                          <div class = "input-field col s12">
                              <?php $counter++; ?>
                              <?php if (isset($editable['type']) && $editable['type'] === 'textarea'): ?>
                                 <textarea style="height: 100px;" <?= ($editable['is_editable'] == 0) ? ' disabled="disabled" ' : '' ?> class="materialize-textarea" required id="<?php echo $counter; ?>" name="setting[content]"><?php echo(isset($editable['content']) ? $editable['content'] : '') ?></textarea>
                              <?php elseif (isset($editable['type']) && $editable['type'] == 'json'): ?>
                                 <textarea style="height: 100px;" <?= ($editable['is_editable'] == 0) ? ' disabled="disabled" ' : '' ?> class="materialize-textarea" required id="<?php echo $counter; ?>" name="setting[content]" ><?php echo(isset($editable['content']) ? $editable['content'] : '') ?></textarea>
                              <?php elseif (isset($editable['type']) && $editable['type'] == 'boolean'): ?>
                                 <select <?= ($editable['is_editable'] == 0) ? ' disabled="disabled" ' : '' ?> id="list-title <?php echo $counter; ?>" name="setting[content]">
                                    <option <?php echo (isset($editable['content']) && $editable['content'] == '0') ? 'selected = "selected"' : '' ?> value="0">False</option>
                                    <option <?php echo (isset($editable['content']) && $editable['content'] == '1') ? 'selected = "selected"' : '' ?> value="1">True</option>
                                 </select>
                              <?php else: ?>
                                 <input <?= (isset($editable['is_editable']) && $editable['is_editable'] == 0) ? ' disabled="disabled" ' : '' ?> required="required" id="<?php echo $counter; ?>" name="setting[content]" value="<?php echo(isset($editable['content']) ? $editable['content'] : '') ?>" type="text" class="required">
                              <?php endif; ?>
                             <label for = "textarea1 <?php echo $counter; ?>">Content</label>
                          </div>
                       </div>
                       <div class = "row">
                          <div class = "input-field col s12">
                              <?php $counter++; ?>
                             <input id = "list-title <?php echo $counter; ?>" name = "setting[caption]" type = "text" class = "validate" required value = "<?php echo(isset($editable['caption']) ? $editable['caption'] : '') ?>">
                             <label for = "list-title <?php echo $counter; ?>">Caption</label>
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
                    <div class="inn-title" style="padding-bottom: 50px;">
                       <div class="col-md-6">
                          <h4>Settings List</h4></div>
                       <div class="col-md-6">
                          <div class="text-right">
                             <a class="btn btn-primary btn-sm" href="<?php echo Yii::$app->request->baseUrl; ?>/settings"><i class="mdi mdi-plus"></i>Add New Setting</a>
                          </div></div>
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                <?php if (!empty($settings) && count($settings) > 0): ?>
                                <tr>
                                   <th>S.N</th>
                                   <th>Slug</th>
                                   <th>Type</th>
                                   <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $sn =1;
                                $count = 0;
                                foreach ($settings as $setting) :
                                    $count++; ?>
                                    <tr>
                                        <td><?php echo $sn; ?></td>
                                        <td><?php echo ucwords($setting['slug']); ?></td>
                                        <td>
                                            <?php echo ucwords($setting['type']); ?>
                                        </td>
                                        <td>
                                            <a href="<?php echo Yii::$app->request->baseUrl; ?>/settings/edit/<?php echo \common\components\Misc::encodeUrl($setting['id']); ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                            <a class="delete-item" href="javascript:void(0);" data-id = "<?php echo \common\components\Misc::encodeUrl($setting['id']); ?>" data-tab = "Settings"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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