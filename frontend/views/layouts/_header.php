<?php
/**
 * Created by PhpStorm.
 * Author: npbtrac@yahoo.com
 * Date time: 9/21/17 5:25 PM
 */

use enpii\enpiiCms\libs\override\web\NpView as View;
use enpii\enpiiCms\libs\override\web\NpUrlManager as UrlManager;

/* @var View $this */
/* @var string $content */

$layoutSettings = !empty($layoutSettings) ? $layoutSettings : [];
?>

<!-- BEGIN HEADER -->
<div class="page-header">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner ">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<h1>
				<?php
				/* @var $urlManager UrlManager */
				$urlManager = Yii::$app->urlManager;
				?>
				<a href="<?= $urlManager->getBaseUrl(); ?>">
					<?= Yii::t(NP_TEXT_CATE, 'Main Logo') ?>
				</a>
			</h1>

		</div>
		<!-- END LOGO -->

	</div>
	<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->