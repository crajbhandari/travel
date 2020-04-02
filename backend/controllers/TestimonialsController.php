<?php
    namespace backend\controllers;

    use common\components\HelperTestimonails;
    use common\components\Misc;
    use common\models\Testimonials;
    use Yii;
    use yii\filters\AccessControl;
    use yii\filters\VerbFilter;
    use yii\web\Controller;


    class TestimonialsController extends Controller {
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
                'testimonials' => Testimonials::find()->all(),
                'editable'     => ($id > 0) ? Testimonials::findOne($id) : FALSE,
            ]);
        }


        public function actionUpdate() {
            $image = (isset($_FILES['image'])) ? $_FILES['image'] : [];
            if (isset($_POST['testimonial'])) {
                $updated = HelperTestimonails::set($_POST['testimonial'], $image);
                if ($updated != FALSE) {
                    Misc::setFlash('success', 'Testimonial Updated.');
                    //   return $this->redirect(Yii::$app->request->baseUrl . '/testimonials/edit/'. Misc::encodeUrl($updated['id']));
                }
            }

            return $this->redirect(Yii::$app->request->baseUrl . '/testimonials/');
        }
    }
