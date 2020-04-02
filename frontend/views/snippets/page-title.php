<section class = "page-title">

    <div class = "fixed-bg" style = "
    <?php if (isset($page['image']) && $page['image'] != ''): ?>
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