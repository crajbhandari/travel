<?php
$this->title = Yii::$app->params['system_name'] . " | Welcome " . ucwords(Yii::$app->user->identity->name);
?>
<div class = "d-none sb2-2">
    <!--== breadcrumbs ==-->
    <div class = "sb2-2-2">
        <ul>
            <li><a href = "<?php echo Yii::$app->request->baseUrl; ?>/"><i class = "fa fa-home" aria-hidden = "true"></i> Home</a>
            </li>
            <li class = "active-bre"><a href = "#"> Dashboard</a>
            </li>
<!--            <li class = "page-back"><a href = "index.html"><i class = "fa fa-backward" aria-hidden = "true"></i> Back</a>-->
<!--            </li>-->
        </ul>
    </div>
    <!--== DASHBOARD INFO ==-->
    <div class = "ad-v2-hom-info">
        <div class = "ad-v2-hom-info-inn">
            <ul>
                <li>
                    <div class = "ad-hom-box ad-hom-box-1">
                        <span class = "ad-hom-col-com ad-hom-col-1"><i class = "fa fa-envelope-o"></i></span>
                        <div class = "ad-hom-view-com">
                            <p>New Messages</p>
                             <?php
                                if (Yii::$app->params['count_messages']['count_unseen'] > 0) {?>
                           <h3>
                              <?php echo Yii::$app->params['count_messages']['count_unseen']; ?>
                           </h3>
                                <?php } else{echo '<p style="color:black;"><b>Empty</b></p>';}?>
                        </div>
                    </div>
                </li>
                <li>
                    <div class = "ad-hom-box ad-hom-box-2">
                        <span class = "ad-hom-col-com ad-hom-col-2"><i class = "fa fa-picture-o"></i></span>
                        <div class = "ad-hom-view-com">
                            <p>Total Blogs</p>
                            <h3><?php  echo Yii::$app->params['count_blog']; ?></h3>
                        </div>
                    </div>
                </li>
                <li>
                    <div class = "ad-hom-box ad-hom-box-3">
                        <span class = "ad-hom-col-com ad-hom-col-3"><i class = "fa fa-address-card-o"></i></span>
                        <div class = "ad-hom-view-com">
                            <p>Clients</p>
                            <h3>5</h3>
                        </div>
                    </div>
                </li>
                <li>
                    <div class = "ad-hom-box ad-hom-box-4">
                        <span class = "ad-hom-col-com ad-hom-col-4"><i class = "fa fa-envelope-open-o"></i></span>
                        <div class = "ad-hom-view-com">
                            <p><i class = "fa  fa-arrow-up up"></i> Package</p>
                            <h3><?php echo $package ?></h3>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class = "sb2-2-3">
        <div class = "row">
            <div class = "col-md-6">
                <div class = "box-inn-sp">
                    <div class = "inn-title">
                        <h4>Country Campaigns</h4>
                        <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                        <a class = 'dropdown-button drop-down-meta' href = '#' data-activates = 'dropdown1'><i class = "material-icons">more_vert</i></a>
                        <!-- Dropdown Structure -->
                        <ul id = 'dropdown1' class = 'dropdown-content'>
                            <li><a href = "#!">Add New</a>
                            </li>
                            <li><a href = "#!">Edit</a>
                            </li>
                            <li><a href = "#!">Update</a>
                            </li>
                            <li class = "divider"></li>
                            <li><a href = "#!"><i class = "material-icons">delete</i>Delete</a>
                            </li>
                            <li><a href = "#!"><i class = "material-icons">subject</i>View All</a>
                            </li>
                            <li><a href = "#!"><i class = "material-icons">play_for_work</i>Download</a>
                            </li>
                        </ul>
                    </div>
                    <div class = "tab-inn">
                        <div class = "table-responsive table-desi">
                            <table class = "table table-hover">
                                <thead>
                                <tr>
                                    <th>Country</th>
                                    <th>Client</th>
                                    <th>Changes</th>
                                    <th>Budget</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><span class = "txt-dark weight-500">Australia</span>
                                    </td>
                                    <td>Beavis</td>
                                    <td><span class = "txt-success"><i class = "fa fa-angle-up" aria-hidden = "true"></i><span>2.43%</span></span>
                                    </td>
                                    <td>
                                        <span class = "txt-dark weight-500">$1478</span>
                                    </td>
                                    <td>
                                        <span class = "label label-success">Active</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class = "txt-dark weight-500">Cuba</span>
                                    </td>
                                    <td>Felix</td>
                                    <td><span class = "txt-success"><i class = "fa fa-angle-up" aria-hidden = "true"></i><span>1.43%</span></span>
                                    </td>
                                    <td>
                                        <span class = "txt-dark weight-500">$951</span>
                                    </td>
                                    <td>
                                        <span class = "label label-danger">Closed</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class = "txt-dark weight-500">France</span>
                                    </td>
                                    <td>Cannibus</td>
                                    <td><span class = "txt-danger"><i class = "fa fa-angle-up" aria-hidden = "true"></i><span>-8.43%</span></span>
                                    </td>
                                    <td>
                                        <span class = "txt-dark weight-500">$632</span>
                                    </td>
                                    <td>
                                        <span class = "label label-default">Hold</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class = "txt-dark weight-500">Norway</span>
                                    </td>
                                    <td>Neosoft</td>
                                    <td><span class = "txt-success"><i class = "fa fa-angle-up" aria-hidden = "true"></i><span>7.43%</span></span>
                                    </td>
                                    <td>
                                        <span class = "txt-dark weight-500">$325</span>
                                    </td>
                                    <td>
                                        <span class = "label label-default">Hold</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class = "txt-dark weight-500">South Africa</span>
                                    </td>
                                    <td>Hencework</td>
                                    <td><span class = "txt-success"><i class = "fa fa-angle-up" aria-hidden = "true"></i><span>9.43%</span></span>
                                    </td>
                                    <td>
                                        <span>$258</span>
                                    </td>
                                    <td>
                                        <span class = "label label-success">Active</span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!--== Country Campaigns ==-->
            <div class = "col-md-6">
                <div class = "box-inn-sp">
                    <div class = "inn-title">
                        <h4>Country Campaigns</h4>
                        <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                        <a class = 'dropdown-button drop-down-meta' href = '#' data-activates = 'dropdown2'><i class = "material-icons">more_vert</i></a>
                        <!-- Dropdown Structure -->
                        <ul id = 'dropdown2' class = 'dropdown-content'>
                            <li><a href = "#!">Add New</a>
                            </li>
                            <li><a href = "#!">Edit</a>
                            </li>
                            <li><a href = "#!">Update</a>
                            </li>
                            <li class = "divider"></li>
                            <li><a href = "#!"><i class = "material-icons">delete</i>Delete</a>
                            </li>
                            <li><a href = "#!"><i class = "material-icons">subject</i>View All</a>
                            </li>
                            <li><a href = "#!"><i class = "material-icons">play_for_work</i>Download</a>
                            </li>
                        </ul>
                    </div>
                    <div class = "tab-inn">
                        <div class = "table-responsive table-desi">
                            <table class = "table table-hover">
                                <thead>
                                <tr>
                                    <th>State</th>
                                    <th>Client</th>
                                    <th>Changes</th>
                                    <th>Budget</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><span class = "txt-dark weight-500">California</span>
                                    </td>
                                    <td>Beavis</td>
                                    <td><span class = "txt-success"><i class = "fa fa-angle-up" aria-hidden = "true"></i><span>2.43%</span></span>
                                    </td>
                                    <td>
                                        <span class = "txt-dark weight-500">$1478</span>
                                    </td>
                                    <td>
                                        <span class = "label label-success">Active</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class = "txt-dark weight-500">Florida</span>
                                    </td>
                                    <td>Felix</td>
                                    <td><span class = "txt-success"><i class = "fa fa-angle-up" aria-hidden = "true"></i><span>1.43%</span></span>
                                    </td>
                                    <td>
                                        <span class = "txt-dark weight-500">$951</span>
                                    </td>
                                    <td>
                                        <span class = "label label-danger">Closed</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class = "txt-dark weight-500">Hawaii</span>
                                    </td>
                                    <td>Cannibus</td>
                                    <td><span class = "txt-danger"><i class = "fa fa-angle-up" aria-hidden = "true"></i><span>-8.43%</span></span>
                                    </td>
                                    <td>
                                        <span class = "txt-dark weight-500">$632</span>
                                    </td>
                                    <td>
                                        <span class = "label label-default">Hold</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class = "txt-dark weight-500">Alaska</span>
                                    </td>
                                    <td>Neosoft</td>
                                    <td><span class = "txt-success"><i class = "fa fa-angle-up" aria-hidden = "true"></i><span>7.43%</span></span>
                                    </td>
                                    <td>
                                        <span class = "txt-dark weight-500">$325</span>
                                    </td>
                                    <td>
                                        <span class = "label label-default">Hold</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class = "txt-dark weight-500">New Jersey</span>
                                    </td>
                                    <td>Hencework</td>
                                    <td><span class = "txt-success"><i class = "fa fa-angle-up" aria-hidden = "true"></i><span>9.43%</span></span>
                                    </td>
                                    <td>
                                        <span>$258</span>
                                    </td>
                                    <td>
                                        <span class = "label label-success">Active</span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>