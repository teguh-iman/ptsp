<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PerizinanAlur */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="perizinan-alur-form">

    <?php $form = ActiveForm::begin(['layout' => 'horizontal']); ?>
    
    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>

    <?= $form->field($model, 'perizinan_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\backend\models\Perizinan::find()->orderBy('id')->asArray()->all(), 'id', 'id'),
        'options' => ['placeholder' => Yii::t('app', 'Choose Perizinan')],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'dokumen_izin_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\backend\models\DokumenIzin::find()->orderBy('id')->asArray()->all(), 'id', 'id'),
        'options' => ['placeholder' => Yii::t('app', 'Choose Dokumen izin')],
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

    <?= $form->field($model, 'isi_dok_pendukung')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tanggal_proses')->widget(\kartik\widgets\DateTimePicker::classname(), [
        'options' => ['placeholder' => Yii::t('app', 'Choose Tanggal Proses')],
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'mm/dd/yyyy hh:ii:ss'
        ]
    ]) ?>

    <?= $form->field($model, 'pelaksana')->textInput(['maxlength' => true, 'placeholder' => 'Pelaksana']) ?>

    <?= $form->field($model, 'dok_input')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'dok_proses')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'dok_output')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'nama_modul')->textInput(['maxlength' => true, 'placeholder' => 'Nama Modul']) ?>

    <?= $form->field($model, 'nama_berkas')->textInput(['maxlength' => true, 'placeholder' => 'Nama Berkas']) ?>

    <?= $form->field($model, 'berkas')->textInput(['maxlength' => true, 'placeholder' => 'Berkas']) ?>

    <?= $form->field($model, 'berkas_seo')->textInput(['maxlength' => true, 'placeholder' => 'Berkas Seo']) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Daftar' => 'Daftar', 'Proses' => 'Proses', 'Tolak' => 'Tolak', 'Revisi' => 'Revisi', 'Lanjut' => 'Lanjut', 'Selesai' => 'Selesai', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tanggal')->widget(\kartik\widgets\DateTimePicker::classname(), [
        'options' => ['placeholder' => Yii::t('app', 'Choose Tanggal')],
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'mm/dd/yyyy hh:ii:ss'
        ]
    ]) ?>

    <?= $form->field($model, 'valid')->dropDownList([ '' => '', 'Y' => 'Y', 'N' => 'N', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'mulai')->widget(\kartik\widgets\DateTimePicker::classname(), [
        'options' => ['placeholder' => Yii::t('app', 'Choose Mulai')],
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'mm/dd/yyyy hh:ii:ss'
        ]
    ]) ?>

    <?= $form->field($model, 'selesai')->widget(\kartik\widgets\DateTimePicker::classname(), [
        'options' => ['placeholder' => Yii::t('app', 'Choose Selesai')],
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'mm/dd/yyyy hh:ii:ss'
        ]
    ]) ?>

    <?= $form->field($model, 'jarak')->textInput(['maxlength' => true, 'placeholder' => 'Jarak']) ?>

    <?= $form->field($model, 'mekanisme_cek')->dropDownList([ 'Y' => 'Y', 'N' => 'N', '' => '', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'aktif')->dropDownList([ 'Y' => 'Y', 'N' => 'N', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'duration')->textInput(['maxlength' => true, 'placeholder' => 'Duration']) ?>

    <?= $form->field($model, 'registrasi_action')->textInput(['maxlength' => true, 'placeholder' => 'Registrasi Action']) ?>

    <?= $form->field($model, 'jarak_sebelum')->textInput(['maxlength' => true, 'placeholder' => 'Jarak Sebelum']) ?>

    <?= $form->field($model, 'jarak_sekarang')->textInput(['maxlength' => true, 'placeholder' => 'Jarak Sekarang']) ?>

    <?= $form->field($model, 'type')->dropDownList([ 'berkas' => 'Berkas', 'sop' => 'Sop', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
