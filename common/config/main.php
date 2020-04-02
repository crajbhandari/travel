<?php
    return [
        'name'     => 'Gateway Scandinavia',
        'timeZone' => 'Europe/Berlin',
        'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',

        'aliases'    => [
            '@bower' => '@vendor/bower-asset',
            '@npm'   => '@vendor/npm-asset',
        ],
        'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
        'components' => [
            'urlManager' => [
                'class'           => 'yii\web\UrlManager',

                // Disable index.php
                'showScriptName'  => FALSE,
                // Disable r= routes
                'enablePrettyUrl' => TRUE,
                'rules'           => array(
                    //url pattern
                    '<controller:\w+>/<id:\d+>'              => '<controller>/view',
                    '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                    '<controller:\w+>/<action:\w+>'          => '<controller>/<action>',
                ),
            ],
            'helper'     => [
                'class' => 'common\components\Helper',
            ],

            'cache' => [
                'class' => 'yii\caching\FileCache',
            ],

            'errorHandler' => [
                'errorAction' => 'site/error',
            ],
            'request'      => array(
                'enableCsrfValidation' => TRUE,
            ),
            'session'      => [
                'timeout' => 60 * 60,
                'class'   => 'yii\web\DbSession',
            ],


        ],
        'bootstrap'  => ['common\components\Helper'],
        'modules'    => [],
    ];
