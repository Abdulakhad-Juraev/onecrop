<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <link rel="icon" type="image/png" href="<?=Url::to(['images/logo-icon.png'])?>">
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title>OneCrop.uz</title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
<!--
<?php
    NavBar::begin([
        'brandLabel' => 'Onecrop',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'About', 'url' => ['/site/about']],
        ['label' => 'Contact', 'url' => ['/site/contact']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>
    -->
<!-- MENU ARE -->
<!--<header class="site-header">-->
<!--    <div class="site-header-main rd-section-center">-->
<!--        <div class="logo"><a href="" class="site-logo">OneCrop</a></div>-->
<!--        <nav class="site-nav js-site-nav">-->
<!--            <ul id="menu-primary-menu-en" class="nav-list">-->
<!--                <li class="nav-item"><a href="" class="nav-link home">Bosh sahifa</a></li>-->
<!--                <li class="nav-item"><a href="" class="nav-link solution">Yechim</a></li>-->
<!--                <li class="nav-item"><a href="" class="nav-link monitoring">Monitoring</a></li>-->
<!--                <li class="nav-item"><a href="" class="nav-link contact">Kontakt</a></li>-->
<!--                <li class="nav-item"><a href="--><?//=Url::to(['/site/login'])?><!--" class="nav-link">Kirish</a></li>-->
<!--                <li class="nav-item"><a href="--><?//=Yii::$app->urlManager->createUrl('/site/login'); ?><!--" class="nav-link">Kirish</a></li>-->
<!--            </ul>-->
<!--            <div class="wrapper-nav-button"></div>-->
<!--            <ul class="flags">-->
<!--                <li class="main-flag en-item item lazy" style data-bg="url(images/uz.png)">-->
<!--                    <span>UZ</span>-->
<!--                    <ul class="flag-list">-->
<!--                        <li class="uz-item item select"><a class="lazy" href="" style-->
<!--                                                           data-bg="url(images/uz.png)"><span>UZ</span></a></li>-->
<!--                        <li class="en-item item "><a class="lazy" href="index_en.html" style data-bg="url(images/us.png)"><span>EN</span></a>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </nav>-->
<!--        <button class="btn-mob-menu"><span></span></button>-->
<!--    </div>-->
<!--</header>-->
<!-- // MENU ARE -->

        <?= $content ?>
<!--</div>-->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
