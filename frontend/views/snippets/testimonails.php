<section class = "testimonials-sec bg-grey">
    <div class = "container">
        <div class = "row">
            <div class = "col-md-12">
                <div class = "testmonial-block">
                    <div id = "testimonials-slider-pager" class = "hidden-sm hidden-xs">
                        <?php foreach ($testimonials as $key => $testimonial) : ?>
                            <a href = "javascript:void(0);" class = "pager-item active" data-slide-index = "<?php echo $key; ?>">
                                <img src = "<?php echo Yii::$app->request->baseUrl; ?>/common/assets/images/uploads/<?php echo $testimonial['image']; ?>" alt = "<?php echo $testimonial['name']; ?>"/>
                            </a>
                        <?php endforeach; ?>

                    </div>
                    <div class = "testimonials-slider">
                        <h2 class = "text-right">Happy clients around the world</h2>
                        <ul class = "slider">
                            <?php foreach ($testimonials as $key => $testimonial) : ?>
                                <li class = "slide-item">
                                    <div class = "single-testimonials">
                                        <div class = "author-image">
                                            <?php if ($testimonial['image'] != ''): ?>
                                                <img src = "<?php echo Yii::$app->request->baseUrl; ?>/common/assets/images/uploads/<?php echo $testimonial['image']; ?>" alt = "<?php echo $testimonial['name']; ?>"/>
                                            <?php else : ?>
                                                <div class = "no-image">
                                                    <i class = "fa fa-user"></i>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                        <div class = "author-content">
                                            <h5><?php echo $testimonial['name']; ?></h5>
                                            <h6><?php echo $testimonial['position']; ?></h6>
                                            <p><?php echo $testimonial['content']; ?></p>
                                        </div>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>