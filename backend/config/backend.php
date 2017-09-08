<?php
/**
 * Created by PhpStorm.
 * Author: npbtrac@yahoo.com
 * Date time: 4/17/17 3:03 PM
 */

$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-env.php'),
    require(__DIR__ . '/params-backend.php'),
    require(__DIR__ . '/params-backend-env.php')
);

$arrConfigCommon = require (APP_BASE_PATH.'/common/config/main.php');
$arrConfigCommonLocal = require (APP_BASE_PATH.'/common/config/main-local.php');

$arrConfigLocal = require(__DIR__.'/main-local.php');

$arrConfig = [
    'id' => 'sample-backend',
    'name' => 'Backend',
    // Assign base path of the frontend folder
    'basePath' => dirname(__DIR__),

    // Load components: log as bootstrap components
    'bootstrap' => ['log'],
    'controllerNamespace' => 'backend\controllers',
    'components' => [

        // Assign Frontend Url Manager to default Url Manager because this is Backend
        'urlManager' => $arrConfigCommon['components']['urlManagerBackend'],
        'urlManagerFrontend' => $arrConfigCommon['components']['urlManagerFrontend'],

        'view' => [
            // Use a custom view class
            'class'=> 'common\libs\ClsView',
        ],

        'user' => [
            'class' => 'enpii\enpiiCms\libs\NpWebUser',
            'identityClass' => 'enpii\enpiiCms\models\User',
            'enableAutoLogin' => true,
            'authTimeout' => 3600,
            'identityCookie' => [
                'name' => '_backendUser', // unique for backend
                'path'=>APP_BASE_URL.'/admin'  // correct path for the backend app.
            ]
        ],

        'session' => [
            // Use a custom session class
            'class'=> 'enpii\enpiiCms\libs\NpSession',
            'name' => '_backendSessionId', // unique for backend
            'savePath' => '@root/backend/runtime', // a temporary folder on backend
        ],


        'assetManager' => [
            // Use a custom asset manager class
            'class'=> 'enpii\enpiiCms\libs\NpAssetManager',
        ],

        'log' => [
            'traceLevel' => YII_DEBUG ? 10 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'enpiiCms/backend/site/error',
        ],
    ],
    'params' => $params,
];

$arrConfigFinal = yii\helpers\ArrayHelper::merge(
    $arrConfigCommon,
    $arrConfigCommonLocal,
    $arrConfig,
    $arrConfigLocal
);

return $arrConfigFinal;


