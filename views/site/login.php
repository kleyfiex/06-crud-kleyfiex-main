<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var app\models\LoginForm $model */

use PhpParser\Node\Stmt\Label;
use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\helpers\Url;

// Регистрация CSS файла
$this->registerCssFile('@web/css/style.css', ['depends' => [\yii\bootstrap5\BootstrapAsset::class]]);

$this->title = 'Авторизация';
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
<meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Войдите в аккаунт используя электронную почту:</p>

    <div class="row">
        <div class="col-lg-5">

            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                'fieldConfig' => [
                    'template' => "{label}\n{input}\n{error}",
                    'labelOptions' => ['class' => 'col-lg-1 col-form-label mr-lg-3'],
                    'inputOptions' => ['class' => 'col-lg-3 form-control'],
                    'errorOptions' => ['class' => 'col-lg-7 invalid-feedback'],
                ],
            ]); ?>

            <?= $form->field($model, 'email')->textInput(['autofocus' => true])->Label('Почта') ?>

            <?= $form->field($model, 'password')->passwordInput()->Label('Пароль') ?>

            <?= $form->field($model, 'rememberMe')->checkbox([
                'template' => "<div class=\"custom-control custom-checkbox\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
            ])->Label('Запомнить меня') ?>

            <div class="form-group">
                <div>
                    <?= Html::submitButton('Войти', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>
            </div>

            <?php ActiveForm::end(); ?>

            <div>
                Еще нет аккаунта? <?= Html::a('Регистрация', Url::to(['site/signup'])) ?>
            </div>

        </div>
    </div>
</div>
</body>
</html>