<?php
/**
 * Created by PhpStorm.
 * Author: npbtrac@yahoo.com
 * Date time: 4/17/17 2:44 PM
 */

// Contains params to pass to Yii::$app->params
// Params here are common, for all endpoints and all environments
return yii\helpers\ArrayHelper::merge(require('params-common-env.php'), [
	// Put params below this line
]);