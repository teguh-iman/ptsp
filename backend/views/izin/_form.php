<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Izin */
/* @var $form yii\widgets\ActiveForm */

\mootensai\components\JsBlock::widget(['viewFile' => '_script', 'pos'=> \yii\web\View::POS_END, 
    'viewParams' => [
        'class' => 'DokumenIzin', 
        'relID' => 'dokumen-izin', 
        'value' => \yii\helpers\Json::encode($model->dokumenIzins),
        'isNewRecord' => ($model->isNewRecord) ? 1 : 0
    ]
]);
\mootensai\components\JsBlock::widget(['viewFile' => '_script', 'pos'=> \yii\web\View::POS_END, 
    'viewParams' => [
        'class' => 'DokumenPendukung', 
        'relID' => 'dokumen-pendukung', 
        'value' => \yii\helpers\Json::encode($model->dokumenPendukungs),
        'isNewRecord' => ($model->isNewRecord) ? 1 : 0
    ]
]);
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
        'class' => 'MekanismePelayanan', 
        'relID' => 'mekanisme-pelayanan', 
        'value' => \yii\helpers\Json::encode($model->mekanismePelayanans),
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
?>

<div class="izin-form">

    <?php $form = ActiveForm::begin(['layout' => 'horizontal']); ?>
    
    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>

    <?= $form->field($model, 'jenis')->dropDownList([ 'Perizinan' => 'Perizinan', 'Non Perizinan' => 'Non Perizinan', 'Lain-lain' => 'Lain-lain', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'bidang_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\backend\models\Bidang::find()->orderBy('id')->asArray()->all(), 'id', 'id'),
        'options' => ['placeholder' => Yii::t('app', 'Choose Bidang')],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true, 'placeholder' => 'Nama']) ?>

    <?= $form->field($model, 'kode')->textInput(['maxlength' => true, 'placeholder' => 'Kode']) ?>

    <?= $form->field($model, 'fno_surat')->textInput(['maxlength' => true, 'placeholder' => 'Fno Surat']) ?>

    <?= $form->field($model, 'aktif')->dropDownList([ 'Y' => 'Y', 'N' => 'N', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'wewenang_id')->textInput(['placeholder' => 'Wewenang']) ?>

    <?= $form->field($model, 'cek_lapangan')->dropDownList([ 'Y' => 'Y', 'N' => 'N', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'cek_sprtrw')->dropDownList([ 'Y' => 'Y', 'N' => 'N', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'cek_obyek')->dropDownList([ 'Y' => 'Y', 'N' => 'N', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'cek_perusahaan')->dropDownList([ 'Y' => 'Y', 'N' => 'N', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'durasi')->textInput(['placeholder' => 'Durasi']) ?>

    <?= $form->field($model, 'durasi_satuan')->dropDownList([ 'Hari' => 'Hari', 'Jam' => 'Jam', 'Menit' => 'Menit', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'latar_belakang')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'persyaratan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'mekanisme')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'pengaduan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'dasar_hukum')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'definisi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'biaya')->textInput(['placeholder' => 'Biaya']) ?>

    <?= $form->field($model, 'brosur')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'arsip_id')->textInput(['placeholder' => 'Arsip']) ?>

    <?= $form->field($model, 'type')->dropDownList([ 'SIUP' => 'SIUP', 'IMTA' => 'IMTA', 'TDP' => 'TDP', 'RPTKA' => 'RPTKA', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'action')->textInput(['maxlength' => true, 'placeholder' => 'Action']) ?>

    <div class="form-group" id="add-dokumen-izin"></div>

    <div class="form-group" id="add-dokumen-pendukung"></div>

    <div class="form-group" id="add-izin-siup"></div>

    <div class="form-group" id="add-mekanisme-pelayanan"></div>

    <div class="form-group" id="add-perizinan"></div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
