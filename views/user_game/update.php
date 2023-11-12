<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\UserGame $model */

$this->title = 'Update User Game: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'User Games', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-game-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
