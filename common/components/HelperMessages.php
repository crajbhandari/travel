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

            //       $a = json_decode($message);
            $msg = [];
            foreach ($data as $m) {
                $msg[$m['name']] = $m['value'];
            }
            $model = new Messages;
            $model->attributes = $msg;
            if (!$model->validate()) {
                return json_encode($model->getErrors());
            }
            if ($model->save() == TRUE) {

                $title = 'Message Received from ' . $msg['name'];

                $msgBody = '<ul style="text-align:left; list-style-type: none; padding:0; margin-0; width:100%">' .
                    '<li><strong>Name:</strong> ' . $msg['name'] . '</li>' .
                    '<li><strong>Subject:</strong> ' . $title . '</li>' .
                    '<li><strong>Email:</strong> ' . $msg['email'] . '</li>' .
                    '<li><strong>Phone:</strong> ' . $msg['phone'] . '</li>' .
                    '<li><strong>URL:</strong> ' . $msg['url'] . '</li>' .
                    '</ul>' .
                    '<h4>Message</h4>'.
                    '<p style="padding:30px 0; text-align: justify; text-justify: inter-word; font-family: lato; font-size: 13px;">' . $msg['message'] . '</p>';

                $msg = Email::template($title, $msgBody);
                if(Email::sendTo(Yii::$app->params['email']['system-email'], Yii::$app->params['system_name'], $title, $msg)){
                   if($msg['email']!=''){
                       $title = 'Thank You';
                       $msgbody = '';
                       $msg = Email::template($title, $msgBody);
                       Email::sendTo($msg['email'], Yii::$app->params['system_name'], $title, $msg);

                   }


                }
                return TRUE;
            }
            return FALSE;
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
