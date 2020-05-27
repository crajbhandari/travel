<?php
$this->title = 'Message';

$this->registerCssFile(Yii::$app->request->baseUrl . '/resources/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css');
$this->registerCssFile(Yii::$app->request->baseUrl . '/resources/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css');
$this->registerCssFile(Yii::$app->request->baseUrl . '/resources/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css');
?>
<div class = "container-fluid">

    <!-- start page title -->
    <!--   <div class="row">-->
    <!--      <div class="col-12">-->
    <!--         <div class="page-title-box d-flex align-items-center justify-content-between">-->
    <!--            <h4 class="mb-0 font-size-18">Testimonials</h4>-->
    <!--         </div>-->
    <!--      </div>-->
    <!--   </div>-->

    <div class = "row">

        <div class = "col-12">
            <div class = "page-title-box d-flex align-items-center justify-content-between">
                <h4 class = "mb-0 font-size-18">Message List</h4>

            </div>
            <div class = "card">
                <div class = "card-body">


                    <table id = "datatable-buttons" class = "table table-striped table-bordered dt-responsive nowrap" style = "border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <?php if (!empty($messages) && count($messages) > 0): ?>
                        <tr>
                            <th>S.N</th>
                            <th>Status</th>
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
                        foreach ($messages as $post) :
                            $count++; ?>
                            <tr>
                                <td><?php echo $sn; ?></td>
                                <td>
                                    <?php if ($post['is_new']> 0) : ?>
                                   <span class=" badge badge-primary">
                                       Seen
                                      </span>
                                        <!--                                      <a href="javascript:void(0);" class="label --><?//= ($a['is_active'] === 1) ? 'label-success' : 'label-danger' ?><!-- label-success --><?//= ($is_authorized) ? 'toggle-status' : 'disabled' ?><!-- " --><?//= ($is_authorized) ? 'data-a="' . Misc::encrypt($a['id']) . '" data-b="' . Misc::encrypt(Misc::getClass($a)) . '"' : '' ?><!--><?//= ($a['is_active'] === 1) ? 'Active' : 'Inactive' ?><!--</a>-->
                                    <?php else: ?>
                                    <span class=" badge badge-success">
                                        New
                                    </span>

                                    <?php endif; ?>

                                </td>
                                <td><?php echo (isset($post['name'])) ? ucwords(trim($post['name'])) : '' ?></td>
                                <td><?php echo (isset($post['email'])) ? $post['email'] : '' ?></td>
                                <td>
                                    <?= \common\components\Misc::datetime($post->created_on) ?>
                                </td>
                                <td>
                                   <a href = "javascript:void(0);" class = "btn btn-primary btn-sm show-message">
                                      View
                                   </a><!--                                   <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#myModal">Standard</button>-->
                                      <!--                                <a href="javascript:void(0);" class="mr-3 text-primary" data-placement="top" title="" data-original-title="View" data-toggle="modal" data-target=".exampleModal"><i class="mdi mdi-eye font-size-18"></i></a>-->
                                    <a href = "javascript:void(0);" class = "delete-item text-danger" data-id = "<?php echo \common\components\Misc::encodeUrl($post['id']); ?>" data-tab = "Messages"><i class = "mdi mdi-close font-size-18"></i></a>
                                </td>
                            </tr>
                            <?php $sn++; ?>
                        <?php endforeach; ?>
                        </tbody>
                        <?php else: ?>
                            <h3>Sorry, No Posts Found</h3>
                        <?php endif; ?>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

</div>
