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
            <li>/</li>
            <li><?= ucwords($page['label']); ?></li>
        </ul>
    </div>
</section><!--End Page Title-->
<div class = "blog-post-page">
    <div class = "blog-posts ptb-140">
        <div class = "container">
            <div class = "row">
                <div class = "col-lg-8 col-md-8 col-sm-12">
                    <section class = "blog-post">
                        <div class = "blog-block">
                            <div class = "post-title">
                                <h4 class=""><?= $post->title ?></h4>
                                <ul class = "author-content margin-bottom-30">
                                    <li>
                                        <a href = "#">Anamul Hasan</a>
                                    </li>
                                    <li>
                                        <a href = "#">17 Feb 2018</a>
                                    </li>
                                    <li>
                                        <a href = "#">Business</a>
                                    </li>
                                </ul>
                                <?php if ($post->image != ''): ?>
                                    <div class = "image-wrapper">
                                        <img src = "<?php echo Yii::$app->request->baseUrl; ?>/common/assets/images/uploads/<?= $post->image ?>" alt = "blog Image">
                                    </div>
                                <?php endif; ?>

                            </div>
                            <div class = "post-content">
                                <p>Cursus dui, pellentesque in. Ipsum ac, dictum magna libero, a duis justo curabitur mauris vitae, vivamus dis, quisque libero lobortis voluptatum tortor nec eros. Erat velit neque luctus elit wisi, feugiat faucibus vel eget aliquam velit, ipsum velit sapien adipisci sit suscipit, accumsan fames quam nec et. Leo tempor in, nam risus lorem neque, nibh integer, placerat duis quis vestibulum, tristique per fringilla tellus id mi ac. Sollicitudin pulvinar.</p>

                                <h5>we have 25000 over client in over the world, people can trust us for thier sucessfull project . we al time ready for proved our skil.</h5>
                                <p>Cursus dui, pellentesque in. Ipsum ac, dictum magna libero, a duis justo curabitur mauris vitae, vivamus dis, quisque libero lobortis voluptatum tortor nec eros. Nec pulvinar vitae ut posuere sit nullam, sit metus eleifend sed. Mauris tellus ut integer et tempor, consectetuer euismod amet. Luctus sit odio duis fermentum quisque.</p>

                            </div>

                        </div>
                    </section>
                </div>
                <div class = "col-lg-4 col-md-4 col-sm-12">
                    <section class = "blog-news padding-top-0 padding-bottom-0">
                        <div class = "sec-title text-center">
                            <h6>Other Posts in <?= ucwords($post['category']) ?></h6>
                            <hr class = "short-underline lg-margin">
                        </div>
                        <?php if (count($blog) > 0): ?><?php foreach ($blog as $k => $b) : ?>
                            <div class = "blog-block style-two">
                                <?php if ($b->image != ''): ?>
                                    <div class = "img-wrapper">
                                        <figure>
                                            <img src = "<?php echo Yii::$app->request->baseUrl; ?>/common/assets/images/uploads/<?= $b->image ?>" alt = "">
                                        </figure>
                                    </div>
                                <?php endif; ?>
                                <div class = "text-area">
                                    <a href = "<?php echo Yii::$app->request->baseUrl; ?>/blog/post/<?= \common\components\Misc::encodeUrl($b->id) ?>"><h6><?= $b->title; ?></h6></a>
                                    <ul class = "author-content">
                                        <li>
                                            <?= \common\components\Misc::DdmY($b->date) ?>
                                        </li>
                                        <li>
                                            <?= ucwords($b->category) ?>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        <?php endforeach; ?><?php else: ?>
                            <h5 class = "text-center padding-top-30 padding-bottom-30">No, Related content found.</h5>
                        <?php endif; ?>
                    </section>
                </div>
            </div>

        </div>
    </div>
</div>