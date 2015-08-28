<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\DokumenPendukung */

$this->title = Yii::t('app', 'Create Dokumen Pendukung');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Dokumen Pendukung'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dokumen-pendukung-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
