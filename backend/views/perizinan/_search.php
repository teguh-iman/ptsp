<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PerizinanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="perizinan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'parent_id') ?>

    <?= $form->field($model, 'pemohon_id') ?>

    <?= $form->field($model, 'id_groupizin') ?>

    <?= $form->field($model, 'izin_id') ?>

    <?php // echo $form->field($model, 'no_urut') ?>

    <?php // echo $form->field($model, 'tanggal_mohon') ?>

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

    <?php // echo $form->field($model, 'petugas_cek') ?>

    <?php // echo $form->field($model, 'status_daftar') ?>

    <?php // echo $form->field($model, 'petugas_daftar_id') ?>

    <?php // echo $form->field($model, 'lokasi_id') ?>

    <?php // echo $form->field($model, 'keterangan') ?>

    <?php // echo $form->field($model, 'qr_code') ?>

    <?php // echo $form->field($model, 'tanggal_pertemuan') ?>

    <?php // echo $form->field($model, 'pengambilan_tanggal') ?>

    <?php // echo $form->field($model, 'pengambilan_jam') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
