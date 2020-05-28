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
                                            'actions' => ['login', 'error'],
                                            'allow'   => TRUE,
                                    ],
                                    [
                                        //                            'actions' => ['logout', 'index'], // Enable for access
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
                'messages' => Messages::find()->orderBy(['id' => SORT_DESC])->all(),
                'count'    => Messages::find()->where(['=', 'is_new', '1'])->count(),
            ]);
        }

        public function actionReadMessage() {
            //        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            if (\Yii::$app->request->isAjax && $_POST['id']) {
                $id = $_POST['id'];
                if ($id > 0) {
                    $model = Messages::findOne($id);
                    if ($model) {
                        $model->is_new = 1;
                        $name = $model->name;
                        $email = $model->email;
                        $phone = $model->phone;
                        $message = $model->message;
                        $date = $model->created_on;

                        if ($model->save() == true) {

                            $result = "
          <p><b>Name : </b><br>$name</p>
      <p><b>Email : </b><br>$email</p>
      <p><b>Phone Number : </b><br>$phone</p>
      <p><b>Sent On : </b><br>$date</p>
      <p><b>Message : </b><br>$message</p>
                       
                        ";
                            return json_encode($data = [
                                    'result' => $result,
                                    'id'     => $model->id
                            ]);
                        }
                    }
                }

            }
            return false;
        }
    }
