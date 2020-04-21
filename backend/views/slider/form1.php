<?php
    $this->title = Yii::$app->params['system_name'] . ' | Sections';
    //$this->registerJsFile(Yii::$app->request->baseUrl . '/assets/');
?>
<div class = "container-fluid">
    <form enctype = "multipart/form-data" method = "post" action = "<?php echo Yii::$app->request->baseUrl; ?>/blog/update/">

        <input type = "hidden" name = "<?php echo Yii::$app->request->csrfParam; ?>" value = "<?php echo Yii::$app->request->csrfToken; ?>"/>
        <input type = "hidden" name = "post[id]" value = "<?php echo (isset($editable['id'])) ? $editable['id'] : '' ?>"/>
        <div class = "row page-titles">
            <div class = "col-md-12 align-self-center">
                <h3 class = "text-themecolor d_inline_b  m-b-0 m-t-0">
                    <?php echo (isset($editable['title'])) ? ' <i class="mdi mdi-pencil"></i> Edit - ' . $editable['title'] . '' : ' <i class="mdi mdi-add"></i> Add New Post' ?>
                </h3>
                <div class = "page-actions ">
                    <a class = "btn btn-secondary <?php echo (isset($editable['title'])) ? '' : 'd_none'; ?>" href = "<?php echo Yii::$app->request->baseUrl; ?>/blog/post/">
                        <i class = "mdi mdi-plus"></i>
                        Add New Post
                    </a>

                    <button class = "btn btn-success" type = "submit">
                        <i class = "mdi mdi-check"></i>
                        Save
                    </button>
                </div>
                <div class = "clearfix"></div>
            </div>
        </div>

        <div class = "page-section">
            <div class = "row">
                <div class = "col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div class = "card">
                        <div class = "card-body">
                            <?php $counter = 0; ?>
                            <div class = "form-group">
                                <?php $counter++; ?>
                                <label for = "<?php echo $counter; ?>" class = "control-label required">Title</label>
                                <input id = "<?php echo $counter; ?>" name = "post[title]" type = "text" class = "form-control required" value = "<?php echo (isset($editable['title'])) ? $editable['title'] : '' ?>">
                            </div>

                            <div class = "form-group">
                                <?php $counter++; ?>
                                <label for = "<?php echo $counter; ?>" class = "control-label ">Content</label>
                                <textarea id = "<?php echo $counter; ?>" name = "post[content]" class = "summernote"><?php echo (isset($editable['content'])) ? $editable['content'] : '' ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class = "col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class = "card">
                        <div class = "card-body">
                            <div class = "form-group">
                                <?php $counter++; ?>
                                <label for = "<?php echo $counter; ?>" class = "control-label required">Visibility</label>
                                <select id = "<?php echo $counter; ?>" name = "post[visibility]" class = "form-control required">
                                    <option value = "1" <?= (isset($editable['visibility']) && $editable['visibility'] == 1) ? 'selected="selected"' : '' ?>>Visible</option>
                                    <option value = "0" <?= (isset($editable['visibility']) && $editable['visibility'] == 0) ? 'selected="selected"' : '' ?>>Hidden</option>
                                </select>
                            </div>
                            <div class = "form-group">
                                <?php $counter++; ?>
                                <label for = "<?php echo $counter; ?>" class = "control-label required">Category</label>
                                <input id = "<?php echo $counter; ?>" name = "post[category]" type = "text" class = "form-control" required value = "<?php echo (isset($editable['category'])) ? $editable['category'] : '' ?>">
                            </div>
                        </div>
                    </div>
                    <div class = "card">
                        <div class = "card-body">
                            <div class = "form-group">
                                <?php $counter++; ?>
                                <label for = "<?php echo $counter; ?>" class = "control-label">Author</label>
                                <input id = "<?php echo $counter; ?>" name = "post[author]" type = "text" class = "form-control required" value = "<?php echo (isset($editable['author'])) ? $editable['author'] : '' ?>">
                            </div>

                        </div>
                    </div>
                    <div class = "card">
                        <div class = "card-body">
                            <?php $counter++; ?>
                            <div class = "custom-file">

                                <div class = "image-wrapper" <?= (isset($editable['image']) && $editable['image'] != '') ? '' : 'style="display:none;"' ?>>
                                    <img src = "<?php echo (isset($editable['image']) && $editable['image'] != '') ? Yii::$app->request->baseUrl . '/../common/assets/images/uploads/' . $editable['image'] : '' ?>" class = "custom-file-input-image" id = "file-<?php echo $counter; ?>-image" alt = ""/>
                                </div>
                                <?php if (isset($editable['image']) && $editable['image'] != ''): ?>
                                    <div class = "image-actions text-right">
                                        <a href = "javascript:void();" class = "remove-image" data-tab = "blog" data-id = "<?php echo \common\components\Misc::encodeUrl($editable['id']) ?>">
                                            <i class = "mdi mdi-close margin-right-5"></i>
                                            Remove Image
                                        </a>
                                    </div>
                                <?php endif; ?>
                                <label class = "custom-file-label" id = "file-<?php echo $counter; ?>-label" for = "file-<?php echo $counter; ?>">
                                    <i class = "fa fa-file"></i>
                                    <span>Upload Image</span>
                                </label>
                                <input accept = "image/x-png,image/jpeg" type = "file" name = "image" class = "custom-file-input" id = "file-<?php echo $counter; ?>" onchange = "readURL(this);" aria-describedby = "file-<?php echo $counter; ?>" src = "<?php echo (isset($editable['image']) && $editable['image'] != '') ? $editable['image'] : '' ?>">
                            </div>
                        </div>
                    </div>

                </div>
            </div>

    </form>
</div>