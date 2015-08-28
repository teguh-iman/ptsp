<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Migration */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Migration',
]) . ' ' . $model->version;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Migration'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->version, 'url' => ['view', 'id' => $model->version]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="migration-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
