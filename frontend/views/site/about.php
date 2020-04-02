<?php
    /* @var $this yii\web\View */
    $this->title = 'About';
?>
<div class = "about-page">
    <!--Page Title-->
    <?= $this->render('../snippets/page-title',[
        'page'=>$page
    ]) ?>

    <?php if (isset($content) && count($content) > 0): ?>
        <?= $this->render('../snippets/content',[
            'content'=>$content
        ]) ?>
    <?php endif; ?>

    <?php if (isset($testimonials) && count($testimonials) > 0): ?>
        <?= $this->render('../snippets/testimonails',[
            'testimonials'=>$testimonials
        ]) ?>
    <?php endif; ?>
    <?= $this->render('../snippets/callaction') ?>

    <?php if (isset(Yii::$app->params['site-settings']['video']['content']) && Yii::$app->params['site-settings']['video']['content'] != ''): ?>
        <section class = "sponsor-video-sec">
               <div class = "container-fluid ">

                <div class = "row">
                    <?php if (count($clients) > 0): ?>
                        <div class = "col-md-6 col-sm-12">
                            <div class = "left-content">
                                <div class = "sec-title text-left">
                                    <h2>Clients and Partners</h2>
                                </div>
                                <ul class = "sponsor-logo row">
                                    <?php foreach ($clients as $key => $client) : $c = 0; ?>
                                        <li class = "col-md-6 col-sm-6 text-center">
                                            <?php if ($client['link'] != ''): ?>
                                            <a href = "<?php echo $client['link'] ?>">
                                                <?php endif; ?>
                                                <img src = "<?php echo Yii::$app->request->baseUrl; ?>/common/assets/images/uploads/<?php echo $client['image']; ?>" alt = "<?php echo $client['name']; ?>">
                                                <?php if ($client['link'] != ''): ?>
                                            </a>
                                        <?php endif; ?>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class = "<?= (count($clients) > 0) ? 'col-md-6' : 'col-md-12' ?> col-sm-12">
                        <div class = "right-content">
                            <div class = "img-wrapper">
                                <div class = "fixed-bg bg3"></div>
                                <div class = "icon-area text-center">
                                    <a class = "html5lightbox" href = "<?php echo Yii::$app->params['site-settings']['video']['content'] ?>" title = "">
                                        <i class = "flaticon-play-button-1"></i>
                                    </a>
                                    <h3>watch our video</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    <?php else: ?>

        <?php if (isset($clients) && count($clients) > 0): ?>
            <section class = "sponsor-sec">
                <div class = "container">
                    <div class = "row">
                        <div class = "col-md-12">
                            <div class = "sec-title margin-bottom-30 text-center">
                                <div class = "container">
                                    <h6>Clients and Partners</h6>
                                    <h2>Working together has been so much fun.</h2>
                                    <hr class = "short-underline lg-margin">
                                </div>
                            </div>
                        </div>
                        <div class = "col-md-12">
                            <div class = "sponsor-carousel">
                                <?php foreach ($clients as $key => $client) : ?>
                                    <div class = "single-item text-center">
                                        <div class = "img-holder">
                                            <?php if ($client['link'] != ''): ?>
                                            <a href = "<?php echo $client['link']; ?>">
                                                <?php endif; ?>
                                                <img src = "<?php echo Yii::$app->request->baseUrl; ?>/common/assets/images/uploads/<?php echo $client['image']; ?>" alt = "<?php echo $client['name']; ?>">
                                                <?php if ($client['link'] != ''): ?>
                                            </a>
                                        <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

    <?php endif; ?>

</div>