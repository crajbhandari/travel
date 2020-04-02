<?php $this->title = 'Welcome'; ?>
<div class="home-page">
   <?php if (Yii::$app->params['site-settings']['show_slider']['content'] == 1):
//      $this->registerCssFile(Yii::$app->request->baseUrl . '/assets/css/rev.css');
      echo $this->render('slider');
   endif; ?>

   <?php if (isset($content) && count($content) > 0): ?>
      <?= $this->render('../snippets/content', [
            'content' => $content,
      ]) ?><?php endif; ?>

   <?php if (isset($services) && count($services) > 0): ?>
      <section class="our-project padding-bottom-60 padding-top-60 bg-grey">
         <div class="services-section-wrapper">
            <div class="services-section">
               <div class="sec-title text-center">
                  <div class="container">
                     <h6>Services</h6>
                     <h2>What can we do for you ?</h2>
                     <hr class="short-underline lg-margin">
                  </div>
               </div>

               <div class="project-content">
                  <div class="row">
                  <?php foreach ($services as $key => $service) : ?>
                     <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="item">
                           <div class="image-holder">
                              <?php if ($service['image'] != ''): ?>
                                 <img src="<?php echo Yii::$app->request->baseUrl; ?>/common/assets/images/uploads/<?php echo $service['image']; ?>"
                                      alt="Project Image">
                              <?php endif; ?>
                           </div>
                           <div class="bottom-sec">
                              <h4 class="pull-left"><?php echo $service['alt_title']; ?></h4>
                              <i class="fa fa-chevron-circle-right pull-right"></i>
                              <div class="clearfix"></div>
                           </div>
                           <a class="d_block" href="<?php echo Yii::$app->request->baseUrl; ?>/site/services/">
                              <div class="overlay text-center">
                                 <div class="icon-area">
                                    <h5 class="d_none"><?php echo $service['alt_title']; ?></h5>
                                    <h6><?php echo $service['sub_title']; ?></h6>
                                    <hr class="short-underline margin-top-20 margin-bottom-20"/>
                                    <p class="font-size-14"><?php echo $service['summary'] ?></p>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                  <?php endforeach; ?>
                  </div>
               </div>
               <div class="text-center margin-top-60">
                  <a href="<?php echo Yii::$app->request->baseUrl; ?>/site/services/" class="btn btn-transparent">Read
                     More
                  </a>
               </div>
            </div>
         </div>
      </section><!--End project area--><!--Start Latest News Area-->
   <?php endif; ?>

   <?php if (isset($testimonials) && count($testimonials) > 0): ?>
      <?= $this->render('../snippets/testimonails', [
            'testimonials' => $testimonials,
      ]) ?><?php endif; ?>

   <?php if (Yii::$app->params['site-settings']['show_blog']['content'] == 1 && count($blog) > 0): ?>
      <section class="blog-news">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="sec-title text-center">
                     <div class="container">
                        <h6>Our Blog</h6>
                        <h2>Latest news & tips</h2>
                        <hr class="short-underline lg-margin">
                     </div>
                  </div>

               </div>
               <?php foreach ($blog as $k => $b) : ?>
                  <div class="col-md-4 col-sm-6 col-xs-12">
                     <div class="blog-block">
                        <?php if ($b->image != ''): ?>
                           <div class="img-wrapper">
                              <figure>
                                 <img src="<?php echo Yii::$app->request->baseUrl; ?>/common/assets/images/uploads/<?= $b->image ?>"
                                      alt=""/>
                              </figure>
                           </div>
                        <?php endif; ?>
                        <div class="text-area">
                           <a href="<?php echo Yii::$app->request->baseUrl; ?>/blog/post/<?= \common\components\Misc::encodeUrl($b->id) ?>">
                              <h5><?= $b->title ?></h5></a>
                           <ul class="author-content">
                              <li>
                                 <?= \common\components\Misc::DdmY($b->date) ?>
                              </li>
                              <li>
                                 <?= ucwords($b->category) ?>
                              </li>
                           </ul>
                           <a href="<?php echo Yii::$app->request->baseUrl; ?>/blog/post/<?= \common\components\Misc::encodeUrl($b->id) ?>">Read
                              More</a>
                        </div>
                     </div>
                  </div>
               <?php endforeach; ?>

            </div>
         </div>
      </section><!--End Latest News Area-->
   <?php endif; ?>


   <?= $this->render('../snippets/callaction') ?>

   <?php if (isset($clients) && count($clients) > 0): ?>
      <?= $this->render('../snippets/clients', [
            'clients' => $clients
      ]) ?>
   <?php endif; ?>

</div>
