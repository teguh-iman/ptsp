<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Izin */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Izin',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Izin'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="izin-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
