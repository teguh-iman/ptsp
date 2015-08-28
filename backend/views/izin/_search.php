<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\IzinSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="izin-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'jenis') ?>

    <?= $form->field($model, 'bidang_id') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'kode') ?>

    <?php // echo $form->field($model, 'fno_surat') ?>

    <?php // echo $form->field($model, 'aktif') ?>

    <?php // echo $form->field($model, 'wewenang_id') ?>

    <?php // echo $form->field($model, 'cek_lapangan') ?>

    <?php // echo $form->field($model, 'cek_sprtrw') ?>

    <?php // echo $form->field($model, 'cek_obyek') ?>

    <?php // echo $form->field($model, 'cek_perusahaan') ?>

    <?php // echo $form->field($model, 'durasi') ?>

    <?php // echo $form->field($model, 'durasi_satuan') ?>

    <?php // echo $form->field($model, 'latar_belakang') ?>

    <?php // echo $form->field($model, 'persyaratan') ?>

    <?php // echo $form->field($model, 'mekanisme') ?>

    <?php // echo $form->field($model, 'pengaduan') ?>

    <?php // echo $form->field($model, 'dasar_hukum') ?>

    <?php // echo $form->field($model, 'definisi') ?>

    <?php // echo $form->field($model, 'biaya') ?>

    <?php // echo $form->field($model, 'brosur') ?>

    <?php // echo $form->field($model, 'arsip_id') ?>

    <?php // echo $form->field($model, 'type') ?>

    <?php // echo $form->field($model, 'action') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
