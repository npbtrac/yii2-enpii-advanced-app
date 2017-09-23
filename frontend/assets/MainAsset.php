<?php
/**
 * Created by PhpStorm.
 * Author: npbtrac@yahoo.com
 * Date time: 9/21/17 4:22 PM
 */

namespace frontend\assets;

use enpii\enpiiCms\libs\override\web\NpAssetBundle as AssetBundle;

/**
 * Class CommonAsset
 * @package frontend\assets
 * Reference http://www.yiiframework.com/doc-2.0/guide-structure-assets.html
 * Client resources for layout `main`
 */
class MainAsset extends AssetBundle
{
	public $basePath = '@webroot';
	public $baseUrl = '@web';
	public $css = [
	];

	public $js = [
	];
	public $depends = [
		// Need YiiAsset and BootstrapAsset to be loaded first
		'yii\web\YiiAsset',
	];
}