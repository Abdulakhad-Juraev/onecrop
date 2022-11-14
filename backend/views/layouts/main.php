<?php

/* @var $this \yii\web\View */

/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use yii\helpers\Url;
use backend\assets\OneAsset;
OneAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title>Onecrop.uz</title>
    <?php $this->head() ?>
    <style>
        .navbar-nav.navbar-right.nav li a{
            color: #fff;
        }
        .navbar-nav.navbar-right.nav li a:hover{
            background: none;
            color: #0a73bb;
        }
        .navbar-nav.navbar-right.nav .nav-item .btn.logout{
            color: #fff;
        }
        .navbar-nav.navbar-right.nav .nav-item .btn.logout:hover{
            color: #0a73bb;
        }
    </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<?php $this->beginBody() ?>

<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="<?=Url::to(['/'])?>" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <?
            $menuItems = [
                ['label' => 'Bosh sahifa', 'url' => ['../../../index']],
            ];
            if (Yii::$app->user->isGuest) {
                $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
            } else {
                $menuItems[] = '<li class="nav-item">'
                    . Html::beginForm(['/site/logout'], 'post')
                    . Html::submitButton(
                        'Chiqish (' . Yii::$app->user->identity->username . ')',
                        ['class' => 'btn btn-link logout']
                    )
                    . Html::endForm()
                    . '</li>';
            }
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $menuItems,
            ]);

            ?>
        </ul>

        <!-- SEARCH FORM -->
<!--        <form class="form-inline ml-3">-->
<!--            <div class="input-group input-group-sm">-->
<!--                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">-->
<!--                <div class="input-group-append">-->
<!--                    <button class="btn btn-navbar" type="submit">-->
<!--                        <i class="fas fa-search"></i>-->
<!--                    </button>-->
<!--                </div>-->
<!--            </div>-->
<!--        </form>-->

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-comments"></i>
                    <span class="badge badge-danger navbar-badge">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="<?=Url::to(['/dist/img/user4-128x128.jpg'])?>" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Brad Diesel
                                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">Call me whenever you can...</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="<?=Url::to(['dist/img/user1-128x128.jpg'])?>" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    John Pierce
                                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">I got your message bro</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="<?=Url::to(['dist/img/user8-128x128.jpg'])?>" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Nora Silvester
                                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">The subject goes here</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                </div>
            </li>
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-warning navbar-badge">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-item dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i> 4 new messages
                        <span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-users mr-2"></i> 8 friend requests
                        <span class="float-right text-muted text-sm">12 hours</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-file mr-2"></i> 3 new reports
                        <span class="float-right text-muted text-sm">2 days</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                </div>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="" class="brand-link" style="height: 150px;">
            <img src="<?=Url::to(['/dist/img/oqorqasiyoq.png']);?>" alt="" class="brand-image elevation-3"
                 style="width: 80%; max-height: none; position: static">
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="<?=Url::to(['/dist/img/user8-128x128.jpg']);?>" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block text-white">User</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <li class="nav-header text-white">MENU</li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon far fa-calendar-alt"></i>
                            <p class="text-white">
                                Years 2022
                                <i class="right fas fa-angle-right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview" style="background: red; height: 350px;overflow-x:hidden;">
                            <li class="nav-item has-treeview">
                                <a href="<?=Url::to(['site/aug'])?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>January</p>
                                </a>
                            </li>
                            <li class="nav-item has-treeview">
                                <a href="<?=Url::to(['site/aug'])?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>February</p>
                                </a>
                            </li>
                            <li class="nav-item has-treeview">
                                <a href="<?=Url::to(['site/aug'])?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>March</p>
                                </a>
                            </li>
                            <li class="nav-item has-treeview">
                                <a href="<?=Url::to(['site/aug'])?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>April</p>
                                </a>
                            </li>
                            <li class="nav-item has-treeview">
                                <a href="<?=Url::to(['site/aug'])?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>May</p>
                                </a>
                            </li>
                            <li class="nav-item has-treeview">
                                <a href="<?=Url::to(['site/aug'])?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>June</p>
                                </a>
                            </li>
                            <li class="nav-item has-treeview">
                                <a href="<?=Url::to(['site/aug'])?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>July</p>
                                </a>
                            </li>
                            <li class="nav-item has-treeview">
                                <a href="<?=Url::to(['site/aug'])?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>August</p>
                                </a>
                            </li>
                            <li class="nav-item has-treeview">
                                <a href="<?=Url::to(['site/aug'])?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>September</p>
                                </a>
                            </li>
                            <li class="nav-item has-treeview">
                                <a href="<?=Url::to(['site/aug'])?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>November</p>
                                </a>
                            </li>
                            <li class="nav-item has-treeview">
                                <a href="<?=Url::to(['site/aug'])?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>October</p>
                                </a>
                            </li>
                            <li class="nav-item has-treeview">
                                <a href="<?=Url::to(['site/aug'])?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>December</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
<!--        <div class="content-header">-->
<!--            <div class="container-fluid">-->
<!--                <div class="row mb-2">-->
<!--                    <div class="col-sm-6">-->
<!--                        <h1 class="m-0 text-dark">Dashboard</h1>-->
<!--                    </div>-->
<!--                    <div class="col-sm-6">-->
<!--                        <ol class="breadcrumb float-sm-right">-->
<!--                            <li class="breadcrumb-item"><a href="#">Home</a></li>-->
<!--                            <li class="breadcrumb-item active">Dashboard v1</li>-->
<!--                        </ol>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
        <!-- /.content-header -->

        <section class="content">
            <?= $content ?>
        </section>

        <!-- /.content-wrapper -->


        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->


    </div>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
