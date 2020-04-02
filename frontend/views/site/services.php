<?php
    /* @var $this yii\web\View */
    $this->title = 'Services';
?>
<!--Page Title-->
<?= $this->render('../snippets/page-title',[
    'page'=>$page
]) ?>
<?php if (isset($content) && count($content) > 0): ?>
    <?= $this->render('../snippets/content',[
        'content'=>$content
    ]) ?>
<?php endif; ?>
<?php if (isset($services) && count($services) > 0): ?>
    <section class = "services-fact">
        <?php foreach ($services as $key => $service) : $key++; ?>

            <?php if ($key % 2 != 0): ?>
            <div class = "service">
                <div class = "full-width-container">
                    <div class = "row">
                        <div class = "col-md-6 col-sm-12">
                            <div class = "service-info">
                                <div class = "sec-title text-left">
                                    <h2><?php echo $service['title']; ?></h2>
                                   <hr class="short-underline lg-margin left">
                                </div>
                                <div class = "service-content">
                                    <?php echo $service['description']; ?>
                                </div>
                            </div>
                        </div>
                        <div class = "col-md-6 col-sm-12">
                            <div class = "img-wrapper">
                                <?php if ($service['image'] != ''): ?>
                                   <div class="service-image" style="background-image: url('<?php echo Yii::$app->request->baseUrl; ?>/common/assets/images/uploads/<?php echo $service['image']; ?>')" ></div>
                                <?php else: ?>
                                    <div class = "no-image">
                                        <i class = "fa fa-camera"></i>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <div class = "service">
                <div class = "full-width-container">
                    <div class = "row">
                        <div class = "col-md-6 col-sm-12">
                            <div class = "img-wrapper">
                                 <?php if ($service['image'] != ''): ?>
                                   <div class="service-image" style="background-image: url('<?php echo Yii::$app->request->baseUrl; ?>/common/assets/images/uploads/<?php echo $service['image']; ?>')" ></div>
                                <?php else: ?>
                                    <div class = "no-image">
                                        <i class = "fa fa-camera"></i>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class = "col-md-6 col-sm-12">
                            <div class = "service-info">
                                <div class = "sec-title text-left">
                                    <h2><?php echo $service['title']; ?></h2>
                                   <hr class="short-underline lg-margin left">
                                </div>
                                <div class = "service-content">
                                    <?php echo $service['description']; ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        <?php endif; ?><?php endforeach; ?>
    </section>
<?php else: ?>

<?php endif; ?>

<!--Start Service Form area-->
<section class = "service-form">
    <div class = "container">
        <div class = "sec-title text-left">
            <h2>Send us Your Queries</h2>
        </div>
        <form name = "contact_form" id = "contact-form" class = "default-form contact-form" method = "post">
            <div class = "row">
                <div class = "col-md-6 col-sm-12 col-xs-12">
                    <div class = "form-group">
                        <input class = "form-control required" type = "text" name = "name" placeholder = "Your Name" required = "required">
                    </div>
                </div>
                <div class = "col-md-6 col-sm-12 col-xs-12">
                    <div class = "form-group">
                        <input class = "form-control required" type = "email" name = "email" placeholder = "Email" required = "required">
                    </div>
                </div>
                <div class = "col-md-6 col-sm-12 col-xs-12">
                    <div class = "form-group">
                        <input class = "form-control" type = "tel" name = "phone" placeholder = "Phone">
                    </div>
                </div>
                <div class = "col-md-6 col-sm-12 col-xs-12">
                    <div class = "form-group">
                        <input class = "form-control" type = "url" name = "url" placeholder = "Website" required = "">
                    </div>
                </div>
                <div class = "col-md-12 col-sm-12 col-xs-12">
                    <div class = "form-group">
                        <textarea required = "required" name = "message" class = "form-control textarea required" placeholder = "Message"></textarea>
                    </div>
                    <div class = "form-group text-left message-button-wrapper">
                        <a href = "javascript:void(0);" class = "thm-btn bg-clr4 send-message">
                            <i class = "fa fa-paper-plane margin-right-10"></i>
                            Send Message
                        </a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section><!--End Service Form area-->
