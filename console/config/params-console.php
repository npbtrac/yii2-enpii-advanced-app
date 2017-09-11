<?php
// Contains params to pass to Yii::$app->params
// Params here are common, for all endpoints and all environments
return yii\helpers\ArrayHelper::merge([
	// Put params below this line

], require('params-console-env.php'));
