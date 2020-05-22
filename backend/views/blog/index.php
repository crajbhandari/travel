<?php
$this->title = 'Blog';
$this->registerCssFile(Yii::$app->request->baseUrl . '/resources/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css');
$this->registerCssFile(Yii::$app->request->baseUrl . '/resources/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css');
$this->registerCssFile(Yii::$app->request->baseUrl . '/resources/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css');
?>
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Blog</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Blog List</h4>

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <?php if (!empty($blog) && count($blog) > 0): ?>
                        <tr>
                           <th>S.N</th>
                           <th width="30%">Image</th>
                           <th>Title</th>
                           <th>Category</th>
                           <th>Visibility</th>
                           <th>Author</th>
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
                           <td>
                                       <span class="list-img">
                                          <?php if ($post['image'] != ''): ?>
                                             <img src = "<?php echo Yii::$app->request->baseUrl; ?>/../common/assets/images/uploads/<?= $post['image'] ?>" alt = "<?php echo (isset($post['title'])) ? trim($post['title']) : '' ?>">
                                          <?php endif; ?>
                                       </span>
                           </td>
                           <td>
                               <?php echo (isset($post['title'])) ? trim($post['title']) : '' ?>
                           </td>
                           <td><?php echo (isset($post['category'])) ? ucwords(trim($post['category'])) : '' ?></td>
                           <td><?php echo (isset($post['visibility']) && $post['visibility']==1) ?'Visible' : 'Hidden' ?></td>
                           <td><?php echo (isset($post['author'])) ? ucwords(trim($post['author'])) : '' ?></td>
                            <td>
<!--                                <a href="javascript:void(0);" class="mr-3 text-primary" data-placement="top" title="" data-original-title="View" data-toggle="modal" data-target=".exampleModal"><i class="mdi mdi-eye font-size-18"></i></a>-->
                                <a href="<?php echo Yii::$app->request->baseUrl; ?>/blog/post/<?php echo \common\components\Misc::encodeUrl($post['id']); ?>" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                <a href="javascript:void(0);" id="sa-warning" class="delete-item text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" data-id = "<?php echo \common\components\Misc::encodeUrl($post['id']); ?>" data-tab = "Blog"><i class="mdi mdi-close font-size-18"></i></a>
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
        </div> <!-- end col -->
    </div> <!-- end row -->

</div>
