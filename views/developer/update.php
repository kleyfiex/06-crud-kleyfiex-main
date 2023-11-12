<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Developer $model */

$this->title = 'Update Developer: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Developers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="developer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
