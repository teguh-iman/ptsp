<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Perizinan */
/* @var $form yii\widgets\ActiveForm */

\mootensai\components\JsBlock::widget(['viewFile' => '_script', 'pos'=> \yii\web\View::POS_END, 
    'viewParams' => [
        'class' => 'IzinSiup', 
        'relID' => 'izin-siup', 
        'value' => \yii\helpers\Json::encode($model->izinSiups),
        'isNewRecord' => ($model->isNewRecord) ? 1 : 0
    ]
]);
\mootensai\components\JsBlock::widget(['viewFile' => '_script', 'pos'=> \yii\web\View::POS_END, 
    'viewParams' => [
        'class' => 'Perizinan', 
        'relID' => 'perizinan', 
        'value' => \yii\helpers\Json::encode($model->perizinans),
        'isNewRecord' => ($model->isNewRecord) ? 1 : 0
    ]
]);
\mootensai\components\JsBlock::widget(['viewFile' => '_script', 'pos'=> \yii\web\View::POS_END, 
    'viewParams' => [
        'class' => 'PerizinanProses', 
        'relID' => 'perizinan-proses', 
        'value' => \yii\helpers\Json::encode($model->perizinanProses),
        'isNewRecord' => ($model->isNewRecord) ? 1 : 0
    ]
]);
?>

<div class="perizinan-form">

    <?php $form = ActiveForm::begin(['layout' => 'horizontal']); ?>
    
    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>

    <?= $form->field($model, 'parent_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\backend\models\Perizinan::find()->orderBy('id')->asArray()->all(), 'id', 'id'),
        'options' => ['placeholder' => Yii::t('app', 'Choose Perizinan')],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'pemohon_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\backend\models\User::find()->orderBy('id')->asArray()->all(), 'id', 'id'),
        'options' => ['placeholder' => Yii::t('app', 'Choose User')],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'id_groupizin')->textInput(['placeholder' => 'Id Groupizin']) ?>

    <?= $form->field($model, 'izin_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\backend\models\Izin::find()->orderBy('id')->asArray()->all(), 'id', 'id'),
        'options' => ['placeholder' => Yii::t('app', 'Choose Izin')],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'no_urut')->textInput(['placeholder' => 'No Urut']) ?>

    <?= $form->field($model, 'tanggal_mohon')->widget(\kartik\widgets\DateTimePicker::classname(), [
        'options' => ['placeholder' => Yii::t('app', 'Choose Tanggal Mohon')],
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'mm/dd/yyyy hh:ii:ss'
        ]
    ]) ?>

    <?= $form->field($model, 'no_izin')->textInput(['maxlength' => true, 'placeholder' => 'No Izin']) ?>

    <?= $form->field($model, 'berkas_noizin')->textInput(['maxlength' => true, 'placeholder' => 'Berkas Noizin']) ?>

    <?= $form->field($model, 'tanggal_izin')->widget(\kartik\widgets\DateTimePicker::classname(), [
        'options' => ['placeholder' => Yii::t('app', 'Choose Tanggal Izin')],
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'mm/dd/yyyy hh:ii:ss'
        ]
    ]) ?>

    <?= $form->field($model, 'tanggal_expired')->widget(\kartik\widgets\DateTimePicker::classname(), [
        'options' => ['placeholder' => Yii::t('app', 'Choose Tanggal Expired')],
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'mm/dd/yyyy hh:ii:ss'
        ]
    ]) ?>

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

    <?= $form->field($model, 'petugas_cek')->textInput(['maxlength' => true, 'placeholder' => 'Petugas Cek']) ?>

    <?= $form->field($model, 'status_daftar')->dropDownList([ 'Sendiri' => 'Sendiri', 'Petugas' => 'Petugas', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'petugas_daftar_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\backend\models\User::find()->orderBy('id')->asArray()->all(), 'id', 'id'),
        'options' => ['placeholder' => Yii::t('app', 'Choose User')],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'lokasi_id')->textInput(['placeholder' => 'Lokasi']) ?>

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

    <?= $form->field($model, 'pengambilan_tanggal')->widget(\kartik\widgets\DatePicker::classname(), [
        'options' => ['placeholder' => Yii::t('app', 'Choose Pengambilan Tanggal')],
        'type' => \kartik\widgets\DatePicker::TYPE_COMPONENT_APPEND,
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'dd-M-yyyy'
        ]
    ]); ?>

    <?= $form->field($model, 'pengambilan_jam')->widget(\kartik\widgets\TimePicker::className()); ?>

    <div class="form-group" id="add-izin-siup"></div>

    <div class="form-group" id="add-perizinan"></div>

    <div class="form-group" id="add-perizinan-proses"></div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
