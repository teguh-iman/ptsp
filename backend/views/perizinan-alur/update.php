<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PerizinanAlur */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Perizinan Alur',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Perizinan Alur'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="perizinan-alur-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
