<?php
 
/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var app\models\SignupForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\helpers\Url;
 
$this->title = 'Регистрация';
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>Пройдите регистрацию используя электронную почту:</p>
    <div class="row">
        <div class="col-lg-5">
 
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
            <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label('Никнейм') ?>
            <?= $form->field($model, 'email')->label('Почта') ?>
            <?= $form->field($model, 'first_name')->label('Имя') ?>
            <?= $form->field($model, 'last_name')->label('Фамилия') ?>
            <?= $form->field($model, 'password')->passwordInput()->label('Пароль') ?>
            <?= $form->field($model, 'password_repeat')->passwordInput()->label('Повторите пароль') ?>
                <div class="form-group">
                    <?= Html::submitButton('Регистрация', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
            
            <div>
                Уже есть аккаунт? <?= Html::a('Войти', Url::to(['site/login'])) ?>
            </div>
        </div>
    </div>
</div>