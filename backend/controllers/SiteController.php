<?php
/**
 * Created by PhpStorm.
 * Author: npbtrac@yahoo.com
 * Date time: 9/9/17 1:30 PM
 */

namespace backend\controllers;

use enpii\enpiiCms\libs\override\web\NpController;
use yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;


/**
 * SiteController
 * For handling some basic actions
 * index, error, login, logout
 */
class SiteController extends NpController
{
	public function actionIndex()
	{
		// Todo: update action later
		Yii::$app->end("Index here");
		if (!Yii::$app->user->isGuest) {
			return $this->redirect(Yii::$app->urlManager->createUrl('user/dashboard'));
		} else {
			return $this->redirect(Yii::$app->urlManager->createUrl('site/login'));
		}
	}

	public function actionLogin()
	{
		$msLoginForm = new LoginForm();
		// Specify this a backend login
		$msLoginForm->loginType = LoginForm::_ACCESS_BACKEND;
		if ($msLoginForm->load(Yii::$app->request->post()) && $msLoginForm->login($msLoginForm->loginType)) {
			$defaultUrl = Yii::$app->urlManager->createUrl('user/dashboard');
			return $this->goBack($defaultUrl);
		} else {

			// Show guides if no messages in queue
			if (!Yii::$app->session->getAllFlashes()) {
				Yii::$app->session->addFlash('info', Yii::t(_NP_TEXT_CATE, 'Enter the correct info to login.'));
			}

			$this->layout = '@enpii/enpiiCms/views/layouts/backend/login';

			// Reset password to blank when returning from submit
			$msLoginForm->password = '';
			return $this->render('@enpii/enpiiCms/views/backend/site/login', [
				'msLoginForm' => $msLoginForm,
			]);
		}
	}

	public function actionLogout()
	{
		$url = Yii::$app->getUrlManager()->createUrl('/enpiiCms/backend/site/logout');
		return $this->redirect($url);
	}
	public function actionError()
	{
		if (($exception = Yii::$app->getErrorHandler()->exception) === null) {
			// action has been invoked not from error handler, but by direct route, so we display '404 Not Found'
			$exception = new NpHttpException(404, Yii::t(_NP_TEXT_CATE, 'Page not found.'));
		}

		if ($exception instanceof yii\web\HttpException) {
			$code = $exception->statusCode;
		} else {
			$code = $exception->getCode();
		}
		if ($exception instanceof yii\base\Exception) {
			$name = Yii::t(_NP_TEXT_CATE, $exception->getName());
		} else {
			$name = Yii::t(_NP_TEXT_CATE, 'Error');
		}
		if ($code) {
			$name .= " (#$code)";
		}

		if ($exception instanceof yii\base\UserException) {
			$message = $exception->getMessage();
		} else {
			$message = $this->defaultMessage ?: Yii::t(_NP_TEXT_CATE, 'An internal server error occurred.');
		}

		if (Yii::$app->getRequest()->getIsAjax()) {
			return "$name: $message";
		} else {
			if (Yii::$app->user->isGuest) {
				$this->layout = 'simple';
			} else {
				$this->layout = 'main';
			}

			return $this->render('error', [
				'name' => $name,
				'message' => $message,
				'exception' => $exception,
			]);
		}
	}
}
