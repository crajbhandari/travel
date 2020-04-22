<?php
$this->title = 'Blog Comments';
?>

<div class="sb2-2">
   <div class="sb2-2-2">
      <ul>
         <li><a href="<?php echo Yii::$app->request->baseUrl; ?>/"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
         </li>
         <li class="active-bre"><a href="#"> Review Comment</a>
         </li>
      </ul>
   </div>
   <div class="sb2-2-3">
      <div class="row">
         <div class="col-md-8">
            <div class="box-inn-sp">
               <div class="inn-title">
                  <h4>Comment Details</h4>
               </div>
               <div class="tab-inn">
                  <div class="table-responsive table-desi">
                      <?php if (isset($comment['user'])) { ?>
                         <p><b>User : </b><?php echo (isset($comment['user'])) ? $comment['user']['name'] . ' ( Registered User )' : '' ?> </p>
                         <p><b>Email : </b><?php echo (isset($comment['user'])) ? $comment['user']['email'] : '' ?> </p>
                         <p><b>Name : </b><?php echo (isset($comment['user'])) ? $comment['user']['name'] : '' ?> </p>
                      <?php } else { ?>
                         <p><b>User : </b>This user is not signed into the system.'  </p>
                         <p><b>Name : </b><?php echo (isset($comment['name'])) ? $comment['name'] : '' ?> </p>
                         <p><b>Email : </b><?php echo (isset($comment['email'])) ? $comment['email'] : '' ?></p>
                      <?php  } ?>
                     <p><b>Commented On : </b><?php echo (isset($comment['created_on'])) ? $comment['created_on'] : '' ?></p>
                     <p><b>Blog : </b><?php echo (isset($comment['blog']['title'])) ? $comment['blog']['title'] : '' ?>&nbsp;&nbsp;<a target = "_blank" href = "<?php echo Yii::$app->request->baseUrl; ?>/blog/post/<?php echo \common\components\Misc::encodeUrl($comment['blog']['id']); ?>">[ View this Blog ]</a></p>
                     <p><b>Comment : </b><br><?php echo (isset($comment['comment'])) ? $comment['comment'] : '' ?></p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="box-inn-sp">
               <div class="inn-title">
                      <h5 class = "card-title">User Details</h5>
               </div>
               <div class = "bor1">
                  <form enctype = "multipart/form-data" method = "post" action = "<?php echo Yii::$app->request->baseUrl; ?>/blog/post-comment/">
                     <input type = "hidden" name = "<?php echo Yii::$app->request->csrfParam; ?>" value = "<?php echo Yii::$app->request->csrfToken; ?>"/>
                     <input type = "hidden" name = "post[id]" value = "<?php echo(isset($comment['id']) ? $comment['id'] : 0) ?>">
                      <?php $counter = 0; ?>

                     <div class = "row">
                        <div class = "input-field col s12">
                            <?php $counter++; ?>
                           <select id = "<?php echo $counter; ?>" name = "post[is_active]" required>
                               <?php if ($comment['edited_status'] == 0) { ?>
                                  <option disabled selected>Pending</option>
                                  <option value = "1">Verify</option>
                                  <option value = "0">Reject</option>

                               <?php } else { ?>
                                  <option value = "1" <?= (isset($comment['is_verified']) && $comment['is_verified'] == 1) ? 'selected="selected"' : '' ?>>Verify</option>
                                  <option value = "0" <?= (isset($comment['is_verified']) && $comment['is_verified'] == 0) ? 'selected="selected"' : '' ?>>Reject</option>
                               <?php } ?>
                           </select>
                           <label for = "<?php echo $counter; ?>">Verify/Reject</label>
                        </div>
                     </div>


                     <div class = "row">
                        <div class = "input-field col s12">
                            <?php $counter++; ?>
                           <label for = "textarea1 <?php echo $counter; ?>">Content</label>
                           <textarea class="materialize-textarea" id = "textarea1 <?php echo $counter; ?>" name = "post[verification_comment]"><?php echo (isset($comment['verification_comment'])) ? $comment['verification_comment'] : '' ?></textarea>
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
   </div>
</div>