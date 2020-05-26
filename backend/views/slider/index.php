<?php
$this->title = 'Slider';
//$new = ($editable == false) ? 1 : 0;
$this->registerCssFile(Yii::$app->request->baseUrl . '/resources/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css');
$this->registerCssFile(Yii::$app->request->baseUrl . '/resources/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css');
$this->registerCssFile(Yii::$app->request->baseUrl . '/resources/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css');
?>
<div class = "container-fluid">
    <div class = "row">
    <div class = "col-12">
        <div class = "page-title-box d-flex align-items-center justify-content-between">
            <h4 class = "mb-0 font-size-18">Slider List</h4>
            <div class="text-right">
                <a href="<?php echo Yii::$app->request->baseUrl; ?>/slider/post" class="btn btn-success" style="color: #ffffff">Add New Slider</a>
            </div>
        </div>
        <div class = "card">
            <div class = "card-body">
               <div class = "tab-pane">

                <table id = "datatable-buttons" class = "table table-striped table-bordered dt-responsive nowrap" style = "border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <?php if (!empty($slider) && count($slider) > 0): ?>
                    <tr>
                       <th>S.N</th>
                       <th width = "20%">Image</th>

                       <th width="5%">Content</th>
                       <th>Content Align</th>
                       <th>Link</th>
                       <th>Link Text</th>
                       <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sn = 1;
                    $count = 0;
                    foreach ($slider as $post) :
                        $count++; ?>
                       <tr>
                          <td><?php echo $sn; ?></td>
                          <td>
                     <span class = "list-img">
                       <?php if ($post['image'] != ''): ?>
                          <img src = "<?php echo Yii::$app->request->baseUrl; ?>/../common/assets/images/uploads/<?= $post['image'] ?>" alt = "<?php echo (isset($post['title'])) ? trim($post['title']) : '' ?>">
                       <?php endif; ?>
                     </span>
                          </td>

                          <td> <?php echo(isset($post['content']) && !empty($post['content']) ? trim($post['content']) : ''); ?></td>
                          <td> <?php echo(isset($post['content_align']) && !empty($post['content_align']) ? trim($post['content_align']) : ''); ?></td>
                          <td> <?php echo(isset($post['link']) && !empty($post['link']) ? trim($post['link']) : ''); ?></td>
                          <td>   <?php echo (isset($post['link_text'])) ? trim($post['link_text']) : '' ?></td>
                          <td>
                             <a href = "<?=  Yii::$app->request->baseUrl; ?>/slider/post/<?= \common\components\Misc::encrypt($post['id']); ?>" ><i class="mdi mdi-pencil font-size-18"></i></a>
                             <a href = "javascript:void(0);" class = "delete-item text-danger" data-id = "<?php echo \common\components\Misc::encodeUrl($post['id']); ?>" data-tab = "Amenetines"><i class = "mdi mdi-close font-size-18"></i></a>
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
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

</div>