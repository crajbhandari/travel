<?php
$params = array_merge(
        require __DIR__ . '/../../common/config/params.php',
        require __DIR__ . '/../../common/config/params-local.php',
        require __DIR__ . '/../../common/config/params-project.php',
        require __DIR__ . '/params.php',
        require __DIR__ . '/params-local.php'
);

$urlStr = "/applet";
// $baseUrl = str_replace('/backend/web', '', (new Request)->getBaseUrl()) ;
// $baseUrl = (new Request)->getBaseUrl();

return [
        'id'                  => 'app-backend',
        'basePath'            => dirname(__DIR__),
        'controllerNamespace' => 'backend\controllers',
        'bootstrap'           => ['log'],
        'modules'             => [
                'grapesjs' => [
                        'class'             => \thecodeholic\yii2grapesjs\Module::class,
                        // custom placeholder variables which will be added into richtext
                        // default is empty array
                        'grapesJsVariables' => []
                ],
        ],
        'components'          => [
                'request'    => [
                        'enableCsrfValidation' => true,
                        'csrfParam'            => '_csrf-backend',
                        'class'                => 'common\components\Request',
                        'web'                  => '/backend/web',
                        'adminUrl'             => $urlStr,
                        //  'baseUrl'   => $baseUrl,
                ],
                'urlManager' => [
                    //     'baseUrl' => $baseUrl,
                    'rules' => [
                            'content/page/<page:[a-zA-Z0-9-]+>/'             => 'content/page',
                            'content/fetch-categories/<type:[a-zA-Z0-9-]+>/' => 'content/fetch-categories',
                            'settings/edit/<id:[a-zA-Z0-9-]+>/'              => 'settings/',
                            'clients/edit/<id:[a-zA-Z0-9-]+>/'               => 'clients/',
                            'users/edit/<id:[a-zA-Z0-9-]+>/'                 => 'users/edit/',
                            'blog/view-comment/<id:[a-zA-Z0-9-]+>/'          => 'blog/view-comment/',
                            'testimonials/edit/<id:[a-zA-Z0-9-]+>/'          => 'testimonials/',
                            'team/edit/<id:[a-zA-Z0-9-]+>/'                  => 'team/',
                            'package/category/<id:[a-zA-Z0-9-]+>/'           => 'package/category/',
                            'amenities/edit/<id:[a-zA-Z0-9-]+>/'             => 'amenities/',
                            'slider/post/<id:[a-zA-Z0-9-]+>/'                => 'slider/post',
                            'faq/edit/<id:[a-zA-Z0-9-]+>/'                   => 'faq/',
                            'package/category-edit/<id:[a-zA-Z0-9-]+>/'      => 'package/category',
                            'package/edit-city/<id:[a-zA-Z0-9-]+>/'          => 'package/cities',
                            'package/city-post/<id:[a-zA-Z0-9-]+>/'          => 'package/city-post',
                            'package/post/<id:[a-zA-Z0-9-]+>/'               => 'package/post',
                            'services/edit/<id:[a-zA-Z0-9-]+>/'              => 'services/',
                            [
                                    'pattern'      => 'sections/pages/<page:[a-zA-Z0-9-]+>',
                                    'route'        => 'sections/pages/',
                                    'encodeParams' => false,
                            ],
                            [
                                    'pattern'      => 'sections/section/<id:[a-zA-Z0-9-]+>',
                                    'route'        => 'sections/section',
                                    'encodeParams' => false,
                            ],
                            [
                                    'pattern'      => 'blog/post/<id:[a-zA-Z0-9-]+>',
                                    'route'        => 'blog/post',
                                    'encodeParams' => false,
                            ],


                            'user/update-administrator/<username:[a-zA-Z0-9-]+>/' => 'user/update-administrator',
                            'user/view-administrator/<username:[a-zA-Z0-9-]+>/'   => 'user/view-administrator',
                            'user/update-operator/<username:[a-zA-Z0-9-]+>/'      => 'user/update-operator',
                            'user/view-operator/<username:[a-zA-Z0-9-]+>/'        => 'user/view-operator',
                            'user/update-client/<username:[a-zA-Z0-9-]+>/'        => 'user/update-client',
                            'user/view-client/<username:[a-zA-Z0-9-]+>/'          => 'user/view-client',
                    ],
                ],
                'user'       => [
                        'identityClass'   => 'common\models\User',
                        'enableAutoLogin' => false,
                        'identityCookie'  => ['name' => '_identity-backend', 'httpOnly' => true],
                ],
                'session'    => [
                    // this is the name of the session cookie used for login on the backend
                    'name' => '_backend',
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
