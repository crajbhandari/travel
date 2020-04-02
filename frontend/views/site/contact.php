<?php
    /* @var $this yii\web\View */
    $this->title = 'Contact Us';
?>
<?= $this->render('../snippets/page-title', [
    'page' => $page,
]) ?>
<?php if (isset($content) && count($content) > 0): ?>
    <?= $this->render('../snippets/content', [
        'content' => $content,
    ]) ?><?php endif; ?>
<?php
    $contact = (Yii::$app->params['site-settings']['address']['content'] != '') ? json_decode(Yii::$app->params['site-settings']['address']['content']) : [];
    if (is_array($contact) && count($contact) > 0): ?>
        <section class = "contact-page">
            <div class = "container">
                <?php foreach ($contact as $k => $c) : ?>
                    <div class = "contact-section">
                        <div class = "sec-title text-center">
                            <h6><?= $c->subtitle; ?></h6>
                            <h2><?= $c->title; ?></h2>
                            <hr class = "short-underline lg-margin">
                        </div>
                        <div class = "row  row-centered ">
                            <?php if ($c->address != ''): ?>
                                <div class = "col-centered col-lg-4  col-md-4 col-sm-12 col-xs-12 text-center">
                                    <div class = "contact-block">
                                        <div class = "icon-area">
                                            <i class = "flaticon-placeholder"></i>
                                        </div>
                                        <div class = "text-area">
                                            <h5>office address</h5>
                                            <p><?= $c->address ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if ($c->email != ''): ?>
                                <div class = "col-centered col-lg-4  col-md-4 col-sm-12 col-xs-12 text-center">
                                    <div class = "contact-block">
                                        <div class = "icon-area">
                                            <i class = "flaticon-email"></i>
                                        </div>
                                        <div class = "text-area">
                                            <h5>email address</h5>
                                            <p><?= $c->email ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if ($c->phone != ''): ?>
                                <div class = "col-centered col-lg-4  col-md-4 col-sm-12 col-xs-12 text-center">
                                    <div class = "contact-block">
                                        <div class = "icon-area">
                                            <i class = "flaticon-phone-call"></i>
                                        </div>
                                        <div class = "text-area">
                                            <h5>phone number</h5>
                                            <p><?= $c->phone ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    <?php endif; ?>

<div class = "contact-form-header" style = "background-image: url('<?php echo Yii::$app->request->baseUrl; ?>/assets/images/resources/banner_contacts.jpg')">
    <div class = "container">
        <h3 class = "text-center">Give us a shout !</h3>
        <p class = "text-center">Use the form below to drop us an email or the old fashioned telephone calls works too at +45 61 80 01 14</p>
    </div>
</div></section>
<section class = "service-form">
    <div class = "container">
        <div class = "sec-title text-left">
            <h2>Send us Your Queries</h2>
        </div>
        <form name = "contact_form" id = "contact-form" class = "default-form contact-form" method = "post">
            <div class = "row">
                <div class = "col-md-6 col-sm-12 col-xs-12">
                    <div class = "form-group">
                        <input required = "required" class = "form-control required" type = "text" name = "name" placeholder = "Your Name" required = "">
                    </div>
                </div>
                <div class = "col-md-6 col-sm-12 col-xs-12">
                    <div class = "form-group">
                        <input required = "required" class = "form-control required" type = "email" name = "email" placeholder = "Email" required = "">
                    </div>
                </div>
                <div class = "col-md-6 col-sm-12 col-xs-12">
                    <div class = "form-group">
                        <input class = "form-control" type = "tel" name = "phone" placeholder = "Phone" required = "">
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

