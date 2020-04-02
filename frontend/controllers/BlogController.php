<?php
    namespace frontend\controllers;

    use common\components\Misc;
    use common\models\Blog;
    use yii\filters\AccessControl;
    use yii\filters\VerbFilter;
    use yii\web\Controller;

    /**
     * Blog controller
     */
    class BlogController extends Controller {

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
                            'allow'   => TRUE,
                            'roles'   => ['?'],
                        ],
                        [
                            'actions' => ['logout'],
                            'allow'   => TRUE,
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
                    'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : NULL,
                ],
            ];
        }

        /**
         * Displays homepage.
         * @return mixed
         */
        public function actionIndex() {
            $page = 'blog';
            $blog = Blog::find()->where(['=', 'visibility', '1'])->all();
            $categories = [];
            if (count($blog) > 0) {
                    foreach ($blog as $b) {
                        if (!in_array($b->category, $categories)) {
                            array_push($categories, $b->category);
                        }
                    }
            }

            return $this->render('index', [
                'page'       => \Yii::$app->params['pages'][$page],
                'blog'       => $blog,
                'categories' => $categories,
            ]);
        }

        public function actionPost($id) {
            $page = 'blog';
            $id = Misc::decodeUrl($id);
            if ($id > 0) {
                $post = Blog::findOne($id);
                $blog = Blog::find()->where(['=', 'visibility', '1'])->andWhere(['=', 'category', $post['category']]);
                if (\Yii::$app->params['site-settings']['blog_count']['content'] > 0) {
                    $blog = $blog->limit(\Yii::$app->params['site-settings']['blog_count']['content']);
                }
                $blog = $blog->all();
                return $this->render('single', [
                    'post' => $post,
                    'blog' => $blog,
                    'page' => \Yii::$app->params['pages'][$page],
                ]);
            }
            return $this->redirect(\Yii::$app->request->baseUrl . '/blog/');
        }

    }
