<?php
$this->title = 'Package Rating';

$this->registerCssFile(Yii::$app->request->baseUrl . '/resources/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css');
$this->registerCssFile(Yii::$app->request->baseUrl . '/resources/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css');
$this->registerCssFile(Yii::$app->request->baseUrl . '/resources/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css');
?>
<div class = "container-fluid">

   <div class = "row">

      <div class = "col-12">
         <div class = "page-title-box d-flex align-items-center justify-content-between">
            <h4 class = "mb-0 font-size-18">Package Rating</h4>

         </div>
         <div class = "card">
            <div class = "card-body">


               <table class = "datatable table table-striped table-bordered dt-responsive nowrap" style = "border-collapse: collapse; border-spacing: 0; width: 100%;">
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
                            <?php echo (isset($post['rating'])) ? $post['rating'] : '' ?>
                        </td>
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
<!--                           <label id = "rate-number" class = "hidden">--><?php //echo $average_in_percent ?><!--%</label>-->
                        </td>
                     </tr>
                      <?php $sn++; ?>
                  <?php endforeach; ?>
                  </tbody>
                   <?php else: ?>
                      <h3>Sorry, No Reviews Found</h3>
                   <?php endif; ?>
               </table>
            </div>
         </div>
      </div> <!-- end col -->
   </div> <!-- end row -->

</div>
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title mt-0" id="myModalLabel">Package Review</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">

         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div>

