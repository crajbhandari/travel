<?php
    namespace backend\controllers;

    use common\components\HelperBlog;
    use common\components\HelperFaq;
    use common\components\HelperLanguage;
    use common\components\Misc;
    use common\models\BlogTranslation;
    use common\models\Faq;
    use common\models\FaqTranslation;
    use common\models\Language;
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
        public function actionIndex() {
            $faq =FaqTranslation::find()->orderBy(['id' => SORT_DESC])->asArray()->with('info')->all();
            $page = 'Faq';
            //        $blog = Blog::find()->orderBy(['id' => SORT_DESC])->with('translation')->asArray()->all();
            $language = Language::find()->asArray()->all();
            //       $englishBlog = HelperBlog::getEnglishBlog();
            return $this->render('index', [
                    'language' =>$language,
                    'faq' => $faq,
                    'page' => Yii::$app->params['pages'][$page],
            ]);
        }

        public function actionPost($id = '') {
            $post = [];
            $post2 = [];
            $ln_code ='';
            if ($id != '') {
                $id = Misc::decrypt($id);
                $explode = explode('-',$id);
                $ln_code=$explode[0];
                $id=$explode[1];
                $post = HelperFaq::getSingleFaqTranslation($id,$ln_code);
                $post2 = HelperFaq::getSingleFaq($id);
            }
            return $this->render('form', [
                    'editable' => $post2,
                    'editable2' =>$post,
                    'all_language' => HelperLanguage::getAllLanguage(),
                    'language' =>$ln_code
            ]);
        }
        public function actionUpdate() {
            $image = (isset($_FILES['image'])) ? $_FILES['image'] : [];
            if (isset($_POST['post'])) {
                $updated = HelperFaq::set($_POST['post'], $image);
                if ($updated != false) {
                    return $this->redirect(Yii::$app->request->baseUrl . '/faq/post/' . Misc::encrypt($updated['language_code'].'-'.$updated['faq_id']));
                }
            }
            return $this->redirect(Yii::$app->request->baseUrl . '/faq/');
        }
    }
