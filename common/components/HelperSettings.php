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

    use common\models\Settings;
    use yii\base\Component;

    class HelperSettings extends Component {

        public static function set($setting) {

            if ($setting['id'] <= 0) {

                $model = new Settings();
            }
            else {

                $model = Settings::findOne($setting['id']);
            }
            if ($model) {
                $model->is_editable = 1;
                $model->type = (isset($setting['type'])) ? $setting['type'] : $model->type;
                $model->slug = (isset($setting['slug'])) ? $setting['slug'] : $model->slug;;
                $model->caption = (isset($setting['caption'])) ? $setting['caption'] : $model->caption;
                $model->content = (isset($setting['content'])) ? $setting['content'] : $model->content;
                if ($model->type == 'json') {
                    if(isset($setting['content'])&& !empty($setting['content'])) {
                        $model->content = str_replace(' ', '', $setting['content']);
                    }
                }
                if ($model->save() == TRUE) {

                    return $model;
                }

            }

            return FALSE;
        }
    }