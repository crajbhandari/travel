<?php
    $this->title = Yii::$app->params['system_name'] . " | Welcome " . ucwords(Yii::$app->user->identity->name);
?>
<div class = "container-fluid">
    <div class = "page-titles row">
        <div class = "col-md-6 align-self-center">
            <h3 class = "text-themecolor">Dashboard</h3>
        </div>
        <div class = "col-md-6 align-self-center text-right">
            <?php if ($messages > 0): ?>

                <a href = "<?php echo Yii::$app->request->baseUrl; ?>/messages/" class = "btn btn-warning">
                    <i class = "mdi mdi-email"></i>
                    You have new <?= $messages ?> messages
                </a>
            <?php endif; ?>
        </div>
    </div>
    <div class = "page-body">
        <div class = "panel panel-bordered">
            <div class = "panel-header">
                <h3 class = "panel-title">
                    Data Management </h3>
            </div>
            <div class = "panel-body">
                <div class = "row">
                    <div class = "col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <a href = "<?php echo Yii::$app->request->baseUrl; ?>/messages">
                            <div class = "card card-lg text-center">
                                <div class = "card-body">
                                    <div class = "card-icon">
                                        <i class = "mdi mdi-email"></i>
                                    </div>
                                    <div class = "card-text"><?php echo (($messages) > 0) ? ($messages) . ' New ' : '' ?> Messages</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class = "col-lg-3 col-md-4 col-sm-6 col-xs-12"  >
                        <a href = "<?php echo Yii::$app->request->baseUrl; ?>/team">
                            <div class = "card card-lg text-center">
                                <div class = "card-body">
                                    <div class = "card-icon">
                                        <i class = "mdi mdi-account-multiple"></i>
                                    </div>
                                    <div class = "card-text">Team</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class = "col-lg-3 col-md-4 col-sm-6 col-xs-12"  >
                        <a href = "<?php echo Yii::$app->request->baseUrl; ?>/team">
                            <div class = "card card-lg text-center">
                                <div class = "card-body">
                                    <div class = "card-icon">
                                        <i class = "mdi mdi-human-greeting"></i>
                                    </div>
                                    <div class = "card-text">Clients</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class = "col-lg-3 col-md-4 col-sm-6 col-xs-12"  >
                        <a href = "<?php echo Yii::$app->request->baseUrl; ?>/testimonials">
                            <div class = "card card-lg text-center">
                                <div class = "card-body">
                                    <div class = "card-icon">
                                        <i class = "mdi mdi-message-reply-text"></i>
                                    </div>
                                    <div class = "card-text">Testimonials</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class = "col-lg-3 col-md-4 col-sm-6 col-xs-12"  >
                        <a href = "<?php echo Yii::$app->request->baseUrl; ?>/services">
                            <div class = "card card-lg text-center">
                                <div class = "card-body">
                                    <div class = "card-icon">
                                        <i class = "mdi mdi-puzzle"></i>
                                    </div>
                                    <div class = "card-text">Services</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class = "col-lg-3 col-md-4 col-sm-6 col-xs-12"  >
                        <a href = "<?php echo Yii::$app->request->baseUrl; ?>/blog">
                            <div class = "card card-lg text-center">
                                <div class = "card-body">
                                    <div class = "card-icon">
                                        <i class = "mdi mdi-note-multiple-outline"></i>
                                    </div>
                                    <div class = "card-text">Blog</div>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>

        </div>
        <div class = "panel panel-bordered">
            <div class = "panel-header">
                <h3 class = "panel-title pull-left">
                    Page Management </h3>
                <div class = "panel-actions pull-right "></div>
                <div class = "clearfix"></div>
            </div>
            <div class = "panel-body">
                <div class = "row">
                    <?php foreach (Yii::$app->params['pages'] as $k => $page) : ?>
                        <div class = "col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <a href = "<?php echo Yii::$app->request->baseUrl; ?>/sections/pages/<?= $page['name'] ?>">
                                <div class = "card card-lg text-center">
                                    <div class = "card-body">
                                        <div class = "card-icon">
                                            <i class = "mdi <?= $page['icon'] ?>"></i>
                                        </div>
                                        <div class = "card-text"><?= ucwords($page->label) ?></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>

        </div>

    </div>
</div>