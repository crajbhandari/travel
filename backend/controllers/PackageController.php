<?php
    namespace backend\controllers;

    use common\components\HelperPackage;
    use common\components\Misc;
    use common\models\Package;
    use Yii;
    use yii\filters\AccessControl;
    use yii\filters\VerbFilter;
    use yii\web\Controller;


    /**
     * Clients controller
     */
    class PackageController extends Controller {
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
            $page = 'package';
            $package = Package::find()->orderBy(['id' => SORT_DESC])->all();
            return $this->render('index', [
                'package' => $package,
            ]);
        }

        public function actionPost($id = '') {
            $post = [];
            if ($id != '') {
                $id = Misc::decodeUrl($id);
                $post = Package::findOne($id);
            }
            return $this->render('form', [
                'editable' => $post,
            ]);
        }

        public function actionUpdate() {
            $image = (isset($_FILES['image'])) ? $_FILES['image'] : [];
            $co = [];
            foreach ($image as $k => $a) {
                foreach ($a as $m => $l) {
                    $co[$m][$k] = $l;
                }

            }
            echo '<pre>';
            print_r($co);
            echo '</pre>';
            die;
            if (isset($_POST['post'])) {
                $updated = HelperPackage::set($_POST['post']);
                if ($updated != FALSE) {
                    return $this->redirect(Yii::$app->request->baseUrl . '/package/post/' . Misc::encodeUrl($updated['id']));
                }
            }
            return $this->redirect(Yii::$app->request->baseUrl . '/package/');
        }


    }