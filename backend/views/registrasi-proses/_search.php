<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RegistrasiProsesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="registrasi-proses-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'registrasi_id') ?>

    <?= $form->field($model, 'dokumen_pendukung_id') ?>

    <?= $form->field($model, 'pelaksana_id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'modul') ?>

    <?php // echo $form->field($model, 'aktif') ?>

    <?php // echo $form->field($model, 'tanggal_proses') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'dokumen') ?>

    <?php // echo $form->field($model, 'approval') ?>

    <?php // echo $form->field($model, 'pelaksana') ?>

    <?php // echo $form->field($model, 'nama_berkas') ?>

    <?php // echo $form->field($model, 'berkas') ?>

    <?php // echo $form->field($model, 'keterangan') ?>

    <?php // echo $form->field($model, 'type') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
