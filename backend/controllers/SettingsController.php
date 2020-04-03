<?php
    namespace backend\controllers;

    use common\components\HelperSettings;
    use common\components\Misc;
    use common\models\Settings;
    use Yii;
    use yii\filters\AccessControl;
    use yii\filters\VerbFilter;
    use yii\web\Controller;


    /**
     * Settings controller
     */
    class SettingsController extends Controller {
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
        public function actionIndex($id = '') {
            $id = Misc::decodeUrl($id);
            return $this->render('index', [
                'settings'  => Settings::find()->all(),
                'editable' => ($id > 0) ? Settings::findOne($id) : FALSE,
            ]);
        }


        public function actionUpdate() {

            if (isset($_POST['setting'])) {
                $updated = HelperSettings::set($_POST['setting']);
                if ($updated == FALSE) {
                    Misc::setFlash('error', 'Setting Not Updated.');
                    // return $this->redirect(Yii::$app->request->baseUrl . '/settings/edit/'. Misc::encodeUrl($updated['id']));
                }else{
                    Misc::setFlash('success', 'Setting Updated.');
                }
            }

            return $this->redirect(Yii::$app->request->baseUrl . '/settings/');
        }
    }
