<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            background: url(<?=Url::to(['/dist/img.png']);?>) no-repeat;
            background-size: cover;
        }
        .form-group .btn{
            width: 100%;
        }
        .btn-register{
            width: 50%;
            margin: 0 auto;
            display: block;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row" style="display: flex;margin-top:50px;justify-content: center;">
        <div class="col-md-6">
            <div class="site-login">
                <h1>Kirish</h1>
                <p>Kirish uchun quyidagi maydonlarni toʻldiring:</p>

                <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label('Login') ?>

                <?= $form->field($model, 'password')->passwordInput()->label('Parol') ?>

                <?= $form->field($model, 'rememberMe')->checkbox()->label('Yodda saqlash') ?>
                    <div class="form-group">
                        <?= Html::submitButton('OK', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                    </div>
                    <a href="<?= Url::to(['../../../signup']) ?>" class="btn btn-success btn-register" >Ro'yhatdan o'tish</a>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>

