<?php
    namespace backend\controllers;

    use common\components\HelperTeam;
    use common\components\Misc;
    use common\models\Team;
    use Yii;
    use yii\filters\AccessControl;
    use yii\filters\VerbFilter;
    use yii\web\Controller;


    class TeamController extends Controller {
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

            $team = Team::find()->all();
            $editable = FALSE;
            // echo '<pre>';
            // print_r($team);die;
            foreach ($team as $k => $member) {

                if ($member['social_media'] != '') {
                    $team[$k]['social_media'] = json_decode($member['social_media']);
                }

                if ($member['id'] == $id) {
                    $editable = $team[$k];
                }
            }

            return $this->render('index', [
                'team'     => $team,
                'editable' => $editable,
            ]);
        }

        public function actionUpdate() {
            $image = (isset($_FILES['image'])) ? $_FILES['image'] : [];
            if (isset($_POST['team'])) {
                $updated = HelperTeam::set($_POST['team'], $image);
                if ($updated != FALSE) {
                    Misc::setFlash('success', 'Member Updated.');
                    //return $this->redirect(Yii::$app->request->baseUrl . '/team/edit/' . Misc::encodeUrl($updated['id']));
                }
            }
            return $this->redirect(Yii::$app->request->baseUrl . '/team/');
        }
    }
