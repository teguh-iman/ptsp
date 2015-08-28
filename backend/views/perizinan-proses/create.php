<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\PerizinanProses */

$this->title = Yii::t('app', 'Create Perizinan Proses');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Perizinan Proses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perizinan-proses-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
