<?php
$this->title = 'Package';
$new = ($editable == FALSE) ? 1 : 0;
?>

<div class="sb2-2">
   <div class="sb2-2-2">
      <ul>
         <li><a href="<?php echo Yii::$app->request->baseUrl; ?>/"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
         </li>
         <li class="active-bre"><a href="#"> Categories</a>
         </li>
      </ul>
   </div>
   <div class="sb2-2-3">
      <div class="row">
         <div class="col-md-4">
            <div class="box-inn-sp">
               <div class="inn-title">
                   <?php if ($new): ?>
                      <h5 class = "card-title">Add New Category</h5>
                   <?php else: ?>
                      <h5 class = "card-title">Edit <?php echo $editable['name']; ?> </h5>
                   <?php endif; ?>
               </div>
               <div class = "bor1">
                  <form enctype = "multipart/form-data" method = "post" action = "<?php echo Yii::$app->request->baseUrl; ?>/package/category-update/">
                     <input type = "hidden" name = "<?php echo Yii::$app->request->csrfParam; ?>" value = "<?php echo Yii::$app->request->csrfToken; ?>"/>
                     <input type = "hidden" name = "category[id]" value = "<?php echo(isset($editable['id']) ? $editable['id'] : 0) ?>">
                      <?php $counter = 0; ?>
                     <div class = "row">
                        <div class = "input-field col s12">
                            <?php $counter++; ?>
                           <input id = "list-title <?php echo $counter; ?>" name = "category[name]" type = "text" class = "validate" required value = "<?php echo (isset($editable['name'])) ? $editable['name'] : '' ?>">
                           <label for = "list-title <?php echo $counter; ?>">Name</label>
                        </div>
                     </div>


                     <div class = "row">
                        <div class = "input-field col s12">
                            <?php $counter++; ?>
                           <select id = "<?php echo $counter; ?>" name = "category[parent]">

                             <?php if(isset($editable) && !empty($editable)) { ?>
                                <option value = "0" <?php if(empty($editable['parent']==0)){echo 'selected';} ?>>No parent</option>
                             <?php foreach ($categories as $post) { ?>
                              <option value = "<?php echo $post['id'] ?>" <?php if($editable['parent']==$post['id']){echo 'selected';} ?><?php if($editable['id']==$post['id']){echo 'disabled';} ?>><?php echo   $post['name'] ?></option>
                              <?php } }else{ ?>
                                <option value = "0"> Select Parent</option>
                                 <?php foreach ($categories as $post) {  ?>
                                   <option value = "<?php echo $post['id'] ?>"><?php echo   $post['name'] ?></option>
                                 <?php } }?>
                           </select>
                           <label for = "<?php echo $counter; ?>">Select Parent</label>
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
                  <h4>Categories List</h4>
               </div>
               <div class="tab-inn">
                  <div class="table-responsive table-desi">
                     <table class="table table-hover">
                        <thead>
                        <?php if (!empty($categories) && count($categories) > 0): ?>
                        <tr>
                           <th>S.N</th>

                           <th>Name</th>
                           <th>Parent</th>
                           <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $sn =1;
                        $count = 0;
                        foreach ($categories as $post) :
                            $count++; ?>
                           <tr>
                              <td><?php echo $sn; ?></td>

                              <td>
                                  <?php echo (isset($post['name'])) ? trim($post['name']) : '' ?>
                              </td>
                              <td>
                                  <?php 
                                  if(isset($post['parent']) && !empty($post['parent'])) {
                                     echo $post['parent']['name'];
                                  }else{
                                     echo '';
                                  }
                                  ?>
                              </td>

                              <td>
                                 <a href="<?php echo Yii::$app->request->baseUrl; ?>/package/category-edit/<?php echo \common\components\Misc::encodeUrl($post['id']); ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
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