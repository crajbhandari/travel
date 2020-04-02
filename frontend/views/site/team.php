<?php
/* @var $this yii\web\View */
$this->title = 'Our Team';
?>
<!--Page Title-->
<?= $this->render('../snippets/page-title', [
      'page' => $page
]) ?>
<?php if (isset($content) && count($content) > 0): ?>
   <?= $this->render('../snippets/content', [
         'content' => $content
   ]) ?>


<?php endif; ?>

<section class="team-area padding-top-0 padding-bottom-30 style-two round">
   <div class="container">
      <?php if (isset($team) && count($team) > 0): ?>
         <div class="team-content">
            <?php foreach ($team as $key => $member) : ?>

               <div class="team-block">
                  <div class="img-wrapper text-center">
                     <?php if ($member['image'] != ''): ?>
                        <figure>
                           <img src="<?php echo Yii::$app->request->baseUrl; ?>/common/assets/images/uploads/<?php echo $member['image'] ?>" alt="Team Image">
                        </figure>

                     <?php else: ?>
                        <div class="no-image">
                           <i class="fa fa-camera no-img "></i>
                        </div>
                     <?php endif; ?>
                  </div>
                  <div class="text-block">
                     <h5><?php echo ucwords($member['name']); ?></h5>
                     <h6><?php echo $member['position']; ?></h6>
                     <p><?php echo $member['description']; ?></p>
                     <?php if ($member['phone'] != '' || $member['email']): ?>
                        <p class="contact-info">
                           <?php if ($member['email'] != ''): ?>
                              <span>
                                            <a href="mailto:<?= $member['email'] ?>">
                                                <i class="fa fa-envelope"></i><?= $member['email'] ?></span></a>
                           <?php endif; ?>
                           <?php if ($member['phone'] != ''): ?>
                              <span>
                                            <a href="tel:<?= $member['phone'] ?>"></a>
                                            <i class="fa fa-phone-square"></i><?= $member['phone'] ?></span>
                           <?php endif; ?>
                        </p>
                     <?php endif; ?>
                     <?php $social = ($member['social_media'] != '') ? json_decode($member['social_media']) : [];
                     if (is_array($social) && count($social) > 0):
                        ?>
                        <ul class="social-links">
                           <?php foreach ($social as $k => $s) : ?>
                              <li>
                                 <a href="<?= $s->link ?>">
                                    <i class="fa <?= Yii::$app->params['social-icons'][$s->media]['icon'] ?>"></i>
                                 </a>
                              </li>
                           <?php endforeach; ?>

                        </ul>
                     <?php
                     endif; ?>
                  </div>
               </div>
            <?php endforeach; ?>
         </div>
      <?php else: ?>
         <h4 class="text-center margin-bottom-90">Team members not listed.</h4>
      <?php endif; ?>
   </div>
</section>


