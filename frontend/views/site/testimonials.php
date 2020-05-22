
<!-- TOP SEARCH BOX -->
   <div class = "search-top">
      <div class = "container">
         <div class = "row">
            <div class = "col-md-12">
               <div class = "search-form">
                  <form class = "tourz-search-form">
                     <div class = "input-field">
                        <input type = "text" id = "select-city" class = "autocomplete">
                        <label for = "select-city">Enter city</label>
                     </div>
                     <div class = "input-field">
                        <input type = "text" id = "select-search" class = "autocomplete">
                        <label for = "select-search" class = "search-hotel-type">Search over a million tour and travels, sight seeings, hotels and more</label>
                     </div>
                     <div class = "input-field">
                        <input type = "submit" value = "search" class = "waves-effect waves-light tourz-sear-btn"></div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- END TOP SEARCH BOX -->
</section>
<!--END HEADER SECTION-->

<!--====== BANNER ==========-->
<section>
   <div class = "rows inner_banner inner_banner_1">
      <div class = "container">
         <h2><span>About us -</span> World's leading tour Booking</h2>
         <ul>
            <li><a href = "#inner-page-title">Home</a>
            </li>
            <li><i class = "fa fa-angle-right" aria-hidden = "true"></i></li>
            <li><a href = "#inner-page-title" class = "bread-acti">About Us</a>
            </li>
         </ul>
         <p>Book travel packages and enjoy your holidays with distinctive experience</p>
      </div>
   </div>
</section>
<!--====== ALL TESTIMONIALS ==========-->
<section>
   <div class = "rows inn-page-bg com-colo">
      <div class = "container tb-space inn-page-con-bg pad-bot-redu" id = "inner-page-title">
         <!-- TITLE & DESCRIPTION -->
         <div class = "spe-title">
            <h2>Customer <span>Testimonials</span></h2>
            <div class = "title-line">
               <div class = "tl-1"></div>
               <div class = "tl-2"></div>
               <div class = "tl-3"></div>
            </div>
            <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide.</p>
         </div>
         <div class = "p_testimonial">
            <!--====== TESTIMONIALS ======-->
             <?php if (!empty($testimonials) && count($testimonials) > 0):
             foreach ($testimonials as $post) :?>
            <div class = "col-md-6">
               <div class = "p-tesi">
                  <div class = "col-md-3 col-sm-3 ">
                      <img class="test-img" src = "<?php echo Yii::$app->request->baseUrl; ?>/common/assets/images/uploads/<?= $post['image'] ?>" alt = "Tour Booking" alt = ""/>
                 </div>
                  <div class = "col-md-9 col-sm-9">
                     <h4><?php echo (isset($post['position'])) ? ucwords(trim($post['position'])) : '' ?></h4>
                     <div><span class = "tour_star"><i class = "fa fa-star" aria-hidden = "true"></i><i class = "fa fa-star" aria-hidden = "true"></i><i class = "fa fa-star" aria-hidden = "true"></i><i class = "fa fa-star" aria-hidden = "true"></i><i class = "fa fa-star-half-o" aria-hidden = "true"></i></span></div>
                     <p><?php echo (isset($post['content'])) ? ucwords(trim($post['content'])) : '' ?></p>
                     <address><?php echo (isset($post['info'])) ? ucwords(trim($post['info'])) : '' ?></address>
                  </div>
               </div>
            </div>
            <!--====== TESTIMONIALS ======-->




             <?php endforeach; ?>
             <?php endif; ?>
           
         
         </div>
      </div>
   </div>
</section>