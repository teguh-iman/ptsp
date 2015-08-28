<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\RegistrasiProses */

$this->title = Yii::t('app', 'Create Registrasi Proses');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Registrasi Proses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="registrasi-proses-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
