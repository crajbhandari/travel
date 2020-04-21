<?php

    /* @var $this \yii\web\View */
    /* @var $content string */

    use backend\assets\AppAsset;
    use yii\helpers\Html;

    AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang = "<?= Yii::$app->language ?>">
<head>
    <meta charset = "<?= Yii::$app->charset ?>">
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?php echo Yii::$app->params['system_name'] ?> - <?= Html::encode($this->title) ?></title>
    <link rel = "shortcut icon" href = "<?php echo Yii::$app->request->baseUrl ?>/../common/assets/images/uploads/fav.png">
    <link href = "https://fonts.googleapis.com/css?family=Poppins:400,600" rel = "stylesheet">
    <link href = "<?php echo Yii::$app->request->baseUrl; ?>/../common/assets/css/margins-paddings.css" rel = "stylesheet">
    <!-- Bootstrap Core CSS -->
    <link href = "<?php echo Yii::$app->request->baseUrl; ?>/assets/plugins/bootstrap/css/bootstrap.min.css" rel = "stylesheet">
    <link rel = "stylesheet" href = "https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity = "sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin = "anonymous">

    <!-- All Form Addon CSS -->
    <link href = "<?php echo Yii::$app->request->baseUrl; ?>/assets/css/form-addon.css" rel = "stylesheet">

    <link href = "<?php echo Yii::$app->request->baseUrl; ?>/assets/css/spinners.css" rel = "stylesheet">
    <link href = "<?php echo Yii::$app->request->baseUrl; ?>/assets/css/animate.css" rel = "stylesheet">

    <link href = "<?php echo Yii::$app->request->baseUrl; ?>/assets/icons/material-design-iconic-font/css/materialdesignicons.min.css" rel = "stylesheet">

    <!-- summernotes CSS -->
    <link href = "<?php echo Yii::$app->request->baseUrl; ?>/assets/plugins/summernote/dist/summernote.css" rel = "stylesheet"/>

    <!-- Custom CSS -->
    <link href = "<?php echo Yii::$app->request->baseUrl; ?>/assets/css/style.css" rel = "stylesheet">

    <link href = "<?php echo Yii::$app->request->baseUrl; ?>/assets/css/overrides.css" rel = "stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// --><!--[if lt IE 9]>
    <script src = "https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src = "https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->

    <script src = "<?php echo Yii::$app->request->baseUrl; ?>/assets/plugins/jquery/jquery.min.js"></script>
    <script>
        var baseUrl = "<?php echo Yii::$app->request->baseUrl; ?>";
        var pop = "";
    </script>
    <?php if (Yii::$app->session->hasFlash('pop')) { ?>
        <script>
            pop = <?php echo Yii::$app->session->getFlash('pop'); ?>;
        </script>
    <?php } ?>
    <?php $this->head() ?>
</head>
<body class = "fix-header fix-sidebar card-no-border">
    <?php $this->beginBody() ?>
    <!--[if lt IE 8]>
    <p class = "browserupgrade">You are using an <strong>outdated</strong> browser. Please
        <a href = "http//browsehappy.com/">upgrade your browser</a>
        to improve your experience.
    </p><![endif]-->

    <div class = "preloader">
        <svg class = "circular" viewBox = "25 25 50 50">
            <circle class = "path" cx = "50" cy = "50" r = "20" fill = "none" stroke-width = "2" stroke-miterlimit = "10"/>
        </svg>
    </div>
    <div id = "main-wrapper">

        <header class = "topbar">
            <nav class = "navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class = "navbar-header">
                    <a class = "navbar-brand" href = "<?php echo Yii::$app->request->baseUrl; ?>">
                        <!-- Logo icon -->
                        <b>
                            <!-- Light Logo icon -->
                            <img src = "<?php echo Yii::$app->request->baseUrl ?>/../common/assets/images/uploads/logo-only.png" alt = "homepage" class = "logo-emblem"/>
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class = "d_inline_b">
                            <!-- Light Logo text -->
                            <img src = "<?php echo Yii::$app->request->baseUrl ?>/../common/assets/images/uploads/logo-text.png" class = "logo-text" alt = "homepage"/>
                        </span></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class = "navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class = "navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class = "nav-item">
                            <a class = "nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href = "javascript:void(0)">
                                <i class = "mdi mdi-menu"></i>
                            </a>
                        </li>
                        <li class = "nav-item">
                            <a class = "nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href = "javascript:void(0)">
                                <i class = "mdi mdi-menu"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class = "navbar-nav my-lg-0">
                        <li class = "nav-item">
                            <a class = "nav-link waves-effect waves-dark" href = "<?php echo Yii::$app->request->baseUrl; ?>/site/logout">
                                <i class = "mdi mdi-power"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <aside class = "left-sidebar">
            <!-- Sidebar scroll-->
            <div class = "scroll-sidebar">

                <!-- Sidebar navigation-->
                <nav class = "sidebar-nav">
                    <ul id = "sidebarnav">
                        <li class = "<?php echo (Yii::$app->controller->id == 'admin' && Yii::$app->controller->action->id == 'index') ? 'active' : '' ?>">
                            <a class = "waves-effect waves-dark" href = "<?php echo Yii::$app->request->baseUrl; ?>/" aria-expanded = "false">
                                <i class = "mdi mdi-airplay"></i>
                                <span class = "hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class = "<?php echo (Yii::$app->controller->id == 'messages' && Yii::$app->controller->action->id == 'index') ? 'active' : '' ?>">
                            <a class = "waves-effect waves-dark" href = "<?php echo Yii::$app->request->baseUrl; ?>/messages" aria-expanded = "false">
                                <i class = "mdi mdi-email-outline"></i>
                                <span class = "hide-menu">Messages</span></a>
                        </li>
                        <li class = "nav-divider"></li>
                        <li class = "nav-small-cap">Data Management</li>

                        <li class = "<?php echo (Yii::$app->controller->id == 'team' && Yii::$app->controller->action->id == 'index') ? 'active' : '' ?>">
                            <a class = "waves-effect waves-dark" href = "<?php echo Yii::$app->request->baseUrl; ?>/team/" aria-expanded = "false">
                                <i class = "mdi mdi-account-multiple"></i>
                                <span class = "hide-menu">Team</span>
                            </a>
                        </li>
                        <li class = "<?php echo (Yii::$app->controller->id == 'clients' && Yii::$app->controller->action->id == 'index') ? 'active' : '' ?>">
                            <a class = "waves-effect waves-dark" href = "<?php echo Yii::$app->request->baseUrl; ?>/clients/" aria-expanded = "false">
                                <i class = "mdi mdi-human-greeting"></i>
                                <span class = "hide-menu">Clients</span>
                            </a>
                        </li>
                        <li class = "<?php echo (Yii::$app->controller->id == 'testimonials' && Yii::$app->controller->action->id == 'index') ? 'active' : '' ?>">
                            <a class = "waves-effect waves-dark" href = "<?php echo Yii::$app->request->baseUrl; ?>/testimonials/" aria-expanded = "false">
                                <i class = "mdi mdi-message-reply-text"></i>
                                <span class = "hide-menu">Testimonials</span>
                            </a>
                        </li>
                        <li class = "<?php echo (Yii::$app->controller->id == 'content' && Yii::$app->controller->action->id == 'services') ? 'active' : '' ?>">
                            <a class = "waves-effect waves-dark" href = "<?php echo Yii::$app->request->baseUrl; ?>/services/" aria-expanded = "false">
                                <i class = "mdi mdi-puzzle"></i>
                                <span class = "hide-menu">Services</span>
                            </a>
                        </li>
                        <li class = "<?php echo (Yii::$app->controller->id == 'blog' && Yii::$app->controller->action->id == 'index') ? 'active' : '' ?>">
                            <a class = "waves-effect waves-dark" href = "<?php echo Yii::$app->request->baseUrl; ?>/blog/" aria-expanded = "false">
                                <i class = "mdi mdi-note-multiple-outline"></i>
                                <span class = "hide-menu">Blog</span>
                            </a>
                        </li>
                        <li class = "nav-divider"></li>
                        <li class = "nav-small-cap">Page Management</li>

                        <?php foreach (Yii::$app->params['pages'] as $key => $page): ?>
                            <li class = "<?php echo (Yii::$app->controller->id == 'sections' && Yii::$app->controller->action->id == 'pages/' . $key) ? 'active' : '' ?>">
                                <a class = "waves-effect waves-dark" href = "<?php echo Yii::$app->request->baseUrl; ?>/sections/pages/<?php echo $key; ?>" aria-expanded = "false">
                                    <i class = "mdi <?= ($page['icon']!='')?$page['icon']:'mdi-chevron-right' ?>"></i>
                                    <span class = "hide-menu"><?php echo ucwords($key); ?></span>
                                </a>
                            </li>
                        <?php endforeach; ?>
                        <li class = "nav-divider"></li>
                        <li class = "nav-small-cap">Miscellaneous</li>
                        <li class = "<?php echo (Yii::$app->controller->id == 'settings' && Yii::$app->controller->action->id == 'index') ? 'active' : '' ?>">
                            <a class = "waves-effect waves-dark" href = "<?php echo Yii::$app->request->baseUrl; ?>/settings" aria-expanded = "false">
                                <i class = "mdi mdi-settings "></i>
                                <span class = "hide-menu">Website Settings</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->

        </aside>

        <div class = "page-wrapper">
            <!-- Page -->
            <?= $content ?>
            <!-- End Page -->

            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class = "footer">
                <?php echo Yii::$app->params['system_name'] ?> | Backend by
                <a target = "_blank" href = "http://auctadigital.com">Aucta Digital</a>
                .
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>

    </div>

    <script src = "<?php echo Yii::$app->request->baseUrl; ?>/assets/js/plugins.min.js"></script>
    <script src = "<?php echo Yii::$app->request->baseUrl; ?>/../common/assets/vendor/notify/bootstrap-notify.min.js"></script>

    <?php $this->endBody() ?>

    <!--Custom JavaScript -->
    <script src = "<?php echo Yii::$app->request->baseUrl; ?>/assets/js/base-functions.js"></script>
    <script src = "<?php echo Yii::$app->request->baseUrl; ?>/assets/js/form-validation-rules.js"></script>

    <script src = "<?php echo Yii::$app->request->baseUrl; ?>/assets/js/main.js"></script>
    <script src = "<?php echo Yii::$app->request->baseUrl; ?>/assets/js/custom.js"></script>
    <?php if (Yii::$app->session->hasFlash('flash')): ?>
        <script>
            notifyFlash(<?= Yii::$app->session->getFlash('flash'); ?>);
        </script>
    <?php endif; ?>
    <!-- CSRF TOKEN -->
    <script>
        $.ajaxSetup({
            data: {
                '_csrf-backend': $('meta[name=csrf-token]').prop('content')
            }
        });
    </script>

</body>
</html>
<?php $this->endPage() ?>
