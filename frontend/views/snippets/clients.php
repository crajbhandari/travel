<section class="sponsor-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="sec-title margin-bottom-30 text-center">
                    <div class="container">
                        <h6>Clients and Partners</h6>
                        <h2>Working together has been so much fun.</h2>
                        <hr class="short-underline lg-margin">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="sponsor-carousel">
                    <?php foreach ($clients as $key => $client) : ?>
                        <div class="single-item text-center">
                            <div class="img-holder">
                                <?php if ($client['link'] != ''): ?>
                                <a href="<?php echo $client['link']; ?>">
                                    <?php endif; ?>
                                    <img src="<?php echo Yii::$app->request->baseUrl; ?>/common/assets/images/uploads/<?php echo $client['image']; ?>"
                                         alt="<?php echo $client['name']; ?>">
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




