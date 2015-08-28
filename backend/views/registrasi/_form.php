<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Registrasi */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="registrasi-form">

    <?php $form = ActiveForm::begin(['layout' => 'horizontal']); ?>
    
    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>
    
    <?= $form->field($model, 'user_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\dektrium\user\models\User::find()->orderBy('id')->asArray()->all(), 'id', 'id'),
        'options' => ['placeholder' => Yii::t('app', 'Choose Bidang')],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'bidang_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\backend\models\Bidang::find()->orderBy('id')->asArray()->all(), 'id', 'id'),
        'options' => ['placeholder' => Yii::t('app', 'Choose Bidang')],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'no_identitas')->textInput(['maxlength' => true, 'placeholder' => 'No Identitas']) ?>

    <?= $form->field($model, 'urutan')->textInput(['placeholder' => 'Urutan']) ?>

    <?= $form->field($model, 'no_izin')->textInput(['maxlength' => true, 'placeholder' => 'No Izin']) ?>

    <?= $form->field($model, 'berkas_noizin')->textInput(['maxlength' => true, 'placeholder' => 'Berkas Noizin']) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Daftar' => 'Daftar', 'Proses' => 'Proses', 'Tolak' => 'Tolak', 'Revisi' => 'Revisi', 'Lanjut' => 'Lanjut', 'Selesai' => 'Selesai', 'Tolak Izin' => 'Tolak Izin', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'aktif')->dropDownList([ 'Y' => 'Y', 'N' => 'N', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'registrasi_urutan')->dropDownList([ 'Closed' => 'Closed', 'Open' => 'Open', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'nomor_sp_rt_rw')->textInput(['maxlength' => true, 'placeholder' => 'Nomor Sp Rt Rw']) ?>

    <?= $form->field($model, 'tanggal_sp_rt_rw')->widget(\kartik\widgets\DatePicker::classname(), [
        'options' => ['placeholder' => Yii::t('app', 'Choose Tanggal Sp Rt Rw')],
        'type' => \kartik\widgets\DatePicker::TYPE_COMPONENT_APPEND,
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'dd-M-yyyy'
        ]
    ]); ?>

    <?= $form->field($model, 'peruntukan')->textInput(['maxlength' => true, 'placeholder' => 'Peruntukan']) ?>

    <?= $form->field($model, 'nama_perusahaan')->textInput(['maxlength' => true, 'placeholder' => 'Nama Perusahaan']) ?>

    <?= $form->field($model, 'tanggal_cek_lapangan')->widget(\kartik\widgets\DatePicker::classname(), [
        'options' => ['placeholder' => Yii::t('app', 'Choose Tanggal Cek Lapangan')],
        'type' => \kartik\widgets\DatePicker::TYPE_COMPONENT_APPEND,
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'dd-M-yyyy'
        ]
    ]); ?>

    <?= $form->field($model, 'status_daftar')->dropDownList([ 'Sendiri' => 'Sendiri', 'Petugas' => 'Petugas', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'petugas_daftar')->textInput(['maxlength' => true, 'placeholder' => 'Petugas Daftar']) ?>

    <?= $form->field($model, 'lokasi_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\backend\models\Lokasi::find()->orderBy('id')->asArray()->all(), 'id', 'id'),
        'options' => ['placeholder' => Yii::t('app', 'Choose Lokasi')],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'keterangan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'qr_code')->textInput(['maxlength' => true, 'placeholder' => 'Qr Code']) ?>

    <?= $form->field($model, 'tanggal_pertemuan')->widget(\kartik\widgets\DatePicker::classname(), [
        'options' => ['placeholder' => Yii::t('app', 'Choose Tanggal Pertemuan')],
        'type' => \kartik\widgets\DatePicker::TYPE_COMPONENT_APPEND,
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'dd-M-yyyy'
        ]
    ]); ?>

    <?= $form->field($model, 'tanggal_pengambilan')->widget(\kartik\widgets\DatePicker::classname(), [
        'options' => ['placeholder' => Yii::t('app', 'Choose Tanggal Pengambilan')],
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
