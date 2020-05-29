<?php

namespace frontend\controllers;

use common\components\HelperMessages;
use common\models\Blog;
use common\models\Clients;
use common\models\generated\Banners;
use common\models\generated\BlogTranslation;
use common\models\LoginForm;
use common\models\Sections;
use common\models\Services;
use common\models\Team;
use common\models\Testimonials;
use frontend\models\ContactForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\BadRequestHttpException;
use yii\web\Controller;

/**
 * Site controller
 */
class SiteController extends Controller {
    // public $enableCsrfValidation = FALSE;

    /**
     * {@inheritdoc}
     */
    public function behaviors() {
        return [
                'access' => [
                        'class' => AccessControl::className(),
                        'only'  => ['logout', 'signup'],
                        'rules' => [
                                [
                                        'actions' => ['signup'],
                                        'allow'   => true,
                                        'roles'   => ['?'],
                                ],
                                [
                                        'actions' => ['logout'],
                                        'allow'   => true,
                                        'roles'   => ['@'],
                                ],
                        ],
                ],
                'verbs'  => [
                        'class'   => VerbFilter::className(),
                        'actions' => [
                                'logout' => ['post'],
                        ],
                ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function beforeAction($action) {

        return parent::beforeAction($action);
    }

    /**
     * {@inheritdoc}
     */
    public function actions() {
        return [
                'error'   => [
                        'class' => 'yii\web\ErrorAction',
                ],
                'captcha' => [
                        'class'           => 'yii\captcha\CaptchaAction',
                        'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
                ],
        ];
    }

    /**
     * Displays homepage.
     * @return mixed
     */
    public function actionIndex() {
        $page = 'home';
        $session['language'] = 'EN';
        $ln = $session['language'];
        $blog = [];
        if(Yii::$app->params['site-settings']['show_blog']['content'] == 1) {
            $blog = \common\models\BlogTranslation::find()->where(['language_code' => $session['language']])->orderBy(['id' => SORT_DESC])->limit(3)->asArray()->with('info')->all();
        }


        return $this->render('index', [
                'clients'      => Clients::find()->where(['=', 'on_home', '1'])->all(),
                'testimonials' => Testimonials::find()->all(),
                'services'     => Services::find()->all(),
                'blogs'         => $blog,
                'language'      =>$session['language'],
                'content'      => Sections::find()->where(['=', 'page', $page])->orderBy(['section_order' => SORT_ASC, 'created_on' => SORT_ASC])->all(),
                'banners'      =>Banners::find()->asArray()->all(),
        ]);
    }

    public function actionAbout() {
        return $this->render('about');
    }

    public function actionServices() {
        $page = 'services';
        return $this->render('services', [
                'services' => Services::find()->all(),
                'content'  => Sections::find()->where(['=', 'page', $page])->orderBy(['section_order' => SORT_ASC, 'created_on' => SORT_ASC])->all(),
                'page'     => Yii::$app->params['pages'][$page],

        ]);
    }
     public function actionTestimonials() {
        return $this->render('testimonials', ['testimonials' => Testimonials::find()->asArray()->all()]);
    }


    public function actionFaq() {
        return $this->render('faq');
    }

    public function actionTeam() {
        $page = 'team';
        return $this->render('team', [
                'content' => Sections::find()->where(['=', 'page', $page])->orderBy(['section_order' => SORT_ASC, 'created_on' => SORT_ASC])->all(),
                'page'    => Yii::$app->params['pages'][$page],
                'team'    => Team::find()->all(),
        ]);
    }


    public function actionMessage() {
        $status = false;

        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        if (Yii::$app->request->isAjax && $_POST['contact'] != '') {
            $status = HelperMessages::update($_POST['contact']);
        }

        return $status;
    }


    /**
     * Logs in a user.
     * @return mixed
     */
    public function actionLogin() {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        else {
            $model->password = '';

            return $this->render('login', [
                    'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     * @return mixed
     */
    public function actionLogout() {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     * @return mixed
     */
    public function actionContact() {
        $page = 'contact';

        /*$model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            }
            else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        }
        else {

        }*/
        return $this->render('contact', [
            //                    'model'   => $model,
            'content' => Sections::find()->where(['=', 'page', $page])->orderBy(['section_order' => SORT_ASC, 'created_on' => SORT_ASC])->all(),
            'page'    => Yii::$app->params['pages'][$page],
        ]);
    }


    /**
     * Signs user up.
     * @return mixed
     */
    public function actionSignup() {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
                'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     * @return mixed
     */
    public function actionRequestPasswordReset() {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            }
            else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
                'model' => $model,
        ]);
    }

    /**
     * Resets password.
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token) {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
                'model' => $model,
        ]);
    }


}
