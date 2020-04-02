<?php
    namespace backend\controllers;

    use common\components\HelperServices;
    use common\components\Misc;
    use common\models\Services;
    use Yii;

    use yii\filters\AccessControl;
    use yii\filters\VerbFilter;
    use yii\web\Controller;

    /**
     * Clients controller
     */
    class ServicesController extends Controller {
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
                'services' => Services::find()->all(),
                'editable' => ($id > 0) ? Services::findOne($id) : FALSE,
            ]);
        }

        public function actionUpdate() {
            $image = (isset($_FILES['image'])) ? $_FILES['image'] : [];
            if (isset($_POST['service'])) {
                $updated = HelperServices::set($_POST['service'], $image);
                if ($updated != FALSE) {
                    Misc::setFlash('success', 'Service Updated');
                    //return $this->redirect(Yii::$app->request->baseUrl . '/Services/edit/' . Misc::encodeUrl($updated['id']));
                }
            }
            return $this->redirect(Yii::$app->request->baseUrl . '/services/');
        }

    }
