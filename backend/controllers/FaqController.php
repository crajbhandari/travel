<?php
    namespace backend\controllers;

    use common\components\HelperFaq;
    use common\components\Misc;
    use common\models\Faq;
    use Yii;
    use yii\filters\AccessControl;
    use yii\filters\VerbFilter;
    use yii\web\Controller;


    class FaqController extends Controller {
        /**
         * {@inheritdoc}
         */
        public function behaviors() {
            return [
                'access' => [
                    'class' => AccessControl::className(),
                    'rules' => [
                        [
                            'actions' => ['login', 'error'],
                            'allow'   => TRUE,
                        ],
                        [
//                            'actions' => ['logout', 'index'],
                            'allow'   => TRUE,
                            'roles'   => ['@'],
                        ],
                    ],
                ],
                'verbs'  => [
                    'class'   => VerbFilter::className(),
                    'actions' => [
                        //                    'logout' => ['post'],
                    ],
                ],
            ];
        }

        /**
         * {@inheritdoc}
         */
        public function actions() {
            return [
                'error' => [
                    'class'  => 'yii\web\ErrorAction',
                    'layout' => 'error',
                ],
            ];
        }

        /**
         * Displays homepage.
         * @return string
         */
        public function actionIndex($id = '') {
            $id = Misc::decodeUrl($id);
            return $this->render('index', [
                'faq' => Faq::find()->all(),
                'editable'     => ($id > 0) ? Faq::findOne($id) : FALSE,
            ]);
        }


        public function actionUpdate() {
            if (isset($_POST['faq'])) {
                $updated = HelperFaq::set($_POST['faq']);
                if ($updated != FALSE) {
                    Misc::setFlash('success', 'Faq Updated.');
                       return $this->redirect(Yii::$app->request->baseUrl . '/faq/edit/'. Misc::encodeUrl($updated['id']));
                }
            }

            return $this->redirect(Yii::$app->request->baseUrl . '/testimonials/');
        }
    }
