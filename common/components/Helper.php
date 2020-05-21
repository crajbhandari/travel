<?php

    /*
     * To change this license header, choose License Headers in Project Properties.
     * To change this template file, choose Tools | Templates
     * and open the template in the editor.
     */

    /**
     * Description of settings
     * @author Chetan Rajbhandari
     */

    namespace common\components;

    use common\models\Amenities;
    use common\models\generated\Package;
    use common\models\generated\PackageCategory;
    use common\models\Messages;
    use common\models\Pages;
    use common\models\Settings;
    use common\models\User;
    use common\models\VerificationActions;
    use Yii;
    use yii\base\Component;

    class Helper extends Component {
        public function init() {
            self::getPages();
            self::getSettings();
            self::getBlogCount();
            self::getMessageCount();
            self::getMessages();
            self::getPackages();
            parent::init();

        }
        public static function getPackages() {
            $p = PackageCategory::find()
                         ->asArray()
                         ->all();

            \Yii::$app->params['packageCategory'] = $p;
        }
        public static function getSettings() {
            $s = Settings::find()->asArray()->all();
            $m = [];
            foreach ($s as $k => $v) {
                $m[$v['slug']] = $v;
            }
            \Yii::$app->params['site-settings'] = $m;
        }
        public static function getPages() {
            $p = Pages::find()->all();
            $q = [];
            foreach ($p as $a) {
                $q[$a['name']] = $a;
            }
            \Yii::$app->params['pages'] = $q;
        }
        public static function getMessageCount() {
            $count = HelperMessages::getCount();
            \Yii::$app->params['count_messages'] = $count;
        }
        public static function getBlogCount() {
            $count = HelperBlog::getCount();
            \Yii::$app->params['count_blog'] = $count;
        }
        public static function getMessages() {
            $s = Messages::find()
                         ->where('is_new = 1')
                         ->orderBy(['id' => SORT_DESC])
                         ->asArray()
                         ->all();

            \Yii::$app->params['messages'] = $s;
        }
        public static function checkAuthority($controller, $action = '') {
            if (!Yii::$app->user->isGuest) {

                $permissions = Yii::$app->params['permissions'];
                $interface = Yii::$app->params['running-interface'];
                $controller = ucwords($controller) . 'Controller';
                $action = strtolower($action);
                if (isset($permissions[$interface][$controller][$action]['status']) && $permissions[$interface][$controller][$action]['status'] == 1) {
                    return true;
                }
            }

            return Misc::throwException(403);
        }

        public static function setAmenity($table, $data) {
            if ($data['id'] == 0) {
                $model = new VerificationActions();
                $model->table_name = $table;
                $model->comment = ucwords($table);
                $model->requested_by = Yii::$app->user->identity->id;
                if ($model->save()) {
                    $model2 = new Amenities();
                    $model2->name = $data['name'];
                    $model2->display_name = ucwords($data['name']);
                    $model2->icon = $data['icon'];
                    $model2->verification_id = $model->id;
                    $model2->created_by = Yii::$app->user->identity->id;
                    if ($model2->save()) {
                        $model->table_id = $model2->id;
                        if ($model->save()) {
                            return $var = [
                                    'verification_status' => 0,
                                    'response'            => true
                            ];
                        }
                    }
                }
                else {
                    return $var = [
                            'verification_status' => 0,
                            'response'            => false
                    ];
                }
            }
            else {
                $model = Amenities::findOne($data['id']);
                $model->name = $data['name'];
                $model->display_name = ucwords($data['name']);
                $model->icon = $data['icon'];
                $model->updated_by = Yii::$app->user->identity->id;
                $model->updated_on = date('Y-m-d H:i:s');
                if ($model->save()) {
                    return $var = [
                            'verification_status' => $model->is_verified,
                            'response'            => true
                    ];
                }
                else {
                    return $var = [
                            'verification_status' => 0,
                            'response'            => false
                    ];
                }

            }
        }


        public static function setUser($post) {
            $model = User::findOne($post['id']);
            $model->name = $post['name'];
            $model->username= $post['username'];
            $model->email = $post['email'];
            if (!($model->save() == FALSE)) {
                return $model;
            }
            return FALSE;
        }
    }