<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Bidang */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Bidang',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Bidang'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="bidang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
