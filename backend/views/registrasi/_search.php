<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RegistrasiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="registrasi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'parent_id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'bidang_id') ?>

    <?= $form->field($model, 'no_identitas') ?>

    <?php // echo $form->field($model, 'urutan') ?>

    <?php // echo $form->field($model, 'tanggal_permohonan') ?>

    <?php // echo $form->field($model, 'no_izin') ?>

    <?php // echo $form->field($model, 'berkas_noizin') ?>

    <?php // echo $form->field($model, 'tanggal_izin') ?>

    <?php // echo $form->field($model, 'tanggal_expired') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'aktif') ?>

    <?php // echo $form->field($model, 'registrasi_urutan') ?>

    <?php // echo $form->field($model, 'nomor_sp_rt_rw') ?>

    <?php // echo $form->field($model, 'tanggal_sp_rt_rw') ?>

    <?php // echo $form->field($model, 'peruntukan') ?>

    <?php // echo $form->field($model, 'nama_perusahaan') ?>

    <?php // echo $form->field($model, 'tanggal_cek_lapangan') ?>

    <?php // echo $form->field($model, 'status_daftar') ?>

    <?php // echo $form->field($model, 'petugas_daftar') ?>

    <?php // echo $form->field($model, 'lokasi_id') ?>

    <?php // echo $form->field($model, 'keterangan') ?>

    <?php // echo $form->field($model, 'qr_code') ?>

    <?php // echo $form->field($model, 'tanggal_pertemuan') ?>

    <?php // echo $form->field($model, 'tanggal_pengambilan') ?>

    <?php // echo $form->field($model, 'jam_pengambilan') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
