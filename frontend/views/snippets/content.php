<?php foreach ($content as $key => $section) : ?>
    <?php foreach ($content as $key => $section) : ?>
        <div class = "custom-content">
            <section class = "page-section">
                <div class = "container">
                    <?php if ($section['image'] != '' && $section['image_position'] == 'left'): ?>
                        <div class = "row">
                            <div class = "col-md-5 col-sm-12">
                                <div class = "img-wrapper">
                                    <?php if ($section['image'] != ''): ?>
                                        <figure>
                                            <img src = "<?php echo Yii::$app->request->baseUrl; ?>/assets/images/resources/<?php echo $section['image'] ?>" alt = "<?php echo $section['title']; ?>">
                                        </figure>
                                    <?php else: ?>
                                        <div class = "no-image">
                                            <i class = "fa fa-camera"></i>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class = "col-md-7 col-sm-12">
                                <?php if ($section['title'] != '' || $section['sub_title']): ?>
                                    <div class = "sec-title">
                                        <?php if ($section['title'] != ''): ?>
                                            <h5 class = "main-title"><?php echo $section['title']; ?></h5>
                                            <hr class = "short-underline lg-margin"/>
                                        <?php endif; ?>
                                        <?php if ($section['sub_title'] != ''): ?>
                                            <h4 class = "sub-title"><?php echo $section['sub_title']; ?></h4>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                                <?php if ($section['content'] != ''): ?>
                                    <div class = "sec-content">
                                        <?php echo $section['content']; ?>
                                    </div>
                                <?php endif; ?>
                                <?php if ($section['button_text'] != '' && $section['button_link'] != '') : ?>
                                    <div class = "sec-action text-<?php echo $section['button_position'] ?>">
                                        <a href = "<?php echo $section['button_link']; ?>" class = "btn btn-transparent"><?php echo $section['button_text'] ?></a>
                                    </div>
                                <?php endif; ?>
                            </div>

                        </div>
                    <?php elseif ($section['image'] != '' && $section['image_position'] == 'right'): ?>
                        <div class = "row">
                            <div class = "col-md-7 col-sm-12">
                                <?php if ($section['title'] != '' || $section['sub_title']): ?>
                                    <div class = "sec-title">
                                        <?php if ($section['title'] != ''): ?>
                                            <h5 class = "main-title"><?php echo $section['title']; ?></h5>
                                            <hr class = "short-underline lg-margin"/>
                                        <?php endif; ?>
                                        <?php if ($section['sub_title'] != ''): ?>
                                            <h4 class = "sub-title"><?php echo $section['sub_title']; ?></h4>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                                <?php if ($section['content'] != ''): ?>
                                    <div class = "sec-content">
                                        <?php echo $section['content']; ?>
                                    </div>
                                <?php endif; ?>
                                <?php if ($section['button_text'] != '' && $section['button_link'] != '') : ?>
                                    <div class = "sec-action text-<?php echo $section['button_position'] ?>">
                                        <a href = "<?php echo $section['button_link']; ?>" class = "btn btn-transparent"><?php echo $section['button_text'] ?></a>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class = "col-md-5 col-sm-12">
                                <div class = "img-wrapper">
                                    <?php if ($section['image'] != ''): ?>
                                        <figure>
                                            <img src = "<?php echo Yii::$app->request->baseUrl; ?>/assets/images/resources/<?php echo $section['image'] ?>" alt = "<?php echo $section['title']; ?>">
                                        </figure>
                                    <?php else: ?>
                                        <div class = "no-image">
                                            <i class = "fa fa-camera"></i>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php else: ?>

                        <?php if ($section['title'] != '' || $section['sub_title']): ?>
                            <div class = "sec-title">
                                <?php if ($section['title'] != ''): ?>
                                    <div class = "main-title"><?php echo $section['title']; ?></div>
                                    <hr class = "short-underline lg-margin"/>
                                <?php endif; ?>
                                <?php if ($section['sub_title'] != ''): ?>
                                    <div class = "sub-title"><?php echo $section['sub_title']; ?></div>
                               <?php endif; ?>
                            </div>
                        <?php endif; ?>

                        <?php if ($section['content'] != ''): ?>
                            <div class = "sec-content">
                                <?php echo $section['content']; ?>
                            </div>
                        <?php endif; ?>

                        <?php if ($section['button_text'] != '' && $section['button_link'] != '') : ?>
                            <div class = "sec-action text-<?php echo $section['button_position'] ?>">
                                <a href = "<?php echo $section['button_link']; ?>" class = "btn btn-transparent"><?php echo $section['button_text'] ?></a>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </section>
        </div>
    <?php endforeach; ?>
<?php endforeach; ?>