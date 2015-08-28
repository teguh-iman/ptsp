<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MekanismePelayananSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mekanisme-pelayanan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'izin_id') ?>

    <?= $form->field($model, 'isi') ?>

    <?= $form->field($model, 'berkas') ?>

    <?= $form->field($model, 'pelaksana_id') ?>

    <?php // echo $form->field($model, 'dok_input') ?>

    <?php // echo $form->field($model, 'dok_proses') ?>

    <?php // echo $form->field($model, 'dok_output') ?>

    <?php // echo $form->field($model, 'durasi') ?>

    <?php // echo $form->field($model, 'dur_sat') ?>

    <?php // echo $form->field($model, 'dur_sat1') ?>

    <?php // echo $form->field($model, 'dur_sat2') ?>

    <?php // echo $form->field($model, 'dur_sat3') ?>

    <?php // echo $form->field($model, 'durasi_satuan') ?>

    <?php // echo $form->field($model, 'urutan') ?>

    <?php // echo $form->field($model, 'dokpendukung_tipe') ?>

    <?php // echo $form->field($model, 'aktif') ?>

    <?php // echo $form->field($model, 'petugas_cek') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
