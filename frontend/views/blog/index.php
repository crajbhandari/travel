<?php $this->title = 'Welcome'; ?>

<!--====== BANNER ==========-->
	<section>
		<div class="rows inner_banner inner_banner_1">
			<div class="container">
				<h2><span>Best Tour -</span> Packages in your City</h2>
				<ul>
					<li><a href="#inner-page-title">Home</a> </li>
					<li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
					<li><a href="#inner-page-title" class="bread-acti">Blog Posts</a> </li>
				</ul>
				<p>Book travel packages and enjoy your holidays with distinctive experience</p>
			</div>
		</div>
	</section>
	<!--====== ALL POST ==========-->
	<section>
		<div class="rows inn-page-bg com-colo">
			<div class="container inn-page-con-bg tb-space pad-bot-redu-5" id="inner-page-title">
				<!-- TITLE & DESCRIPTION -->
				<div class="spe-title col-md-12">
					<h2>Holiday Tour <span>Blog</span> Posts</h2>
					<div class="title-line">
						<div class="tl-1"></div>
						<div class="tl-2"></div>
						<div class="tl-3"></div>
					</div>
					<p>World's leading tour and travels Booking website,Over 30,000 packages worldwide. Book travel packages and enjoy your holidays with distinctive experience</p>
				</div>
				<!--===== POSTS ======-->
				<div class="rows">
                <?php foreach ($blogs as $blog):
                    if($blog['info']['visibility'] == 1):
                    ?>
					<div class="posts">
						<div class="col-md-6 col-sm-6 col-xs-12">  <img src ="<?php echo Yii::$app->request->baseUrl; ?>/common/assets/images/uploads/<?= (isset($blog['info']['image']) & $blog['info']['image']!= '' ? $blog['info']['image'] : 'no-image.png' )?>" alt=""/>  </div>
						<div class="col-md-6 col-sm-6 col-xs-12">
                     <h3><?= strtoupper($blog['title']);?></h3>
							<h5><span class="post_author">Author: <?= strtoupper($blog['author']);?></span><span class="post_date">Date: <?= \common\components\Misc::DdmY($blog['info']['date']); ?></span><span class="post_city">Category: <?= $blog['category'] ?></span></h5>
                     <p><?= $blog['content']; ?></p>
                     <a href = "<?=  Yii::$app->request->baseUrl; ?>/blog/post/<?php echo \common\components\Misc::encrypt($blog['blog_id']); ?>" class="link-btn">Read more</a> </div>
					</div>
					<?php endif;
					endforeach;
					?>
				</div>
				<!--===== POST END ======-->
			</div>
		</div>
	</section>