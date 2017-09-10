<?php
/**
 * Created by PhpStorm.
 * Author: npbtrac@yahoo.com
 * Date time: 4/17/17 3:08 PM
 */

// This file must be copied and renamed to backend-env.php
// This file should not be in repository because it differs from enviroment to environment
// Settings for backend only on this environment

$config = [

    'components' => [
        // Web request should be here because we want the cookie validation key separately
        'request' => [
            'class' => 'yii\web\Request',
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'lA_Zj09v7R-189AhjEtSgM1lpom5X1jT',
            'baseUrl' => APP_BASE_URL.'/admin',

        ],
    ],
];

// Enable these modules only on dev environment and not testing
if (!YII_ENV_TEST && YII_ENV == 'dev') {

    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    // giix (gii extra) module for code renerator
    $config['bootstrap'][] = 'giix';
    $config['modules']['giix'] = [
        'class' => 'yii\gii\Module',
        'generators' => [
            'model' => [
                'class' => 'enpii\enpiiCms\components\giix\model\Generator',
                'baseClass' => 'enpii\enpiiCms\libs\NpActiveRecord',
            ],
//            'controller' => [
//                'class' => 'enpii\enpiiCms\components\gii\controller\Generator',
//                'templates' => ['custom-controller' => '@root/modules/enpiiCms/components/gii/controller/default']
//            ],
            'crud' => [
                'class' => 'enpii\enpiiCms\components\giix\crud\Generator',
                'templates' => ['custom-crud' => '@enpii/enpiiCms/components/giix/crud/default']
            ]

        ]
    ];
}

return $config;