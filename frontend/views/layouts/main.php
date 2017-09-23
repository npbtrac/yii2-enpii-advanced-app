<?php
/**
 * Created by PhpStorm.
 * Author: npbtrac@yahoo.com
 * Date time: 9/21/17 2:59 PM
 */


use yii\helpers\Html;
use enpii\enpiiCms\libs\override\web\NpView as View;

\enpii\enpiiCms\assets\fontawesome\FontAwesomeAsset::register($this);
\frontend\assets\BootstrapAsset::register($this);
\frontend\assets\CommonAsset::register($this);
\frontend\assets\MainAsset::register($this);

/* @var View $this */
/* @var string $content */

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>

    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?= Html::csrfMetaTags() ?>
    <title><?= $this->title ?></title>
    <meta name="description"
          content="<?= $this->description ?>"/>

    <meta name="keywords"
          content="<?= $this->keywords ?>"/>

	<?php $this->head() ?>
</head>
<body class="<?= $this->getBodyClass() ?> page-header-fixed">
<div id="main-container" class="page-body-wrapper">
    <div class="page-body-inner">
		<?php $this->beginBody() ?>

		<?= \enpii\enpiiCms\libs\override\widgets\NpBootstrapAlertWidget::widget() ?>

		<?= $this->render('_header', ['layoutSettings' => []]) ?>
        <div id="content" class="page-content">
			<?= $content ?>
        </div>
		<?= $this->render('_footer') ?>
    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
