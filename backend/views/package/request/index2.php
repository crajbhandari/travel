<?php
$this->title = 'Messages';
?>
<div class = "sb2-2">
    <div class = "sb2-2-2">
        <ul>
            <li><a href = "<?php echo Yii::$app->request->baseUrl; ?>/"><i class = "fa fa-home" aria-hidden = "true"></i> Home</a>
            </li>
            <li class = "active-bre"><a href = "#"> Package Request</a>
            </li>
        </ul>
    </div>
    <div class = "sb2-2-3">
        <div class = "row">
            <div class = "col-md-12">
                <div class = "box-inn-sp">
                    <div class = "inn-title">
                        <h4> Package Request List</h4>
                    </div>
                    <div class = "tab-inn">
                        <div class = "table-responsive table-desi">
                            <table class = "table table-hover">
                                <thead>
                                <?php if (!empty($packages) && count($packages) > 0): ?>
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
                                $sn = 1;
                                $count = 0;
                                foreach ($packages as $post) :
                                    $count++; ?>
                                    <tr>
                                        <td><?php echo $sn; ?></td>

                                        <td>
                                            <?= \common\components\Misc::datetime($post->posted_on) ?>
                                        </td>
                                        <td><?php echo (isset($post['name'])) ? ucwords(trim($post['name'])) : '' ?></td>
                                        <td><?php echo (isset($post['email'])) ? $post['email'] : '' ?></td>
                                        <td>
                                            <a class = "show-review" href = "#modal1" data-id = "<?php echo $post['id'] ?>"><i class = "fa fa-eye" aria-hidden = "true"></i></a>
                                        </td>
                                    </tr>
                                    <?php $sn++; ?>
                                <?php endforeach; ?>
                                </tbody>
                                <?php else: ?>
                                    <h3>Sorry, No Package Request Found</h3>
                                <?php endif; ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id = "modal1" class = "modal">
    <div class = "modal-content">
        <h4>Request From</h4>
    </div>
    <div class = "parasa-content">
    </div>
</div>

