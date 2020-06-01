<?php
$this->title = 'Package';
$this->registerCssFile(Yii::$app->request->baseUrl . '/resources/libs/dropzone/min/dropzone.min.css');

?>
<div class = "container-fluid">

    <div class = "row">
        <div class = "col-lg-12">
            <div class = "card">
                <div class = "card-body">
                    <form method = "post" action = "<?php echo Yii::$app->request->baseUrl; ?>/" enctype = "multipart/form-data">
                        <input type = "hidden" name = "<?php echo Yii::$app->request->csrfParam; ?>" value = "<?php echo Yii::$app->request->csrfToken; ?>"/>
                        <?php $counter = 0; ?>
                        <div class = "row">
                            <div class = "col-md-6">
                                <h4 class = "card-title mb-4">Basic pills Wizard</h4>
                            </div>
                            <div class = "col-md-6 text-right">
                                <button type = "submit" class = "btn btn-primary w-xs waves-effect waves-light">Save</button>
                            </div>
                        </div>

                        <div id = "basic-pills-wizard" class = "twitter-bs-wizard">
                            <ul class = "twitter-bs-wizard-nav">
                                <li class = "nav-item">
                                    <a href = "#seller-details" class = "nav-link" data-toggle = "tab">
                                        <span class = "step-number mr-2">01</span>
                                        General Details
                                    </a>
                                </li>
                               <li class = "nav-item">
                                  <a href = "#descriptions" class = "nav-link" data-toggle = "tab">
                                     <span class = "step-number mr-2">02</span>
                                     Descriptions
                                  </a>
                               </li>
                               <li class = "nav-item">
                                  <a href = "#selection" class = "nav-link" data-toggle = "tab">
                                     <span class = "step-number mr-2">03</span>
                                     Selections
                                  </a>
                               </li>
                                <li class = "nav-item">
                                    <a href = "#company-document" class = "nav-link" data-toggle = "tab">
                                        <span class = "step-number mr-2">04</span>
                                        <span>Images</span>
                                    </a>
                                </li>
                            </ul>
                            <div class = "tab-content twitter-bs-wizard-tab-content">
                                <div class = "tab-pane" id = "seller-details">
                                    <form>
                                        <div class = "row">
                                            <div class = "col-lg-6">
                                                <div class = "form-group">
                                                    <label for = "basicpill-firstname-input">Title</label>
                                                    <input type = "text" name="post[title]" class = "form-control" id = "basicpill-firstname-input">
                                                </div>
                                            </div>
                                            <div class = "col-lg-6">
                                                <div class = "form-group">
                                                    <label for = "basicpill-lastname-input">Location</label>
                                                    <input type = "text" class = "form-control" name="post[location]" id = "basicpill-lastname-input">
                                                </div>
                                            </div>
                                        </div>

                                        <div class = "row">
                                            <div class = "col-lg-6">
                                                <div class = "form-group">
                                                    <label for = "basicpill-phoneno-input">Duration</label>
                                                    <input type = "text" name="post[duration]" class = "form-control" id = "basicpill-phoneno-input">
                                                </div>
                                            </div>
                                            <div class = "col-lg-6">
                                                <div class = "form-group">
                                                    <label for = "basicpill-email-input">Discount</label>
                                                    <input type = "email" name="post[discount]" class = "form-control" id = "basicpill-email-input">
                                                </div>
                                            </div>
                                        </div>
                                       <div class = "row">
                                          <div class = "col-lg-6">
                                             <div class = "form-group">
                                                <label for = "basicpill-phoneno-input">Budget</label>
                                                <input type = "text" name="post[budget]" class = "form-control" id = "basicpill-phoneno-input">
                                             </div>
                                          </div>
                                       </div>
                                    </form>
                                </div>
                               <div class = "tab-pane" id = "descriptions">
                                  <div class = "row">
                                     <div class = "col-lg-12">
                                        <div class = "form-group">
                                           <label for = "">Description</label>
                                           <textarea class = "description" id = "elm1" name = "post[description]"></textarea>
                                        </div>
                                        <div class = "">
                                           <div class = "form-group">
                                              <label for = "">About the Tour</label>
                                              <textarea class = "description1" id = "elm2" name = "post[about_tour]"></textarea>
                                           </div>
                                        </div>
                                        <div class = "">
                                           <div class = "form-group">
                                              <label for = "">Itinerary</label>
                                              <textarea class = "description" id = "elm3" name = "post[itinerary]"></textarea>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                               <div class = "tab-pane" id = "selection">
                                  <form>
                                     <div class = "row">
                                        <div class = "col-lg-6">
                                           <div class = "form-group">
                                              <label for = "basicpill-firstname-input">Destination</label>
                                              <select class="select2 form-control required" name = "" id = "">
                                                 <option value = "">Option 1</option>
                                                 <option value = "">Option 2</option>
                                                 <option value = "">Option 3</option>
                                              </select>
                                           </div>
                                        </div>
                                        <div class = "col-lg-6">
                                           <div class = "form-group">
                                              <label for = "basicpill-lastname-input">Location</label>
                                              <input type = "text" class = "form-control" name="post[location]" id = "basicpill-lastname-input">
                                           </div>
                                        </div>
                                     </div>

                                     <div class = "row">
                                        <div class = "col-lg-6">
                                           <div class = "form-group">
                                              <label for = "basicpill-phoneno-input">Duration</label>
                                              <input type = "text" name="post[duration]" class = "form-control" id = "basicpill-phoneno-input">
                                           </div>
                                        </div>
                                        <div class = "col-lg-6">
                                           <div class = "form-group">
                                              <label for = "basicpill-email-input">Discount</label>
                                              <input type = "email" name="post[discount]" class = "form-control" id = "basicpill-email-input">
                                           </div>
                                        </div>
                                     </div>
                                  </form>
                               </div>

                               <div class = "tab-pane" id = "company-document">
                                    <div>
                                        <form action = "#" class = "dropzone">
                                            <div class = "fallback">
                                                <input name = "file" type = "file" multiple = "multiple">
                                            </div>
                                            <div class = "dz-message needsclick">
                                                <div class = "mb-3">
                                                    <i class = "display-4 text-muted bx bxs-cloud-upload"></i>
                                                </div>
                                                <h4>Drop files here or click to upload.</h4>
                                            </div>
                                        </form>
                                    </div>
                                    <div class = "row">
                                        <div class = "col-md-6 col-xl-3" style = "margin-top: 20px;">
                                            <div class = "card" style = "background-color: #EDF0FD">
                                                <img class = "card-img-top img-fluid" src = "assets/images/small/img-2.jpg" alt = "Card image cap">
                                                <div class = "card-body" style = "text-align: center">
                                                    <a href = "#" class = "btn btn-danger waves-effect waves-light">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class = "col-md-6 col-xl-3" style = "margin-top: 20px;">
                                            <div class = "card" style = "background-color: #EDF0FD">
                                                <img class = "card-img-top img-fluid" src = "assets/images/small/img-3.jpg" alt = "Card image cap">
                                                <div class = "card-body" style = "text-align: center">
                                                    <a href = "#" class = "btn btn-danger waves-effect waves-light">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class = "col-md-6 col-xl-3" style = "margin-top: 20px;">
                                            <div class = "card" style = "background-color: #EDF0FD">
                                                <img class = "card-img-top img-fluid" src = "assets/images/small/img-4.jpg" alt = "Card image cap">
                                                <div class = "card-body" style = "text-align: center">
                                                    <a href = "#" class = "btn btn-danger waves-effect waves-light">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <ul class="pager wizard twitter-bs-wizard-pager-link">
                                    <li class="previous"><a href="#">Previous</a></li>
                                    <li class="next"><a href="#">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

