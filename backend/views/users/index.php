<?php
$this->title = 'Amenities';

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
                <h4 class = "mb-0 font-size-18">Users List</h4>
                <div class="text-right">
                    <a href="<?php echo Yii::$app->request->baseUrl; ?>/users/edit" class="btn btn-success" style="color: #ffffff">Add New Users</a>
                </div>
            </div>
            <div class = "card">
                <div class = "card-body">


                    <table id = "datatable-buttons" class = "table table-striped table-bordered dt-responsive nowrap" style = "border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <?php if (!empty($users) && count($users) > 0): ?>
                        <tr>
                           <th>S.N</th>
                           <th width="10%">Image</th>
                           <th>Name</th>
                           <th>Role</th>
                           <th>Status</th>
                           <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $sn = 1;
                        $count = 0;
                        foreach ($users as $post) :
                            $count++; ?>
                            <tr>
                                <td><?php echo $sn; ?></td>
                               <td>
                                       <span class = "list-img">
                                          <?php if ($post['image'] != '') { ?>
                                             <img src = "<?php echo Yii::$app->request->baseUrl; ?>/../common/assets/images/uploads/<?= $post['image'] ?>" alt = "<?php echo (isset($post['title'])) ? trim($post['title']) : '' ?>">
                                          <?php } else {
                                              echo 'No Image';
                                          } ?>
                                       </span>
                               </td>

                                <td><?php echo (isset($post['name'])) ? trim($post['name']) : '' ?></td>
                               <td><?php echo (isset($post['role'])) ? ucwords(trim($post['role'])) : '' ?></td>
                               <td><?php echo (isset($post['status']) && $post['status']==10) ?'Visible' : 'Hidden' ?></td>
                                <td>
                                    <!--                                <a href="javascript:void(0);" class="mr-3 text-primary" data-placement="top" title="" data-original-title="View" data-toggle="modal" data-target=".exampleModal"><i class="mdi mdi-eye font-size-18"></i></a>-->
                                    <a href = "<?php echo Yii::$app->request->baseUrl; ?>/users/edit/<?php echo \common\components\Misc::encodeUrl($post['id']); ?>" class = "mr-3 text-primary" data-toggle = "tooltip" data-placement = "top" title = "" data-original-title = "Edit"><i class = "mdi mdi-pencil font-size-18"></i></a>
                                    <a href = "javascript:void(0);" class = "delete-item text-danger" data-id = "<?php echo \common\components\Misc::encodeUrl($post['id']); ?>" data-tab = "User"><i class = "mdi mdi-close font-size-18"></i></a>
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
