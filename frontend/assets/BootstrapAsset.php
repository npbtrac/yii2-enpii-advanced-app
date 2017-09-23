<?php
/**
 * Created by PhpStorm.
 * Author: npbtrac@yahoo.com
 * Date time: 9/21/17 4:36 PM
 */

namespace frontend\assets;

use enpii\enpiiCms\libs\override\web\NpAssetBundle as AssetBundle;

/**
 * Class BootstrapPluginAsset
 * @package frontend\assets
 * Handling resources for Bootstrap 3
 */
class BootstrapAsset extends AssetBundle
{
	public $sourcePath = '@bower/bootstrap/dist';
	public $css = [
	];

	public $js = [
		'js/bootstrap.js',
	];
	public $depends = [
		'yii\web\JqueryAsset',
		'yii\bootstrap\BootstrapAsset',
	];
}