<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PerizinanAlurSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="perizinan-alur-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'perizinan_id') ?>

    <?= $form->field($model, 'dokumen_izin_id') ?>

    <?= $form->field($model, 'dokumen_pendukung_id') ?>

    <?= $form->field($model, 'pelaksana_id') ?>

    <?php // echo $form->field($model, 'isi_dok_pendukung') ?>

    <?php // echo $form->field($model, 'tanggal_proses') ?>

    <?php // echo $form->field($model, 'pelaksana') ?>

    <?php // echo $form->field($model, 'dok_input') ?>

    <?php // echo $form->field($model, 'dok_proses') ?>

    <?php // echo $form->field($model, 'dok_output') ?>

    <?php // echo $form->field($model, 'nama_modul') ?>

    <?php // echo $form->field($model, 'nama_berkas') ?>

    <?php // echo $form->field($model, 'berkas') ?>

    <?php // echo $form->field($model, 'berkas_seo') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'tanggal') ?>

    <?php // echo $form->field($model, 'valid') ?>

    <?php // echo $form->field($model, 'keterangan') ?>

    <?php // echo $form->field($model, 'mulai') ?>

    <?php // echo $form->field($model, 'selesai') ?>

    <?php // echo $form->field($model, 'jarak') ?>

    <?php // echo $form->field($model, 'mekanisme_cek') ?>

    <?php // echo $form->field($model, 'aktif') ?>

    <?php // echo $form->field($model, 'duration') ?>

    <?php // echo $form->field($model, 'registrasi_action') ?>

    <?php // echo $form->field($model, 'jarak_sebelum') ?>

    <?php // echo $form->field($model, 'jarak_sekarang') ?>

    <?php // echo $form->field($model, 'type') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
