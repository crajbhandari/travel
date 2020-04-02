<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Email
 *
 * @author Chetan Rajbhandari
 */

namespace common\components;

use common\components\HelperContact as HContact;
use common\components\HelperWebsettings as WSettings;
use Yii;
use yii\base\Component;

class Email extends Component {
    public static function sendTo($email, $name, $subject, $msg) {
        $path = Yii::getAlias("@vendor/phpmailer/JPhpMailer.php");
        require_once($path);

        if (!empty(Yii::$app->params['email'])) {
            $mail = new \JPhpMailer();
            $mail->Host = Yii::$app->params['email']['Host'];
            $mail->Port = Yii::$app->params['email']['Port'];
            $mail->SMTPSecure = Yii::$app->params['email']['SMTPSecure'];
            $mail->SMTPAuth = Yii::$app->params['email']['SMTPAuth'];
            $mail->SMTPKeepAlive = Yii::$app->params['email']['SMTPKeepAlive'];
            $mail->SMTPDebug = Yii::$app->params['email']['SMTPDebug'];
            $mail->Mailer = Yii::$app->params['email']['Mailer'];
            $mail->CharSet = Yii::$app->params['email']['CharSet'];
            $mail->ContentType = Yii::$app->params['email']['ContentType'];
            $mail->IsHTML(true);

            $mail->From = Yii::$app->params['email']['From'];
            $mail->FromName = Yii::$app->params['email']['FromName'];
            $mail->Username = Yii::$app->params['email']['Username'];
            $mail->Password = Yii::$app->params['email']['Password'];
            $mail->AltBody = Yii::$app->params['email']['AltBody'];

            $mail->Subject = $subject;
            $mail->MsgHTML($msg . Yii::$app->params['email']['Signature']);
            $mail->AddAddress($email, $name);

            if ($mail->send()) {
                return true;
            }
        }
        return false; //$mail->ErrorInfo;
    }

    public static function sendFrom($email, $name, $subject, $msg) {
        $path = Yii::getAlias("@vendor/phpmailer/JPhpMailer.php");
        require_once($path);

        if (!empty(Yii::$app->params['email'])) {
            $mail = new \JPhpMailer();
            $mail->Host = Yii::$app->params['email']['Host'];
            $mail->Port = Yii::$app->params['email']['Port'];
            $mail->SMTPSecure = Yii::$app->params['email']['SMTPSecure'];
            $mail->SMTPAuth = Yii::$app->params['email']['SMTPAuth'];
            $mail->SMTPKeepAlive = Yii::$app->params['email']['SMTPKeepAlive'];
            $mail->SMTPDebug = Yii::$app->params['email']['SMTPDebug'];
            $mail->Mailer = Yii::$app->params['email']['Mailer'];
            $mail->CharSet = Yii::$app->params['email']['CharSet'];
            $mail->ContentType = Yii::$app->params['email']['ContentType'];
            $mail->IsHTML(true);

            $mail->From = $email;
            $mail->FromName = $name;
            $mail->Username = Yii::$app->params['email']['Username'];
            $mail->Password = Yii::$app->params['email']['Password'];
            $mail->AltBody = 'To view the message, please use an HTML compatible email viewer!!';

            $mail->Subject = $subject;
            $mail->MsgHTML($msg);
            $mail->AddAddress(Yii::$app->params['email']['from-email'], Yii::$app->params['email']['from-email-name']);

            if ($mail->send()) {
                return true;
            }
        }
        return false; //$mail->ErrorInfo;
    }

    public static function template($title, $msgbody) {
        return
                '<link href="http://fonts.googleapis.com/css?family=Lato:400,600" rel="stylesheet" type="text/css">' .
                '<table style="width:100%; border:none; font: 400 14px/1.6em Lato, sans-serif;"  border="0" cellpadding="0" cellspacing="0">' .
                '<tbody>' .
                '<tr>' .
                '<td style="padding:30px; background:#2ecc71; color:#ffffff; font-size:16px; font-weight:600;">' .

                '<div style="float:right; display:inline-block; margin-top:20px; font-size:16px; font-family: lato; font-weight:600;">' . $title . '</div>' .
                '</td>' .
                '</tr>' .
                '<tr>' .
                '<td style="text-align:center; padding:40px 30px; line-height:28px; color:#606366; font-size:13px; font-weight:400; font-family: lato; ">' .
                $msgbody .
                '</td>' .
                '</tr>' .
                '</tbody>' .
                '</table>';
    }
}