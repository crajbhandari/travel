<?php
    /* @var $this yii\web\View */
    $this->title = 'FAQ';
?>
<!--Page Title-->
<section class = "page-title">
    <div class = "fixed-bg " style = "background-image: url('<?php echo Yii::$app->request->baseUrl; ?>/assets/images/resources/banner-bg1.jpg')">

    </div>
    <div class = "container text-center">
        <h1>Frequently Asked Questions</h1>
        <ul class = "title-menu">
            <li>
                <a href = "<?php echo Yii::$app->request->baseUrl; ?>/">FAQ</a>
            </li>
            <li>/</li>
            <li>Team</li>
        </ul>
    </div>
</section><!--End Page Title-->

<!--Start FAQ's area-->
<section class="faqs">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="left-content-area">
                    <div class="faq-block">
                        <h5>01. Which do you like better, pancakes or waffles?</h5>
                        <p>Praesent id velit et mus laoreet erat, ac pretium nulla enim arcu metus luctus, pulvinar ultricies, ante sed urna dolor.</p>
                    </div>
                    <div class="faq-block">
                        <h5>02. Have you ever been to a Renaissance fair?</h5>
                        <p>Lorem ipsum dolor sit amet, aliquet turpis dictum est suspend mauris vel mauris. Velit in at libero non ac lorem, lacus sit et orci nunc, a orci soluta. Donec nec sociis, ad consequat eu, amet scelerisque, posuere nec dui in. Imperdiet ac tempus nulla Suspendisse</p>
                        <ul class="list-faq">
                            <li>maecenas integer amet</li>
                            <li>world clssic service</li>
                            <li>consectetuer at nostrum</li>
                            <li>Vlinensectetuer at nostrum</li>
                        </ul>
                    </div>
                    <div class="faq-block">
                        <h5>03. Which do you like better, shower or bath?</h5>
                        <p>Lorem ipsum dolor sit amet, aliquet turpis dictum est suspend mauris vel mauris. Velit in at libero non ac lorem.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-12">
                <div class="right-content-area">
                    <div class="faq-block">
                        <h5>04. Do you keep your things organized?</h5>
                        <p> Donec convallis lacus sagittis vulputate fusce, dui ipsum nec eget velit ut, pede nascetur odio ullamcorper, nec diam eu viverra vestibulum. Quam metus nullam sagittis magnaterisque.</p>
                    </div>
                    <div class="faq-block">
                        <h5>05. Which do you like better, hot or cold?</h5>
                        <p>Nonummy nam, ut enim, aliquam sodales massa ipsum metus. Dolor ut lectus, mollit libero mi integer molestie. </p>
                    </div>
                    <div class="faq-block">
                        <h5>06. What do you always buy at the grocery store?</h5>
                        <p>Lorem ipsum dolor sit amet, aliquet turpis dictum est suspend mauris vel mauris. Velit in at libero non ac lorem.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!--End FAQ's area-->