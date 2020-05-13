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
                  <div class = "table-responsive table-desi">
                     <table class = "table table-hover">
                        <thead>
                        <?php if (!empty($packages) && count($packages) > 0): ?>
                        <tr>
                           <th>S.N</th>

                           <th>Package Name</th>
                           <th>Rated By</th>
                           <th>Total Rating</th>
                           <th>Average Rating</th>
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
                              <td><?php echo (isset($post['count'])) ? $post['count'] : '' ?></td>
                              <td><?php echo (isset($post['rating'])) ? $post['rating'] : '' ?></td>
                              <td>
                                <?php
                                $rating = round($post['rating']/5);
                                for($i=1;$i<=$rating;$i++){
                                   echo ' <i style="margin-right: 0" class="fa fa-star"></i>';
                                }
                                ?>


                              </td>
                           </tr>
                            <?php $sn++; ?>
                        <?php endforeach; ?>
                        </tbody>
                         <?php else: ?>
                            <h3>Sorry, No Package Review Found</h3>
                         <?php endif; ?>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div id = "modal1" class = "modal">
   <div class = "modal-content">
      <h4>Message From</h4>
   </div>
   <div class = "paras-content">
   </div>
</div>
