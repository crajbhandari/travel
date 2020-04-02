<?php

    $this->title = Yii::$app->params['system_name'] . ' | Blog';
?>
<div class = "container-fluid">
    <div class = "row page-titles">
        <div class = "col-md-6 align-self-center">
            <h3 class = "text-themecolor m-b-0 m-t-0">
                <i class = "mdi mdi-blogger"></i>
                Blog
            </h3>
        </div>
        <div class = "col-md-6 align-self-center text-right">
            <a href = "<?php echo Yii::$app->request->baseUrl; ?>/blog/post" class = "btn btn-primary">
                <i class = "mdi mdi-plus m-r-5"></i>
                Add New Post
            </a>
        </div>
    </div>
    <div class = "card extended blog-post-wrapper">
        <div class = "card-header">
            <h5 class = "card-title">Posts</h5>
        </div>
        <div class = "card-body">
            <?php if (!empty($blog) && count($blog) > 0): ?>
                <div class = "table-responsive">
                    <table class = "table  table-striped blog-post" data-plugin = "datatable">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Visibility</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $count = 0;
                                foreach ($blog as $post) :
                                    $count++; ?>
                                    <tr>
                                        <td>
                                            <?php if ($post['image'] != ''): ?>
                                                <div class = "image-wrapper">
                                                    <img src = "<?php echo Yii::$app->request->baseUrl; ?>/../common/assets/images/uploads/<?= $post['image'] ?>" alt = "">
                                                </div>
                                            <?php endif; ?>
                                        </td>
                                        <td><?php echo (isset($post['title'])) ? trim($post['title']) : '' ?></td>
                                        <td><?php echo (isset($post['category'])) ? ucwords(trim($post['category'])) : '' ?></td>
                                        <td><?php echo (isset($post['visibility']) && $post['visibility']==1) ?'Visible' : 'Hidden' ?></td>
                                        <td class = "text-right">
                                            <a class = "btn btn-primary btn-sm" href = "<?php echo Yii::$app->request->baseUrl; ?>/blog/post/<?php echo \common\components\Misc::encodeUrl($post['id']); ?>">Edit</a>
                                            <a class = "btn btn-default btn-sm delete-item" href = "javascript:void(0);" data-id = "<?php echo \common\components\Misc::encodeUrl($post['id']); ?>" data-tab = "Blog">Delete</a>
                                        </td>
                                    </tr>
                                    <?php

                                endforeach; ?>

                        </tbody>
                    </table>
                </div>
            <?php else: ?>
                <h3>Sorry, No Posts Found</h3>
            <?php endif; ?>
        </div>
    </div>

</div>
