<?php


$config = [
        'components' => [
                'db' => [
                        'class'               => 'yii\db\Connection',
                        'dsn'                 => 'mysql:host=localhost;dbname=travel',
                        'username'            => 'root',
                        'password'            => '',
                        'charset'             => 'utf8',
                        'enableSchemaCache'   => true,

                        // Duration of schema cache.
                        'schemaCacheDuration' => 3600,

                        // Name of the cache component used to store schema information
                        'schemaCache'         => 'cache',
                ],

        ]
];
if (!YII_ENV_TEST) {
    // configuration adjustments for 'dev' environment

    //   Uncomment for Yii Debug Toolbar
    /*    $config['bootstrap'][] = 'debug';
        $config['modules']['debug'] = [
            'class' => 'yii\debug\Module',
        ];*/

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
            'class' => 'yii\gii\Module',
    ];
}

return $config;


