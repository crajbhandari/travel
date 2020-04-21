<?php
$this->title = 'User DashBoard';
?>
<div class = "sb2-2">
   <div class = "sb2-2-2">
      <ul>
         <li><a href = "<?php echo Yii::$app->request->baseUrl; ?>/"><i class = "fa fa-home" aria-hidden = "true"></i> Home</a>
         </li>
         <li class = "active-bre"><a href = "#">User Dashboard</a>
         </li>
      </ul>
   </div>
   <div class = "sb2-2-3">
      <div class = "row">
         <div class = "col-md-12">
            <div class = "box-inn-sp">
               <div class = "inn-title">
                  <h4>Welcome <?php echo $editable['name']; ?></h4>
                  <p><?php echo ucwords($editable['role']); ?></p>
               </div>
               <div class = "tab-inn">
                  <form enctype = "multipart/form-data" method = "post" action = "<?php echo Yii::$app->request->baseUrl; ?>/site/update-dashboard/">
                     <input type = "hidden" name = "<?php echo Yii::$app->request->csrfParam; ?>" value = "<?php echo Yii::$app->request->csrfToken; ?>"/>
                     <input type = "hidden" name = "post[id]" value = "<?php echo (isset($editable['id'])) ? $editable['id'] : '' ?>"/>
                      <?php $counter = 0; ?>
                     <div class = "row">
                        <div class = "row col s6">
                           <div class = "input-field col s12">
                               <?php $counter++; ?>
                              <input id = "list-title <?php echo $counter; ?>" name = "post[name]" type = "text" class = "validate" required value = "<?php echo (isset($editable['name'])) ? $editable['name'] : '' ?>">
                              <label for = "list-title <?php echo $counter; ?>">Name</label>
                           </div>
                           <div class = "input-field col s12">
                               <?php $counter++; ?>
                              <input id = "list-title <?php echo $counter; ?>" name = "post[username]" type = "text" class = "validate" required value = "<?php echo (isset($editable['username'])) ? $editable['username'] : '' ?>">
                              <label for = "list-title <?php echo $counter; ?>">Username</label>
                           </div>
                           <div class = "input-field col s12">
                               <?php $counter++; ?>
                              <input id = "list-title <?php echo $counter; ?>" name = "post[email]" type = "text" class = "validate" required value = "<?php echo (isset($editable['email'])) ? $editable['email'] : '' ?>">
                              <label for = "list-title <?php echo $counter; ?>">Email</label>
                           </div>
                        </div>
                        <div class = "row col s6">
                           <div class = "input-field col s12">
                               <?php $counter++; ?>
                              <div class = "custom-file">

                                 <div class = "image-wrapper">
                                    <img src = "<?php echo Yii::$app->request->baseUrl; ?>/../common/assets/images/uploads/1552110608s.jpg" alt = "">                                 </div>

                                     <div class = "image-actions text-right">
                                        <a href = "javascript:void();" class = "remove-image" data-tab = "blog" data-id = "0">
                                           <i class = "mdi mdi-close margin-right-5"></i>
                                           Remove Image
                                        </a>
                                     </div>
                                 <label class = "custom-file-label" id = "file-<?php echo $counter; ?>-label" for = "file-<?php echo $counter; ?>">
                                    <i class = "fa fa-file"></i>
                                    <span>Upload Image</span>
                                 </label>
                                 <input accept = "image/x-png,image/jpeg" type = "file" name = "image" class = "custom-file-input" id = "file-<?php echo $counter; ?>" onchange = "readURL(this);" aria-describedby = "file-<?php echo $counter; ?>" src = "<?php echo (isset($editable['image']) && $editable['image'] != '') ? $editable['image'] : '' ?>">
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--                            <div class="row">-->
                     <!--                                <div class="input-field col s6">-->
                     <!--                                    --><?php //$counter++; ?>
                     <!--                                    <input id = "list-title --><?php //echo $counter; ?><!--" name = "post[name]" type = "text" class = "validate" required value = "--><?php //echo (isset($editable['name'])) ? $editable['name'] : '' ?><!--">-->
                     <!--                                    <label for = "list-title --><?php //echo $counter; ?><!--">Name</label>-->
                     <!--                                </div>-->
                     <!--                                <div class="input-field col s6">-->
                     <!--                                    --><?php //$counter++; ?>
                     <!--                                    <input id = "list-title --><?php //echo $counter; ?><!--" name = "post[name]" type = "text" class = "validate" required value = "--><?php //echo (isset($editable['name'])) ? $editable['name'] : '' ?><!--">-->
                     <!--                                    <label for = "list-title --><?php //echo $counter; ?><!--">Name</label>-->
                     <!--                                </div>-->
                     <!--                            </div>-->
                     <!--                            <div class="row">-->
                     <!--                                <div class="input-field col s6">-->
                     <!--                                    <input id="f_name" type="text" value="www.websitename.com/facebook" class="validate">-->
                     <!--                                    <label for="f_name">Facebook</label>-->
                     <!--                                </div>-->
                     <!--                                <div class="input-field col s6">-->
                     <!--                                    <input id="g_name" type="text" value="www.websitename.com/google plus" class="validate">-->
                     <!--                                    <label for="g_name">Google plus</label>-->
                     <!--                                </div>-->
                     <!--                            </div>-->
                     <!--                            <div class="row">-->
                     <!--                                <div class="input-field col s12">-->
                     <!--                                    <input id="email" type="email" value="marshahi@mail.com" class="validate">-->
                     <!--                                    <label for="email">Email</label>-->
                     <!--                                </div>-->
                     <!--                                <div class="input-field col s12">-->
                     <!--                                    <input id="email1" type="email" value="marshahi@mail.com" class="validate">-->
                     <!--                                    <label for="email1">Alternate Email</label>-->
                     <!--                                </div>-->
                     <!--                            </div>-->
                     <!--                            <div class="row">-->
                     <!--                                <div class="input-field col s12">-->
                     <!--                                    <input type="submit" class="waves-effect waves-light btn-large">-->
                     <!--                                </div>-->
                     <!--                            </div>-->
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
   </div>
</div>