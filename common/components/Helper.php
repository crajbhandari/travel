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

    use common\models\Messages;
    use common\models\Pages;
    use common\models\Settings;
    use yii\base\Component;

    class Helper extends Component {
        public function init() {
            self::getPages();
            self::getSettings();
            self::getBlogCount();
            self::getMessageCount();
            self::getMessages();
            parent::init();
        }
        public static function getSettings() {
            $s = Settings::find()->all();
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
    }