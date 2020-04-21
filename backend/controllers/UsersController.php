<?php
    namespace backend\controllers;

//    use common\components\HelperBlog;
use common\components\HelperUser;
use common\components\Misc;
    use common\models\User;
    use Yii;
    use yii\filters\AccessControl;
    use yii\filters\VerbFilter;
    use yii\web\Controller;


    /**
     * Clients controller
     */
    class UsersController extends Controller {
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
         * @return string
         */
        public function actionIndex() {
            if((\Yii::$app->user->identity->role=='admin')) {
                $users = User::find()->orderBy(['role' => SORT_ASC])->asArray()->all();
                return $this->render('index', [
                        'users' => $users,
                        //                    'page' => Yii::$app->params['pages'][$page],
                ]);
            }
            else{

            }
        }

        public function actionEdit($id = '') {
            $post = [];
            if ($id != '') {
                $id = Misc::decodeUrl($id);
                $post = User::findOne($id);
            }
            return $this->render('form', [
                'editable' => $post,
            ]);
        }

        public function actionUpdate() {
            $image = (isset($_FILES['image'])) ? $_FILES['image'] : [];
            $post = $_POST['post'];
            if (isset($_POST['post'])) {
                $updated = HelperUser::editUser($_POST['post'], $image);
                if ($updated != FALSE) {
                    return $this->redirect(Yii::$app->request->baseUrl . '/users/edit/' . Misc::encodeUrl($updated['id']));
                }
                Misc::setFlash('danger', 'Data not uploaded. Please Try again');
                return $this->redirect(Yii::$app->request->baseUrl . '/users/edit/' . Misc::encodeUrl($post['id']));
            }
            return $this->redirect(Yii::$app->request->baseUrl . '/users/');
        }


    }
