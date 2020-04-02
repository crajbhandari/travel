<?php
    namespace backend\controllers;

    use common\components\Misc;
    use common\models\Messages;
    use yii\filters\AccessControl;
    use yii\filters\VerbFilter;
    use yii\web\Controller;


    /**
     * Clients controller
     */
    class MessagesController extends Controller {
        /**
         * {@inheritdoc}
         */
        public function behaviors() {
            return [
                'access' => [
                    'class' => AccessControl::className(),
                    'rules' => [
                        [
                            //                            'actions' => ['login', 'error'],
                            'allow' => TRUE,
                        ],
                        [
                            //                            'actions' => ['logout', 'index'],
                            'allow' => TRUE,
                            'roles' => ['@'],
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
        public function actionIndex() {

            return $this->render('index', [
                'messages' => Messages::find()->all(),
                'count'    => Messages::find()->where(['=', 'is_new', '1'])->count(),
            ]);
        }

        public function actionReadMessage() {
            \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            if (\Yii::$app->request->isAjax && $_POST['id']) {
                $id = Misc::decodeUrl($_POST['id']);
                if ($id > 0) {
                    $model = Messages::findOne($id);
                    if ($model) {
                        $model->is_new = 0;
                        if ($model->save() == TRUE) {
                            return TRUE;
                        }
                    }
                }

            }
            return FALSE;
        }
    }
