<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\IzinSiup */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Izin Siup',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Izin Siup'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="izin-siup-update">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
