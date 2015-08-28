<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Pelaksana */
/* @var $form yii\widgets\ActiveForm */

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
        'class' => 'PerizinanProses', 
        'relID' => 'perizinan-proses', 
        'value' => \yii\helpers\Json::encode($model->perizinanProses),
        'isNewRecord' => ($model->isNewRecord) ? 1 : 0
    ]
]);
\mootensai\components\JsBlock::widget(['viewFile' => '_script', 'pos'=> \yii\web\View::POS_END, 
    'viewParams' => [
        'class' => 'User', 
        'relID' => 'user', 
        'value' => \yii\helpers\Json::encode($model->users),
        'isNewRecord' => ($model->isNewRecord) ? 1 : 0
    ]
]);
?>

<div class="pelaksana-form">

    <?php $form = ActiveForm::begin(['layout' => 'horizontal']); ?>
    
    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true, 'placeholder' => 'Nama']) ?>

    <?= $form->field($model, 'warna')->textInput(['maxlength' => true, 'placeholder' => 'Warna']) ?>

    <?= $form->field($model, 'aktif')->textInput(['maxlength' => true, 'placeholder' => 'Aktif']) ?>

    <div class="form-group" id="add-mekanisme-pelayanan"></div>

    <div class="form-group" id="add-perizinan-proses"></div>

    <div class="form-group" id="add-user"></div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
