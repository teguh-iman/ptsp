<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\IzinSiup */

$this->title = Yii::t('app', 'Create Izin Siup');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Izin Siup'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izin-siup-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
