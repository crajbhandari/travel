<?php
$this->title = 'Package Review';

$this->registerCssFile(Yii::$app->request->baseUrl . '/resources/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css');
$this->registerCssFile(Yii::$app->request->baseUrl . '/resources/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css');
$this->registerCssFile(Yii::$app->request->baseUrl . '/resources/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css');
?>
<div class = "container-fluid">

    <div class = "row">

        <div class = "col-12">
            <div class = "page-title-box d-flex align-items-center justify-content-between">
                <h4 class = "mb-0 font-size-18">Package Review</h4>

            </div>
            <div class = "card">
                <div class = "card-body">


                    <table id = "datatable-buttons" class = "table table-striped table-bordered dt-responsive nowrap" style = "border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <?php if (!empty($packages) && count($packages) > 0): ?>
                        <tr>
                            <th>S.N</th>
                            <th>Date</th>
                            <th>From</th>
                            <th>Email</th>
                            <th>Rating</th>
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
                                <td><?php echo (isset($post['rating'])) ? $post['rating'] : '' ?></td>
                                <td>
                                    <a data-toggle="modal" data-target="#myModal" data-id = "<?php echo $post['id'] ?>" href = "javascript:void(0);" class = "btn btn-primary btn-sm show-review">
                                        View
                                    </a>
                                </td>
                            </tr>
                            <?php $sn++; ?>
                        <?php endforeach; ?>
                        </tbody>
                        <?php else: ?>
                            <h3>Sorry, No Reviews Found</h3>
                        <?php endif; ?>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

</div>
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myModalLabel">Package Review</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

