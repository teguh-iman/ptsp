<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\IzinSiupAkta */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Izin Siup Akta',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Izin Siup Akta'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="izin-siup-akta-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
