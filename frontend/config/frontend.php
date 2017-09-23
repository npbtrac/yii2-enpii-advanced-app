<?php
/**
 * Created by PhpStorm.
 * Author: npbtrac@yahoo.com
 * Date time: 9/8/17 5:01 PM
 */

$params = yii\helpers\ArrayHelper::merge(
	require(APP_BASE_PATH . '/common/config/params-common.php'),
	require(APP_BASE_PATH . '/backend/config/params-backend.php')
);

$arrConfigCommon = require (APP_BASE_PATH.'/common/config/common.php');
return yii\helpers\ArrayHelper::merge(
	$arrConfigCommon,
	[
		'id' => 'sample-frontend',
		'name' => 'Frontend',
		// Assign base path of the frontend folder
		'basePath' => dirname(__DIR__),

		// Load components: log as bootstrap components
		'bootstrap' => ['log'],
		'controllerNamespace' => 'frontend\controllers',
		'components' => [

			// Assign Frontend Url Manager to default Url Manager because this is Backend
			'urlManager' => $arrConfigCommon['components']['urlManagerFrontend'],

			'view' => [
				// Use a custom view class
				'class'=> 'enpii\enpiiCms\libs\override\web\NpView',
			],

//			'user' => [
//				'class' => 'enpii\enpiiCms\libs\NpWebUser',
//				'identityClass' => 'enpii\enpiiCms\models\User',
//				'enableAutoLogin' => true,
//				'authTimeout' => 3600,
//				'identityCookie' => [
//					'name' => '_backendUser', // unique for backend
//					'path'=>APP_BASE_URL.'/admin'  // correct path for the backend app.
//				]
//			],
//
//			'session' => [
//				// Use a custom session class
//				'class'=> 'enpii\enpiiCms\libs\NpSession',
//				'name' => '_backendSessionId', // unique for backend
//				'savePath' => '@root/backend/runtime', // a temporary folder on backend
//			],


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
				'errorAction' => 'site/error',
			],
		],
		'params' => $params,
	],
	// Put environment config file at the end for overriding all
	require('frontend-env.php')
);


