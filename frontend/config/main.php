<?php
    $params = array_merge(
        require __DIR__ . '/../../common/config/params.php',
        require __DIR__ . '/../../common/config/params-local.php',
        require __DIR__ . '/../../common/config/params-project.php',
        require __DIR__ . '/params.php',
        require __DIR__ . '/params-local.php'
    );
    use yii\web\Request;

    $baseUrl = str_replace('/frontend/web', '', (new Request)->getBaseUrl());

    return [
        'id'                  => 'app-frontend',
        'basePath'            => dirname(__DIR__),
        'bootstrap'           => ['log'],
        'controllerNamespace' => 'frontend\controllers',
        'components'          => [
            'request'      => [
                'csrfParam' => '_csrf-frontend',
                //                'baseUrl'   => $baseUrl,
                'class'     => 'common\components\Request',
                'web'       => '/frontend/web',
            ],
            'urlManager'   => [
                //                'baseUrl' => $baseUrl,
                'rules' => [
                    'blog/post/<id:[a-zA-Z0-9-]+>/' => 'blog/post',
                ],
            ],
            'user'         => [
                'identityClass'   => 'common\models\User',
                'enableAutoLogin' => FALSE,
                'identityCookie'  => ['name' => '_identity-frontend', 'httpOnly' => TRUE],
            ],
            'session'      => [
                // this is the name of the session cookie used for login on the frontend
                'name' => '_frontend',
            ],
            'log'          => [
                'traceLevel' => YII_DEBUG ? 3 : 0,
                'targets'    => [
                    [
                        'class'  => 'yii\log\FileTarget',
                        'levels' => ['error', 'warning'],
                    ],
                ],
            ],
            'errorHandler' => [
                'errorAction' => 'site/error',
            ],
            'assetManager' => [
                'bundles' => [
                    'yii\web\YiiAsset'                   => [
                        'js' => [],
                    ],
                    'yii\web\JqueryAsset'                => [
                        'js' => [],
                    ],
                    'yii\bootstrap\BootstrapPluginAsset' => [
                        'js' => [],
                    ],
                    'yii\bootstrap\BootstrapAsset'       => [
                        'css' => [],
                    ],

                ],
            ],

        ],
        'params'              => $params,
    ];
