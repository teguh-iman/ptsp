<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\IzinSiupAkta */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="izin-siup-akta-form">

    <?php $form = ActiveForm::begin(['layout' => 'horizontal']); ?>
    
    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>

    <?= $form->field($model, 'izin_siup_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\backend\models\IzinSiup::find()->orderBy('id')->asArray()->all(), 'id', 'id'),
        'options' => ['placeholder' => Yii::t('app', 'Choose Izin siup')],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'nomor_akta')->textInput(['maxlength' => true, 'placeholder' => 'Nomor Akta']) ?>

    <?= $form->field($model, 'tanggal_akta')->widget(\kartik\widgets\DatePicker::classname(), [
        'options' => ['placeholder' => Yii::t('app', 'Choose Tanggal Akta')],
        'type' => \kartik\widgets\DatePicker::TYPE_COMPONENT_APPEND,
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'dd-M-yyyy'
        ]
    ]); ?>

    <?= $form->field($model, 'nomor_pengesahan')->textInput(['maxlength' => true, 'placeholder' => 'Nomor Pengesahan']) ?>

    <?= $form->field($model, 'tanggal_pengesahan')->widget(\kartik\widgets\DatePicker::classname(), [
        'options' => ['placeholder' => Yii::t('app', 'Choose Tanggal Pengesahan')],
        'type' => \kartik\widgets\DatePicker::TYPE_COMPONENT_APPEND,
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'dd-M-yyyy'
        ]
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
