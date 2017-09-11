<?php

$params = yii\helpers\ArrayHelper::merge(
	require(APP_BASE_PATH . '/common/config/params-common.php'),
	require(APP_BASE_PATH . '/console/config/params-console.php')
);

$arrConfigCommon = require(APP_BASE_PATH . '/common/config/common.php');

return \yii\helpers\ArrayHelper::merge(
	$arrConfigCommon,
	[
		'id' => 'app-console',
		'name' => 'Console',
		// Assign base path of the frontend folder
		'basePath' => dirname(__DIR__),

		// Load components: log as bootstrap components
		'bootstrap' => ['log'],
		'controllerNamespace' => 'console\controllers',
		'components' => [
			'log' => [
				'traceLevel' => YII_DEBUG ? 10 : 0,
				'targets' => [
					[
						'class' => 'yii\log\FileTarget',
						'levels' => ['error', 'warning'],
					],
				],
			],
			'urlManager' => $arrConfigCommon['components']['urlManagerFrontend'],
		],
		'params' => $params,
	],
	// Put environment config file at the end for overriding all
	require('console-env.php')
);



