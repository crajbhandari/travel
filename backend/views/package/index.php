<?php
$this->title = 'Package';
?>
<div class="sb2-2">
    <div class="sb2-2-2">
        <ul>
            <li><a href="<?php echo Yii::$app->request->baseUrl; ?>/"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="#"> Packages</a>
            </li>
        </ul>
    </div>
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Packages List</h4>
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                <?php if (!empty($package) && count($package) > 0): ?>
                                <tr>
                                   <th>S.N</th>
                                    <th>Title</th>
                                    <th>Visibility</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $sn =1;
                                $count = 0;
                                foreach ($package as $post) :
                                $count++; ?>
                                <tr>
                                   <td><?php echo $sn; ?></td>
                                    <td>
                                        <?php echo (isset($post['title'])) ? trim($post['title']) : '' ?>
                                    </td>
                                   <td><?php echo (isset($post['is_active']) && $post['is_active']==1) ?'Visible' : 'Hidden' ?></td>
                                    <td>
                                        <a href="<?php echo Yii::$app->request->baseUrl; ?>/package/post/<?php echo \common\components\Misc::encodeUrl($post['id']); ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                        <a class="delete-item" href="javascript:void(0);" data-id = "<?php echo \common\components\Misc::encodeUrl($post['id']); ?>" data-tab = "Package"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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