<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var common\models\IzinSiup $model
 */

$this->title = Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Izin Siup',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Izin Siups'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izin-siup-create">
    <div class="page-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
