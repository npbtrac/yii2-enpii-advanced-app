<?php
/**
 * Created by PhpStorm.
 * Author: npbtrac@yahoo.com
 * Date time: 9/8/17 5:22 PM
 */

// Contains params to pass to Yii::$app->params
// Params here should only for backend
return yii\helpers\ArrayHelper::merge([
	// Put params below this line

], require('params-backend-env.php'));