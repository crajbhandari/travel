<?php $this->title = 'Welcome'; ?>
	<!-- TOP SEARCH BOX -->
        <div class="search-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="search-form">
						<form class="tourz-search-form">
							<div class="input-field">
								<input type="text" id="select-city" class="autocomplete">
								<label for="select-city">Enter city</label>
							</div>
							<div class="input-field">
								<input type="text" id="select-search" class="autocomplete">
								<label for="select-search" class="search-hotel-type">Search over a million tour and travels, sight seeings, hotels and more</label>
							</div>
							<div class="input-field">
								<input type="submit" value="search" class="waves-effect waves-light tourz-sear-btn"> </div>
						</form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- END TOP SEARCH BOX -->

    <!--END HEADER SECTION-->
	
	<!--====== ALL POST ==========-->
	<section>
		<div class="rows inn-page-bg com-colo">
			<div class="container tb-space pad-bot-redu-5" id="inner-page-title">
				<!--===== POSTS ======-->
				<div class="">
					<div class="posts">
						<div class="">  <img src = "<?php echo Yii::$app->request->baseUrl; ?>/common/assets/images/uploads/<?= (isset($blog['info']['image']) & $blog['info']['image']!= '' ? $blog['info']['image'] : 'no-image.png' )?>" alt=""/>  </div>
						<div class="">
							<h3><?= strtoupper($blog['title']);?></h3>
							<h5><span class="post_author">Author: <?= strtoupper($blog['author']);?></span><span class="post_date">Date: <?= \common\components\Misc::DdmY($blog['info']['date']); ?></span><span class="post_city">Category: <?= $blog['category'] ?></span></h5>
							<div class="post-btn">
                        <?php
                        $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                        ?>
								<ul>
									<li>
                              <a href="http://www.facebook.com/sharer.php?u=<?= $actual_link ?>"
                                       target="_blank"
                                       title="Click to share"><i class="fa fa-facebook fb1"></i> Share On Facebook</a>
                           </li>
									<li><a
                                    href="http://twitter.com/share?text=An%20intersting%20blog&url=<?= $actual_link ?>"
                                    target="_blank"
                                    title="Click to post to Twitter">
                             <i class="fa fa-twitter tw1"></i> Share On Twitter</a>
									</li>

								</ul>
							</div>							
						<p><?= $blog['content']; ?></p>
                  </div>
					</div>
				</div>
				<!--===== POST END ======-->
			</div>
		</div>
	</section>
	<!--====== TIPS BEFORE TRAVEL ==========-->