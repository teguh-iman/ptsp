<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DokumenPendukung */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="dokumen-pendukung-form">

    <?php $form = ActiveForm::begin(['layout' => 'horizontal']); ?>
    
    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>

    <?= $form->field($model, 'kategori')->dropDownList([ 'Persyaratan Izin' => 'Persyaratan Izin', 'Mekanisme Pelayanan' => 'Mekanisme Pelayanan', 'Dasarhukum Izin' => 'Dasarhukum Izin', 'Mekanisme Pengaduan' => 'Mekanisme Pengaduan', 'Definisi' => 'Definisi', 'Download brosur' => 'Download brosur', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'izin_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\backend\models\Izin::find()->orderBy('id')->asArray()->all(), 'id', 'id'),
        'options' => ['placeholder' => Yii::t('app', 'Choose Izin')],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'isi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'file')->textInput(['maxlength' => true, 'placeholder' => 'File']) ?>

    <?= $form->field($model, 'urutan')->textInput(['placeholder' => 'Urutan']) ?>

    <?= $form->field($model, 'tipe')->textInput(['maxlength' => true, 'placeholder' => 'Tipe']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
