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

    use common\models\Pages;
    use common\models\Settings;
    use yii\base\Component;

    class Helper extends Component {
        public function init() {
            $p = Pages::find()->all();
            $q = [];
            foreach ($p as $a) {
                $q[$a['name']] = $a;
            }
            \Yii::$app->params['pages'] = $q;


            $s = Settings::find()->all();
            $m = [];
            foreach ($s as $k => $v) {
                $m[$v['slug']] = $v;
            }

            \Yii::$app->params['site-settings'] = $m;
            parent::init();
        }
    }