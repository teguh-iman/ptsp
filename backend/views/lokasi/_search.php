<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\LokasiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lokasi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'kode') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'keterangan') ?>

    <?= $form->field($model, 'latitude') ?>

    <?php // echo $form->field($model, 'longtitude') ?>

    <?php // echo $form->field($model, 'propinsi') ?>

    <?php // echo $form->field($model, 'kabupaten_kota') ?>

    <?php // echo $form->field($model, 'kecamatan') ?>

    <?php // echo $form->field($model, 'kelurahan') ?>

    <?php // echo $form->field($model, 'aktif') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
