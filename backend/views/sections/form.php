<?php
    $this->title = Yii::$app->params['system_name'] . ' | Sections';
    //$this->registerJsFile(Yii::$app->request->baseUrl . '/assets/');
?>
<div class = "container-fluid">
    <form enctype = "multipart/form-data" method = "post" action = "<?php echo Yii::$app->request->baseUrl; ?>/sections/update/">

        <input type = "hidden" name = "<?php echo Yii::$app->request->csrfParam; ?>" value = "<?php echo Yii::$app->request->csrfToken; ?>"/>
        <input type = "hidden" name = "content[id]" value = "<?php echo (isset($section['id'])) ? $section['id'] : '' ?>"/>
        <div class = "row page-titles">
            <div class = "col-md-12 align-self-center">
                <h3 class = "text-themecolor d_inline_b  m-b-0 m-t-0">
                    <?php echo (isset($section['title'])) ? strip_tags($section['title']) : 'Add New Section' ?>
                </h3>
                <div class = "page-actions ">
                    <a class = "btn btn-secondary <?php echo (isset($section['title'])) ? '' : 'd_none'; ?>" href = "<?php echo Yii::$app->request->baseUrl; ?>/sections/section/">
                        <i class = "mdi mdi-plus m-r-10"></i>
                        Add New Section
                    </a>

                    <button class = "btn btn-success" type = "submit">
                        <i class = "mdi mdi-check m-r-10"></i>
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
<!--                                <input id = "--><?php //echo $counter; ?><!--" name = "content[title]" type = "text" class = "form-control required" value = "--><?php //echo (isset($section['title'])) ? $section['title'] : '' ?><!--">-->
                                <textarea id = "<?php echo $counter; ?>" name = "content[title]" class = "summernote required"><?php echo (isset($section['title'])) ? $section['title'] : '' ?></textarea>


                            </div>
                            <div class = "form-group">
                                <?php $counter++; ?>
                                <label for = "<?php echo $counter; ?>" class = "control-label">Sub Title</label>
<!--                                <input id = "--><?php //echo $counter; ?><!--" name = "content[sub_title]" type = "text" class = "form-control" value = "--><?php //echo (isset($section['sub_title'])) ? $section['sub_title'] : '' ?><!--">-->
                                <textarea id = "<?php echo $counter; ?>" name = "content[sub_title]" class = "summernote required"><?php echo (isset($section['sub_title'])) ? $section['sub_title'] : '' ?></textarea>

                            </div>
                            <div class = "form-group">
                                <?php $counter++; ?>
                                <label for = "<?php echo $counter; ?>" class = "control-label required">Content</label>
                                <textarea id = "<?php echo $counter; ?>" name = "content[content]" class = "summernote required"><?php echo (isset($section['content'])) ? $section['content'] : '' ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class = "col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class = "card">
                        <div class = "card-body">
                            <div class = "form-group">
                                <?php $counter++; ?>
                                <label for = "<?php echo $counter; ?>" class = "control-label required">Page</label>
                                <select id = "<?php echo $counter; ?>" name = "content[page]" type = "text" class = "form-control required">
                                    <option value = "">Select Page</option>
                                    <?php foreach (Yii::$app->params['pages'] as $key => $page): ?>
                                        <option <?php echo (isset($section['page']) && $section['page'] == $key) ? 'selected = "selected"' : '' ?> value = "<?php echo $key; ?>"><?php echo ucwords($key) ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class = "form-group">
                                <?php $counter++; ?>
                                <label for = "<?php echo $counter; ?>" class = "control-label">Order</label>
                                <input id = "<?php echo $counter; ?>" name = "content[section_order]" type = "number" class = "form-control" value = "<?php echo (isset($section['section_order'])) ? $section['section_order'] : '0' ?>">
                            </div>

                        </div>
                    </div>
                    <div class = "card">
                        <div class = "card-body">

                            <div class = "form-group">
                                <?php $counter++; ?>
                                <label for = "<?php echo $counter; ?>" class = "control-label">Button Text</label>
                                <input id = "<?php echo $counter; ?>" name = "content[button_text]" type = "text" class = "form-control" value = "<?php echo (isset($section['button_text'])) ? $section['button_text'] : '' ?>">
                            </div>
                            <div class = "form-group">
                                <?php $counter++; ?>
                                <label for = "<?php echo $counter; ?>" class = "control-label">Button Link</label>
                                <input id = "<?php echo $counter; ?>" name = "content[button_link]" type = "text" class = "form-control" value = "<?php echo (isset($section['button_link'])) ? $section['button_link'] : '' ?>">
                            </div>
                            <div class = "form-group">
                                <?php $counter++; ?>
                                <label for = "<?php echo $counter; ?>" class = "control-label">Button Alignment</label>
                                <select id = "<?php echo $counter; ?>" name = "content[button_position]" class = "form-control">
                                    <option <?php echo (isset($section['image_position']) && $section['image_position'] == 'left') ? 'selected = "selected"' : ''; ?> value = "left">Left</option>
                                    <option <?php echo (isset($section['image_position']) && $section['image_position'] == 'center') ? 'selected = "selected"' : ''; ?> value = "center">Center</option>
                                    <option <?php echo (isset($section['image_position']) && $section['image_position'] == 'right') ? 'selected = "selected"' : ''; ?> value = "right">Right</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class = "card">
                        <div class = "card-body">
                            <div class = "form-group">
                                <?php $counter++; ?>
                                <label for = "<?php echo $counter; ?>" class = "control-label">Image Alignment</label>
                                <select id = "<?php echo $counter; ?>" name = "content[image_position]" class = "form-control">
                                    <option <?php echo (isset($section['image_position']) && $section['image_position'] == 'left') ? 'selected = "selected"' : ''; ?> value = "left">Left</option>
                                    <option <?php echo (isset($section['image_position']) && $section['image_position'] == 'right') ? 'selected = "selected"' : ''; ?> value = "right">Right</option>
                                </select>
                            </div>
                            <div class = "form-group">
                                <?php $counter++; ?>
                                <div class = "custom-file">

                                    <div class = "image-wrapper" <?= (isset($section['image']) && $section['image'] != '') ? '' : 'style="display:none;"' ?>>
                                        <img src = "<?php echo (isset($section['image']) && $section['image'] != '') ? Yii::$app->request->baseUrl . '/../common/assets/images/uploads/' . $section['image'] : '' ?>" class = "custom-file-input-image" id = "file-<?php echo $counter; ?>-image" alt = ""/>
                                    </div>
                                    <?php if (isset($section['image']) && $section['image'] != ''): ?>
                                        <div class = "image-actions text-right">
                                            <a href = "javascript:void();" class = "remove-image" data-tab = "blog" data-id = "<?php echo \common\components\Misc::encodeUrl($section['id']) ?>">
                                                <i class = "mdi mdi-close margin-right-5"></i>
                                                Remove Image
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                    <label class = "custom-file-label" id = "file-<?php echo $counter; ?>-label" for = "file-<?php echo $counter; ?>">
                                        <i class = "fa fa-file"></i>
                                        <span>Upload Image</span>
                                    </label>
                                    <input accept = "image/x-png,image/jpeg" type = "file" name = "image" class = "custom-file-input" id = "file-<?php echo $counter; ?>" onchange = "readURL(this);" aria-describedby = "file-<?php echo $counter; ?>" src = "<?php echo (isset($section['image']) && $section['image'] != '') ? $section['image'] : '' ?>">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

    </form>
</div>