<?php
/**
 * Created by PhpStorm.
 * Author: npbtrac@yahoo.com
 * Date time: 9/9/17 1:30 PM
 */

namespace frontend\controllers;

use yii;
use enpii\enpiiCms\libs\override\web\NpController as Controller;
use enpii\enpiiCms\libs\override\web\NpHttpException as HttpException;


/**
 * SiteController
 * For handling some basic actions
 * index, error, login, logout
 */
class SiteController extends Controller
{
	public function actionIndex()
	{
		return $this->render('index');
	}

	public function actionError()
	{
		if (($exception = Yii::$app->getErrorHandler()->exception) === null) {
			// action has been invoked not from error handler, but by direct route, so we display '404 Not Found'
			$exception = new HttpException(404, Yii::t(NP_TEXT_CATE, 'Page not found.'));
		}

		if ($exception instanceof HttpException) {
			$code = $exception->statusCode;
		} else {
			$code = $exception->getCode();
		}
		if ($exception instanceof HttpException) {
			$name = Yii::t(NP_TEXT_CATE, $exception->getName());
		} else {
			$name = Yii::t(NP_TEXT_CATE, 'Error');
		}
		if ($code) {
			$name .= " (#$code)";
		}

		if ($exception instanceof yii\base\UserException) {
			$message = $exception->getMessage();
		} else {
			$message = $this->defaultMessage ?: Yii::t(NP_TEXT_CATE, 'An internal server error occurred.');
		}

		if (Yii::$app->getRequest()->getIsAjax()) {
			return "$name: $message";
		} else {
			return $this->render('error', [
				'name' => $name,
				'message' => $message,
				'exception' => $exception,
			]);
		}
	}
}
