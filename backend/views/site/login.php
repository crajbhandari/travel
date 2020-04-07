<?php

    /* @var $this yii\web\View */
    /* @var $form yii\bootstrap\ActiveForm */
    /* @var $model \common\models\LoginForm */

    use yii\bootstrap\ActiveForm;
    use yii\helpers\Html;

    $this->title = 'Login';
    $this->params['breadcrumbs'][] = $this->title;
?>
<section>
    <div class = "blog-login">


        <div class = "blog-login-in">

            <div class = "form-wrapper">
                <div class = "login-form">
                    <?php $form = ActiveForm::begin(['id' => 'login-form', 'enableClientValidation' => FALSE]); ?>
                   <img src="<?php echo Yii::$app->request->baseUrl; ?>/../common/assets/images/logo.png" alt="">
                    <?= $form->field($model, 'username')->textInput(['autofocus' => TRUE]) ?>

                    <?= $form->field($model, 'password')->passwordInput() ?>

                    <div class = "form-actions">
                        <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-block', 'name' => 'login-button']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>


        </div>

    </div>
</section>
