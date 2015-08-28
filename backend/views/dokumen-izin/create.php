<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\DokumenIzin */

$this->title = Yii::t('app', 'Create Dokumen Izin');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Dokumen Izin'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dokumen-izin-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
