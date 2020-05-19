<?php
$this->title = 'Rating';
?>
<div class = "sb2-2">
   <div class = "sb2-2-2">
      <ul>
         <li><a href = "<?php echo Yii::$app->request->baseUrl; ?>/"><i class = "fa fa-home" aria-hidden = "true"></i> Home</a>
         </li>
         <li class = "active-bre"><a href = "#"> Package Rating</a>
         </li>
      </ul>
   </div>
   <div class = "sb2-2-3">
      <div class = "row">
         <div class = "col-md-12">
            <div class = "box-inn-sp">
               <div class = "inn-title">
                  <h4> Package Rating List</h4>
               </div>
               <div class = "tab-inn">
                  <div class = "table-responsive ">
                     <table class = "table table-hover">
                        <thead>
                        <?php if (!empty($packages) && count($packages) > 0): ?>
                        <tr>
                           <th>S.N</th>

                           <th>Package Name</th>
                           <th>Rated By</th>
                           <th>Total Rating</th>
                           <th>Overall Rating</th>
                           <th class = "text-align-center">Rating</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $sn = 1;
                        $count = 0;
                        foreach ($packages as $post) :
                            $count++; ?>
                           <tr>
                              <td><?php echo $sn; ?></td>
                              <td><?php echo (isset($post['name'])) ? ucwords(trim($post['name'])) : '' ?></td>
                              <td class = "text-align-center"><?php echo (isset($post['count'])) ? $post['count'] : '' ?></td>
                              <td class = "text-align-center">
                                  <?php echo (isset($post['rating'])) ? $post['rating'] : '' ?></td>
                              <td class = "text-align-center">
                                  <?php
                                  $total_rating_given = (isset($post['rating'])) ? $post['rating'] : '';
                                  $total_rating_full = (isset($post['count']) ? $post['count'] : '') * 5;
                                  $average_in_percent = ($total_rating_given / $total_rating_full) * 100;
                                  $average_in_rating = ($total_rating_given / $total_rating_full) * 5;
                                  ?>
                                 <span class="rating_count">
                                     <?php
                                     echo number_format($average_in_rating, 1);
                                     ?>
                                 </span>
                              </td>
                              <td>
                                 <div class = "star-rating">
                                    <div class = "back-stars">
                                       <i class = "fa fa-star" aria-hidden = "true"></i>
                                       <i class = "fa fa-star" aria-hidden = "true"></i>
                                       <i class = "fa fa-star" aria-hidden = "true"></i>
                                       <i class = "fa fa-star" aria-hidden = "true"></i>
                                       <i class = "fa fa-star" aria-hidden = "true"></i>

                                       <div class = "front-stars" style = "width: <?php echo $average_in_percent; ?>%">
                                          <i class = "fa fa-star" aria-hidden = "true"></i>
                                          <i class = "fa fa-star" aria-hidden = "true"></i>
                                          <i class = "fa fa-star" aria-hidden = "true"></i>
                                          <i class = "fa fa-star" aria-hidden = "true"></i>
                                          <i class = "fa fa-star" aria-hidden = "true"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <label id = "rate-number" class = "hidden"><?php echo $average_in_percent ?>%</label>
                              </td>
                           </tr>
                            <?php $sn++; ?>
                        <?php endforeach; ?>
                        </tbody>
                         <?php else: ?>
                            <h3>Sorry, No Rating Found</h3>
                         <?php endif; ?>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

