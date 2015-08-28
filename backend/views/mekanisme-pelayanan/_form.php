<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MekanismePelayanan */
/* @var $form yii\widgets\ActiveForm */

\mootensai\components\JsBlock::widget(['viewFile' => '_script', 'pos'=> \yii\web\View::POS_END, 
    'viewParams' => [
        'class' => 'PerizinanProses', 
        'relID' => 'perizinan-proses', 
        'value' => \yii\helpers\Json::encode($model->perizinanProses),
        'isNewRecord' => ($model->isNewRecord) ? 1 : 0
    ]
]);
?>

<div class="mekanisme-pelayanan-form">

    <?php $form = ActiveForm::begin(['layout' => 'horizontal']); ?>
    
    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>

    <?= $form->field($model, 'izin_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\backend\models\Izin::find()->orderBy('id')->asArray()->all(), 'id', 'id'),
        'options' => ['placeholder' => Yii::t('app', 'Choose Izin')],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'isi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'berkas')->textInput(['maxlength' => true, 'placeholder' => 'Berkas']) ?>

    <?= $form->field($model, 'pelaksana_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\backend\models\Pelaksana::find()->orderBy('id')->asArray()->all(), 'id', 'id'),
        'options' => ['placeholder' => Yii::t('app', 'Choose Pelaksana')],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'dok_input')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\backend\models\DokumenIzin::find()->orderBy('id')->asArray()->all(), 'id', 'id'),
        'options' => ['placeholder' => Yii::t('app', 'Choose Dokumen izin')],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'dok_proses')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\backend\models\DokumenIzin::find()->orderBy('id')->asArray()->all(), 'id', 'id'),
        'options' => ['placeholder' => Yii::t('app', 'Choose Dokumen izin')],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'dok_output')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\backend\models\DokumenIzin::find()->orderBy('id')->asArray()->all(), 'id', 'id'),
        'options' => ['placeholder' => Yii::t('app', 'Choose Dokumen izin')],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'durasi')->textInput(['placeholder' => 'Durasi']) ?>

    <?= $form->field($model, 'dur_sat')->textInput(['placeholder' => 'Dur Sat']) ?>

    <?= $form->field($model, 'dur_sat1')->textInput(['placeholder' => 'Dur Sat1']) ?>

    <?= $form->field($model, 'dur_sat2')->textInput(['placeholder' => 'Dur Sat2']) ?>

    <?= $form->field($model, 'dur_sat3')->textInput(['placeholder' => 'Dur Sat3']) ?>

    <?= $form->field($model, 'durasi_satuan')->dropDownList([ 'Hari' => 'Hari', 'Jam' => 'Jam', 'Menit' => 'Menit', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'urutan')->textInput(['placeholder' => 'Urutan']) ?>

    <?= $form->field($model, 'dokpendukung_tipe')->textInput(['maxlength' => true, 'placeholder' => 'Dokpendukung Tipe']) ?>

    <?= $form->field($model, 'aktif')->dropDownList([ 'Y' => 'Y', 'N' => 'N', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'petugas_cek')->dropDownList([ 'N' => 'N', 'Y' => 'Y', ], ['prompt' => '']) ?>

    <div class="form-group" id="add-perizinan-proses"></div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
