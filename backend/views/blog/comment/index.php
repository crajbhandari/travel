<?php
$this->title = 'Blog';
?>
<div class="sb2-2">
    <div class="sb2-2-2">
        <ul>
            <li><a href="<?php echo Yii::$app->request->baseUrl; ?>/"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="#"> Blog Comments</a>
            </li>
        </ul>
    </div>
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Comments List</h4>
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                <?php if (!empty($blog) && count($blog) > 0): ?>
                                <tr>
                                   <th>S.N</th>
                                   <th>Commented By</th>
                                   <th>Blog</th>
                                   <th>Commented On</th>
                                   <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $sn =1;
                                $count = 0;
                                foreach ($blog as $post) :
                                $count++; ?>
                                <tr>
                                   <td><?php echo $sn; ?></td>
<!--                                   If the user is a registered user then ,name,email are taken from user table and not the comment table-->
                                    <?php if($post['customer_id']==0) { ?>
                                        <td><?php echo (isset($post['name'])) ? trim($post['name']) : ''  ?></td>
                                    <?php }else{ ?>
                                        <td><?php echo (isset($post['user']['name'])) ? trim($post['user']['name']) : ''  ?></td>
                                    <?php } ?>
                                   <td><?php echo (isset($post['blog'])) ? $post['blog']['title'] : '' ?></td>
                                   <td><?php echo (isset($post['created_on'])) ? $post['created_on'] : '' ?></td>
                                   <td>
                                       <?php
                                       if($post['edited_status']==0) {
                                           echo '<span class="label label-light-danger">Pending..</span>';
                                       }elseif($post['is_verified'] == 1 ){
                                           echo '<span class="label label-success">Verified</span>';
                                       }else{
                                           echo '<span class="label label-danger">Rejected</span>';
                                       }
                                       ?>
                                   </td>
                                   <td>
                                        <a href="<?php echo Yii::$app->request->baseUrl; ?>/blog/view-comment/<?php echo \common\components\Misc::encodeUrl($post['id']); ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
<!--                                        <a class="delete-item" href="javascript:void(0);" data-id = "--><?php //echo \common\components\Misc::encodeUrl($post['id']); ?><!--" data-tab = "Blog"><i class="fa fa-trash-o" aria-hidden="true"></i></a>-->
                                    </td>
                                </tr>
                                <?php $sn++; ?>
                              <?php  endforeach; ?>
                                </tbody>
                               <?php else: ?>
                               <h3>Sorry, No Comments Found</h3>
                               <?php endif; ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>