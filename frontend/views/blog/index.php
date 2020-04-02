<?php
    /* @var $this yii\web\View */
    $this->title = 'Blog Post';

?>
    <section class = "page-title">
        <div class = "fixed-bg" style = "<?php if (isset($page['image']) && $page['image'] != ''): ?>
              background-image: url('<?php echo Yii::$app->request->baseUrl; ?>/common/assets/images/uploads/<?= $page['image'] ?>')">
            <?php endif; ?>
        </div>
        <div class = "container text-center">
            <h1><?= ucwords($page['label']); ?></h1>
            <ul class = "title-menu">
                <li>
                    <a href = "<?php echo Yii::$app->request->baseUrl; ?>/">home</a>
                </li>

                <li><?= ucwords($page['label']); ?></li>
                <li>/</li>
                <li>Post</li>
            </ul>
        </div>
    </section><!--End Page Title-->
<?php if (count($blog) > 0): ?>
    <section class = "blog-news ptb-140">
        <div class = "container">
            <?php if (count($categories) > 0): ?>
                <div class = "row">
                    <div class = "col-sm-12">
                        <div class = "blog-page-categories">
                            <div class = "category-title">
                                Categories
                            </div>
                            <ul class = "category-menu filters">
                                <li>
                                    <a href = "javascript:void(0);" class = "filter" data-filter = "">all</a>
                                </li>
                                <?php foreach ($categories as $k => $c) : ?>
                                    <li>
                                        <a href = "javascript:void(0);" class = "filter" data-filter = ".<?= str_replace(' ', '-', $c) ?>"><?= ucwords($c) ?></a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <div class = "row posts">
                <?php foreach ($blog as $b) : ?>
                    <div class = "post-item <?= str_replace(' ', '-', $b->category) ?> col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class = "blog-block">
                            <?php if ($b->image != ''): ?>
                                <div class = "img-wrapper">
                                    <a href = "<?php echo Yii::$app->request->baseUrl; ?>/blog/post/<?= \common\components\Misc::encodeUrl($b->id) ?>">
                                        <figure>
                                            <img src = "<?php echo Yii::$app->request->baseUrl; ?>/common/assets/images/uploads/<?= $b->image ?>" alt = ""/>
                                        </figure>
                                    </a>
                                </div>
                            <?php endif; ?>
                            <div class = "text-area">
                                <a href = "<?php echo Yii::$app->request->baseUrl; ?>/blog/post/<?= \common\components\Misc::encodeUrl($b->id) ?>">
                                    <h5><?= $b->title; ?></h5>
                                </a>

                                <div class = "post-date">
                                    <?= \common\components\Misc::DdmY($b->date) ?>
                                </div>
                                <ul class = "author-content">
                                    <?php if ($b->author != ''): ?>
                                        <li>
                                            <?= ucwords($b->author) ?>
                                        </li>
                                    <?php endif; ?>

                                    <?php if ($b->category): ?>
                                        <li>
                                            <?= ucwords($b->category) ?>
                                        </li>
                                    <?php endif; ?>
                                </ul>

                                <a href = "<?php echo Yii::$app->request->baseUrl; ?>/blog/post/<?= \common\components\Misc::encodeUrl($b->id) ?>">Read More</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </section>
<?php endif; ?>