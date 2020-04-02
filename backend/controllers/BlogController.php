<?php
    namespace backend\controllers;

    use common\components\HelperBlog;
    use common\components\Misc;
    use common\models\Blog;
    use Yii;
    use yii\filters\AccessControl;
    use yii\filters\VerbFilter;
    use yii\web\Controller;


    /**
     * Clients controller
     */
    class BlogController extends Controller {
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
            $page = 'blog';
            $blog = Blog::find()->all();
            return $this->render('index', [
                'blog' => $blog,
                'page' => Yii::$app->params['pages'][$page],
            ]);
        }

        public function actionPost($id = '') {
            $post = [];
            if ($id != '') {
                $id = Misc::decodeUrl($id);
                $post = Blog::findOne($id);
            }
            return $this->render('form', [
                'editable' => $post,
            ]);
        }

        public function actionUpdate() {
            $image = (isset($_FILES['image'])) ? $_FILES['image'] : [];
            if (isset($_POST['post'])) {
                $updated = HelperBlog::set($_POST['post'], $image);
                if ($updated != FALSE) {
                    return $this->redirect(Yii::$app->request->baseUrl . '/blog/post/' . Misc::encodeUrl($updated['id']));
                }
            }
            return $this->redirect(Yii::$app->request->baseUrl . '/blog/');
        }


    }
