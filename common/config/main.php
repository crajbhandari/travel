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
                    'blog/post/<id:[a-zA-Z0-9-]+>/'      => 'blog/post/',
                    'blog/post2/<id:[a-zA-Z0-9-]+>/'      => 'blog/post2/',
                    'faq/post/<id:[a-zA-Z0-9-]+>/'      => 'faq/post/',
                    'faq/post2/<id:[a-zA-Z0-9-]+>/'      => 'faq/post2/',
                    'slider/banner/<id:[a-zA-Z0-9-]+>/'      => 'slider/banner/',
                    'package/detail/<id:[a-zA-Z0-9-]+>/'      => 'package/detail/',
                    'package/index/<id:[a-zA-Z0-9-]+>/'      => 'package/index/',
                ),
            ],
            'helper'     => [
                'class' => 'common\components\Helper',
            ],

            'cache' => [
                'class' => 'yii\caching\FileCache',
            ],

            'session'      => [
                'timeout' => 60 * 60,
                'class'   => 'yii\web\DbSession',
            ],


        ],
        'bootstrap'  => ['common\components\Helper'],
        'modules'    => [],
    ];
