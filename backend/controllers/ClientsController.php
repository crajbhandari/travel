<?php
    namespace backend\controllers;

    use yii\filters\AccessControl;
    use yii\filters\VerbFilter;
    use yii\web\Controller;
    use common\components\HelperClients;
    use common\components\Misc;
    use common\models\Clients;
    use Yii;


    /**
     * Clients controller
     */
    class ClientsController extends Controller {
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
                'clients'  => Clients::find()->all(),
                'editable' => ($id > 0) ? Clients::findOne($id) : FALSE,
            ]);
        }


        public function actionUpdate() {
            $image = (isset($_FILES['image'])) ? $_FILES['image'] : [];

            if (isset($_POST['client'])) {
                $updated = HelperClients::set($_POST['client'], $image);
                if ($updated != FALSE) {
                    Misc::setFlash('success', 'Client Updated.');
                    // return $this->redirect(Yii::$app->request->baseUrl . '/clients/edit/'. Misc::encodeUrl($updated['id']));
                }
            }

            return $this->redirect(Yii::$app->request->baseUrl . '/clients/');
        }
    }
