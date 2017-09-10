<?php
/**
 * Created by PhpStorm.
 * Author: npbtrac@yahoo.com
 * Date time: 4/17/17 1:38 PM
 */


return yii\helpers\ArrayHelper::merge(require('common-env.php'), [
	// Put params below this line
	'vendorPath' => VENDOR_PATH,
	'language' => 'en',
	'sourceLanguage' => 'en',
	'bootstrap' => ['enpiiCms'],
	'modules' => [
		'enpiiCms' => [
			'class' => 'enpii\enpiiCms\Module',
		],
	],
	'components' => [
		// URL Manager for backend
		'urlManagerBackend' => [
			'class' => 'enpii\enpiiCms\libs\override\web\NpUrlManager',
			// we don't need pretty url here
			'enablePrettyUrl' => true,
			'showScriptName' => false,
			'baseUrl' => APP_BASE_URL . "/admin",
			'languages' => ['en', 'vi'],
			'enableDefaultLanguageUrlCode' => false,
			'enableLanguageDetection' => false,
			'enableLanguagePersistence' => false,
			'rules' => [

			]
		],

		// URL Manager for frontend
		'urlManagerFrontend' => [
			'class' => 'enpii\enpiiCms\libs\override\web\NpUrlManager',
			// enable pretty URL here
			'enablePrettyUrl' => true,
			'showScriptName' => false,
			'baseUrl' => APP_BASE_URL . "",
			'languages' => ['en', 'vi'],
			'enableDefaultLanguageUrlCode' => false,
			'enableLanguageDetection' => false,
			'enableLanguagePersistence' => false,
			'rules' => [
				'/<locale:\w+>' => '',
			]
		],

		// URL Manager for webservice
		'urlManagerApi' => [
			'class' => 'enpii\enpiiCms\libs\override\web\NpUrlManager',
			// we don't need pretty url here
			'enablePrettyUrl' => true,
			'showScriptName' => false,
			'baseUrl' => APP_BASE_URL . "/ws",

			// only english in API
			'languages' => ['en'],
			'enableDefaultLanguageUrlCode' => false,
			'enableLanguageDetection' => false,
			'enableLanguagePersistence' => false,
			'rules' => [

			]
		],

		'assetManager' => [
			// Use a custom asset manager class
			'class' => 'enpii\enpiiCms\libs\override\web\NpAssetManager',
		],

		'i18n' => [
			'translations' => [
				'app*' => [
					'class' => 'common\libs\ClsPhpMessageSource',
					'basePath' => '@app/languages',
					'fileMap' => [
						'app' => 'app.php',
					],
				],
				'enpii*' => [
					// Set translation using .php file
					'class' => 'enpii\enpiiCms\libs\NpPhpMessageSource',
					'basePath' => '@enpii/enpiiCms/languages',
					'fileMap' => [
						'enpii' => 'enpii.php',
					],
				]
			]
		],

		'image' => [
			'class' => 'yii\image\ImageDriver',
			'driver' => 'GD',  //GD or Imagick
		],

		// Caching system
		'cache' => [
			'class' => 'yii\caching\FileCache',
		],

		// RBAC
		'authManager' => [
			'class' => 'enpii\enpiiCms\libs\NpAuthDbManager',
		],

		// Some format
		'formatter' => [
			'class' => 'yii\i18n\Formatter',
			'dateFormat' => 'php:Y-m-d',
			'datetimeFormat' => 'php:Y-m-d H:i:s',
			'timeFormat' => 'php:H:i:s',
			'timeZone' => 'America/Toronto'
		],

		'mailer' => [
			'class' => 'yii\swiftmailer\Mailer',
			'useFileTransport' => false,
			'viewPath' => '@common/mail',
			'transport' => [
				'class' => 'Swift_SmtpTransport',
				'host' => 'mail.smtp2go.com',
				'username' => 'npbtrac@yahoo.com',
				'password' => 'eNpii@123',
				'port' => '587'
			],
		],
	],
]);