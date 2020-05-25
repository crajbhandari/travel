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





<!-- new-design -->

              <div class="account-pages pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="bg-soft-primary">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="text-primary p-4">
                                            <h5 class="text-primary">Welcome Back !</h5>
                                            <p>Sign in to continue to Travel.</p>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                         <img src =  "<?= Yii::$app->request->baseUrl; ?>/resources/images/logo.png" alt = "" class = "img-fluid" style="padding: 20px 20px 0 0;">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                               
                                <div class="p-2">
                                    <?php $form = ActiveForm::begin(['id' => 'login-form', 'enableClientValidation' => FALSE]); ?>
                                        <div class="form-group">
                                            <?= $form->field($model, 'username')->textInput(['autofocus' => TRUE]) ?>
                                        </div>

                                        <div class="form-group">
                                            <?= $form->field($model, 'password')->passwordInput() ?>
                                        </div>

                                        <div class="mt-3">
                                            <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-block', 'name' => 'login-button']) ?>
                                        </div>
                                    <?php ActiveForm::end(); ?>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>


        </div>

    </div>
</section>

