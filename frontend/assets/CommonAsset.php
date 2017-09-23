<?php
/**
 * Created by PhpStorm.
 * Author: npbtrac@yahoo.com
 * Date time: 9/21/17 4:08 PM
 */

namespace frontend\assets;

use enpii\enpiiCms\libs\override\web\NpAssetBundle as AssetBundle;

/**
 * Class CommonAsset
 * @package frontend\assets
 * Reference http://www.yiiframework.com/doc-2.0/guide-structure-assets.html
 * Load common css, js for that all layout use
 */
class CommonAsset extends AssetBundle
{
	public $basePath = '@webroot';
	public $baseUrl = '@web';
	public $css = [
	];

	public $js = [
	];
	public $depends = [
	];
}