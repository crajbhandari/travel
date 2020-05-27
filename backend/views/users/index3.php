<?php
$this->title = 'User';
?>
<div class="sb2-2">
    <div class="sb2-2-2">
        <ul>
            <li><a href="<?php echo Yii::$app->request->baseUrl; ?>/"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="#"> User</a>
            </li>
        </ul>
    </div>
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Users List</h4>
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                <?php if (!empty($users) && count($users) > 0): ?>
                                <tr>
                                   <th>S.N</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $sn =1;
                                $count = 0;
                                foreach ($users as $post) :
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
                                    <td><?php echo (isset($post['role'])) ? ucwords(trim($post['role'])) : '' ?></td>
                                    <td><?php echo (isset($post['status']) && $post['status']==10) ?'Visible' : 'Hidden' ?></td>
                                    <td>
                                        <a href="<?php echo Yii::$app->request->baseUrl; ?>/users/edit/<?php echo \common\components\Misc::encodeUrl($post['id']); ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                        <a class="delete-item" href="javascript:void(0);" data-id = "<?php echo \common\components\Misc::encodeUrl($post['id']); ?>" data-tab = "User"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                <?php $sn++; ?>
                              <?php  endforeach; ?>
                                </tbody>
                               <?php else: ?>
                               <h3>Sorry, No Users Found</h3>
                               <?php endif; ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>