<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RegistrasiProses */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="registrasi-proses-form">

    <?php $form = ActiveForm::begin(['layout' => 'horizontal']); ?>
    
    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>

    <?= $form->field($model, 'registrasi_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\backend\models\Registrasi::find()->orderBy('id')->asArray()->all(), 'id', 'id'),
        'options' => ['placeholder' => Yii::t('app', 'Choose Registrasi')],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'dokumen_pendukung_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\backend\models\DokumenPendukung::find()->orderBy('id')->asArray()->all(), 'id', 'id'),
        'options' => ['placeholder' => Yii::t('app', 'Choose Dokumen pendukung')],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'pelaksana_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\backend\models\Pelaksana::find()->orderBy('id')->asArray()->all(), 'id', 'id'),
        'options' => ['placeholder' => Yii::t('app', 'Choose Pelaksana')],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'user_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\dektrium\user\models\User::find()->orderBy('id')->asArray()->all(), 'id', 'id'),
        'options' => ['placeholder' => Yii::t('app', 'Choose User')],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'modul')->dropDownList([ 'Persyaratan Izin' => 'Persyaratan Izin', 'Mekanisme Pelayanan' => 'Mekanisme Pelayanan', 'Dasarhukum Izin' => 'Dasarhukum Izin', 'Mekanisme Pengaduan' => 'Mekanisme Pengaduan', 'Definisi' => 'Definisi', 'Download brosur' => 'Download brosur', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'aktif')->textInput(['placeholder' => 'Aktif']) ?>

    <?= $form->field($model, 'tanggal_proses')->widget(\kartik\widgets\DateTimePicker::classname(), [
        'options' => ['placeholder' => Yii::t('app', 'Choose Tanggal Proses')],
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'mm/dd/yyyy hh:ii:ss'
        ]
    ]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Daftar' => 'Daftar', 'Proses' => 'Proses', 'Selesai' => 'Selesai', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'dokumen')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'approval')->dropDownList([ 'Y' => 'Y', 'N' => 'N', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'pelaksana')->dropDownList([ 'Tim Admin' => 'Tim Admin', 'Tim TU' => 'Tim TU', 'Tim Teknis' => 'Tim Teknis', 'Kepala' => 'Kepala', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'nama_berkas')->textInput(['maxlength' => true, 'placeholder' => 'Nama Berkas']) ?>

    <?= $form->field($model, 'berkas')->textInput(['maxlength' => true, 'placeholder' => 'Berkas']) ?>

    <?= $form->field($model, 'keterangan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'type')->dropDownList([ 'Berkas' => 'Berkas', 'SOP' => 'SOP', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
