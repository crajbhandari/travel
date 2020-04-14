<?php
$this->title = 'Messages';
?>
<div class="sb2-2">
    <div class="sb2-2-2">
        <ul>
            <li><a href="<?php echo Yii::$app->request->baseUrl; ?>/"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="#"> Messages</a>
            </li>
        </ul>
    </div>
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4> Messages List</h4>
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                <?php if (!empty($messages) && count($messages) > 0): ?>
                                <tr>
                                    <th>S.N</th>
                                    <th>Date</th>
                                    <th>From</th>
                                    <th>Email</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $sn =1;
                                $count = 0;
                                foreach ($messages as $post) :
                                    $count++; ?>
                                    <tr>
                                        <td><?php echo $sn; ?></td>
                                        <td>
                                            <?= \common\components\Misc::datetime($post->created_on) ?>
                                        </td>
                                        <td><?php echo (isset($post['name'])) ? ucwords(trim($post['name'])) : '' ?></td>
                                        <td><?php echo (isset($post['email'])) ? $post['email'] : '' ?></td>
                                        <td>
                                            <a class="show-message" href="javascript:void(0);"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a class="delete-item" href="javascript:void(0);" data-id = "<?php echo \common\components\Misc::encodeUrl($post['id']); ?>" data-tab = "Messages"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                                    <?php $sn++; ?>
                                <?php  endforeach; ?>
                                </tbody>
                                <?php else: ?>
                                    <h3>Sorry, No Messages Found</h3>
                                <?php endif; ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class = "modal" tabindex = "-1" role = "dialog" id = "message-box">
   <div class = "modal-dialog" role = "document">
      <div class = "modal-content">
         <div class = "modal-header">
            <h5 class = "modal-title"><span id = "message-title">Message from <span id = "message-name"></span></span></h5>
            <button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close">
               <span aria-hidden = "true">&times;</span>
            </button>
         </div>
         <div class = "modal-body">
            <div class = "message-header">
               <div class = "row">
                  <div class = "col-md-6 col-sm-12">
                     <div class = "message-header-group">
                        <div class = "header-title"><span class = "strong">From:</span></div>
                        <div class = "header-value"><span class = "strong">Name:</span><span class = "message-name"></span></div>
                        <div class = "header-value"><span class = "strong">Email:</span><span class = "message-email"></span></div>
                     </div>

                  </div>
                  <div class = "col-md-6 col-sm-12">
                     <div class = "message-header-group">
                        <div class = "message-header-group">
                           <div class = "header-title"><span class = "strong">Other Information:</span></div>
                           <div class = "header-value"><span class = "strong">Phone Number:</span> <span class = "message-phone"></span></div>
                           <div class = "header-value"><span class = "strong">Website:</span> <span class = "message-url"></span></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class = "message-body">
               <h4>Message : </h4>
               <div class = "message-content"></div>
            </div>
         </div>
         <div class = "modal-footer">
            <button type = "button" class = "btn btn-secondary" data-dismiss = "modal">Close</button>
         </div>
      </div>
   </div>
</div>