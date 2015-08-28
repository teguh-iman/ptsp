<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Bidang;

/* @var $this yii\web\View */
/* @var $model frontend\models\JenisIzinSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jenis-izin-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',	
		'layout' => 'inline'
    ]); ?>


    <?= $form->field($model, 'bidang_id')->dropDownList(
         ArrayHelper::map(Bidang::find()->all(),'id','nama'),
        ['prompt' => 'Pilih Bidang']) ?>

    <?= $form->field($model, 'nama') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
