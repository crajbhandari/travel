<?php

    /*
     * To change this license header, choose License Headers in Project Properties.
     * To change this template file, choose Tools | Templates
     * and open the template in the editor.
     */


    namespace common\components;

    use common\models\Messages;
    use Yii;
    use yii\base\Component;


    class HelperMessages extends Component {
        public static function update($data) {
            $model = new \common\models\generated\Messages();
            $model->attributes = $data;
            if ($model->save()) {

                          return json_encode(True) ;
                }

            return json_encode(False) ;
        }

        public static function getMessages() {
            $messages = Query::queryAll("SELECT * FROM messages ORDER BY created_on DESC");
            return Misc::exists($messages, FALSE);
        }
        public static function getCount()
        {
            $count_unseen =Messages::find()->where(['=','is_new','1'])->count();
            $count_seen =Messages::find()->where(['=','is_new','0'])->count();
            Yii::$app->params['count_messages']['count_unseen'] = $count_unseen;
            return $count=[
                    'count_unseen' => $count_unseen,
                    'count_seen' => $count_seen,
                    //                    'count_all' => $count_all,
            ];
        }
        public static function getSingleMessage($id) {
            $message = Query::queryOne("SELECT * FROM messages as c WHERE c.id = $id");
            return Misc::exists($message, FALSE);
        }

        public static function getCertainMessages($field, $value) {
            $data = Query::queryAll('SELECT * FROM  `messages` WHERE  `' . $field . '` = ' . $value);
            return Misc::exists($data, FALSE);
        }

        public static function deleteMessage($id) {
            $model = Messages::findOne($id);
            if ($model->delete()) {
                return json_encode(TRUE);
            }
            return json_encode(FALSE);
        }

    }
