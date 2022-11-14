<?php

/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <link rel="icon" type="image/png" href="<?= Url::to(['images/logo-icon.png']) ?>">
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title>OneCrop.uz</title>

    <?php $this->head() ?>
</head>
<body class="page-template page-template-templates page-template-page-redesign-agriculture page-template-templatespage-redesign-agriculture-php page page-id-44539 page-parent page-child parent-pageid-285 touch-none">
<?php $this->beginBody() ?>

    <!-- MENU ARE -->
                    <?=Nav::widget([]);?>
    <!-- // MENU ARE -->

    <?= $content ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
