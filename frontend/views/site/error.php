<?php
    /* @var $this View */
    /* @var $name string */
    /* @var $message string */
    /* @var $exception Exception */
    $this->title = Yii::$app->params['system_name'] . ' | ' . Yii::$app->errorHandler->exception->getMessage();
?>

<div class = "container">
    <div class = "error-wrapper">
        <div class = "error-body">
            <div class = "text">

                <div class = "icon">
                    <!-- <i class = "fa fa-exclamation-circle"></i> -->
                    <i class = "fa fa-exclamation"></i>
                </div>
                <h1><?php echo Yii::$app->errorHandler->exception->statusCode; ?></h1>

                <h3>Sorry! <?php echo Yii::$app->errorHandler->exception->getMessage(); ?></h3>
                <p>
                    For further inquiry, please send an email to
                    <a href = "mailto:'<?php echo Yii::$app->params['adminEmail'] ?>'"><?php echo Yii::$app->params['adminEmail'] ?></a>
                </p>
                <p><?php echo Yii::$app->params['system_name'] ?></p>

                <div class = "error-actions margin-top-90">
                    <a class = "btn btn-err" href = "<?php echo Yii::$app->request->baseUrl; ?>" role = "button"><i class="fa fa-home"></i>Go Home</a>
                    <a class = "btn btn-err" href = "javascript: history.go(-1)" role = "button"><i class="fa fa-chevron-left"></i>Go Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
