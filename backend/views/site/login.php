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
    <div class = "site-login">


        <div class = "login-wrapper">

            <div class = "form-wrapper frm-single">
               <div class="inside">
                <div class = "page-title">
                    <h1 style="color: #007bff;">Travel</h1>
                </div>
                <div class = "login-form">
                    <?php $form = ActiveForm::begin(['id' => 'login-form', 'enableClientValidation' => FALSE]); ?>
                   <div class="frm-input">
                    <?= $form->field($model, 'username')->textInput(['autofocus' => TRUE]) ?>
                   </div>
                   <div class="frm-input">
                    <?= $form->field($model, 'password')->passwordInput() ?>
                   </div>
                    <div class = "form-actions">
                        <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-block', 'name' => 'login-button']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>

        </div>

    </div>
</section>
